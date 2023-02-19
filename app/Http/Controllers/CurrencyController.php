<?php

namespace App\Http\Controllers;

use App\Models\currency;
use App\Http\Requests\StorecurrencyRequest;
use App\Http\Requests\UpdatecurrencyRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecurrencyRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(currency $currency): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(currency $currency): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecurrencyRequest $request, currency $currency): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(currency $currency): RedirectResponse
    {
        //
    }
}
