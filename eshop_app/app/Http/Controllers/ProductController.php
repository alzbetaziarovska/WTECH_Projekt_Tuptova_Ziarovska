<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Photo;
use App\Models\Review;
use Illuminate\Http\Response;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index(Request $request, $category)
    {
        $query = Product::query();

        if ($category != 5)
        {
            $query->where('category_id', $category);
        }

        if ($request->filled('search_term')) {
            $query->where(function ($q) use ($request) {
                $search = strtolower($request->input('search_term'));
                $q->whereRaw('LOWER(name) LIKE ?', ["%{$search}%"])
                  ->orWhereRaw('LOWER(maker) LIKE ?', ["%{$search}%"]);
            });
            
        }

        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->input('min_price'));
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->input('max_price'));
        }

        if ($request->filled('maker')) {
            $query->whereIn('maker', $request->input('maker'));
        }

        // sticker thingies

        if ($request->has('sale')) {
            $query->where('sale', true);
        }

        if ($request->has('in_storage')) {
            $query->where('in_storage', '>', 0);
        }

        if ($request->has('new_in')) {
            $query->where('new_in', true);
        }

        if ($request->has('recommend')) {
            $query->where('recommend', true);
        }

        if ($request->has('favorite')) {
            $query->where('stars', '>=', 4.5);
        }

        // Sorting
        switch ($request->input('order-by')) {
            case 'price_desc':
                $query->orderBy('price', 'desc');
                break;
            case 'price_asc':
                $query->orderBy('price', 'asc');
                break;
            case 'abc':
                $query->orderBy('name');
                break;
            case 'review':
                $query->orderBy('stars', 'desc');
                break;
        }

        $products = $query->get();
        $categoryName = Category::find($category)->name ?? 'Unknown Category';
        return view('all_products', ['categoryName' => $categoryName, 'category' => $category], compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function show($id)
    {
        // Find the product by ID
        $product = Product::findOrFail($id);
        $photos = Photo::where('product_id', $id)->get();
        $reviews = Review::where('product_id', $id)->get();

        // Return the product detail view with the product data
        return view('product_detail', [
            'product' => $product,
            'photos' => $photos,
            'reviews' => $reviews,
        ]);
        
    }

    public function showRecommendProducts()
    {
        $products = Product::where('recommend', true)->get();
        return view('homepage', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


    public function getProductsByCategory($categoryId)
    {
        $products = Product::where('category_id', $categoryId)->get();
        return view('products.index', compact('products'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search_term');

        $products = Product::where('name', 'LIKE', '%' . $searchTerm . '%')->get();
        $category = Category::where('id', 4)->first();
        return view('all_products', ['categoryName' => $category->name, 'category' => $category->id], compact('products'));
    }
}