<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promo;

class PromocionController extends Controller
{
    public function index()
    {
        $promos = Promo::all();
        return view('promotions.promociones')->with('promos',$promos);
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'costo' => 'required',
            'inicio' => 'required',
            'fin' => 'required',
            'descripcion' => 'required',
        ]);

        $promos = new Promo;

        $promos->nombre = $request->input('nombre');
        $promos->costo = $request->input('costo');
        $promos->inicio = $request->input('inicio');
        $promos->fin = $request->input('fin');
        $promos->descripcion = $request->input('descripcion');
        $promos->save();

        return redirect('/promociones')->with('success', 'agregado correctamente');
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nombre' => 'required',
            'costo' => 'required',
            'inicio' => 'required',
            'fin' => 'required',
            'descripcion' => 'required',
        ]);

        $promos = Promo::find($id);

        $promos->nombre = $request->input('nombre');
        $promos->costo = $request->input('costo');
        $promos->inicio = $request->input('inicio');
        $promos->fin = $request->input('fin');
        $promos->descripcion = $request->input('descripcion');
        $promos->save();

        return redirect('/promociones')->with('success', 'modificado correctamente');
    }
    public function destroy(Request $request)
    {

        $promos = Promo::find($id);
        $promos->delete();

        return redirect('/promotions/promociones')->with('sucess', 'dato eliminado');
    }

}
