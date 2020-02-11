@extends('layouts.pageCard')

@section('pageCard_actionBack')
  @include('components.buttons.link', [
    'btnName'  => $buttons['backIndex']['name'],
    'btnLink'  => $buttons['backIndex']['link'],
    'btnIcon'  => $buttons['backIndex']['icon'],
    'btnClass' => $buttons['backIndex']['class'],
    'btnColor' => $buttons['backIndex']['color'],
  ])
@endsection

@section('pageCard_actionTitle')
    <i class="fas fa-user pageCard__title--icon"></i>
    {{ __('Alterar Usuario') }}
@endsection

@section('pageCard_actions')

@endsection

@section('content')
    @if ($errors->any())
        <div class="row justify-content-center pt-3">
            <div class="col-11 alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="row justify-content-center py-3">
        <div class="col-11">

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
                            <option value="0">Selecione ... </option>
                            @foreach ($combos['scope'] as $scope)
                                <option value="{{$scope['value']}}"
                                    {{ ($scope['value'] == $user->record_scope) ? "selected" : "" }}>
                                    {{ __($scope['option'])}}
                                </option>
                            @endforeach
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

@endsection
