@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Add Beverage</h2>
                </div>
                <div class="card-body">
                    <h4 class="card-title">Beverage</h4>
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

                        <form method="post" action="{{ route('beverages.store') }}">

                            @csrf

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" id="name" />
                            </div>

                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea" class="form-control" name="description" id="description">
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="description">Caffeine Amount:</label>
                                <input type="number" class="form-control" name="caffeine_amount" id="caffeine_amount" />
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="description">Caffeine Amount:</label>
                                <input type="number" class="form-control" name="servings" id="servings" />
                                </textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Create Beverage</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
