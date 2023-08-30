@extends('layout.mainlayout')

@section('title', 'Home')

@section('content')
    <h2>Welcome {{ Auth::user()->name }}  You Are {{ Auth::user()->role->name }}</h2>

    <div class="my-3 d-flex justify-content-center">
        @foreach ($student as $item)
        @if ($item->image != '')
            <img src="{{ asset('storage/imageStudent/'.$item->image) }}" alt="" style="width: 200px">   
        @else
            <img src="{{ asset('storage/imageStudent/default/default.jpg') }}" alt="" style="width: 200px">
        @endif 
        @endforeach
    </div>
    <ul class="list-group">
        @foreach ($student as $item)
            <li class="list-group-item">{{ $item->name }}</li>
            <li class="list-group-item">{{ $item->nim }}</li>
        @endforeach 
    </ul>
 @endsection