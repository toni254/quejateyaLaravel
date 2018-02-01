<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    //Atributos

    //Constructores

    //Metodos
    public function index(){
      $categories = Category::all();
      $view = view('admin.categories.index');
      $view->with('categories',$categories);
      return $view;

    }

    public function create(){
      $view = view('admin.categories.create');
      return $view;

    }

    public function store(Request $request){
      //dd($request); //para hacer que la aplicacion se detenga
      $category = new Category();
      $category->name = $request->get('name');
      $category->hashtag = $request->get('hashtag');
      $category->published = $request->get('published');
      $category->user_created = 1;
      $category->save();

      return redirect()->route('admin.categories.index');

    }
    public function edit($id){
      $category = Category::find($id);
      $view = view('admin.categories.edit');
      $view->with('category',$category);
      return $view;
    }
    public function update(Request $request,$id){
      $category = Category::find($id);
      $category->name = $request->get('name');
      $category->hashtag = $request->get('hashtag');
      $category->published = $request->get('published');
      $category->user_modified = 1;
      $category->save();
      return redirect()->route('admin.categories.index');
    }
    public function show($id){
      $category = Category::find($id);
      $view = view('admin.categories.show');
      $view->with('category',$category);
      return $view;
    }
    public function delete($id){
      $category = Category::find($id);
      $category->delete();
      
      return redirect()->route('admin.categories.index');
    }
}
