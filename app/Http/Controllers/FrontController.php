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
        session()->put('page_title',$page_title);

        return view('audesk.categories', [
            'catalog' =>$categories
        ]);
    }

    public function productInCategoryGrid($slug)
    {
        $page_title = Category::where('slug',$slug)->first()->name;
        session()->put('page_title',$page_title);
        $products = Category::where('slug',$slug)->first()->products;
        return view('audesk.products', [
            'catalog' =>$products
        ]);
    }

    public function contact()
    {
        $page_title = 'Контакты';
        session()->put('page_title',$page_title);
        return view('audesk.contact');
    }

    public function about()
    {
        $page_title = 'О КОМПАНИИ';
        session()->put('page_title',$page_title);
        $rand_products = Product::inRandomOrder()
            ->limit(4)
            ->get();
        return view('audesk.about',compact ('rand_products'));
    }
}
