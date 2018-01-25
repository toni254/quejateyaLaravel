<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PriorityController extends Controller
{
  //Atributos

  //Constructores

  //Metodos
  public function index(){
    $view = view('admin.priorities.index');
    return $view;

  }

  public function create(){
    $view = view('admin.priorities.create');
    return $view;

  }

  public function store(){

  }
}
