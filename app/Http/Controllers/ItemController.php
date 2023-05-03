<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;

use App\Models\Category;
use App\Models\Brand;

class ItemController extends Controller
{
    public function home()
    {
        $items = Item::all();
        return view('home', compact('items'));
    }

    public function detail(Item $item)
    {
        return view('detail', compact('item'));
    }

    public function category(Category $category)
    {
        return view('category', compact('category'));
    }

    public function top5_brand()
    {
        $top5_brands = Brand::where('top5_flag', 1)->get();
        return view('top5', compact('top5_brands'));
    }

    public function brand(Brand $brand)
    {
        return view('brand', compact('brand'));
    }
}
