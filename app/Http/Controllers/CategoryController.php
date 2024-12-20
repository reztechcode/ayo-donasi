<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories') );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $iconPath = $request->file('icon')->store('icons', 'public');
    
        Category::create([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'icon' => $iconPath,
        ]);
        return redirect()->route('categories.index')->with('success', 'Kategori berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);
        if ($category) {
            $validatedData = $request->validate([
                'name' => 'required',
                'description' => 'required',
                'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if ($request->hasFile('icon')) {
                $iconPath = $request->file('icon')->store('icons', 'public');
                $category->icon = $iconPath;
            }
            $category->name = $validatedData['name'];
            $category->description = $validatedData['description'];
            $category->save();
            return redirect()->route('categories.index')->with('success', 'Data berhasil diupdate!');
        } else {
            return redirect()->route('categories.index')->with('error', 'Data tidak ditemukan!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        if ($category) {
            $category->delete();
            return redirect()->route('categories.index')->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect()->route('categories.index')->with('error', 'Data tidak ditemukan!');
        }
    }
}
