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
            <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Agregar</a>
          </li>
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
            <td>{{ $empleado->nombre }}</td>
            <td>{{ $empleado->apellido }}</td>
            <td>{{ $empleado->dni }}</td>
            @if ($empleado->sexo == 1)
               <td> Masculino </td>
            @else
                <td> Masculino </td>
            @endif
            <td>{{ $empleado->celular }}</td>
            <td>{{ $empleado->email }}</td>
          </tr>  
        @endforeach
        </tbody>
      </table>
    </div>
</div>
@endsection