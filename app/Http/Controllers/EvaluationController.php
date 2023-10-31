<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Valevaluation;
use App\Models\Subcategory;
use App\Models\Evaluation;
use App\Models\Factory;
use Illuminate\Http\Request;

/**
 * Class EvaluationController
 * @package App\Http\Controllers
 */
class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluations = Evaluation::paginate();

        return view('evaluation.index', compact('evaluations'))
            ->with('i', (request()->input('page', 1) - 1) * $evaluations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $factory = Factory::pluck('NombreEmpresa', 'id');
        //$categories = Category::with('subcategories')->paginate();
        $categoryId = Category::pluck('id');
        $categories = Category::with('subcategories.valevaluations')->find($categoryId);

        $evaluation = new Evaluation();
        return view('evaluation.create', compact('evaluation', 'factory', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Evaluation::$rules);

        $evaluation = Evaluation::create($request->all());

        return redirect()->route('evaluations.index')
            ->with('success', 'Evaluation created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evaluation = Evaluation::find($id);

        return view('evaluation.show', compact('evaluation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evaluation = Evaluation::find($id);

        return view('evaluation.edit', compact('evaluation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Evaluation $evaluation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluation $evaluation)
    {
        request()->validate(Evaluation::$rules);

        $evaluation->update($request->all());

        return redirect()->route('evaluations.index')
            ->with('success', 'Evaluation updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $evaluation = Evaluation::find($id)->delete();

        return redirect()->route('evaluations.index')
            ->with('success', 'Evaluation deleted successfully');
    }
}
