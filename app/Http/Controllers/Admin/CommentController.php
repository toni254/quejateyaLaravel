<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{
  //Atributos

  //Constructores

  //Metodos
  public function index(){
    $view = view('admin.comments.index');
    return $view;

  }

  public function create(){
    $view = view('admin.comments.create');
    return $view;

  }

  public function store(){

  }
}
