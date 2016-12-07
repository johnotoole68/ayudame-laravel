<?php

namespace App\Http\Controllers;

use App\Post;
use App\Recomiendo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
  public function ingresarAlMuro(){
    $posts=Post::orderBy('created_at', 'desc')->get();
    return view('muro', ['posts' => $posts]);
  }

  public function postCrearPost(Request $request)
  {
    $this->validate($request, [
      'body' => 'required|max:500'
    ]);
    $post=new Post();
    $post->body = $request['body'];
    $message = 'Parece que hubo un error al cargar tu mensaje';
    if($request->user()->posts()->save($post))
    {
      $message = 'Mensaje aceptado';
    }
    return redirect()->route('muro')->with(['message' => $message]);
  }

  public function eliminarPosts($post_id)
  {
    $post = Post::where('id', $post_id)->first();
    if (Auth::user() != $post->user)
    {
      return redirect()->back();
    }
    $post->delete();
    return redirect()->route('muro')->with(['message' => 'El mensaje ha sido eliminado']);
  }

  public function editarPost(Request $request)
  {
    $this->validate($request, [
      'body' => 'required'
    ]);
    $post=Post::find($request['postId']);
    if (Auth::user() != $post->user)
    {
      return redirect()->back();
    }
    $post->body = $request['body'];
    $post->update();
    return response()->json(['nuevo_mensaje' => $post->body], 200);
  }

  public function hacerRecomendacion(Request $request)
  {
    $post_id = $request['postId'];
    // $request devuelve string entonces lo igualo a true
    $es_recomendado = $request['esRecomendado'] === 'true';
    $actualizar = false;
    $post = Post::find($post_id);
    if(!$post)
    {
      return null;
    }
    $user = Auth::user();
    //veo si ya hay una recomendacion anterior en el mismo post
    //ESTA LÍNEA NO ESTÁ FUNCIONANDO!!! recomiendos() (BadMethodCallException)
    $recomiendo = $user->recomiendos()->where('post_id', $post_id)->first();
    if($recomiendo){
      $esta_recomendado = $recomiendo->recomiendo;
      $actualizar = true;
      if ($esta_recomendado == $es_recomendado)
      {
        $recomiendo->delete();
        return null;
      }
    }else{
      $recomiendo = new Recomiendo();
    }
    $recomiendo->recomiendo = $es_recomendado;
    $recomiendo->user_id = $user->id;
    $recomiendo->post_id = $post->id;
    if($actualizar)
    {
      $recomiendo->update();
    }else{
      $recomiendo->save();
    }
    return null;
  }
}
