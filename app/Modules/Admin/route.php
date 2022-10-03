<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Modules\Admin\Controllers\AdminController::class, 'index'])->name('admin-home');

Route::resources([
    'category' => \App\Modules\Admin\Controllers\CategoryController::class,
    'product' => \App\Modules\Admin\Controllers\ProductController::class,
    'order' => \App\Modules\Admin\Controllers\OrderController::class,
    'user' => \App\Modules\Admin\Controllers\UserController::class,
    'role' => \App\Modules\Admin\Controllers\RoleController::class,
]);
