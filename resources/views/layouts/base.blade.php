<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')::Обьявления</title>
        <link rel="stylesheet" href="/styles/main.css"
        type="text/css">
        <script type="module">
            import { Toast } from 'bootstrap.esm.min.js'
          
            Array.from(document.querySelectorAll('.toast'))
              .forEach(toastNode => new Toast(toastNode))
          </script>          
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-light bg-light">
                <a href="{{route('index')}}"
                class="navbar-brand mr-auto">Главная</a>
                <a href="{{route('register')}}"
                 class="nav-item nav-link ">Регистрация</a>
                 <a href="{{route('login')}}"
                 class="nav-item nav-link">Вход</a>
                 <a href="{{ route('home')}}"
                 class="nav-item nav-link">Мои обьявления</a>
                 <form action="{{route('logout')}}" method="POST"
                 class="form-inline">
                @csrf
                <input type="submit" class="btn btn-danger"
                    value="Выход"> 
            </form>
            </nav>
            <h1 class="my-3 text-center">Обьявления</h1>
           @yield('main')
        </div>
    </body>
</html>