@extends('layouts.plantilla')

@section('cont')
	<div class="row justify-content-center">
		
            <div class="card fondo-menu col-md-8 my-4">
                <div class="card-header">Crear Producto</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('productos.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">Nombre</label>

                            <div class="col-md-6">
                                <input id="Nombre" type="text" class="form-control @error('Nombre')is-invalid @enderror" name="Nombre" value="{{old('Nombre')}}">
                            </div>
                            @error('Nombre')
                            <div style="color:#FF2828; font-size:13px;"><label class="col-md-4 col-form-label text-md-end"></label>
                            {{$message}}
                            </div>
                            @enderror
                        </div>
                        
                        
                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">Precio</label>
                            <div class="col-md-6">
                                <input id="Precio" type="text" class="form-control @error('Precio')is-invalid @enderror" name="Precio" value="{{old('Precio')}}">
                            </div>
                            @error('Precio')
                            <div style="color:#FF2828; font-size:13px;"><label class="col-md-4 col-form-label text-md-end"></label>
                            {{$message}}
                            </div>
                            @enderror
                        </div>
                            <div class="row mb-3 ">
                            <label class="col-md-4 col-form-label text-md-end">Unidades</label>
                            <div class="col-md-6">
                                <input id="Unidades" type="text" class="form-control padding-lr @error('Unidades')is-invalid @enderror" name="Unidades" value="{{old('Unidades')}}">
                            </div>
                            @error('Unidades')
                            <div style="color:#FF2828; font-size:13px;"><label class="col-md-4 col-form-label text-md-end"></label>
                            {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-4 col-form-label text-md-end">Descripcion</label>
                             <div class="col-md-6">
                             <textarea class="form-control @error('Descripcion')is-invalid @enderror" name="Descripcion" id="exampleFormControlTextarea1" rows="3">{{old('Descripcion')}}</textarea>
                             </div>
                             @error('Descripcion')
                            <div style="color:#FF2828; font-size:13px;"><label class="col-md-4 col-form-label text-md-end"></label>
                            {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="row mb-3">
                        	<div class="col-md-6">
                        		<label class="col-md-4 col-form-label">Perfil</label>
                                <input type="file" class="custom-file-input form-control @error('Perfil')is-invalid @enderror" id="Perfil" name="Perfil" lang="es" value="{{old('Perfil')}}">
                                @error('Perfil')
                            <div style="color:#FF2828; font-size:13px;">
                            {{$message}}
                            </div>
                            @enderror
                        	</div>
                        	<div class="col-md-6">
                        		<label class="col-md-4 col-form-label">Foto 1</label>
                                <input type="file" class="custom-file-input form-control @error('Foto1')is-invalid @enderror" id="Foto1" name="Foto1" lang="es" value="{{old('Foto1')}}">
                                @error('Foto1')
                            <div style="color:#FF2828; font-size:13px;">
                            {{$message}}
                            </div>
                            @enderror
                        	</div>
                        </div>
                        <div class="row mb-4">
                        	<div class="col-md-6">
                        		<label class="col-md-4 col-form-label">Foto 2</label>
                                <input type="file" class="custom-file-input form-control @error('Foto2')is-invalid @enderror" id="Foto2" name="Foto2" lang="es" value="{{old('Foto2')}}">
                                @error('Foto2')
                            <div style="color:#FF2828; font-size:13px;">
                            {{$message}}
                            </div>
                            @enderror
                        	</div>
                        	<div class="col-md-6">
                        		<label class="col-md-4 col-form-label">Foto 3</label>
                                <input type="file" class="custom-file-input form-control @error('Foto3')is-invalid @enderror" id="Foto3" name="Foto3" lang="es" value="{{old('Foto3')}}">
                                @error('Foto3')
                            <div style="color:#FF2828; font-size:13px;">
                            {{$message}}
                            </div>
                            @enderror
                        	</div>
                        </div>

                        <div class="row mb-0 ">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-outline-secondary my-2 my-sm-0 m-1">
                                    {{ __('Crear') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
		
	</div>
@endsection