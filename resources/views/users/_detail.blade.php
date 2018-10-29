<div class="form-group row mb-0">
    <label class="col-md-4 col-form-label text-md-right">@lang('models.user.id')</label>

    <div class="col-md-6">
        <p class="form-control-plaintext">
            {{ $user->id }}
        </p>
    </div>
</div>

<div class="form-group row mb-0">
    <label class="col-md-4 col-form-label text-md-right">@lang('models.user.name')</label>

    <div class="col-md-6">
        <p class="form-control-plaintext">
            {{ $user->name }}
        </p>
    </div>
</div>

<div class="form-group row mb-0">
    <label class="col-md-4 col-form-label text-md-right">@lang('models.user.username')</label>

    <div class="col-md-6">
        <p class="form-control-plaintext">
            {{ $user->username }}
        </p>
    </div>
</div>

<div class="form-group row mb-0">
    <label class="col-md-4 col-form-label text-md-right">@lang('models.user.email')</label>

    <div class="col-md-6">
        <p class="form-control-plaintext">
            {{ $user->email }}
        </p>
    </div>
</div>

<div class="form-group row mb-0">
    <label class="col-md-4 col-form-label text-md-right">@lang('models.role.name')</label>

    <div class="col-md-6">
        <p class="form-control-plaintext">
            {{ $user->roles->pluck('name')->implode(', ') }}
        </p>
    </div>
</div>

<div class="form-group row mb-0{{ $errors->has('created_at') ? ' has-error' : '' }}">
    <label class="col-md-4 col-form-label text-md-right">@lang('models.user.created_at')</label>

    <div class="col-md-6">
        <p class="form-control-plaintext">
            @if ($user->created_at != null)
                {{ $user->created_at->format('l, F j Y g:i A') }}
            @endif
        </p>
    </div>
</div>

<div class="form-group row mb-0{{ $errors->has('has-error') ? ' has-error' : '' }}">
    <label class="col-md-4 col-form-label text-md-right">@lang('models.user.updated_at')</label>

    <div class="col-md-6">
        <p class="form-control-plaintext">
            @if (!($user->updated_at == null || $user->updated_at == $user->created_at))
                {{ $user->updated_at->format('l, F j Y g:i A') }}
            @endif
        </p>
    </div>
</div>
