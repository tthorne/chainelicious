<?php namespace App\Http\Controllers;

use App\Customwork;
use Input;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomworksController extends Controller {

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
        $customworks = CustomWork::all();
        return view('customworks.index', compact('customworks'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('customworks.create');
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
        Customwork::create( $input );

        return Redirect::route('customworks.create', compact('Customwork'))->with('message', 'Thank you for your order. Someone will be in contact with you within 24-48 hours, about pricing and any other questions.');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function show($id)
    {
        $customworks = Customwork::join('users','users.id', '=', 'customworks.user_id')
            ->where('customworks.id', '=', $id)
            ->get(['users.first_name as first',
                'users.last_name as last',
                'users.street as street',
                'users.city as city',
                'users.state as state',
                'users.zip as zip',
                'users.phone as phone',
                'users.email as email',
                'customworks.created_at as created',
                'customworks.updated_at as updated',
                'customworks.description as description',
                'customworks.category as category',
                'customworks.status as status'
            ]);


        return view('customworks.show')->with('customworks', $customworks);

        //$customworks = Customwork::findOrFail($id);
        //return view('customworks.show', compact('customworks'));
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function edit($id)
    {
        $customworks = Customwork::findOrFail($id);
        return view('customworks.edit', compact('customworks'));
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $customworks = Customwork::find($id);
        $customworks->fill(Input::all());
        $customworks->save();
        $customworks = Customwork::find($id);

        return Redirect::route('customworks.show', compact('customworks'))->with('message', 'User Updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $customworks = Customwork::find($id);
        $customworks->delete();

        return Redirect::route('customworks.index', compact('customworks'))->with('message', 'Custom Order deleted.');
    }

}
