@extends('layout')

@section('content')

<div class="admin">
    <div class="admin-left">
    
    <aside>
            <h2><a href={{ route('users.index') }}>Admin Panel </a> </h2>
            <ul>
                <li><a href={{ route('users.index') }}>Dashboard</a></li>
                <li><a href={{ route('users.create') }}>Add User</a></li>
                
            </ul>     
        </aside>
    
</div>
@yield('admin')

</div>
</div>
@endsection