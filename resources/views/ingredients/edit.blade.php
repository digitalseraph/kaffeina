@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Update Ingredient</h2>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Ingredient</h4>
                    <p class="card-text">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="post" action="{{ route('ingredients.update', $ingredient->id) }}">

                            @csrf
                            @method('PATCH')

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ $ingredient->name }}" />
                            </div>

                            <div class="form-group">
                                <label for="caffeine_amount">Caffeine Amount:</label>
                                <input type="number" class="form-control" name="caffeine_amount" id="caffeine_amount" value="{{ $ingredient->caffeine_amount }}" />
                            </div>

                            <button type="submit" class="btn btn-primary">Update Ingredient</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
