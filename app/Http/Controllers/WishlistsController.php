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

    protected $rules = [
        'description' => ['required'],
        'category' => ['required'],
    ];

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $wishlists = Wishlist::join('users','users.id', '=', 'wishlists.user_id')
                ->get(['users.first_name as first', 'users.first_name as user',
                'wishlists.id as id', 'wishlists.description as description',
                    'users.first_name as first',
                    'users.last_name as last',
                    'wishlists.category as category',
                    'wishlists.created_at as created',
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
        return view('wishlists.create');
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);

        $input = Input::all();
        Wishlist::create( $input );

        return Redirect::route('wishlists.show', compact('Wishlist'))->with('message', 'Wish Item has been added.');

    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
    {
        $wishlists = Wishlist::join('users','users.id', '=', 'wishlists.user_id')
            ->where('wishlists.user_id', '=', $id)
            ->get(['users.first_name as first', 'users.first_name as user',
                'wishlists.id as id', 'wishlists.description as description',
                'users.first_name as first',
                'users.last_name as last',
                'wishlists.category as category',
                'wishlists.created_at as created',
                'wishlists.user_id as user_id'
            ]);


        return view('wishlists.index')->with('wishlists', $wishlists);
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
        $wishlists->fill(Input::all());
        $wishlists->save();
        $wishlists = Wishlist::find($id);

        return Redirect::route('wishlists.show', compact('wishlists'))->with('message', 'Wish Updated.');

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
