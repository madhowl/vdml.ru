<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function catalogGrid()
    {
        $categories = Category::paginate(10);
        $page_title = 'Каталог';

        return view('audesk.categories', [
            'catalog' =>$categories,
            'page_title'=>$page_title
        ]);
    }

    public function productInCategoryGrid($slug)
    {
        $page_title = Category::where('slug',$slug)->first()->name;
        $products = Category::where('slug',$slug)->first()->products;
        return view('audesk.products', [
            'catalog' =>$products,
            'page_title'=>$page_title
        ]);
    }
}
