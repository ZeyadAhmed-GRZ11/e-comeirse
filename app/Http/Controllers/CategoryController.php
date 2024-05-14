<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    public function index(){
        $categories = category::all();
        // return $categories;
        return view('layout.index', compact('categories'));
    }
    public function create(){
        return view('layout.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'is_active' => 'sometimes'
        ]);

        category::create([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->is_active == true? 1:0,
        ]);

        return redirect('categories/create')-> with('status','category Created');
    }

    public function edit(int $id){
       $categories = category::findOrFail($id);
    //    return $categories;
       return view('layout.edit', compact('categories'));
    }
    public function update(Request $request, int $id){
       
        $request->validate([
            'name' => 'required|max:255|string',
            'description' => 'required|max:255|string',
            'is_active' => 'sometimes'
        ]);

        category::findOrFail($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'is_active' => $request->is_active == true? 1:0,
        ]);

        return redirect()->back()->with('status','category Updated');
    }

    public function destroy(int $id){
      $category = category::findOrFail($id);
      $category->delete();
      return redirect()->back()->with('status','category Deleted');
    }
    public function welcome(){
        return view('welcome');
    }

}
