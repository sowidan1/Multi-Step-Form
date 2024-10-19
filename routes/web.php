<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\ProductController::class)->group(function () {
    Route::get('products','index')->name('products.index');

    Route::get('products/create-step-one','createStepOne')->name('products.create.step.one');
    Route::post('products/create-step-one','postCreateStepOne')->name('products.create.step.one.post');
    Route::get('products/create-step-two','createStepTwo')->name('products.create.step.two');
    Route::post('products/create-step-two','postCreateStepTwo')->name('products.create.step.two.post');
    Route::get('products/create-step-three','createStepThree')->name('products.create.step.three');
    Route::post('products/create-step-three','postCreateStepThree')->name('products.create.step.three.post');
});
