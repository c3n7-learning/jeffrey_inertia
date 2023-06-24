<?php

use App\Models\User;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/users', function () {
    $search = request()->query('search');
    $users = User::query()
        ->when($search, fn ($q) => $q->where('name', 'like', "%{$search}%"))
        ->paginate(10)
        ->withQueryString()
        ->through(fn ($user) => [
            'id' => $user->id,
            'name' => $user->name
        ]);
    return Inertia::render('Users', [
        'users' => $users, 'filters' => Request::only('search')
    ]);
});

Route::get('/settings', function () {
    return Inertia::render('Settings');
});

Route::post('/logout', function () {
    dd("logging the user out");
});
