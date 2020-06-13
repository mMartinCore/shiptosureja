<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;



class CategoriesController extends Controller
{
  public function __construct()
  {
    $this->middleware(['auth', 'isAdmin']);
  }

  public function index()
  {
    $categories = Category::orderBy('id', 'desc')->get();
    return view('categories.index', compact('categories'));
  }

  public function create()
  {

    return view('categories.create');

  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'name'  => 'required'
    ],
    [
      'name.required'  => 'Please provide a category name'
    ]

);

    $category = new Category();
    $category->name = $request->name;
    $category->save();

    session()->flash('success', 'A new category has added successfully !!');
    return redirect()->route('categories.index');

  }

  public function show($id)
  {
    $category= Category::findOrFail($id);
    if (!is_null($category)) {
      return view('categories.edit', compact('category'));
    }else {
        return view('categories.show',compact('category'));
    }

  }


  public function edit($id)
  {
    $category= Category::find($id);
    if (!is_null($category)) {
      return view('categories.edit', compact('category'));
    }else {
      return redirect()->route('categories.index');
    }
  }


    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'name'  => 'required'
      ],
      [
        'name.required'  => 'Please provide a category name'
      ]);

      $category = Category::find($id);
      $category->name = $request->name;
      $category->save();

      session()->flash('success', 'Category has updated successfully !!');
      return redirect()->route('categories.index');

    }

    public function delete($id)
    {
      $category = Category::find($id);
      if (!is_null($category)) {
        $category->delete();
      }
      session()->flash('success', 'cateory has deleted successfully !!');
      return back();

    }
}
