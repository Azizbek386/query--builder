<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::get('/', function (                                                   ) {

    // $users = DB::table('users')->get();
    
    $users = DB::table('users')->where('status','active')->get();
    $users = DB::table('users')->where('age','>',25)->get();
    $users = DB::table('users')->orderBy('created_at','desc')->get();
    $users = DB::table('users')->orderBy('id', 'desc')->limit(5)->get();
    $users = DB::table('users')->insert([
    ]);
        
    //     $exists = DB::table('users')->where('email', 'elonddmussdk1191@gmail.com')->exists();

    //     if (!$exists) {
    //         DB::table('users')->insert([
    //             'name' => 'Elon Musk',
    //             'email' => 'elonddmussdk1191@gmail.com',
    //             'age' => 45,
    //             'status' => 'active',
    //             'password' => bcrypt('your_secure_password')
    //         ]);
    //     }
        

    // ]);
    // $users = DB::table('users')->where('id',8)->update([
    //     'name' => 'Bill Gates',
    //     'email' => 'BillGates@gmail.com',
    //     'age' => 60,
    //     'status' => 'active',
    //     'password' => bcrypt('12345678'),


    // ]);
    // $users = DB::table('users')->get();
    
    // // ID si 10 bo'lgan foydalanuvchini o'chirish
    // DB::table('users')->where('id', 10)->delete();
    
    // // dd($users);
    // return view('welcome', ['users' => $users]);
});




Route::resource('products',ProductController::class)->names('products');