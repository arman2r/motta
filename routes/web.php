<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Controller@home')->name('index');
/*Route::resource('mail', 'MailController');*/
Route::resource('mail', 'MailController');
/*
Route::get('sendmail', function(){
    $data = array(
        'name' => "Seographics"
    );

    Mail::send('emails.contact', $data, function ($message){
        $message->from('arman.2.r@gmail.com', 'seographics');
        $message->to('susoconde@gmail.com')->subject('test email seographic');
    });

    return "Tú mensaje ha sido enviado con exito";
});*/


