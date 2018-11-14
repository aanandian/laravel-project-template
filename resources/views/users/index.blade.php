@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="btn-group btn-group-sm float-right" role="group" aria-label="Action buttons">
                        <a class="btn btn-secondary" href="{{ route('users.create') }}" title="@lang('buttons.add')">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>

                    @lang('routes.' . Route::currentRouteName())
                </div>

                <div class="card-body">
                    @include('layouts._alert')

                    <form method="GET" class="form-inline mb-2" action="{{ route('users.index') }}">
                        @csrf

                        @include('users._search')
                    </form>

                    @include('users._grid')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
