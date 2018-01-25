<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
  //Atributos

  //Constructores

  //Metodos
  public function index(){
    $view = view('admin.countries.index');
    return $view;

  }

  public function create(){
    $view = view('admin.countries.create');
    return $view;

  }

  public function store(){

  }
}
