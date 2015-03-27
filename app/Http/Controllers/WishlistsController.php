<?php namespace App\Http\Controllers;

use App\Wishlist;
use Input;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class WishlistsController extends Controller {

    public function __construct(){
        $this->middleware('auth');
    }
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $wishlists = Wishlist::join('products','products.id', '=', 'wishlists.product_id')
                ->join('users','users.id', '=', 'wishlists.user_id')
                ->get(['products.name as product', 'users.first_name as user',
                'wishlists.id as id', 'wishlists.description as description',
                    'users.first_name as owner_first',
                    'users.last_name as owner_last',
                    'wishlists.user_id as user_id'
                ]);


        return view('wishlists.index')->with('wishlists', $wishlists);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $wishlists = Wishlist::join('products','products.id', '=', 'wishlists.product_id')
            ->join('users','users.id', '=', 'wishlists.user_id')
            ->get(['products.name as product', 'users.first_name as user',
                'wishlists.id as id']);


        return view('wishlists.create')->with('wishlists', $wishlists);

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store()
    {

    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $wishlists = Wishlist::join('products','products.id', '=', 'wishlists.product_id')
            ->join('users','users.id', '=', 'wishlists.user_id')
            ->where('wishlists.user_id', '=', $id)
            ->get(['products.name as product', 'users.first_name as user',
                'wishlists.id as id', 'wishlists.description as description']);


        return view('wishlists.show')->with('wishlists', $wishlists);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $wishlists = Wishlist::find($id);
        return view('wishlists.edit', compact('wishlists'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update($id)
    {
        $wishlists = Wishlist::find($id);
        $input = array_except(Input::all(), '_method');
        $wishlists->update($input);

        return Redirect::route('wishlists.show', compact('wishlists'))->with('message', 'Wishlist item as been updated.');

    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $wishlists = Wishlist::find($id);
        $wishlists->delete();

        return Redirect::route('wishlists.index', compact('wishlists'))->with('message', 'Wish Item deleted.');
	}

}
