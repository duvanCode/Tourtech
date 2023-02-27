@extends('layouts.plantilla')

@section('cont')
		<div class="container">
	<div class="row">
		<div id="carouselExampleAutoplaying" class="carousel slide w-50" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('img/29745888_1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/29745888_1.jpg')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img/29745888_1.jpg')}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>


</div>
	<div class="col">
        @foreach($productos as $producto)
            <div class="text-center">
                <h3>{{$producto->Nombre}}</h3>
                <p>{{$producto->Precio}}COP</p>

            </div>
                <div><p>{!!nl2br($producto->Descripcion,false)!!}</p></div>
            <a href="{{route('compra.edit',$producto->id)}}" class="btn btn-outline-dark">Comprar</a>
        @endforeach
        
    </div>	
	</div>

    

</div>
@endsection