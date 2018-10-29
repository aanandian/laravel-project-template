@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="btn-group btn-group-sm float-right" role="group" aria-label="Action Buttons">
                        <a class="btn btn-secondary" href="{{ route('users.index') }}" title="@lang('buttons.back')">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        </a>
                    </div>

                    @lang('routes.' . Route::currentRouteName())
                </div>

                <div class="card-body">
                    @include('layouts._alert')

                    <form method="POST" action="{{ route('users.store') }}" enctype="multipart/form-data">
                        @csrf

                        @include('users._form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
