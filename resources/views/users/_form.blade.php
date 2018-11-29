@if ($user->id)
    <div class="form-group row">
        <label for="id" class="col-md-4 col-form-label text-md-right">@lang('models.user.id')</label>

        <div class="col-md-6">
            <p class="form-control-plaintext">
                {{ $user->id }}
            </p>
        </div>
    </div>
@endif

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">@lang('models.user.name')</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', $user->name) }}" required autofocus>

        @if ($errors->has('name'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="username" class="col-md-4 col-form-label text-md-right">@lang('models.user.username')</label>

    <div class="col-md-6">
        <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username', $user->username) }}" required>

        @if ($errors->has('username'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">@lang('models.user.email')</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email', $user->email) }}" required>

        @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">@lang('models.user.password')</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"{{ $user->id ? '' : ' required' }}>

        @if ($errors->has('password'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">@lang('models.user.password_confirmation')</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
    </div>
</div>

@if ($user->id)
    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">@lang('models.user.created_at')</label>

        <div class="col-md-6">
            <p class="form-control-plaintext">
                @if ($user->created_at != null)
                    {{ $user->created_at->format('l, F j Y g:i A') }}
                @endif
            </p>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">@lang('models.user.updated_at')</label>

        <div class="col-md-6">
            <p class="form-control-plaintext">
                @if (!($user->updated_at == null || $user->updated_at == $user->created_at))
                    {{ $user->updated_at->format('l, F j Y g:i A') }}
                @endif
            </p>
        </div>
    </div>
@endif

<div class="form-group row">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            @if ($user->id)
                @lang('buttons.update')
            @else
                @lang('buttons.register')
            @endif
        </button>
    </div>
</div>
