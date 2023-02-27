@extends('layouts.plantilla')

@section('cont')
<div class="row gx-lg-0  justify-content-center">
  <div class="row">
    <div class="col-4 text-center"><i class="bi bi-box-seam" style="font-size: 50px;"></i></div>
    <div class="col-4 text-center"><i class="bi bi-truck" style="font-size: 50px;"></i></div>
    <div class="col-4 text-center"><i class="bi bi-bag-check-fill" style="font-size: 50px;"></i></div>
  </div>
    <div class="progress mb-5" style="height: 10px;">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
  @foreach($productos as $producto)
  <div class="row">
            <h3>{{$producto->Nombre}}</h3>
            <p>{{$producto->Precio}} COP</p>
            </div>
  @endforeach
	<div class="card col-md-8">
                <div class="card-header">Compra Contra Entrega</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('compra.store') }}">
                      <input type="hidden" name="producto_id" value="@foreach($productos as $producto){{$producto->id}}@endforeach">
                        @csrf
                        <div class="row">
    <div class="col">
      <label for="inputEmail4">Nombre</label>
      <input type="name" name="Nombre" class="form-control @error('Nombre') is-invalid @enderror" id="inputEmail4" >
      @error('Nombre')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>
    <div class="col">
      <label for="inputPassword4">Telefono</label>
      <input type="telefono" name="Telefono" class="form-control @error('Telefono') is-invalid @enderror" id="" >
      @error('Telefono')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>
  </div>
  <div class="row">
    <div class="col">
      <label for="inputEmail4">Cedula</label>
      <input type="name" name="Cedula" class="form-control @error('Cedula') is-invalid @enderror" id="inputEmail4" >
      @error('Cedula')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>
    <div class="col">
      <label for="inputPassword4">Correo</label>
      <input type="email" name="Correo" class="form-control @error('Correo') is-invalid @enderror" id="" >
      @error('Correo')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Direccion</label>
    <input type="text" name="Direccion" class="form-control @error('Direccion') is-invalid @enderror" id="inputAddress" placeholder="1234 Main St">
    @error('Direccion')<div class="invalid-feedback">{{$message}}</div>@enderror
  </div>
  <div class="row">
    <div class="col">
      <label for="inputCity">Ciudad</label>
      <input type="text" name="Ciudad" class="form-control @error('Ciudad') is-invalid @enderror" id="inputCity">
      @error('Ciudad')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>
    <div class="col">
      <label for="inputState">Departamento</label>
      <select name="Departamento" class="form-control @error('Departamento') is-invalid @enderror">
        <option></option>
        <option>Amazonas</option>
<option>Antioquia</option>
<option>Arauca</option>
<option>Atlántico</option>
<option>Bolivar</option>
<option>Boyacá</option>
<option>Caldas</option>
<option>Caquetá</option>
<option>Casanare</option>
<option>Cauca</option>
<option>Cesar</option>
<option>Chocó</option>
<option>Córdoba</option>
<option>Cundinamarca</option>
<option>Guainía</option>
<option>Guaviare</option>
<option>Huila</option>
<option>La Guajira</option>
<option>Magdalena</option>
<option>Meta</option>
<option>Nariño</option>
<option>Norte de Santander</option>
<option>Putumayo</option>
<option>Quindío</option>
<option>Risaralda</option>
<option>San Andrés y Providencia</option>
<option>Santander</option>
<option>Sucre</option>
<option>Tolima</option>
<option>Valle del Cauca</option>
<option>Vaupés</option>
<option>Vichada</option>
      </select>
      @error('Departamento')<div class="invalid-feedback">{{$message}}</div>@enderror
    </div>
    <div class="col">
      <label for="inputZip">Codigo Postal</label>
      <input type="text" name="Postal" class="form-control" >
    </div>
  </div>
  <div class="row">
  <div class="col-3">
      <label class="form-label" for="customRange2">Unidades</label>
<div class="range">
  <input type="button" value="-" onclick="decrementar()" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="quantity">
         <input type="number" step="1" max="@foreach($productos as $producto){{$producto->Unidades}}@endforeach" min="1" value="1" name="Unity" class="quantity-field border-0 text-center w-25 @error('Unity') is-invalid @enderror">
         <input type="button" value="+" onclick="incrementar()" class="button-plus border rounded-circle icon-shape icon-sm " data-field="quantity">
         @error('Unity')<div class="invalid-feedback">{{$message}}</div>@enderror
</div>
    </div>
  </div>

  <button type="submit" class="btn btn-primary my-2">Realizar Pedido</button>
                    </form>
                </div>
            </div>
            
</div>

@endsection