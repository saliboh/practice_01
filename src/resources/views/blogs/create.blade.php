@extends('subcomponents.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-2 mx-auto">

                <form method="POST" enctype="multipart/form-data" action="{{ route('blog.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="newsTitle">Title</label>
                        <input type="text" class="form-control" id="newsTitle" placeholder="Awesome Title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="newContent">Content</label>
                        <textarea class="form-control" id="newContent" rows="15" name="content"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="newContent">Content Type</label>
                        <select class="form-control" id="contentType" name="type">
                            <option value="Government">Government</option>
                            <option value="Food">Food</option>
                            <option value="Sports">Sports</option>
                            <option value="Places">Places</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" id="validatedCustomFile" name="file">
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"> Submit </button>
                    <a class="btn btn-outline-danger" href="{{ route('home') }}">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@stop
