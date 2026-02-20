<?php

use App\Http\Controllers\ProductController;

Route::get('/books', [ProductController::class, 'index']);