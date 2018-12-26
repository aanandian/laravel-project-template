<div class="table-responsive">
    <table class="table table-hover table-sm">
        <thead>
            <tr>
                <th width="1px">@lang('menus.iteration')</th>
                <th>@lang('models.user.name')</th>
                <th>@lang('models.user.username')</th>
                <th>@lang('models.user.email')</th>
                <th>@lang('models.role.name')</th>
                <th width="1px">@lang('menus.action')</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td style="white-space:normal;">{{ ++$i }}</td>
                    <td style="white-space:normal;">{{ $user->name }}</td>
                    <td style="white-space:normal;">{{ $user->username }}</td>
                    <td style="white-space:normal;">{{ $user->email }}</td>
                    <td style="white-space:normal;">{{ $user->roles->pluck('name')->implode(', ') }}</td>
                    <td style="white-space:normal;">
                        <div class="btn-group btn-group-sm" role="group" style="display:flex;" aria-label="Action buttons">
                            <a class="btn btn-secondary btn-sm" href="{{ route('users.show', $user->id) }}" title="@lang('buttons.show')">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </a>

                            <a class="btn btn-secondary btn-sm" href="{{ route('users.edit', $user->id) }}" title="@lang('buttons.edit')">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>

                            <form method="POST" class="btn-group btn-group-sm" action="{{ route('users.destroy', $user->id) }}">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-secondary" title="@lang('buttons.delete')" onclick="return confirm(&quot;@lang('messages.confirm-delete')&quot;);">
                                    <i class="fa fa-remove" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="danger" colspan="6">@lang('messages.empty-record')</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{ $users->links() }}
