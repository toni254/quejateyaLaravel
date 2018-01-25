<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
  //Atributos

  //Constructores

  //Metodos
  public function index(){
    $view = view('admin.tags.index');
    return $view;

  }

  public function create(){
    $view = view('admin.tags.create');
    return $view;

  }

  public function store(){

  }
}
