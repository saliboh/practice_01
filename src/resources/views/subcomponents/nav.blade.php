<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Articles</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}?filter=government">Government</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}?filter=sports">Sports</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}?filter=food">Food</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link btn btn-success" href="{{ route('blog.create') }}">Create</a>
            </li>
        </ul>
    </div>
</nav>
