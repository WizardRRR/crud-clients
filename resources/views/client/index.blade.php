@extends('home')

@section('content')
    <div class="row">
        <div class="col-md-2">
        </div>
        <!-- abrir formulario de crear un cliente -->
        <div class="col-md-8">
            <h3 class="mt-4 mb-4">LISTA DE CLIENTES</h3>
            <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#create">
                Crear cliente
            </button>
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                            <tr class="">
                                <td scope="row">{{ $client->id }}</td>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->phone }}</td>
                                <td>{{ $client->email }}</td>
                                <td>
                                    <button type="button" class="btn btn-success mb-4" data-toggle="modal"
                                        data-target="#edit{{ $client->id }}">
                                        Editar
                                    </button>
                                    <button type="button" class="btn btn-danger mb-4" data-toggle="modal"
                                        data-target="#deleted{{ $client->id }}">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                            @include('client.info')
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <div class="col-md-2">
        </div>
        @include('client.create')
    </div>
@endsection
