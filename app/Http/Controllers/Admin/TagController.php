<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class TagController extends Controller
{
  //Atributos

  //Constructores

  //Metodos
  public function index(){
    $tags = Tag::all();
    $view = view('admin.tags.index');
    $view->with('tags',$tags);
    return $view;

  }

  public function create(){
    $view = view('admin.tags.create');
    return $view;

  }

  public function store(Request $request){
    //dd($request); //para hacer que la aplicacion se detenga
    $tag = new Tag();
    $tag->name = $request->get('name');
    $tag->published = $request->get('published');
    $tag->user_created = 1;
    $tag->save();

    return redirect()->route('admin.tags.index');

  }
  public function edit($id){
    $tag = Tag::find($id);
    $view = view('admin.tags.edit');
    $view->with('tag',$tag);
    return $view;
  }
  public function update(Request $request,$id){
    $tag = Tag::find($id);
    $tag->name = $request->get('name');
    $tag->published = $request->get('published');
    $tag->user_modified = 1;
    $tag->save();
    return redirect()->route('admin.tags.index');
  }
  public function show($id){
    $tag = Tag::find($id);
    $view = view('admin.tags.show');
    $view->with('tag',$tag);
    return $view;
  }
  public function delete($id){
    $tag = Tag::find($id);
    $tag->delete();

    return redirect()->route('admin.tags.index');
  }
}
