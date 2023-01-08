@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Lista delle lettere</h2>
        <div class="text-end mb-2">
            <a class="btn btn-primary" href="{{ route('lecters.create') }}"><i class="fa-solid fa-plus"></i></a>
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
                            <a class="btn btn-primary" href="{{ route('lecters.show', $lecter->id) }}"><i
                                    class="fa-solid fa-eye"></i></a>
                            <a class="btn btn-success" href="{{ route('lecters.edit', $lecter->id) }}"><i
                                    class="fa-solid fa-pencil"></i></a>
                            <form action="{{ route('lecters.destroy', $lecter->id) }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger delete-btn" type="submit"
                                    data-lecter-childrenName="{{ $lecter->childrenName }}"
                                    data-lecter-id="{{ $lecter->id }}"><i class="fa-sharp fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    @include('partials.delete-modal')
@endsection
