<div class="row">
    <div class="btn-toolbar col" role="toolbar" aria-label="Toolbar with button groups">
        <div class="btn-group mr-2" role="group" aria-label="Back Action">
            @section('actionBack')
                <a class="btn btn-light" href="{{ route($btnBack['route']) }}" role="button" >
                    <i class="{{$btnBack['icon']}} align-baseline"></i>
                    <span class="d-none d-md-inline align-text-baseline">
                        {{ __($btnBack['text']) }}
                    </span>
                </a>
            @show
        </div>
        <div class="btn-group mr-2" role="group" aria-label="Page Title">
            <h1 class="pageCard__title mb-0 text-left align-baseline">
                <i class="fas fa-users pageCard__title--icon"></i>
                {{ __('Usuarios') }}
            <h1>
        </div>
        @isset($btnCreate)
        <div class="btn-group mr-2 ml-auto" role="group" aria-label="Other Actions">
            <a class="btn btn-light align-middle {{$btnCreate['color']}}" href="{{ route($btnCreate['route']) }}" role="button" >
                <i class="{{$btnCreate['icon']}}"></i>
                <span class="d-none d-md-inline"> {{ __($btnCreate['text']) }} </span>
            </a>
        </div>
        @endisset
        @isset($btnEdit)
        <div class="btn-group mr-2 ml-auto" role="group" aria-label="Other Actions">
            <a class="btn btn-light align-middle {{$btnCreate['color']}}" href="{{ route($btnCreate['route']) }}" role="button" >
                <i class="{{$btnCreate['icon']}}"></i>
                <span class="d-none d-md-inline"> {{ __($btnCreate['text']) }} </span>
            </a>
        </div>
        @endisset
    </div>
</div>
