@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>LE LUNGHE</h2>
        <div class="cards_box">
            @foreach ($lunghe as $lunga)
            <div class="card">
             
                <img src="{{$lunga['src']}}" alt="{{$lunga['titolo']}}">
            
            </div>
            @endforeach
        </div>
    </div>
@endsection
