@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a class="nav-link" href="{{ route('user.create') }}">Add</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @foreach ($users as $user)
	                    <div class="card" style="width: 14rem; display: inline-block;">
						  <img class="card-img-top" src="{{ $user['url']}}" alt="Card image cap">
						  <div class="card-body">
						    <h5 class="card-title">{{ $user->name }}</h5>
						    <p class="card-text">{{ $user->description }},...</p>
                            <a class="nav-link" href="{{ route('user.show', ['user' => $user->id]) }}" style="display: inline-block;"><span class="glyphicon glyphicon-eye-open" aria-hidden="true">Show</span></a>
                            <a class="nav-link" href="{{ route('user.edit', ['user' => $user->id]) }}" style="display: inline-block;"><span class="glyphicon glyphicon-eye-pencil" aria-hidden="true">Edit</span></a>
                            <form action="{{action('userController@destroy', $user['id'])}}" method="post">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-sm btn-danger" type="submit"><span class="glyphicon glyphicon-remove" aria-hidden="true">X</span></button>
                            </form>
						  </div>
						</div>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
