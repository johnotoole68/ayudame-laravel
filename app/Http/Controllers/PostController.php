<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

}
