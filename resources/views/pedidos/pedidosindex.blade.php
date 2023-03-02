@extends('layouts.plantilla')

@section('cont')
	<table class="table rounded padding-lr table-responsive">
	<thead>
		<tr>
		<th class="col-1 border-bottom"><b>id</b></th>
		<th class="col-2 border-bottom"><b>Nombre</b></th>
		<th class="col-2 border-bottom"><b>Ciudad</b></th>
		<th class="col-1 border-bottom"><b>Telefono</b></th>
		<th class="col-1 border-bottom"><b>Creado</b></th>
		<th class="col-1 border-bottom"><b>Actualizado</b></th>
		<th class="col-1 border-bottom"><b>Mostrar</b></th>
		</tr>
		</thead>
	@foreach($pedidos as $pedido)
	<tbody class="@if($pedido->Estado == 'Iniciado')bg-primary-subtle @elseif($pedido->Estado == 'En Proceso')bg-warning-subtle @elseif($pedido->Estado == 'Completado')bg-success-subtle @elseif($pedido->Estado == 'Fallido')bg-danger-subtle @else bg-secondary-subtle @endif">
		<tr>
	<td class="col-1 border-bottom p-1">{{$pedido->id}}</td>
	<td class="col-2 border-bottom p-1">{{$pedido->Nombre}}</td>
	<td class="col-2 border-bottom p-1">{{$pedido->Ciudad}}</td>
	<td class="col-2 border-bottom p-1">{{$pedido->Telefono}}</td>
	<td class="col-1 border-bottom p-1">{{$pedido->created_at}}</td>
	<td class="col-1 border-bottom p-1">{{$pedido->updated_at}}</td>
	<td class="col-1 border-bottom p-1"><a href="{{route('pedidos.show',$pedido->id)}}" class="btn btn-secondary">Mostrar</a></td>
	@endforeach
	</tr>
	</tbody>
</table>
@if (session('actualizado'))
    <div class="alert alert-success">
        {{ session('actualizado') }}
    </div>
@endif
@endsection