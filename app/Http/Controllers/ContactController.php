<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;

class ContactController extends Controller
{
    /**
     * Store a newly created contact message.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'form_name' => 'required|string|max:255|min:2',
            'form_email' => 'required|email|max:255',
            'form_phone' => 'nullable|string|max:20|regex:/^[\d\s\-\+\(\)]+$/',
            'form_subject' => 'nullable|string|max:255',
            'form_message' => 'required|string|min:10|max:2000',
        ], [
            'form_name.required' => 'Please enter your name.',
            'form_name.min' => 'Name must be at least 2 characters.',
            'form_email.required' => 'Please enter your email address.',
            'form_email.email' => 'Please enter a valid email address.',
            'form_phone.regex' => 'Please enter a valid phone number.',
            'form_message.required' => 'Please enter your message.',
            'form_message.min' => 'Message must be at least 10 characters.',
        ]);

        try {
            // Create contact record in database
            $contact = Contact::create([
                'name' => $validated['form_name'],
                'email' => $validated['form_email'],
                'phone' => $validated['form_phone'] ?? null,
                'subject' => $validated['form_subject'] ?? null,
                'message' => $validated['form_message'],
            ]);

            // Optional: Send email notification to admin
            // $this->sendAdminNotification($contact);
            
            // Optional: Send auto-reply to user
            // $this->sendAutoReply($contact);

            // Clear the form by redirecting
            Session::flash('success', 'Thank you for your message! We will get back to you soon.');

            // Log the successful submission
            \Log::info('Contact form submitted', [
                'id' => $contact->id,
                'name' => $contact->name,
                'email' => $contact->email,
                'ip' => $request->ip(),
            ]);

        } catch (\Exception $e) {
            \Log::error('Contact form submission failed: ' . $e->getMessage(), [
                'name' => $validated['form_name'],
                'email' => $validated['form_email'],
                'error' => $e->getMessage(),
            ]);

            Session::flash('error', 'Sorry, there was an error sending your message. Please try again later or contact us directly.');
        }

        return redirect()->back();
    }

    /**
     * Send email notification to admin (optional)
     */
    private function sendAdminNotification(Contact $contact)
    {
        try {
            $adminEmail = config('mail.admin_email', env('MAIL_FROM_ADDRESS', 'admin@rtcagency.com'));
            
            Mail::to($adminEmail)->send(new ContactFormSubmitted($contact));
            
        } catch (\Exception $e) {
            \Log::error('Failed to send admin notification email: ' . $e->getMessage());
        }
    }

    /**
     * Send auto-reply to user (optional)
     */
    private function sendAutoReply(Contact $contact)
    {
        try {
            Mail::to($contact->email)->send(new \App\Mail\ContactAutoReply($contact));
            
        } catch (\Exception $e) {
            \Log::error('Failed to send auto-reply email: ' . $e->getMessage());
        }
    }
}