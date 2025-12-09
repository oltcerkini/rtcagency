<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switch($locale)
    {
        $allowedLocales = ['en', 'de', 'fr'];
        
        if (!in_array($locale, $allowedLocales)) {
            $locale = 'en';
        }
        
        session(['locale' => $locale]);
        app()->setLocale($locale);
        
        return redirect()->back();
    }
}