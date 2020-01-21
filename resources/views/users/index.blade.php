@extends('layouts.app')

@section('content')
<div class="container-md">
    <div class="card pageCard">
        <div class="card-header py-3 pageCard__header">
            <div class="row">
                <div class="btn-toolbar col" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <a class="btn btn-light " href="{{ route('home') }}" role="button" >
                            <i class="fas fa-chevron-left align-baseline"></i>
                            <span class="d-none d-md-inline align-text-baseline"> {{ __('Início') }} </span>
                        </a>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <h1 class="pageCard__title mb-0 text-left align-baseline">
                            <i class="fas fa-users pageCard__title--icon"></i>
                            {{ __('Usuarios') }}
                        <h1>
                    </div>
                    <div class="btn-group mr-2 ml-auto" role="group" aria-label="Second group">
                        <a class="btn btn-light align-middle" href="{{ route('users.create') }}" role="button" >
                            <i class="fas fa-plus"></i>
                            <span class="d-none d-md-inline"> {{ __('Incluir') }} </span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="card-body p-0 pageCard__body">
            @include('users.table')
        </div>
        <div class="card-footer pageCard__footer text-muted">
            {{ $users->onEachSide(1)->links() }}
        </div>
    </div>
</div>
@endsection
