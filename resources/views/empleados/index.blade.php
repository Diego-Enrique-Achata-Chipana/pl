@extends('layouts.admin')
@section('content')
<div class="card">
    <!-- /.card-header -->
    <div class="card-header">
      <h3 class="card-title">
        <i class="fas fa-chart-pie mr-1"></i>
        Empleados
      </h3>
      <div class="card-tools">
        <ul class="nav nav-pills ml-auto">
          <li class="nav-item">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                Agregar
            </button>
          </li>

          <div class="modal fade show" id="modal-default" aria-modal="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Default Modal</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div> 
                <form role="form" id="form_create_empleado">
                <div class="modal-body">
                   
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido:</label>
                            <input type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido">
                        </div>
                        <div class="form-group">
                            <label for="fecha_nacimiento">Fecha nacimiento:</label>
                            <input type="date" class="form-control" id="fecha_nacimiento" placeholder="Ingrese su apellido">
                        </div>
                        <div class="form-group">
                            <label for="dni">DNI:</label>
                            <input type="number" class="form-control" id="dni" placeholder="Ingrese su dni">
                        </div>
                        <div class="form-group">
                            <label for="sexo">Sexo:</label>
                            <select class="form-control" id="sexo">
                                <option value="1">Femenino</option>
                                <option value="2">Masculino</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="celular">celular:</label>
                            <input type="number" class="form-control" id="celular" placeholder="Ingrese su celular">
                        </div>
                        <div class="form-group">
                            <label for="email">email:</label>
                            <input type="number" class="form-control" id="email" placeholder="Ingrese su email">
                        </div>
                    
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
              </div>
            </div>
            <!-- /.modal-dialog -->
          </div>
          {{-- <li class="nav-item">
            <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
          </li> --}}
        </ul>
      </div>
    </div>
    <div class="card-body table-responsive p-0" style="height: 300px;">
      <table class="table table-head-fixed text-nowrap">
        <thead>
          <tr>
            <th>Nombre:</th>
            <th>Apellido:</th>
            <th>dni:</th>
            <th>sexo:</th>
            <th>celular:</th>
            <th>email:</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($empleados as $empleado)
          <tr>
            <td>{{$empleado->nombre}}</td>
            <td>{{$empleado->apellido}}</td>
            <td>{{$empleado->dni}}</td>
            @if ($empleado->sexo == 1)
               <td> Masculino </td>
            @else
                <td> Masculino </td>
            @endif
            <td>{{$empleado->celular}}</td>
            <td>{{$empleado->email}}</td>
          </tr>  
        @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection
@section('script')
<script>
$( document ).ready(function() {
    console.log( "ready!" );
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    function createEmpleado()
    {
        $('#form_create_empleado').on('submit', function(e){
            e.preventDefault();
            let nombre = $('#nombre').val();
            let apellido = $('#apellido').val();
            let fecha_nacimiento = $('#fecha_nacimiento').val();
            let dni = $('#dni').val();
            let sexo = $('#sexo').val();
            let celular = $('#celular').val();
            let email = $('#email').val();
            let url = 'empleado/create';
            $.ajax({
                url: url,
                data: {
                    nombre: nombre,
                    apellido: apellido,
                    fecha_nacimiento: fecha_nacimiento,
                    dni: dni,
                    sexo: sexo,
                    celular: celular,
                    email: email,
                },
                type: 'post',
                datatype: 'json'
            })
                .done(function( json ) {
                    $( "<h1>" ).text( json.title ).appendTo( "body" );
                    $( "<div class=\"content\">").html( json.html ).appendTo( "body" );
                })
                // Code to run if the request fails; the raw request and
                // status codes are passed to the function
                .fail(function( xhr, status, errorThrown ) {
                    alert( "Sorry, there was a problem!" );
                    console.log( "Error: " + errorThrown );
                    console.log( "Status: " + status );
                    console.dir( xhr );
                })
        })
    }

    createEmpleado()

});

</script>
@endsection
