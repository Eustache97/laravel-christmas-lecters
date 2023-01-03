@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Modifica della lettera di {{ $lecter->childrenName, $lecter->childrenSurname }}</h2>
        <div class="row justify-content-center">
            <div class="col-7">
                <form action="{{ route('lecters.update', $lecter->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div>
                        <label for="name">Nome</label>
                        <input class="form-control" type="text" id="name" name="childrenName"
                            value="{{ $lecter->childrenName }}">
                    </div>
                    <div>
                        <label for="surname">Cognome</label>
                        <input class="form-control" type="text" id="surname" name="childrenSurname"
                            value="{{ $lecter->childrenSurname }}">
                    </div>
                    <div>
                        <label for="adress">Indirizzo</label>
                        <input class="form-control" type="text" id="adress" name="adress"
                            value="{{ $lecter->adress }}">
                    </div>
                    <div>
                        <label for="city">Città</label>
                        <input class="form-control" type="text" id="city" name="city"
                            value="{{ $lecter->city }}">
                    </div>
                    <div>
                        <label for="arrivalDate">Data di arrivo</label>
                        <input class="form-control" type="text" id="arrivalDate" name="arrivalDate"
                            value="{{ $lecter->arrivalDate }}">
                    </div>
                    <div>
                        <label for="rating">Voto Comportamento</label>
                        <select class="form-control" name="rating" id="rating">
                            <option value="">Seleziona un valore</option>
                            <option value="1" @selected($lecter->rating === '1')>1</option>
                            <option value="2" @selected($lecter->rating === '2')>2</option>
                            <option value="3" @selected($lecter->rating === '3')>3</option>
                            <option value="4" @selected($lecter->rating === '4')>4</option>
                            <option value="5" @selected($lecter->rating === '5')>5</option>
                        </select>
                    </div>
                    <div>
                        <label for="present">Regalo</label>
                        <input class="form-control" type="text" id="present" name="present"
                            value="{{ $lecter->present }}">
                    </div>
                    <div>
                        <label for="consegned">Consegnato</label>
                        <select class="form-control" name="consegned" id="consegned">
                            <option value="">Seleziona un valore</option>
                            <option value="1" @selected($lecter->consegned === '1')>Si</option>
                            <option value="0" @selected($lecter->consegned === '0')>No</option>
                        </select>
                    </div>
                    <div>
                        <label for="text">Testo</label>
                        <textarea class="form-control" name="text" id="text" rows="10">{{ $lecter->text }}</textarea>
                    </div>
                    <button class="btn btn-success" type="submit">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
