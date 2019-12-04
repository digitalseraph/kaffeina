@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-2">
        <div class="col-md-10">
            <h2>Dashboard</h2>
        </div>
    </div>
    <div class="row justify-content-center py-2">
        <div class="col-md-10">
            <div class="container">

                <div class="row justify-content-center py-2">
                    <div class="col-md-12">
                        <h2>About</h2>
                    </div>
                </div>

                <div class="row justify-content-center py-2">
                    <div class="col-md-12">
                        <p class="text">
                            Welcome back to Kaffeina&copy;, <strong>{{ Auth::user()->name }}</strong>!
                        </p>
                        <p class="text">
                            With this application you may track your caffeine intake from various drinks and beverages. It's this simple:
                            <ol>
                                <li>
                                    <a href="{{ route('beverages.index') }}">Manage</a> or <a href="{{ route('beverages.create') }}">Create New</a> Beverages</a><br />
                                    <small>You can add beverages with the following information: Name, Description, Caffeine Amount per serving, and Servings per container. You may access this through the links above or links located in the navigation bar at the top of the screen.</small>
                                </li>
                                <li>
                                    <a href="{{ route('beverage_logs.index') }}">Manage</a> or <a href="{{ route('beverage_logs.index') }}">Create New</a> Log entries to track your caffeine Intake<br />
                                    <small>Here you will be able to add new log entries that contain: a beverage and a date and time, both selected by you. You can manage your Beverage Log entries from the links above or through the navigation bar.</small>
                                </li>
                                <li>
                                    Kaffeina summarizes the most important information below as Status Cards. In order, you may view:
                                    <ol>
                                        <li>How much more caffeine you safely intake</li>
                                        <li>How much caffeine you currently have in your system</li>
                                        <li>The total caffeine you have consumed over the lifetime of using this app</li>
                                        <li>Your maximum caffeine limit</li>
                                    </ol>
                                </li>
                            </ol>
                        </p>
                    </div>
                </div>


                <div class="row justify-content-center py-2">
                    <div class="col-md-6 col-sm-12">
                        <a class="btn btn btn-primary btn-block" href="{{ URL::to('beverage_logs/create') }}">New log entry</a>
                    </div>
                </div>



                <div class="row justify-content-center py-2">
                    <div class="col-md-12">
                        <h2>Status Cards</h2>
                    </div>
                </div>
                <div class="row justify-content-center py-2">
                    <div class="col-md-12">
                        <div class="card-deck">

                            <div class="card text-white bg-success">
                                <div class="card-header text-center"><strong>How much more?</strong></div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ Auth::user()->allowedCaffeineAmount() }} mg</h5>
                                    <p class="card-text text-justify">You may consume <strong>{{ Auth::user()->allowedCaffeineAmount() }} mg</strong> moreof caffeine in your body.</p>
                                </div>
                                <div class="card-footer">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: {{ Auth::user()->percentageAllowed() }}%;" aria-valuenow="{{ Auth::user()->percentageAllowed() }}" aria-valuemin="0" aria-valuemax="100">{{ Auth::user()->currentCaffeineAmount() }} mg</div>
                                    </div>
                                </div>
                            </div>

                            <div class="card text-white bg-success">
                                <div class="card-header text-center"><strong>Current Caffeine Intake</strong></div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ Auth::user()->currentCaffeineAmount() }} mg</h5>
                                    <p class="card-text text-justify">You currently have <strong>{{ Auth::user()->currentCaffeineAmount() }} mg</strong> of caffeine in your body.</p>
                                </div>
                            </div>

                            <div class="card text-white bg-info">
                                <div class="card-header text-center"><strong>Lifetime Caffeine Consumption</strong></div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ Auth::user()->lifetimeCaffeineAmount() }} mg</h5>
                                    <p class="card-text text-justify">In your lifetime, you have consumed <strong>{{ Auth::user()->currentCaffeineAmount() }} mg</strong> of caffeine.</p>
                                </div>
                            </div>

                            <div class="card text-white bg-danger">
                                <div class="card-header text-center"><strong>Maximum Caffiene Amount</strong></div>
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ Auth::user()->max_caffeine_amount }} mg</h5>
                                    <p class="card-text text-justify">Your current safe caffeine intake amount is set to <strong>{{ Auth::user()->allowedCaffeineAmount() }} mg</strong>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
