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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/index',function(){
//     return "<h1>Hello</h1>";
// });

Route::get('/username/{name}',function($name){
    return "Username=>" .$name;
});

Route::get('/index',function(){
    return view('index');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/create',function(){
    $header = "Create Form";
    $genders[] = [ 'id' => 0, 'name' => 'หญิง'];
    $genders[] = [ 'id' => 1, 'name' => 'ชาย'];
    return view('create-form')->with(['header'=> $header, 'genders' => $genders]);
});


Route::get('/store',function(){
    $username = Illuminate\support\Facades\Input::get('username');
    $password = Illuminate\support\Facades\Input::get('password');
    return $username . ' ' . $password ;
});


Route::post('/store',function(Illuminate\Http\Request $request){
    return $request->all() ;
});

Route::get('/add-task',function(){
    return view('form-add-task');
});

Route::post('/insert',function(Illuminate\Http\Request $request){
    // $task=$request->all();
    // return $task->input('type');
    $task = new \App\Task();
    // $task->save();
    $task->type = $request->input('type');
    $task->name = $request->input('name');
    $task->detail = $request->input('detail');
    $task->completed = "0";
    $task->save(); 
    // return view('form-show-data');

    //   $user= new User();
    //     $user->username= $request['username'];
    //     $user->company= $request['company'];
    // // add other fields
    // $user->save();

});
