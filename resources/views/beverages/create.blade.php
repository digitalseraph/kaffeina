@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Add Ingredient</h2>
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



                        <form method="post" action="{{ route('beverages.store') }}">

                            @csrf

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" id="name" />
                            </div>

                            <div class="form-group">
                                <label for="description">Caffeine Amount:</label>
                                <textarea" class="form-control" name="description" id="description">
                                </textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Create Ingredient</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
