<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Priority;

class PriorityController extends Controller
{
  //Atributos

  //Constructores

  //Metodos
  public function index(){
    $priorities = Priority::all();
    $view = view('admin.priorities.index');
    $view->with('priorities',$priorities);
    return $view;

  }

  public function create(){
    $view = view('admin.priorities.create');
    return $view;

  }

  public function store(Request $request){
    //dd($request); //para hacer que la aplicacion se detenga
    $priority = new Priority();
    $priority->name = $request->get('name');
    $priority->level = $request->get('level');
    $priority->color = $request->get('color');
    $priority->published = $request->get('published');
    $priority->user_created = 1;
    $priority->save();

    return redirect()->route('admin.priorities.index');

  }
  public function edit($id){
    $priority = Priority::find($id);
    $view = view('admin.priorities.edit');
    $view->with('priority',$priority);
    return $view;
  }
  public function update(Request $request,$id){
    $priority = Priority::find($id);
    $priority->name = $request->get('name');
    $priority->level = $request->get('level');
    $priority->color = $request->get('color');
    $priority->published = $request->get('published');
    $priority->user_modified = 1;
    $priority->save();
    return redirect()->route('admin.priorities.index');
  }
  public function show($id){
    $priority = Priority::find($id);
    $view = view('admin.priorities.show');
    $view->with('priority',$priority);
    return $view;
  }
  public function delete($id){
    $priority = Priority::find($id);
    $priority->delete();

    return redirect()->route('admin.priorities.index');
  }
}
