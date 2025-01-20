<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index')}}">
            {{env("APP_NAME")}}</a>
        <div>
            @stack('logOut')
        </div>
    </div>
</nav>

