<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use App\Models\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrdenPedida;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'Nombre' => 'required|max:50',
            'Ciudad' => 'required|alpha|max:20',
            'Telefono' => 'required|integer',
            'Cedula' => 'required|integer',
            'Correo'=>'required|email|max:50',
            'Direccion'=>'required|max:150',
            'Unity'=>'required|integer|max:20',
            'Departamento'=>'required|alpha|max:20',
        ]);

        $compra = $request->all();
        $compraid = Compra::create($compra);
        $productos = Producto::where('id',$request['producto_id'])->get();
        Mail::to('duvanyepezfa@gmail.com')->send(new OrdenPedida(Compra::find($compraid->id)));
        return view('user.compraEnProceso',compact('productos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

            $productos = Producto::where('id',$id)->get();
            $productos2 = Producto::all();
            return view('user.mostrarCompras',compact('productos'),compact('productos2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $productos = Producto::where('id',$id)->get();
            return view('user.crearCompra',compact('productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
