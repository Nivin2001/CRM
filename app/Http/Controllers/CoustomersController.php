<?php

namespace App\Http\Controllers;

use App\Models\coustomers;
use Illuminate\Http\Request;

class CoustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = coustomers::query();

        // Filtering
        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        // Sorting
        if ($request->has('sort')) {
            $sortField = $request->input('sort');
            $sortDirection = $request->input('direction', 'asc');
            $query->orderBy($sortField, $sortDirection);
        }

        $customers = $query->paginate(3); // Display 10 records per page

        return view('coustomers.index', compact('customers'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // You can fetch any necessary data here
        // For example, fetching a list of customers from the database
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
        $customer =($request->all());
        return redirect()->route('coustomers.index')
        ->with('success', 'Customer created successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(coustomers $coustomers)
    {
        //
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
    public function update(Request $request, coustomers $coustomers)
    {
        //

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

    return redirect()->route('coustomers.index')->with('success', 'Customer updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(coustomers $coustomers)
    {
        $coustomers->delete();

        return redirect()->route('coustomers.index')->with('success', 'Customer deleted successfully');
    }
}
