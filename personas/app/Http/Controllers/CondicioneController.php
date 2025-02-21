<?php

namespace App\Http\Controllers;

use App\Models\Condicione;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\CondicioneRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class CondicioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $condiciones = Condicione::paginate();

        return view('condicione.index', compact('condiciones'))
            ->with('i', ($request->input('page', 1) - 1) * $condiciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $condicione = new Condicione();

        return view('condicione.create', compact('condicione'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CondicioneRequest $request): RedirectResponse
    {
        Condicione::create($request->validated());

        return Redirect::route('condiciones.index')
            ->with('success', 'Condicione created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $condicione = Condicione::find($id);

        return view('condicione.show', compact('condicione'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $condicione = Condicione::find($id);

        return view('condicione.edit', compact('condicione'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CondicioneRequest $request, Condicione $condicione): RedirectResponse
    {
        $condicione->update($request->validated());

        return Redirect::route('condiciones.index')
            ->with('success', 'Condicione updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Condicione::find($id)->delete();

        return Redirect::route('condiciones.index')
            ->with('success', 'Condicione deleted successfully');
    }
}
