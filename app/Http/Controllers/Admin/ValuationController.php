<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Valuation;

class ValuationController extends Controller
{
  //Atributos

  //Constructores

  //Metodos
  public function index(){
    $valuations = Valuation::all();
    $view = view('admin.valuations.index');
    $view->with('valuations',$valuations);
    return $view;

  }

  public function create(){
    $view = view('admin.valuations.create');
    return $view;

  }

  public function store(Request $request){
    //dd($request); //para hacer que la aplicacion se detenga
    $valuation = new Valuation();
    $valuation->name = $request->get('name');
    $valuation->position = $request->get('position');
    $valuation->published = $request->get('published');
    $valuation->user_created = 1;
    $valuation->save();

    return redirect()->route('admin.valuations.index');

  }
  public function edit($id){
    $valuation = Valuation::find($id);
    $view = view('admin.valuations.edit');
    $view->with('valuation',$valuation);
    return $view;
  }
  public function update(Request $request,$id){
    $valuation = Valuation::find($id);
    $valuation->name = $request->get('name');
    $valuation->position = $request->get('position');
    $valuation->published = $request->get('published');
    $valuation->user_modified = 1;
    $valuation->save();
    return redirect()->route('admin.valuations.index');
  }
  public function show($id){
    $valuation = Valuation::find($id);
    $view = view('admin.valuations.show');
    $view->with('valuation',$valuation);
    return $view;
  }
  public function delete($id){
    $valuation = Valuation::find($id);
    $valuation->delete();

    return redirect()->route('admin.valuations.index');
  }
}
