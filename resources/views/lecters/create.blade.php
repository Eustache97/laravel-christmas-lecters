@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Crea una nuova lettera</h2>
        <div class="row justify-content-center">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-7">
                <form action="{{ route('lecters.store') }}" method="POST">
                    @csrf
                    <div>
                        <label for="name">Nome</label>
                        <input
                            class="form-control  @error('childrenName')
                        is-invalid
                        @enderror"
                            type="text" id="name" name="childrenName" value="{{ old('childrenName') }}">
                        @error('childrenName')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="surname">Cognome</label>
                        <input
                            class="form-control @error('childrenSurname')
                        is-invalid
                        @enderror"
                            type="text" id="surname" name="childrenSurname" value="{{ old('childrenSurname') }}">
                        @error('childrenSurname')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="adress">Indirizzo</label>
                        <input
                            class="form-control @error('adress')
                        is-invalid
                        @enderror"
                            type="text" id="adress" name="adress" value="{{ old('adress') }}">
                        @error('adress')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="city">Città</label>
                        <input
                            class="form-control @error('city')
                        is-invalid
                        @enderror"
                            type="text" id="city" name="city" value="{{ old('city') }}">
                        @error('city')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="arrivalDate">Data di arrivo</label>
                        <input
                            class="form-control @error('city')
                        is-invalid
                        @enderror"
                            type="text" id="arrivalDate" name="arrivalDate" value="{{ old('arrivalDate') }}">
                        @error('adress')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="rating">Voto Comportamento</label>
                        <select
                            class="form-control @error('rating')
                        is-invalid
                        @enderror"
                            name="rating" id="rating">
                            <option value="">Seleziona un valore</option>
                            <option value="1" @selected(old('rating') === '1')>1</option>
                            <option value="2" @selected(old('rating') === '2')>2</option>
                            <option value="3" @selected(old('rating') === '3')>3</option>
                            <option value="4" @selected(old('rating') === '4')>4</option>
                            <option value="5" @selected(old('rating') === '5')>5</option>
                        </select>
                        @error('rating')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="present">Regalo</label>
                        <input
                            class="form-control @error('present')
                        is-invalid
                        @enderror"
                            type="text" id="present" name="present" value="{{ old('present') }}">
                        @error('present')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="consegned">Consegnato</label>
                        <select class="form-control" name="consegned" id="consegned">
                            <option value="">Seleziona un valore</option>
                            <option value="1" @selected(old('consegned') === '1')>Si</option>
                            <option value="0" @selected(old('consegned') === '0')>No</option>
                        </select>
                    </div>
                    <div>
                        <label for="text">Testo</label>
                        <textarea class="form-control" name="text" id="text" rows="10"> {{ old('text') }} </textarea>
                    </div>
                    <button class="btn btn-success" type="submit">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
