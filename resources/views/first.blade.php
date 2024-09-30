@extends('layouts.main')
@section('content')
    <h1>Pervaya </h1>    
    <a href="{{route('home')}}"> На первую</a><br>;

    @for ($i = 2000; $i < 2030; $i++)
       <p>{{ $i }}
    @if($i%4==0 && $i % 100 !=0 || $i % 400 == 0)
        <span >leap</span>
    @endif
    </p>
    @endfor
@endsection()