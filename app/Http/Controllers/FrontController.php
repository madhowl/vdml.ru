<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function catalogGrid()
    {
        $categories = Category::paginate(10);
        return view('audesk.categories', ['catalog' =>$categories]);
    }
}
