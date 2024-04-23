<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EstudianteController extends Controller
{
    protected static $url= "http://localhost/SOA/controllers/studentController.php";
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Http::GET(static::$url);
        $estudiantesArray= $estudiantes->json();
        return view('estudiante.mostrar', compact('estudiantesArray'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $response = Http::AsForm()->POST(static::$url, [
            'id'=> $request->input('id'),
            'name' => $request->input('name'),
            'lastName' => $request->input('lastName'),
            'address' => $request->input('address'),
            'phoneNumber' => $request->input('phoneNumber'),
        ]);

        return redirect('/estudiantes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        $estudiantes = Http::GET(static::$url);
        $estudiantesArray= $estudiantes->json();
        foreach ($estudiantesArray as $estudiante) {
            if ($estudiante['id'] == $id) {
                break;
            }
        }
        return view('estudiante.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
        $name = $request->input('name');
        $lastName = $request->input('lastName');
        $id = $request->input('id');
        $address = $request->input('address');
        $phoneNumber = $request->input('phoneNumber');
        $response = Http::put(static::$url."?id=".$id ."&name=".$name."&id=".$id."&address=".$address."&phoneNumber=".$phoneNumber."&lastName=".$lastName);
        return redirect('/estudiantes')->with('success', 'Estudiante actualizado con éxito');
}   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $cedula)
    {
        $response = Http::delete(static::$url."?id=".$cedula);

        return redirect('/estudiantes');
    }
}