<?php

use Illuminate\Support\Facades\Route;

// Customer Routes
Route::prefix("customer")->group(function(){
    Route::get("list-purchase", [CustomerController::class, "listPurchase"]);
    Route::get("list-blogs", [CustomerController::class, "listBlogs"]);
    Route::get("create-blog", [CustomerController::class, "createBlog"]);
});
