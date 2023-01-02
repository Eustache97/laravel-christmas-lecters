@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Lista delle lettere</h2>
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
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
