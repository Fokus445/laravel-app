<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use Illuminate\Http\Request;


$users = Config::get('app.users');

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



// Sukurkime grupę maršrutų su bendru kelio segmentu
Route::group(['prefix' => 'user/'], function () use ($users) {
    // Maršrutas /user/{id}
    
    Route::get('{id}', function ($id) use ($users) {
        if (isset($users[$id])) {
            $user = $users[$id];
            $birthDate = Carbon::parse($user['birth_date']);
            $age = $birthDate->age;

            if ($age > 13) {
                return redirect('/');
            } else {
                abort(403, 'You are not allowed to access this page.');
            }
        } else {
            abort(404, 'User not found.');
        }
    });

    Route::get('{id}/cart', function ($id) use ($users) {
        // Prekių duomenys
        $products = [
            [
                'product_id' => '0001',
                'keyword' => 'leather_jacket',
                'color' => 'black',
            ],
            [
                'product_id' => '0053',
                'keyword' => 'jeans',
                'color' => 'blue',
            ],
            [
                'product_id' => '0068',
                'keyword' => 'hat',
                'color' => 'purple',
            ],
        ];
        $userData = [$users[$id],];
        // Pridėkite prekių duomenis prie naudotojo duomenų
        $userData[$id]['products'] = $products;
        // Paverčiame masyvą į JSON tekstą
        $userDataJson = json_encode($userData);
        // Įrašykite atnaujintus naudotojo duomenis į slapukus
        return response()
            ->json(['message' => 'Prekės sėkmingai pridėtos į krepšelį'])
            ->cookie('user_data', $userDataJson);
    });
});

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', 'AuthController@showLoginForm')->name('login');





