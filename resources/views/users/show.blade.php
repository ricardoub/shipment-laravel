@extends('layouts.app')

@section('content')
<div class="container-md">
    <div class="card pageCard">
        <div class="card-header py-3 pageCard__header">
            <div class="row">
                <div class="btn-toolbar col" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="Back Action">
                        <a class="btn btn-light " href="{{ route('users.index') }}" role="button" >
                            <i class="fas fa-chevron-left align-baseline"></i>
                            <span class="d-none d-md-inline align-text-baseline">
                                {{ __('Usuários') }}
                            </span>
                        </a>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Page Title">
                        <h1 class="pageCard__title mb-0 text-left align-baseline">
                            <i class="fas fa-user pageCard__title--icon"></i>
                            {{ __('Exibir Usuario') }}
                        <h1>
                    </div>
                    <div class="btn-group mr-2 ml-auto" role="group" aria-label="Page Actions">
                        <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                            <a class="btn btn-sm btn-light text-primary"  role="button"
                                href="{{ route('users.edit', $user->id) }}">
                                <i class="far fa-edit"></i>
                                <span class="d-none d-lg-inline mrl-2">
                                    {{ __('Alterar') }}
                                </span>

                                <input type="hidden" name="_method" value="DELETE">
                            </a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-light text-danger">
                                <i class="far fa-trash-alt"></i>
                                <span class="d-none d-lg-inline mrl-2">
                                    {{ __('Excluir') }}
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body p-0 pageCard__body">
            <div class="col-10 p-3">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{$user->name}}" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{$user->email}}">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" value="{{$user->password}}">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="record_scope" class="col-md-4 col-form-label text-md-right">{{ __('Record scope') }}</label>

                        <div class="col-md-6">
                            <select class="form-control" id="record_scope" name="record_scope">
                                <option value="OWNER"  {{ ($user->record_scope == "OWNER")  ? "selected" : "" }}>{{ __("OWN records")}}</option>
                                <option value="GROUP"  {{ ($user->record_scope == "GROUP")  ? "selected" : "" }}>{{ __("WORK GROUP records")}}</option>
                                <option value="UNIT"   {{ ($user->record_scope == "UNIT")   ? "selected" : "" }}>{{ __("UNIT WORK records")}}</option>
                                <option value="LINKED" {{ ($user->record_scope == "LINKED") ? "selected" : "" }}>{{ __("LINKED UNITS records")}}</option>
                                <option value="SYSTEM" {{ ($user->record_scope == "SYSTEM") ? "selected" : "" }}>{{ __("ALL system records")}}</option>
                            </select>

                            @error('record_scope')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Salvar') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <div class="card-footer pageCard__footer text-muted">

        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container-md">
    <div class="card">
        <div class="card-header py-3 pageCard__header">
            <div class="row">
                <div class="btn-toolbar col" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group mr-2" role="group" aria-label="First group">
                        <a class="btn btn-light " href="{{ route('home') }}" role="button" >
                            <i class="fas fa-chevron-left align-baseline"></i>
                            <span class="d-none d-md-inline align-text-baseline">
                                {{ __('Usuários') }}
                            </span>
                        </a>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <h1 class="pageCard__title mb-0 text-left align-baseline">
                            <i class="fas fa-user pageCard__title--icon"></i>
                            {{ __('Exibir Usuario') }}
                        <h1>
                    </div>
                    <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                        <div class="btn-group ml-auto" role="group" aria-label="Actions">
                            <a class="btn btn-sm btn-primary"  role="button"
                                href="{{ route('users.edit', $user->id) }}">
                                <i class="far fa-edit"></i>
                                <span class="d-none d-lg-inline mrl-2">
                                    {{ __('Alterar') }}
                                </span>

                                <input type="hidden" name="_method" value="DELETE">
                            </a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="far fa-trash-alt"></i>
                                <span class="d-none d-lg-inline mrl-2">
                                    {{ __('Excluir') }}
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card-body">

        </div>
    </div>
</div>
@endsection
