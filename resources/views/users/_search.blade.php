<label for="_search" class="sr-only">@lang('models._search')</label>
<input id="_search" type="text" class="form-control form-control-sm mb-2 mr-2" name="_search" value="{{ old('_search', $user->_search) }}" placeholder="@lang('models._search')">

<button type="submit" class="btn btn-secondary btn-sm mb-2">@lang('buttons.search')</button>
