@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Lista delle lettere</h2>
        <div class="text-end mb-2">
            <a class="btn btn-primary" href="{{ route('lecters.create') }}">Crea una nuova lettera</a>
        </div>
        <table class="table table-danger table-striped">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Cognome</th>
                    <th scope="col">Data arrivo</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lecters as $lecter)
                    <tr>
                        <td scope="row">{{ $lecter->childrenName }}</td>
                        <td>{{ $lecter->childrenSurname }}</td>
                        <td>{{ $lecter->arrivalDate }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('lecters.show', $lecter->id) }}">Dettagli</a>
                            <a class="btn btn-success" href="{{ route('lecters.edit', $lecter->id) }}">Modifica</a>
                            <form action="{{ route('lecters.destroy', $lecter->id) }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger delete-btn" type="submit">Cancella</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
