<?php

namespace App\Http\Controllers;

use App\Chaussure;
use Illuminate\Http\Request;

class ChaussureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $chaussures = Chaussure::orderBy('name', 'asc')->paginate(9);
        return view('chaussures.index', ['chaussures' => $chaussures]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chaussures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      Chaussure::create($request->all());

        return redirect('chaussures')->with('status', 'Nouvelle chaussure créée' );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Chaussure  $chaussure
     * @return \Illuminate\Http\Response
     */
    public function show(Chaussure $chaussure)
    {
        return view('chaussures.show', ['chaussure' => $chaussure]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Chaussure  $chaussure
     * @return \Illuminate\Http\Response
     */
    public function edit(Chaussure $chaussure)
    {
        return view('chaussures.edit', ['chaussure' => $chaussure]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Chaussure  $chaussure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chaussure $chaussure)
    {
        $chaussure->update($request->all());

        return redirect('chaussures');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Chaussure  $chaussure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chaussure $chaussure)
    {
      $chaussure->delete();
      return redirect('chaussures');
    }
}
