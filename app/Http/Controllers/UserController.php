<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
  public function enviarRegistro(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email|unique:users',
      'name' => 'required|max:50',
      'password' => 'required|min:4',
    ]);

    $email = $request ['email'];
    $name = $request ['name'];
    $password = bcrypt($request ['password']);

    //Instancia un objeto
    $user = new User();
    $user->email = $email;
    $user->name = $name;
    $user->password = $password;

    $user->save();

    Auth::login($user);

    return redirect()->route('muro');
  }

  public function enviarIngreso(Request $request)
  {
    $this->validate($request, [
      'email' => 'required',
      'password' => 'required',
    ]);

    if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){
      return redirect()->route('muro');
    }
    return redirect()->back();
  }

  public function cerrarSesion()
  {
    Auth::logout();
    return redirect()->route('home');
  }

}
