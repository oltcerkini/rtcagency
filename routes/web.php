<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Http\Controllers\LanguageController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/translation', function () {
    return view('services.translation');
})->name('services.translation');

Route::get('/editing-proofreading', function () {
    return view('services.editing-proofreading');
})->name('services.editing-proofreading');

Route::get('/tep-workflow', function () {
    return view('services.tep-workflow');
})->name('services.tep-workflow');

Route::get('/industry-specific', function () {
    return view('services.industry-specific');
})->name('services.industry-solutions');

Route::get('/call-center', function () {
    return view('services.call-center');
})->name('services.call-center');

Route::get('/programming-support', function () {
    return view('services.programming-support');
})->name('services.programming-support');

Route::get('/all-services', function () {
    return view('services.index');
})->name('services.allServices');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('profile.edit');
    Route::get('settings/password', Password::class)->name('user-password.edit');
    Route::get('settings/appearance', Appearance::class)->name('appearance.edit');

    Route::get('settings/two-factor', TwoFactor::class)
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');
});
