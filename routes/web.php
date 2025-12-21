<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('ma-event');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

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

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');



// Ajoutez temporairement cette route pour tester
Route::get('/test-mail', function() {
    try {
        Mail::raw('Test email', function($message) {
            $message->to('mrrosnel6@gmail.com')
                    ->subject('Test Ma Event Surprise');
        });
        return 'Email envoyé avec succès!';
    } catch (\Exception $e) {
        return 'Erreur: ' . $e->getMessage();
    }
});

Route::post('/contact-debug', function(Request $request) {
    dd([
        'all_data' => $request->all(),
        'json_data' => $request->json()->all(),
        'has_csrf' => $request->hasHeader('X-CSRF-TOKEN'),
        'csrf_token' => $request->header('X-CSRF-TOKEN')
    ]);
});
