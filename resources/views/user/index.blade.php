@extends('layouts.app')
@section('tittle', ' - Usuarios')
@section('content')
    <h1 class="bd-title" id="content">{{ $tittle }}</h1>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            <th scope="col">Tipo</th>
            <th scope="col">Acci&oacute;n</th>
        </tr>
        </thead>
        <tbody>
        @forelse($users as $user)
            <tr>
                <th scope="rtr">{{ $user->id }}</th>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td> @if($user->active = 1){{ 'Activo' }} @else {{ 'Inactivo' }} @endif</td>
                <td>{{ $user->type }}</td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary">Ver</button>
                        <button type="button" class="btn btn-secondary">Editar</button>
                        <button type="button" class="btn btn-secondary">Eliminar</button>
                    </div>
                </td>
            </tr>
        @empty
            <li>No hay usuarios registrados</li>
        @endforelse
        </tbody>
    </table>
@endsection
