<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href={{ asset('css/styles.css') }}>
    <title>CRUD-Application</title>
</head>
<body>
    
   
    <header>
        
    <div class="wrapper">
        <div class="logo">
            <h2>   <a href={{ route('users.home') }}>User Management Portal</a></h2> 
        </div>
        <ul>
            <li><a href={{ route('users.home') }}>Home</a></li>
            <li><a href={{ route('users.index') }}>Admin</a></li>
        </ul>
    </div>
    </header>
    
    <main>
        
        @yield('content')
    </main>
    <footer>
        <p>© 2024 All Rights Reserved.</p>
    </footer>
</body>
</html>