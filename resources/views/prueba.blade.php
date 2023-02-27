@extends('layouts.plantilla')

@section('cabeza')
@include('layouts.cabeza')
@endsection
@section('cont')
   <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
    @foreach($productos as $producto)
                        <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="{{asset('img')}}/{{$producto->Perfil}}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$producto->Nombre}}</h5>
                                    <!-- Product price-->                
                                    ${{$producto->Precio}} COP
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('compra.show',$producto->id)}}">Comprar</a></div>
                            </div>
                        </div>
                    </div>
@endforeach
</div>
@endsection


