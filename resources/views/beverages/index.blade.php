@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-2">
        <div class="col-md-12 text-right">
            <a class="btn btn-small btn-success" href="{{ URL::to('beverages/create') }}">Create a New Beverage</a>
        </div>
    </div>
    <div class="row justify-content-center py-2">
        <div class="col-md-12">
            @component('layouts.snippets.alerts.session-alert')
            @endcomponent

            <table class="table table-striped table-hover table-responsive">
                <thead class="thead">
                    <tr>
                        <th scope="col">#</td>
                        <th scope="col">Name</td>
                        <th scope="col">Description</td>
                        <th scope="col">Caffeine per Serving</td>
                        <th scope="col">Servings per Container</td>
                        <th scope="col">Total Caffeine Amount</td>
                        <th scope="col" colspan="2">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($beverages as $beverage)
                        @if($beverage->totalCaffeineAmount() < 80)
                            <tr class="table-success">
                        @endif
                        @if($beverage->totalCaffeineAmount() < 150 && $beverage->totalCaffeineAmount() >= 100)
                            <tr class="table-info">
                        @endif
                        @if($beverage->totalCaffeineAmount() < 150 && $beverage->totalCaffeineAmount() >= 100)
                            <tr class="table-info">
                        @endif
                        @if($beverage->totalCaffeineAmount() < 200 && $beverage->totalCaffeineAmount() >= 150 )
                            <tr class="table-warning">
                        @endif
                        @if($beverage->totalCaffeineAmount() >= 200 )
                            <tr class="table-danger">
                        @endif
                            <th scope="row">{{$beverage->id }}</td>
                            <td>{{$beverage->name }}</td>
                            <td>{{$beverage->description }}</td>
                            <td>{{$beverage->caffeine_amount }}mg</td>
                            <td>{{$beverage->servings }}</td>
                            <td>{{$beverage->totalCaffeineAmount() }}</td>
                            <td><a href="{{ route('beverages.edit', $beverage->id)}}" class="btn btn-sm btn-primary">Edit</a></td>
                            <td>
                                <form action="{{ route('beverages.destroy', $beverage->id)}}" method="post">
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
