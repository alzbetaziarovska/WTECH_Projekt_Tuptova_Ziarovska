<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
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

        $query->where('category_id', $category);

        if ($request->filled('min_price')) {
            $query->where('price', '>=', $request->input('min_price'));
        }

        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->input('max_price'));
        }

        if ($request->filled('maker[]')) {
            $query->whereIn('make', $request->input('maker[]'));
        }

        // sticker thingies

        if ($request->has('on_sale')) {
            $query->where('on_sale', true);
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

        // Return the product detail view with the product data
        return view('product_detail', compact('product'));
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
}