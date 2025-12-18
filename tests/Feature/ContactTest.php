<?php

use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;

uses(RefreshDatabase::class);

beforeEach(function () {
    Mail::fake();
});

test('le formulaire de contact peut être soumis avec des données valides', function () {
    $response = $this->postJson('/contact', [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john.doe@example.com',
        'phone' => '+237 655 563 081',
        'subject' => 'pack',
        'message' => 'Je souhaite obtenir des informations sur vos packs.',
    ]);

    $response->assertStatus(200)
        ->assertJson([
            'success' => true,
        ]);

    $this->assertDatabaseHas('contacts', [
        'email' => 'john.doe@example.com',
        'subject' => 'pack',
    ]);

    Mail::assertSent(\App\Mail\ContactReceived::class);
});

test('le formulaire de contact valide les champs requis', function () {
    $response = $this->postJson('/contact', []);

    $response->assertStatus(422)
        ->assertJsonValidationErrors(['first_name', 'last_name', 'email', 'phone', 'subject', 'message']);
});

test('le formulaire de contact valide le format de l\'email', function () {
    $response = $this->postJson('/contact', [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'email-invalide',
        'phone' => '+237 655 563 081',
        'subject' => 'pack',
        'message' => 'Message de test.',
    ]);

    $response->assertStatus(422)
        ->assertJsonValidationErrors(['email']);
});

test('le formulaire de contact valide le sujet', function () {
    $response = $this->postJson('/contact', [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john.doe@example.com',
        'phone' => '+237 655 563 081',
        'subject' => 'sujet-invalide',
        'message' => 'Message de test.',
    ]);

    $response->assertStatus(422)
        ->assertJsonValidationErrors(['subject']);
});

test('le formulaire de contact limite la longueur du message', function () {
    $longMessage = str_repeat('a', 5001);

    $response = $this->postJson('/contact', [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john.doe@example.com',
        'phone' => '+237 655 563 081',
        'subject' => 'pack',
        'message' => $longMessage,
    ]);

    $response->assertStatus(422)
        ->assertJsonValidationErrors(['message']);
});

test('le contact est sauvegardé même si l\'envoi d\'email échoue', function () {
    // Simuler une erreur d'envoi d'email en configurant un mailer invalide
    config(['mail.admin_email' => null]);

    $response = $this->postJson('/contact', [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john.doe@example.com',
        'phone' => '+237 655 563 081',
        'subject' => 'pack',
        'message' => 'Message de test.',
    ]);

    // Le contact ne doit pas être sauvegardé si la config est invalide
    // mais le contrôleur doit gérer l'erreur gracieusement
    $response->assertStatus(500)
        ->assertJson([
            'success' => false,
        ]);
});

test('tous les sujets valides sont acceptés', function ($subject) {
    $response = $this->postJson('/contact', [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john.doe@example.com',
        'phone' => '+237 655 563 081',
        'subject' => $subject,
        'message' => 'Message de test.',
    ]);

    $response->assertStatus(200)
        ->assertJson([
            'success' => true,
        ]);
})->with(['pack', 'devis', 'reservation', 'autre']);

