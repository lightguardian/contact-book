<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel = "stylesheet" href = "{{ asset('assets/css/bootstrap.css')}}">

    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                Contact Book            
            </a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="{{ route('contacts')}}">Contatos<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('form_person') }}">Pessoas</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('form_address') }}">Endereços</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ route('form_phone')}}">Telefones</a>
                </li>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div>
        </nav>
    </header>
        <main>


            @yield('content')


        </main>
    <script src = {{ asset('assets/js/jquery.js') }} > </script>
    <script src = {{ asset('assets/js/bootstrap.js') }} > </script>
    @yield('scripts')
    
  
    
</body>

</html>

