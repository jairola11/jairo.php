<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre'=>'required|max:20',
            'cedula'=>'required|max:11',
            'telefono'=>'required|max:12',
            'direccion'=>'required|max:10'
        ]);
        Usuario::create($request->all());
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return view('edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $usuario = Usuario::find($id);
        $this->validate($request,[
            'nombre'=>'required|max:20',
            'cedula'=>'required|max:11',
            'telefono'=>'required|max:12',
            'direccion'=>'required|max:10'
        ]);

        $usuario->update($request->all());
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Usuario::where('id', $id)->delete();
        return redirect()->route('users.index');
    }

    public function export_user_pdf()
    {
        $usuarios = Usuario::all();
        $pdf = PDF::loadView('pdf', ['usuarios' => $usuarios]);
        return $pdf->stream('pdf.pdf');
    }

    public function export_user($id)
    {
        $usuario = Usuario::find($id);
        $pdf = PDF::loadView('pdfu', ['usuario' => $usuario]);
        return $pdf->stream('pdf.pdf');
    }
    
}
