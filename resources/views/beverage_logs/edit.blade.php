@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="post" action="{{ route('beverage_logs.update', $beverage_log->id) }}">
                <div class="card">
                    <div class="card-header">
                        <h2>Update Beverage Log Entry</h2>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Beverage Log Entry #{{ $beverage_log->id }}</h4>
                        <p class="card-text">
                            @component('layouts.snippets.alerts.error-list')
                            @endcomponent


                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label for="user_id">User:</label>
                                <input type="text" class="form-control" disabled name="user_id" id="user_id" value="{{ $beverage_log->user->name }}" />
                            </div>

                            <div class="form-group">
                                <label for="name">Beverage:</label>
                                <select name="beverage_id" class="form-control" id="beverage_id">
                                    @foreach (App\Models\Beverage::all() as $beverage)
                                        <option value="{{ $beverage->id }}"
                                            @if($beverage_log->beverage_id == $beverage->id) selected="selected"@endif
                                        >{{ $beverage->name }} ({{ $beverage->caffeine_amount *  $beverage->servings }}mg of caffeine)</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="consumed_at">Consumed At</label>
                                <datetime-picker-component
                                    name="consumed_at"
                                    id="consumed_at"
                                    default-date="{{ $beverage_log->consumed_at }}"
                                ></datetime-picker-component>
                            </div>
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-primary btn-block">Update Log Entry</button>
                                    <a href={{ route('beverage_logs.index') }} role="button" class="btn btn-danger btn-block">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

<!-- Scripts -->
@component('layouts.snippets.footer.scripts')
    @slot('prescripts')
    @endslot
    @slot('postscripts')
    @endslot
@endcomponent
