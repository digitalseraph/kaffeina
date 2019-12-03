@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-2">
        <div class="col-md-12 text-right">
            <a class="btn btn-small btn-success" href="{{ URL::to('ingredients/create') }}">Create a New Ingredient</a>
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
                    <td>Caffeine Amount</td>
                    <td colspan="2">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ingredients as $ingredient)
                    <tr>
                        <td>{{$ingredient->id}}</td>
                        <td>{{$ingredient->name}}</td>
                        <td>{{$ingredient->caffeine_amount}}</td>
                        <td><a href="{{ route('ingredients.edit', $ingredient->id)}}" class="btn btn-sm btn-primary">Edit</a></td>
                        <td>
                            <form action="{{ route('ingredients.destroy', $ingredient->id)}}" method="post">
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
