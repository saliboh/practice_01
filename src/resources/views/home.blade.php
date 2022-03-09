@extends('subcomponents.layout')

@section('content')

    <div class="container">
        <div class="row text-center">

            @if (empty($blogs))
                <header class="jumbotron mt-4 mx-auto mb-12">
                    <h1 class="display-3">Oops no entry for this type!</h1>
                    <a class="btn btn-primary btn-lg mt-4" href="{{ route('blog.create') }}">Create Article</a>
                </header>
            @endif

            @foreach ($blogs as $blog)
                <div class="col-lg-3 col-md-6 mb-4 mt-2">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ asset('storage/images/' . $blog->filename) }}" alt="">
                        <div class="card-body">
                            <h4 class="card-title"><?= $blog['title'] ?></h4>
                            <p class="card-text" style="text-overflow:ellipsis; max-height: 200px; overflow:hidden">
                                <?= $blog['content'] ?></p>
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Find Out More!</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@stop
