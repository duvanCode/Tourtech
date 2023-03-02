<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Session;

class ProductosController extends Controller
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('producto.crearProductos');
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
            'Precio' => 'required|integer',
            'Unidades'=>'required|integer|max:1000',
            'Descripcion' => 'required|max:400',
            'Perfil' => 'required|image|max:2048',
            'Foto1' => 'required|image|max:2048',
            'Foto2' => 'required|image|max:2048',
            'Foto3' => 'required|image|max:2048',
        ]);

        $productos = $request->all();

        if($archivo = $request->file('Perfil'))
        {
            $nombre = $archivo->getClientOriginalName();
            if(Producto::where('Perfil',$nombre)->count()>0)
            {
                $fecha = getdate();
                $nombre = $fecha['hours'].'_'.$fecha['minutes'].'_'.$fecha['seconds'].'_'.$nombre;
                $archivo->move('img',$nombre);
            }
            else{
             $archivo->move('img',$nombre);
             }
             $productos['Perfil'] = $nombre;       
        }
        else
        {
            $productos['Perfil'] = 'sin foto';
        }
 //---------------------------------------------------------------------------------------
 if($archivo = $request->file('Foto1'))
        {
            $nombre = $archivo->getClientOriginalName();
            if(Producto::where('Foto1',$nombre)->count()>0)
            {
                $fecha = getdate();
                $nombre = $fecha['hours'].'_'.$fecha['minutes'].'_'.$fecha['seconds'].'_'.$nombre;
                $archivo->move('img',$nombre);
            }
            else{
             $archivo->move('img',$nombre);
             }
             $productos['Foto1'] = $nombre;       
        }
        else
        {
            $productos['Foto1'] = 'sin foto';
        }
        //-----------------------------------------------------------------
        if($archivo = $request->file('Foto2'))
        {
            $nombre = $archivo->getClientOriginalName();
            if(Producto::where('Foto2',$nombre)->count()>0)
            {
                $fecha = getdate();
                $nombre = $fecha['hours'].'_'.$fecha['minutes'].'_'.$fecha['seconds'].'_'.$nombre;
                $archivo->move('img',$nombre);
            }
            else{
             $archivo->move('img',$nombre);
             }
             $productos['Foto2'] = $nombre;       
        }
        else
        {
            $productos['Foto2'] = 'sin foto';
        }
        //----------------------------------------------------------------------
        if($archivo = $request->file('Foto3'))
        {
            $nombre = $archivo->getClientOriginalName();
            if(Producto::where('Foto3',$nombre)->count()>0)
            {
                $fecha = getdate();
                $nombre = $fecha['hours'].'_'.$fecha['minutes'].'_'.$fecha['seconds'].'_'.$nombre;
                $archivo->move('img',$nombre);
            }
            else{
             $archivo->move('img',$nombre);
             }
             $productos['Foto3'] = $nombre;       
        }
        else
        {
            $productos['Foto3'] = 'sin foto';
        }
        //----------------------------------------------------------------------       
        Producto::create($productos);
        Session::flash('creado','producto creado exitosamente');
        return redirect('/admin');
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
        $producto = Producto::findOrFail($id);
        return view('producto.editarProductos',compact('producto'));
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
        $request->validate([
            'Nombre' => 'required|max:50',
            'Precio' => 'required|integer',
            'Unidades'=>'required|integer|max:1000',
            'Descripcion' => 'required|max:400',
            'Perfil' => 'image|max:2048',
            'Foto1' => 'image|max:2048',
            'Foto2' => 'image|max:2048',
            'Foto3' => 'image|max:2048',
        ]);

        $productos = $request->all();

        if($archivo = $request->file('Perfil'))
        {
            $nombre = $archivo->getClientOriginalName();
            if(Producto::where('Perfil',$nombre)->count()>0)
            {
                $fecha = getdate();
                $nombre = $fecha['hours'].'_'.$fecha['minutes'].'_'.$fecha['seconds'].'_'.$nombre;
                $archivo->move('img',$nombre);
            }
            else{
             $archivo->move('img',$nombre);
             }
             $productos['Perfil'] = $nombre;       
        }
        
 //---------------------------------------------------------------------------------------
 if($archivo = $request->file('Foto1'))
        {
            $nombre = $archivo->getClientOriginalName();
            if(Producto::where('Foto1',$nombre)->count()>0)
            {
                $fecha = getdate();
                $nombre = $fecha['hours'].'_'.$fecha['minutes'].'_'.$fecha['seconds'].'_'.$nombre;
                $archivo->move('img',$nombre);
            }
            else{
             $archivo->move('img',$nombre);
             }
             $productos['Foto1'] = $nombre;       
        }
       
        //-----------------------------------------------------------------
        if($archivo = $request->file('Foto2'))
        {
            $nombre = $archivo->getClientOriginalName();
            if(Producto::where('Foto2',$nombre)->count()>0)
            {
                $fecha = getdate();
                $nombre = $fecha['hours'].'_'.$fecha['minutes'].'_'.$fecha['seconds'].'_'.$nombre;
                $archivo->move('img',$nombre);
            }
            else{
             $archivo->move('img',$nombre);
             }
             $productos['Foto2'] = $nombre;       
        }
       
        //----------------------------------------------------------------------
        if($archivo = $request->file('Foto3'))
        {
            $nombre = $archivo->getClientOriginalName();
            if(Producto::where('Foto3',$nombre)->count()>0)
            {
                $fecha = getdate();
                $nombre = $fecha['hours'].'_'.$fecha['minutes'].'_'.$fecha['seconds'].'_'.$nombre;
                $archivo->move('img',$nombre);
            }
            else{
             $archivo->move('img',$nombre);
             }
             $productos['Foto3'] = $nombre;       
        }
        
        //----------------------------------------------------------------------       
        Producto::findOrFail($id)->update($productos);
        Session::flash('actualizado','producto actualizado exitosamente');
        return redirect('/admin');
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
        Producto::findOrFail($id)->delete();
        Session::flash('eliminado','producto eliminado exitosamente');
        return redirect('/admin');
    }
}
