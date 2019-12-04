@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="post" action="{{ route('beverages.store') }}">
                <div class="card">
                    <div class="card-header">
                        <h2>Add Beverage</h2>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Beverage</h4>
                        <p class="card-text">
                            @component('layouts.snippets.alerts.error-list')
                            @endcomponent


                            @csrf

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" id="name" />
                            </div>

                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea class="form-control" name="description" id="description" rows="4">
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="description">Caffeine Amount (mg):</label>
                                <input type="number" class="form-control" name="caffeine_amount" id="caffeine_amount" />
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="description">Servings (per container):</label>
                                <input type="number" class="form-control" name="servings" id="servings" />
                                </textarea>
                            </div>
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-primary btn-block">Create Beverage</button>
                                    <a href={{ route('beverages.index') }} role="button" class="btn btn-danger btn-block">Cancel</a>
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
