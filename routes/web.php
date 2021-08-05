<?php

declare(strict_types=1);

use App\Http\Controllers\Home\IndexController as HomeIndexController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeIndexController::class, "__invoke"]);
