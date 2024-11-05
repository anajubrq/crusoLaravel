<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::resource('produtos', ProdutoController::class);



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/empresa', function() {
//     return view('site/empresa');
// });

// Route::any('any', function(){
//     return 'permite qualquer tipo de acesso http(put, delete, get, post)';
// });

// Route::match(['get','post'],'/macth', function(){
//     return 'permite apenas acessos definidos';
// });

// Route::get('/produto/{id}/{cat}', function($id, $cat= ''){
//     return 'o id do produto é:'.$id.'<br>'.'a categoria é:'.$cat;
// });

// // Route::get('/sobre', function(){
// //     return redirect('/empresa');
// // });

// Route::redirect('/sobre', '/empresa');

// Route::get('/news', function(){
//     return view('news');
// })->name('noticias');

// Route::get('/novidades', function(){
//     return redirect()->route('noticias');
// });



// Route::prefix('admin')->group(function(){
//     Route::get('dashboard', function(){
//         return 'dashboard';
//     });
//     Route::get('users', function(){
//         return 'users';
//     });
    
//     Route::get('clientes', function(){
//         return 'clientes';
//     });
// });
