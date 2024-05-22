@extends('layouts.app')

@section('content')
<h1>Treni in partenza:</h1>
<div class="container">
    @foreach ($trains as $train)
        <div>
            <div>
                <h4>Stazione di partenza: {{ $train->Stazione di partenza }}</h4>
                <h4>Stazione di arrivo: {{ $train->Stazione di arrivo }}</h4>
            </div>
            <div>
                <h4>orario di partenza: {{ $train->orario di partenza }}</h4>
                <h4>orario di arrivo: {{ $train->orario di arrivo }}</h4>
            </div>
        </div>
    @endforeach
</div>
@endsection