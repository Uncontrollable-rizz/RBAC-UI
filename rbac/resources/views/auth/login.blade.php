{{--@extends('mainLayout')--}}

{{--@section('page-title','Account Login')--}}

{{--@section('auth-content')--}}
{{--<div class="container vh-100">--}}
{{--    <div class="row lh-base">--}}
{{--        <div class="col-4"></div>--}}
{{--        <div class="col-4" style="font-size: 1.6rem; background-color: black; color: white;">User Login</div>--}}
{{--        <div class="col-4"></div>--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <div class="col-4">&nbsp;</div>--}}
{{--        <div class="col-4" style="border: 1px solid grey;">--}}
{{--            <form method="POST" action="{{ route('login') }}" class="form">--}}
{{--                @csrf--}}
{{--                <div class="formgroupp">--}}
{{--                    <label class="auth-labels">Username</label>--}}
{{--                    <input type="text" name="name" value="{{ old('name') }}" required class="auth-textbox form-control">--}}
{{--                    @error('name')--}}
{{--                        <span>{{ $message }}</span>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--                <div class="formgroup">--}}
{{--                    <label class="auth-labels">Password</label>--}}
{{--                    <input type="password" name="password" required class="auth-textbox form-control">--}}
{{--                    @error('password')--}}
{{--                        <span>{{ $message }}</span>--}}
{{--                    @enderror--}}
{{--                </div>--}}
{{--                <div class="text-center">--}}
{{--                   <button type="submit" class="btn btn-md btn-primary">Login</button>--}}
{{--                   <button type="reset" class="btn btn-md btn-danger">Clear</button>--}}
{{--                </div>--}}
{{--                <div class="text-center">--}}
{{--                    Not a user? Register <a href="{{ route('register') }}">Here</a>.--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--        <div class="col-4"></div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}


@extends('mainLayout')

@section('page-title', 'Account Login')

@section('auth-content')
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="row w-100">
            <div class="col-md-4 offset-md-4">
                <div class="text-center mb-4" style="font-size: 1.6rem; background-color: black; color: white; padding: 10px; border-radius: 5px;">
                    User Login
                </div>
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" class="form">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Username</label>
                                <input type="text" name="name" id="name" value="{{ old('name') }}" required class="form-control">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password" required class="form-control">
                                @error('password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="text-center mb-3">
                                <button type="submit" class="btn btn-primary btn-md">Login</button>
                                <button type="reset" class="btn btn-danger btn-md">Clear</button>
                            </div>
                            <div class="text-center">
                                Not a user? Register <a href="{{ route('register') }}">Here</a>.
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
