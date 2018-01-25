<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ValuationController extends Controller
{
  //Atributos

  //Constructores

  //Metodos
  public function index(){
    $view = view('admin.valuations.index');
    return $view;

  }

  public function create(){
    $view = view('admin.valuations.create');
    return $view;

  }

  public function store(){

  }
}
