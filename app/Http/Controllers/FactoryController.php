<?php

namespace App\Http\Controllers;

use App\Models\Factory;
use App\Models\User;
use Database\Seeders\user as SeedersUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class FactoryController
 * @package App\Http\Controllers
 */
class FactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $factories = Factory::paginate();

        return view('factory.index', compact('factories', 'user'))
            ->with('i', (request()->input('page', 1) - 1) * $factories->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::pluck('name', 'id');
        $factory = new Factory();
        return view('factory.create', compact('factory', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Factory::$rules);

        $factory = Factory::create($request->all());

        return redirect()->route('factories.index')
            ->with('success', 'Empresa creada satisfactoriamente!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $factory = Factory::find($id);

        return view('factory.show', compact('factory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $factory = Factory::find($id);

        return view('factory.edit', compact('factory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Factory $factory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factory $factory)
    {
        request()->validate(Factory::$rules);

        $factory->update($request->all());

        return redirect()->route('factories.index')
            ->with('success', 'Información actualizada de forma exítosa');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $factory = Factory::find($id)->delete();

        return redirect()->route('factories.index')
            ->with('success', 'Registro de empresa eliminada satisfactoriamente');
    }
}