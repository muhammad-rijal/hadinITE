@extends('layout.mainlayout')

@section('title', 'About')

@section('content')
<h2>Welcome {{ $name }} You Are {{ $role }}</h2>
        
<div class="mb-6">
    @if ($role == 'Admin')
        <a href="#">Halaman Admin</a>
    @elseif ($role == 'Staf')
        <a href="#">Halaman Staf</a>
    @else
        <p>Anda Bukan Admin dan Staf</p>
    @endif
</div>
<br>

<div class="mb-6">
    
    <table class="table">
    
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach($buah as $listbuah)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $listbuah }}</td>    
            </tr>
            @endforeach
        </tbody>  
    
    </table>
    
    <h2>Jumlah Buah = {{count($buah)}}</h2>
      
</div>

<br>

<div class="mb-6">
    @for($i = 0; $i < 5; $i++)
        {{ $i }} <br>
    @endfor
</div>

<br>
<div class="mb-6">
    @foreach($buah as $listbuah)
        {{ $listbuah }} <br>
    @endforeach
</div>
@endsection