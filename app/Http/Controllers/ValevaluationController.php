<?php

namespace App\Http\Controllers;

use App\Models\Valevaluation;
use Illuminate\Http\Request;

/**
 * Class ValevaluationController
 * @package App\Http\Controllers
 */
class ValevaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $valevaluations = Valevaluation::paginate();

        return view('valevaluation.index', compact('valevaluations'))
            ->with('i', (request()->input('page', 1) - 1) * $valevaluations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $valevaluation = new Valevaluation();
        return view('valevaluation.create', compact('valevaluation'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Valevaluation::$rules);

        $valevaluation = Valevaluation::create($request->all());

        return redirect()->route('valevaluations.index')
            ->with('success', 'Valevaluation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $valevaluation = Valevaluation::find($id);

        return view('valevaluation.show', compact('valevaluation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $valevaluation = Valevaluation::find($id);

        return view('valevaluation.edit', compact('valevaluation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Valevaluation $valevaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Valevaluation $valevaluation)
    {
        request()->validate(Valevaluation::$rules);

        $valevaluation->update($request->all());

        return redirect()->route('valevaluations.index')
            ->with('success', 'Valevaluation updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $valevaluation = Valevaluation::find($id)->delete();

        return redirect()->route('valevaluations.index')
            ->with('success', 'Valevaluation deleted successfully');
    }
}
