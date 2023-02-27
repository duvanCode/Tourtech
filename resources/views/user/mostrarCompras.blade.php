@extends('layouts.plantilla')

@section('cont')
                <div class="row align-items-center">
                    <div class="col-md-6"><div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('img')}}/@foreach($productos as $producto){{$producto->Foto1}}@endforeach" class="card-img-top mb-5 mb-md-0" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img')}}/@foreach($productos as $producto){{$producto->Foto2}}@endforeach" class="card-img-top mb-5 mb-md-0" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset('img')}}/@foreach($productos as $producto){{$producto->Foto3}}@endforeach" class="card-img-top mb-5 mb-md-0" alt="...">
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
</div></div>
                    <div class="col-md-6">
                        @foreach($productos as $producto)
                        <h1 class="display-5 fw-bolder">{{$producto->Nombre}}</h1>
                        <div class="fs-5 mb-5">
                            <span>{{$producto->Precio}}COP</span>
                        </div>
                        <p class="lead">{!!nl2br($producto->Descripcion,false)!!}</p>
                        <div class="d-flex">
                            <a href="{{route('compra.edit',$producto->id)}}" class="btn btn-outline-dark flex-shrink-0" style="font-size:20px;">Comprar</a>
                        </div>
                        @endforeach
                    </div>
                </div>

                <h2 class="fw-bolder mb-4 my-5">Related products</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
    @foreach($productos2 as $producto2)
                        <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="{{asset('img')}}/{{$producto2->Perfil}}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$producto2->Nombre}}</h5>
                                    <!-- Product price-->                
                                    ${{$producto2->Precio}} COP
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('compra.show',$producto2->id)}}">Comprar</a></div>
                            </div>
                        </div>
                    </div>
@endforeach
</div>
@endsection