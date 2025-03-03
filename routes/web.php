<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('home');
});

Route::post('/contact', function (Request $request) {
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    Mail::raw("Pesan dari: {$data['name']} ({$data['email']})\n\n{$data['message']}", function ($message) {
        $message->to('admin@company.com')->subject('Pesan dari Website');
    });

    return back()->with('success', 'Pesan berhasil dikirim!');
})->name('contact.send');

Route::get('/', [HomeController::class, 'index']);
