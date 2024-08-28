<?php

//use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MessageController;

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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function(){
    return "Hola desde la página de inicio";
});

Route::get('contacto', function(){
    return "Hola desde la página de contacto";
});

Route::get('saludo/{nombre}', function($nombre){
	return "Saludos ".$nombre;
});

Route::get('saludo/{nombre?}', function($nombre = "Invitado"){
	return "Saludos ".$nombre;
});

Route::get('contactame',  function(){
	return "Sección de contactos";
})->name('contactos');

Route::get('/',  function(){
	echo "<a href='".route('contactos')."'>Contactos 1</a><br>";
	echo "<a href='".route('contactos')."'>Contactos 2</a><br>";
	echo "<a href='".route('contactos')."'>Contactos 3</a><br>";
	echo "<a href='".route('contactos')."'>Contactos 4</a><br>";
	echo "<a href='".route('contactos')."'>Contactos 5</a><br>";
});

Route::get('/', function(){
	return view('welcome');
})->name('home');

Route::get('/', function(){
    //metodos para pasar variables por la ruta
    //1.- definimos la variable y la retornamos con with como string
    $nombre = "Oseas";
    //return view('home')->with('nombre', $nombre);
    //2.- de la misma manera pero en forma de array
    //return view('home')->with(['nombre' => $nombre]);
    //3.- podemos pasar el array como segundo parametro de la funcion view
    //return view('home', ['nombre' => $nombre]);
    //4.- tambien podemos pasarlo con la funcion compact que nos regresa el mismo array siempre y cuando indice y valor sean iguales
    return view('home', compact('nombre'));
	//return view('home');
})->name('home');

Route::view('/', 'home', ['nombre' => 'Oseas'])->name('home');
$portfolio = [
    ['title' => 'Proyecto #1'],
    ['title' => 'Proyecto #2'],
    ['title' => 'Proyecto #3'],
    ['title' => 'Proyecto #4'],
];
return view('portfolio', compact('portfolio'));
*/

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');
Route::get('/portafolio', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/portafolio/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/portafolio', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/portafolio/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::view('/contacto', 'contact')->name('contact');

Route::post('contact', [MessageController::class, 'store'])->name('messanges.store');
//invoke
//Route::get('/portfolio', ProjectController::class)->name('projects');
//resource
//Route::get('/portfolio', [ProjectController::class, 'index'])->name('projects');
//Route::view('/contact', 'contact')->name('contact');
//generar las 7 rutas de los 7 metodos del controlador resources
//Route::resource('projects', ProjectController::class);
//metodo only, solo rutas para los metodos indicados en el array
//Route::resource('projects', ProjectController::class)->only(['index', 'show']);
//metodo opuesto expcept
//Route::resource('projects', ProjectController::class)->except(['index', 'show']);

//api
//Route::apiResource('projects', ProjectController::class);