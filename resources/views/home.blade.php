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

                    @if (Auth::user()->record_scope == 0)
                        <p>bloqcked</p>
                    @endif
                    @if (Auth::user()->record_scope == 1)
                        <p>scope 1</p>
                    @endif
                    @if (Auth::user()->record_scope == 2)
                        <p>scope 2</p>
                    @endif
                    @if (Auth::user()->record_scope == 3)
                        <p>scope 3</p>
                    @endif
                    @if (Auth::user()->record_scope == 4)
                        <p>scope 4</p>
                    @endif
                    @if (Auth::user()->record_scope == 5)
                        <p>scope 5</p>
                    @endif

                    @can('users-list')
                        <p>users-list</p>
                    @endcan
                    @can('users-show')
                        <p>users-show</p>
                    @endcan
                    @can('users-search')
                        <p>users-search</p>
                    @endcan
                    @can('users-activate')
                        <p>users-activate</p>
                    @endcan
                    @can('users-inactivate')
                        <p>users-inactivate</p>
                    @endcan
                    @can('users-create')
                        <p>users-create</p>
                    @endcan
                    @can('users-update')
                        <p>users-update</p>
                    @endcan
                    @can('users-delete')
                        <p>users-delete</p>
                    @endcan

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
