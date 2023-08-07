<?php

namespace App\Http\Controllers;

use App\Models\coustomers;
use Illuminate\Http\Request;

class CoustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function __construct()
     {
         $this->middleware('auth');
         //middleware
         // يطبق بعد انشاء الابجكت تبع الكونترلور

     }

    public function index(Request $request)
    {
      $customers=coustomers::orderBy('created_at','DESC')-> get();

        $query = coustomers::query();

        $customers = $query->paginate(3); // Display 3 records per page
        //بظهرلي عدد معين من الريكورد

        // // Filtering
        // if ($request->has('name')) {
        //     $query->where('name', 'like', '%' . $request->input('name') . '%');
        // }

// $customer = Customer::find(1); // Assuming you have a customer with ID 1
// $user = $customer->user; // Get the associated user

        return view('coustomers.index', compact('customers'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
        $coustomers = coustomers::all();

        return view('coustomers.create', compact('coustomers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

$validate=$request->validate([
    'name' => 'required|string',
    'email' => 'required|email|unique:users,email',
    'phone' => 'nullable|string',
    'address' => 'nullable|string',
    'country' => 'nullable|string',
    'city' => 'nullable|string',
    'career' => 'nullable|string',
]);
//mass assigment
$customers = coustomers::create($request->all());
        return redirect()->route('coustomers.index')
        ->with('success', 'Customer created successfully');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //

        // Find the classroom by ID
        $coustomers = coustomers::findOrFail($id);

        return view('coustomers.edit')->with([
            'coustomers' => $coustomers
            //with() method is used to pass the $classroom variable to the view,
            // so it can be accessed within the view file.
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $coustomers =coustomers::findOrFail($id);

    $validatedData = $request->validate([
        'name' => 'required|string',
    'email' => 'required|email|unique:users,email',
    'phone' => 'nullable|string',
    'address' => 'nullable|string',
    'country' => 'nullable|string',
    'city' => 'nullable|string',
    'career' => 'nullable|string',
    ]);


    $coustomers->update($validatedData);

    return redirect()->route('coustomers.index')
    ->with('success', 'Customer updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        coustomers::destroy($id);

        return redirect()->route('coustomers.index')
        ->with('success', 'Customer deleted successfully');
    }
}
