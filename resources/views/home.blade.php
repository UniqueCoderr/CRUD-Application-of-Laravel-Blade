@extends ('layout')
@section('content')
<div class="hero">
    <div class="wrapper">
        <div class="hero-left">
            <h1>User Management Portal</h1>
            <p> 
                The User Management Portal is an elegantly designed platform that centralizes and simplifies the management of user data. This intuitive system offers a seamless experience for administrators, allowing them to efficiently handle all aspects of user management, from creating and updating profiles to tracking access and permissions. With real-time data accessibility, the portal enhances productivity and collaboration, ensuring that user information is always current and secure. Its user-friendly interface makes navigation effortless, empowering administrators to make informed decisions swiftly. Ideal for organizations seeking a streamlined solution, the User Management Portal transforms user management into a hassle-free and engaging experience.</p>
            <div class="admin">
                <button class="btn"><a href={{ route('users.index') }}>Go to Admin Panel</a></button>
            </div>
        </div>
        <div class="hero-right">
            <img src="https://img.freepik.com/free-vector/programmer-concept-illustration_114360-2284.jpg?t=st=1730355092~exp=1730358692~hmac=b55f2ae532d9bbef197733e86bad29e987cb7f6c668792d6a4029549f62a4bab&w=740" alt="img">
        </div>
    </div>
</div>
@endsection