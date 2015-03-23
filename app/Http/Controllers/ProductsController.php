<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use Redirect;
use App\Category;
use App\Product;

class ProductsController extends Controller {

    protected $rules = [
        'name' => ['required', 'min:3'],
        'slug' => ['required'],
        'description' => ['required'],
    ];

    /**
     * Display a listing of the resource.
     *
     * @param  \App\Project $project
     * @return Response
     */

    public function index(Category $category)
    {
        return view('products.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function create(Category $category)
    {
        return view('products.create', compact('category'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project $project
     * @param  \App\Task    $task
     * @return Response
     */
    public function show(Category $category, Product $product)
    {
        return view('products.show', compact('category', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project $project
     * @param  \App\Task    $task
     * @return Response
     */
    public function edit(Category $category, Product $product)
    {

        return view('products.edit', compact('category', 'product'));
    }

    public function store(Category $category, Product $product, Request $request)
    {
        $this->validate($request, $this->rules);

        $input = Input::all();
        $input['category_id'] = $category->id;
        Product::create( $input );

        return Redirect::route('categories.show', $category->slug)->with('message', 'Product Created.');
    }

    public function update(Category $category, Product $product, Request $request)
    {
        $this->validate($request, $this->rules);

        $input = array_except(Input::all(), '_method');
        $product->update($input);

        return Redirect::route('categories.show', [$category->slug, $product->slug])->with('message', 'Product updated.');
    }

    public function destroy(Category $category, Product $product)
    {
        $product->delete();

        return Redirect::route('categories.show', $category->slug)->with('message', 'Product deleted.');
    }
}
