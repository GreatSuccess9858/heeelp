<?php

use App\Mail\FileSentEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadFileController;


Route::view('/', 'home');
Route::view('/aboutus-privacypolicy', 'about');
Route::view('/services', 'services');
Route::get('/set-locale/{lang}', function ($lang = 'en') {
    session(['locale' => $lang]);
    return back();
});
Route::post('/upload_file', [UploadFileController::class, 'uploadFile']);
Route::post('/send-mail', function (Request $request) {
    Mail::to($request->email)
        ->send(new FileSentEmail($request->name, $request->email, $request->file_link));
    return "done";
});

