@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>LE LUNGHE</h2>
        <div class="cards_box">
            <div class="card">
             @foreach ($lunghe as $lunga)
                <img src="{{$lunga['src']}}" alt="{{$lunga['titolo']}}">
             @endforeach
            </div>
        </div>
    </div>
@endsection
