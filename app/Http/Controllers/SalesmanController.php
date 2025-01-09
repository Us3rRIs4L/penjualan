<?php

namespace App\Http\Controllers;

use App\Models\Salesman;
use Illuminate\Http\Request;

class SalesmanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salesmen = Salesman::all();
        return view('salesman.index', compact('salesmen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salesman.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'salesman_name' => 'required',
            'salesman_city' => 'required',
            'commission' => 'required|numeric|between:0,100', 
        ]);

        Salesman::create($request->all());

        return redirect()->route('salesmen.index')->with('success', 'Salesman created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Salesman $salesman)
    {
        return view('salesmen.show', compact('salesman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salesman $salesman)
    {
        return view('salesman.edit', compact('salesman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Salesman $salesman)
    {
        $request->validate([
            'salesman_name' => 'required',
            'salesman_city' => 'required',
            'commission' => 'required|numeric|between:0,100', 
        ]);

        $salesman->update($request->all());

        return redirect()->route('salesmen.index')->with('success', 'Salesman updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salesman $salesman)
    {
        $salesman->delete();
        return redirect()->route('salesman.index')->with('success', 'Salesman deleted successfully.');
    }
}
