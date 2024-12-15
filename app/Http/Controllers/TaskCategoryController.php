<?php

namespace App\Http\Controllers;

use App\Models\TaskCategory;
use Illuminate\Http\Request;

class TaskCategoryController extends Controller
{
    public function index()
{
    $categories = TaskCategory::all();
    return view('task-categories.index', compact('categories'));
}

public function create()
{
    return view('task-categories.create');
}

public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'has_dor_date' => 'boolean',
        'has_batch' => 'boolean',
        'has_claim' => 'boolean',
        'has_time_range' => 'boolean',
        'has_sheets' => 'boolean',
        'has_email' => 'boolean',
        'has_form' => 'boolean'
    ]);

    TaskCategory::create($validated);
    return redirect()->route('task-categories.index')->with('success', 'Category created successfully');
}

public function edit(string $id)
{
    $category = TaskCategory::findOrFail($id);
    return view('task-categories.edit', compact('category'));
}

public function update(Request $request, string $id)
{
    $category = TaskCategory::findOrFail($id);

    $validated = $request->validate([
        'name' => 'required|string|max:255',
    ]);

    // Handle boolean fields with proper default values
    $validated['has_dor_date'] = $request->has('has_dor_date');
    $validated['has_batch'] = $request->has('has_batch');
    $validated['has_claim'] = $request->has('has_claim');
    $validated['has_time_range'] = $request->has('has_time_range');
    $validated['has_sheets'] = $request->has('has_sheets');
    $validated['has_email'] = $request->has('has_email');
    $validated['has_form'] = $request->has('has_form');

    $category->update($validated);
    return redirect()->route('task-categories.index')->with('success', 'Category updated successfully');
}


public function destroy(string $id)
{
    $category = TaskCategory::findOrFail($id);
    $category->delete();
    return redirect()->route('task-categories.index')->with('success', 'Category deleted successfully');
}

}
