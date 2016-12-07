<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

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

  public function cuentaDeUsuario()
  {
    return view('cuenta_de_usuario', ['user' => Auth::user()]);
  }

  public function registrarse()
  {
    return view('registrarse');
  }

  public function guardarUsuario(Request $request)
  {
    $this -> validate($request, [
      'name' => 'required|max:50'
    ]);

    $user = Auth::user();
    $user -> name = $request['name'];
    $user -> update();
    $archivo = $request->file('imagen');
    $nombre_de_archivo = $request['name'] . '-' . $user->id . '.jpg';
    if ($archivo)
    {
      /* Uso Storage de Laravel, genero una carpeta "imagenes_de_usuarios" -> arriba Facades */
      /* En Config\filesystems.php configuro el ruteo en disk => local que es el que voy a usar */
      Storage::disk('local')->put($nombre_de_archivo, File::get($archivo));
    }
    return redirect()->route('cuenta');
  }

  public function mostrarImagenDePerfil($nombre_de_archivo)
  {
    $archivo = Storage::disk('local')->get($nombre_de_archivo);
    return new Response($archivo, 200);
  }

}
