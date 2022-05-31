@extends('layout.master')

@section('content')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2" _msthash="967616" _msttexthash="177827">Clientes</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
          <a href="clientes/nuevo" class="btn btn-sm btn-outline-secondary" _msthash="1884311" _msttexthash="137553">Nuevo</a>
        </div>
      </div>
    </div>

    
    <h2 _msthash="704795" _msttexthash="400647">Listado de Clientes </h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col" >Id</th>
            <th scope="col" >NIT</th>
            <th scope="col" >Nombre</th>
            <th scope="col" >Direccion</th>
            <th scope="col">Operaciones</th>
          </tr>
        </thead>
        @php
        $contador = 0;    
        @endphp
        <tbody>
          @foreach($clientes as $cliente)
            <tr>
              <td>{{++$contador}}</td>
              <td>{{$cliente -> idCliente}}</td>
              <td>{{$cliente -> nombre}}</td>
              <td>{{$cliente -> direccion}}</td>
              <td>{{$cliente -> nit}}</td>
              <td>
                <div class="mt-1">
                <a href="clientes/{{$cliente->idCliente/editar" class="btn btn-sm btn-outline-warning">Editar</a>
                <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                </div>
            </td>
            </tr>
            @endforeach         
        </tbody>
      </table>
    </div>
  </main>
@endsection