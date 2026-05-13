<?php

use App\Http\Controllers\MessageController;

Route::get('/', [MessageController::class, 'index'])->name('guestbook.index');
Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
?>
