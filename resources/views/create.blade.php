@extends('admin')

@section('admin')
<link rel="stylesheet" href= {{ asset('css/createStyle.css') }}>

<div class="create">
    <div class="wrapper">
    
<form action={{ route('users.store') }} method="POST">
    @csrf
    <h1>Create User</h1>
    <label for="name">Name</label>
    <input type="text" id="name" value="{{ old('name') }}" name="name"  placeholder="Enter you name" required>
    <span class="error">
        @error('name')
           {{ $message }} 
        @enderror
    </span>
    <label for="email">Email</label>
    <input type="email" id="email" value="{{ old('email') }}" name="email" placeholder="Enter you email" required>
    <span class="error">
        @error('email')
           {{ $message }} 
        @enderror
    </span>
    <label for="city">City</label>
    <input type="text" id="city" name="city" value="{{ old('city') }}" placeholder="Enter you city" required>
    <span class="error">
        @error('city')
           {{ $message }} 
        @enderror
    </span>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Enter you password" required>
    <span class="error">
        @error('password')
           {{ $message }} 
        @enderror
    </span>
    <label for="confirm">Confirm Password</label>
    <input type="password" id="confirm" name="confirm" placeholder="Confirm Password" required>
    <span class="error">
        @error('confirm')
           {{ $message }} 
        @enderror
    </span>
    <button class="btn" type="submit">Submit</button>
</form>

</div>
</div>

@endsection