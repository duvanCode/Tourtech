<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use Illuminate\Support\Facades\Session;

class PedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index()
    {
        //
        $pedidos = Compra::all()->sortByDesc('created_at');
        return view('pedidos.pedidosindex',compact('pedidos'));
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
        $compra = Compra::findOrFail($id);
        return view('pedidos.mostrarPedidos',compact('compra'));
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
        $pedido = $request->all();
        switch ($pedido['valor']) {
            case 1:
                // code...
            $pedido['Estado'] = 'En Proceso';
                break;
            case 2:
                // code...
            $pedido['Estado'] = 'Completado';
                break;
            case 3:
                // code...
            $pedido['Estado'] = 'Fallido';
                break;

            default:
                // code...
            $pedido['Estado'] = 'Iniciado';
                break;
        }

        Compra::findOrFail($id)->update($pedido);
        Session::flash('actualizado','registro actualizado con exito');
        return redirect('/admin/pedidos');

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
