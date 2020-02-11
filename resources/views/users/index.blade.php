@extends('layouts.pageCard')

@section('pageCard_actionBack')
  @include('components.buttons.link', [
    'btnName'  => $buttons['backHome']['name'],
    'btnLink'  => $buttons['backHome']['link'],
    'btnIcon'  => $buttons['backHome']['icon'],
    'btnClass' => $buttons['backHome']['class'],
    'btnColor' => $buttons['backHome']['color'],
  ])
@endsection

@section('pageCard_actionTitle')
    <i class="fas fa-users pageCard__title--icon"></i>
    {{ __('Usuarios') }}
@endsection

@section('pageCard_actions')
    @include('components.buttons.link', [
        'btnName'  => $buttons['create']['name'],
        'btnLink'  => $buttons['create']['link'],
        'btnIcon'  => $buttons['create']['icon'],
        'btnClass' => $buttons['create']['class'],
        'btnColor' => $buttons['create']['color'],
    ])
@endsection

@section('content')
    @include('users.table')
@endsection

@section('footer')
    {{ $users->onEachSide(1)->links() }}
@endsection
