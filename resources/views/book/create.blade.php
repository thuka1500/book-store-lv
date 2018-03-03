@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Book Page</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="store" method="POST">
                       <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name">
                      </div>
                      <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" id="description">
                      </div>
                      <button type="submit" class="btn btn-default">Save</button>
                    </form>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection