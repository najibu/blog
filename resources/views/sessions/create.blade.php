@extends ('layout.master')

@section ('content')
    <div class="col-sm-8 blog-main">
        <h1>Sign In</h1>

        <form action="/login" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" name="email" class="form-control">
            </div>

            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" name="password" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>

            @include ('layout.errors')
        </form>
    </div>
@endsection
