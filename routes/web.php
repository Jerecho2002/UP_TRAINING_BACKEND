<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Jobs\ProcessUpdateUser;
use function PHPUnit\Framework\assertDirectoryIsReadable;

Route::get('/create', [SampleController::class, 'create']);
Route::get('/display', [SampleController::class, 'display']);

Route::get('/test-rabbit', function () {
    ProcessUpdateUser::dispatch('Hello from RabbitMQ!');
    return 'Job dispatched!';
});
