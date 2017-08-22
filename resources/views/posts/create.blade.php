@extends ('layout.master')

@section('content')
<div class="col-sm-8 blog-main">
    <h1>Publish a Post</h1>

    <hr>

    <form method="POST" action="/posts">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea class="form-control" id="body" cols="30" rows="10" name="body"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>

        @include ('layout.errors')
    </form>


</div>
@endsection
