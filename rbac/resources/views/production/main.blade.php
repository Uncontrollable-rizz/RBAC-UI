@extends('mainLayout')

@section('page-content')
    <div class="container-fluid mt-4">
        <div class="jumbotron text-center">
            <h1 class="display-4">Welcome!</h1>
            <p class="lead">"You must be the change you wish to see in the world." - Mahatma Gandhi</p>
            <hr class="my-4">
            <p>
                This is an inspirational quote to remind us of the impact we can have.
            </p>
            <a class="btn btn-primary btn-lg" href="{{ route('home') }}" role="button">Learn more</a>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <h2></h2>
                <p>

                </p>
            </div>
            <div class="col-md-6">
                <h2></h2>
                <p>

                </p>
            </div>
        </div>
    </div>
@endsection
