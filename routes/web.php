<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/etec', function () {
    return '<h1>ETEC Dra. Ruth Cardoso</h1>';
});

Route::post('/etec', function () {
    return '<h1>ETEC Dra. Ruth Cardoso</h1>';
});

Route::get('/etec/hello', function () {
    $message = '<h1>ETEC Dra. Ruth Cardoso</h1>';
    $message .= '<h2>Hello World!</h2>';
    return $message;
});

Route::any('/etec', function () {
    return '<h1>ANY</h1>';
});

Route::match(['get', 'post', 'put'], '/hello', function () {
        return 'Olá';
});

Route::get('/responder/{question}', function($question) {
    return "A resposta para sua pergunta \"$question\" é a memsa que todas as outras, ou seja, 42! - Douglas Adams";
});

Route::any('/mensagem/{message}/remetente/{sender}/idade/{age}', function($message, $sender, $age) {
    $retorno = '';

    if($age < 18){
        $retorno = 'Sua mensagem não pode ser enviada!';
    }else{
        $retorno = "$sender ($age): $message";
    }
    
    return $retorno;
});

Route::get('/drc', function () {
    return view('etec');
});

Route::get('/drc/aluno/{name}', function ($name) {
    $data = "Sejam bem-vindos! Dirija-se ao auditório caro aluno $name";
    return view('etec', ['message' => $data]);
});

