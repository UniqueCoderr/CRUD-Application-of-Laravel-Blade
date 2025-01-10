@extends('admin')

@section('admin')
<link rel="stylesheet" href= {{ asset('css/createStyle.css') }}>

<div class="create">
    <div class="wrapper">
        
<form action={{ route('users.update',  $user->id) }} method="POST">
    @csrf
    @method('PUT')
    <h1>Update User</h1>
    <label for="name">Name</label>
    <input type="text" value={{ $user->name }} id="name"  name="name" placeholder="Enter you name" required>
    <label for="email">Email</label>
    <input type="email" id="email" value={{ $user->email }} name="email" placeholder="Enter you email" required>
    <label for="city">City</label>
    <input type="text" value={{ $user->city }} id="city" name="city" placeholder="Enter you city" required>
    <label for="password">Password</label>
    <input type="password" value={{ $user->password }} id="password" name="password" placeholder="Enter you password" required>
    <label for="confirm">Confirm Password</label>
    <input type="password" id="confirm" name="confirm" value={{ $user->password }} placeholder="Confirm Password" required>
    <button class="btn" type="submit">Update</button>
</form>

</div>
</div>

@endsection