@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @lang('routes.' . Route::currentRouteName())
                </div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            @lang('messages.success-resent-password')
                        </div>
                    @endif

                    @lang('text.email-verification', ['link' => route('verification.resend')])
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
