<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;

class CommentController extends Controller
{
  //Atributos

  //Constructores

  //Metodos
  public function index(){
    $comments = Comment::all();
    $view = view('admin.comments.index');
    $view->with('comments',$comments);
    return $view;

  }

  public function create(){
    $view = view('admin.comments.create');
    return $view;

  }

  public function store(Request $request){
    $comment = new Comment();
    $comment->description = $request->get('description');
    $comment->published = $request->get('published');
    $comment->user_created = 1;
    $comment->save();
    return redirect()->route('admin.comments.index');
  }
  public function edit($id){
    $comment = Comment::find($id);
    $view = view('admin.comments.edit');
    $view->with('comment',$comment);
    return $view;
  }
  public function update(Request $request,$id){
    $comment = Comment::find($id);
    $comment->description = $request->get('description');
    $comment->published = $request->get('published');
    $comment->user_modified = 1;
    $comment->save();
    return redirect()->route('admin.comments.index');
  }
  public function show($id){
    $comment = Comment::find($id);
    $view = view('admin.comments.show');
    $view->with('comment',$comment);
    return $view;
  }
  public function delete($id){
    $comment = Comment::find($id);
    $comment->delete();

    return redirect()->route('admin.comments.index');
  }

}
