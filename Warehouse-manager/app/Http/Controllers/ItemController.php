<?php

namespace App\Http\Controllers;

use App\Models\item;
use App\Http\Controllers\Controller;
use App\Models\Item as ModelsItem;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Symfony\Contracts\Service\Attribute\Required;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $validated = $request->validate([

            'name' => 'required|string|max:50',
            'inner_outer' => 'required|string',
            'dimension' => 'required|integer',
            'length' => 'required|integer',

        ]);

    Item::create($validated);

        return redirect(route('stativ.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(item $item)
    {
        //
    }
}
