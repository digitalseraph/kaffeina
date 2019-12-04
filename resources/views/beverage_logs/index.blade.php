@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-2">
        <div class="col-md-12 text-right">
            <a class="btn btn-small btn-success" href="{{ URL::to('beverage_logs/create') }}">New log entry</a>
        </div>
    </div>
    <div class="row justify-content-center py-2">
        <div class="col-md-12">
            @component('layouts.snippets.alerts.session-alert')
            @endcomponent

            <table class="table table-striped">
                <thead class="thead">
                    <tr>
                        <th scope="col">ID</td>
                        <th scope="col">User</td>
                        <th scope="col">Beverage</td>
                        <th scope="col">Caffeine Amount</td>
                        <th scope="col">Consumed At</td>
                        <th scope="col" colspan="2">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach(Auth::user()->beverageLogs as $beverage_log)
                    <tr>
                        <th scope="row">{{$beverage_log->id }}</td>
                        <td>{{ $beverage_log->user->name }}</td>
                        <td>{{ App\Models\Beverage::find(($beverage_log->beverage_id))->name }}</td>
                        <td>{{ App\Models\Beverage::find(($beverage_log->beverage_id))->caffeine_amount * App\Models\Beverage::find(($beverage_log->beverage_id))->servings }}mg</td>
                        <td>{{$beverage_log->consumed_at }}</td>
                        <td><a href="{{ route('beverage_logs.edit', $beverage_log->id)}}" class="btn btn-sm btn-primary">Edit</a></td>
                        <td>
                            <form action="{{ route('beverage_logs.destroy', $beverage_log->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
