@extends('layouts.app')

@section('content')
    <form method="post" action="{{ route('trucks.store') }}">
        @csrf
        <div class="container">

            <div class="row">
                <div class="col-8">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h4>Pridėti naują sunkvežimį</h4>

                    <div class="alert-primary">Įveskite vieną iš automobilio markių: Volvo, VAZ, Mercedes, GAZ
                    </div>

                    <input class="form-control" name="marke" value="{{ old('marke') }}"
                           placeholder="Markė*"/>

                    <input type="number" class="form-control mt-3" name="gamybos_metai"
                           value="{{ old('gamybos_metai') }}"
                           placeholder="Gamybos metai*"/>

                    <input class="form-control mt-3" name="savininko_vardas_pavarde"
                           value="{{ old('savininko_vardas_pavarde') }}"
                           placeholder="Savininko vardas pavardė*"/>

                    <input type="number" class="form-control mt-3" name="savininku_skaicius" value="{{ old('savininku_skaicius') }}"
                           placeholder="Savininkų skaičius"/>

                    <input class="form-control mt-3" name="komentarai" value="{{ old('komentarai') }}"
                           placeholder="Komentarai"/>

                    <div class="mt-2">* būtini laukai</div>

                    <input type="submit" class="btn btn-success mt-3"/>

                </div>

            </div>
        </div>
    </form>

@endsection


