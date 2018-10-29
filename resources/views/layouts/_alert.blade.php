<!-- Display Alerts  -->
@if ($message = session('failed'))
    <div class="alert alert-danger alert-dismissible hidden-print" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        {{ $message }}
    </div>
@endif

@if ($message = session('warning'))
    <div class="alert alert-warning alert-dismissible hidden-print" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        {{ $message }}
    </div>
@endif

@if ($message = session('info'))
    <div class="alert alert-info alert-dismissible hidden-print" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        {{ $message }}
    </div>
@endif

@if ($message = session('success'))
    <div class="alert alert-success alert-dismissible hidden-print" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        {{ $message }}
    </div>
@endif

<!-- Validation Erors -->
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible hidden-print" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        @lang('messages.validation-errors')
    </div>
@endif
