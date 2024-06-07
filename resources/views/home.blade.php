@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-2">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="/subject/create">Create a subject</a></li>
            <li class="list-group-item"><a href="">Create your table</a></li>
        </ul>
    </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    @yield('content2')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
