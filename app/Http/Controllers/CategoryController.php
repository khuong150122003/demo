<?php

namespace App\Http\Controllers;

use App\Models\Timber;
use Illuminate\Http\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Timber::get();
        return view('category-list', compact('data'));
    }
}
