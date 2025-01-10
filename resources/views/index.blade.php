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
@section('admin')
<link rel="stylesheet" href={{ asset('css/indexStyle.css') }}>
<style>
    :root{
    --white: rgb(245,245,245);
    --blue: rgb(25, 167, 146);
    --hover: rgb(6, 100, 86);
}
nav{
    max-width: 400px;
    width: 100%;
    margin: 50px auto;
    
}
.hidden{
    display: none;
}
span,nav a{
    background-color: var(--blue);
    padding: 20px;
    margin-left: 40px; 
    color: var(--white);
    border-radius: 40px
}
nav a{
    font-size:1.1rem;
    color: var(--white);
    text-decoration: none;

}
nav a:hover{
    background-color: var(--hover)
}
nav a:last-child{
    box-sizing: border-box;

}
nav a:last-child::before{
    content: "iii";
    color: transparent;
}
nav a:last-child::after{
    content: "iii";
    color: transparent;
}
</style>


<div class="admin-right">
    <div class="wrapper">
            <div class="heading">
                <h2>User Management System</h2>
                <h2>Total User : {{ $data->total() }}</h2>
            </div>
            <hr>
            <div class="table">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    
                    @foreach ($data as $id => $user)
                        
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->city }}</td>
                       
                       
                            <td> 
                                @php
                                $counter = 0;  
                            @endphp
                            
                                    @if($loop->index % 2 == 0)
                                    <a href={{ route('users.show', $user->id) }}><img src={{ asset('images/view.svg') }} alt="" class="icon"></a>
                                    <a href={{ route('users.edit',$user->id,'users.edit') }}><img src={{ asset('images/edit.svg') }} alt="" class="icon"></a>
                                    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background: none; border: none; color: #007bff; cursor: pointer; padding: 0;">
                                            <img src="{{ asset('images/delete.svg') }}" alt="Delete" class="icon">
                                        </button>
                                    </form>
                                        
                                    @else
                                    <a href={{ route('users.show', $user->id) }}><img src={{ asset('images/w-view.svg') }} alt="" class="icon"></a>
                                    <a href={{ route('users.edit',$user->id,'users.edit') }}><img src={{ asset('images/w-edit.svg') }} alt="" class="icon"></a>
                                    <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" style="background: none; border: none; color: #007bff; cursor: pointer; padding: 0;">
                                            <img src="{{ asset('images/w-delete.svg') }}" alt="Delete" class="icon">
                                        </button>
                                    </form>
                                        
                                    @endif
                                </div>
                            
                                @php
                                    $counter++; 
                                @endphp
                        
                            </td> 
                          
                                
                        </tr>
                    @endforeach
       
                </table>
            </div>
           
            {{ $data->links() }}
    </div>
</div>
@endsection