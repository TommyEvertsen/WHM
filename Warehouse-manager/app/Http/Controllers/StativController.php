<?php

namespace App\Http\Controllers;

use App\Models\stativ;
use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Http\RedirectResponse;

class StativController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return Inertia::render('Stativ/Index', [
            'stativ' => Stativ::select('id', 'name', 'rows', 'columns', 'measurementSize', 'created_at', 'updated_at')->latest()->get(),
            'item' => Item::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:50',
                'rows' => 'required|integer',
                'columns' => 'required|integer',
                'measurementSize' => 'required|integer',
            ]);
    
            // Create a new standalone stativ
            Stativ::create($validated);
    
            return redirect(route('stativ.index'));
    
        } catch (\Exception $e) {
            // Log or dd($e) the error for debugging
            dd($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(stativ $stativ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(stativ $stativ)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, stativ $stativ)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(stativ $stativ)
    {
        //
    }
}
