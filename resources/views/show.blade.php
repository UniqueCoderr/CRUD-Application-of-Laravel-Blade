
  
    
@extends('admin')
@if (session('success'))
<div class="alert">
    <input type="checkbox" id="checkbox" class="close">
    <label for="checkbox" class="close-btn">×</label>
    <div class="custom-alert">
        {{ session('success') }}
    </div>
</div>
@endif
<link rel="stylesheet" href={{ asset('css/showStyle.css') }}>

@section('admin')



<div class="show-right">

    <div class="wrapper">
        {{-- @foreach ($data as $id => $user) --}}
            <h1>Details of {{ $user->name }}</h1>
            <div class="show-data">
                
                    <h3>ID : {{ $user->id }}</h3>               
                    <h3>Name : {{ $user->name }}</h3>
                    <h3>Email : {{ $user->email }}</h3>                                                     <h3>City : {{ $user->city }}</h3>
                 
            </div> 
        {{-- @endforeach --}}
        <a class="btn" href={{ route('users.index') }}> « Back </a>
    </div>
</div>
@endsection
