<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //Atributos

    //Constructores

    //Metodos
    public function index(){
      $view = view('admin.categories.index');
      return $view;

    }

    public function create(){
      $view = view('admin.categories.create');
      return $view;

    }

    public function store(){

    }
}
