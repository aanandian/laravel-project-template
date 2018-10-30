<div class="form-group mb-2">
    <label for="_search" class="sr-only">@lang('models._search')</label>
    <input id="_search" type="text" class="form-control form-control-sm" name="_search" value="{{ old('_search', $user->_search) }}" placeholder="@lang('models._search')">
</div>

<button type="submit" class="btn btn-secondary btn-sm ml-sm-2 mb-2">
    @lang('buttons.search')
</button>

<a class="btn btn-secondary btn-sm ml-sm-2 mb-2" href="{{ route(Route::currentRouteName()) }}">
    @lang('buttons.reset')
</a>
