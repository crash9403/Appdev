@extends('layout.plantilla')

@section('content')
<div class="row">
    <div class="col-md-9">
        <a href="{{url('persona/create')}}" class="pull-right">
            <button class="btn btn-success">Crear Persona</button> </a>
        <a href="{{url('imprimirPersonas')}}" class="pull-right">
            <button class="btn btn-success">Imprimir Pdf</button> </a>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <th>Id</th>
                    <th>Documento Identidad</th>
                    <th>Nombres Completos</th>
                    <th>Apellidos</th>
                    <th>Correo Electrónico</th>
                    <th>Telefono</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach($persona as $per)
                    <tr>
                        <td>{{ $per->id }}</td>
                        <td>{{ $per->documento_identidad }}</td>
                        <td>{{ $per->nombre }}</td>
                        <td>{{ $per->apellido}}</td>
                        <td>{{ $per->email }}</td>
                        <td>{{ $per->telefono }}</td>
                        <td>
                            <a href=""><button class="btn btn-primary">Actualizar</button></a>
                            <a href="" data-target="#modal-delete-{{$per->id}}" data-toggle="modal">
                                <button class="btn btn-danger">Eliminar</button> </a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection