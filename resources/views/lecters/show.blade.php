@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="mb-2">Lettera di {{ $lecter->childrenName }}</h2>
        <dl>
            <p>{{ $lecter->text }}</p>
            <dt>Nome</dt>
            <dd>{{ $lecter->childrenName }}</dd>
            <dt>Cognome</dt>
            <dd>{{ $lecter->childrenSurname }}</dd>
            <dt>Indirizzo</dt>
            <dd>{{ $lecter->adress }}</dd>
            <dt>Città</dt>
            <dd>{{ $lecter->city }}</dd>
            <dt>Data arrivo</dt>
            <dd>{{ $lecter->arrivalDate }}</dd>
            <dt>Voto comportamento</dt>
            <dd>{{ $lecter->rating }}</dd>
            <dt>Regalo</dt>
            <dd>{{ $lecter->present }}</dd>
            <dt>Consegnato</dt>
            @if ($lecter->consegned)
                <dd> Si</dd>
            @else
                <dd> No</dd>
            @endif
        </dl>
    </div>
@endsection
