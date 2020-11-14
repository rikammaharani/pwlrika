@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>


<li class="nav-item {{ Route::is('manage') ? 'active' : '' }}">
@can('manage-books')
<a class="nav-link" href="{{ route('manage') }}">Kelola</a>
@endcan
</li>



li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
@can('user-display')
<a class="nav-link" href="{{ route('home') }}">Home</a>
@endcan
</li>
<li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
@can('user-display')
<a class="nav-link" href="{{ route('about') }}">About</a>
@endcan
</li>

@endsection
