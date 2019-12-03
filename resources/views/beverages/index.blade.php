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
            @if(session()->get('success'))
                <div class="alert alert-success">
                {{ session()->get('success') }}
                </div><br />
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td colspan="2">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($beverages as $beverage)
                    <tr>
                        <td>{{$beverage->id}}</td>
                        <td>{{$beverage->name}}</td>
                        <td>{{$beverage->description}}</td>
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
