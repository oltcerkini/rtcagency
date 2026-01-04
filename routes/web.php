<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ContactController;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

// =========== HOME & MAIN PAGES ===========
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// =========== SERVICES (EXACTLY LIKE PROJECTS) ===========
Route::get('/service/{id}', [ServiceController::class, 'show'])->name('service.show');

// =========== PROJECTS ===========
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');

Route::get('/projects', function () {
    return view('projects.all');
})->name('projects.all');

// =========== PARTNERS/CASE STUDIES ===========
Route::get('/case-studies', function () {
    return view('partners-single-page');
})->name('case-studies');

Route::get('/partners-projects', function () {
    return view('partners-single-page');
})->name('partners.projects');

// =========== AUTH & DASHBOARD ===========
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