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

                    @if (Auth::user()->record_scope == '')
                        <p>blocked</p>
                    @endif
                    @if (Auth::user()->record_scope == 'OWNER')
                        <p>scope: OWNER</p>
                    @endif
                    @if (Auth::user()->record_scope == 'GROUP')
                        <p>scope: GROUP</p>
                    @endif
                    @if (Auth::user()->record_scope == 'UNIT')
                        <p>scope: UNIT</p>
                    @endif
                    @if (Auth::user()->record_scope == 'LINKED')
                        <p>scope: LINKED</p>
                    @endif
                    @if (Auth::user()->record_scope == 'SYSTEM')
                        <p>scope: SYSTEM</p>
                    @endif

                    @can('USERS-list')
                        <p>USERS-list</p>
                    @endcan
                    @can('USERS-show')
                        <p>USERS-show</p>
                    @endcan
                    @can('USERS-search')
                        <p>USERS-search</p>
                    @endcan
                    @can('USERS-activate')
                        <p>USERS-activate</p>
                    @endcan
                    @can('USERS-inactivate')
                        <p>USERS-inactivate</p>
                    @endcan
                    @can('USERS-create')
                        <p>USERS-create</p>
                    @endcan
                    @can('USERS-update')
                        <p>USERS-update</p>
                    @endcan
                    @can('USERS-delete')
                        <p>USERS-delete</p>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
