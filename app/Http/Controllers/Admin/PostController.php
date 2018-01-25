<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
  //Atributos

  //Constructores

  //Metodos
  public function index(){
    $view = view('admin.posts.index');
    return $view;

  }

  public function create(){
    $view = view('admin.posts.create');
    return $view;

  }

  public function store(){

  }
}
