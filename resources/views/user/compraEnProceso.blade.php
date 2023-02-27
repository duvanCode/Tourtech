@extends('layouts.plantilla')

@section('cont')
<div class="row gx-lg-0  justify-content-center">
  <div class="row">
    <div class="col-4 text-center"><i class="bi bi-box-seam" style="font-size: 50px;"></i></div>
    <div class="col-4 text-center"><i class="bi bi-truck" style="font-size: 50px;"></i></div>
    <div class="col-4 text-center"><i class="bi bi-bag-check-fill" style="font-size: 50px;"></i></div>
  </div>
    <div class="progress mb-5" style="height: 10px;">
  <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
  @foreach($productos as $producto)
  <div class="row">
            <h3>{{$producto->Nombre}}</h3>
            <p>{{$producto->Precio}} COP</p>
            </div>
  @endforeach
    <h3>Estimado/a cliente,<br>

Gracias por su interés en nuestros productos/servicios. En relación a su pedido, queremos informarle que nuestro equipo está trabajando en la cotización de los costos de envío.<br><br>

Le pedimos que tenga paciencia y esté atento/a a su correo electrónico, ya que nos pondremos en contacto con usted en breve para proporcionarle la información que necesita. En el correo electrónico le indicaremos los costos de envío y el número de envío correspondiente para que pueda hacer un seguimiento de su paquete.<br><br>

Agradecemos su comprensión y quedamos a la espera de poder brindarle una solución a su pedido. Si tiene alguna pregunta o inquietud, no dude en ponerse en contacto con nosotros.<br><br>

Atentamente,Tour Tech S.A.S.</h3><br><br>

<p><b>Numero: </b>3013663500</p>
<p><b>Correo: </b>tourteching@gmail.com</p><br>
            
</div>

@endsection