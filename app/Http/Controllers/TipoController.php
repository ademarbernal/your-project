<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;

class TipoController extends Controller
{
    public function index()
    {
        $tipos = Tipo::all();
        return view('types.tipos')->with('tipos',$tipos);
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'costo' => 'required',
            'descripcion' => 'required',
        ]);

        $promos = new Tipo;

        $promos->nombre = $request->input('nombre');
        $promos->costo = $request->input('costo');
        $promos->descripcion = $request->input('descripcion');
        $promos->save();

        return redirect('/tipos')->with('success', 'agregado correctamente');
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'costo' => 'required',
            'descripcion' => 'required',
        ]);

        $promos = Tipo::find($id);

        $promos->nombre = $request->input('nombre');
        $promos->costo = $request->input('costo');
        $promos->descripcion = $request->input('descripcion');
        $promos->save();

        return redirect('/tipos')->with('success', 'modificado correctamente');
    }
    public function destroy($id)
    {
        $promos = Promocion::find($id);
        $promos->delete();

        return redirect('/tipos')->with('sucess', 'dato eliminado');
    }
}
