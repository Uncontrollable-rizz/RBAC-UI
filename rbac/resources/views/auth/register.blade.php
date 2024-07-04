{{--@extends('mainLayout')--}}

{{--@section('page-title','Account Registration')--}}

{{--@section('auth-content')--}}
{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-sm-3"></div>--}}
{{--        <div class="col-sm-6 text-left lh-sm" style="font-size: 1.6rem; background-color: black; color: white;">Register New User</div>--}}
{{--        <div class="col-sm-3"></div>--}}
{{--    </div>--}}
{{--    <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}
{{--    <div class="row">--}}
{{--        <div class="col">--}}
{{--        </div>--}}
{{--        --}}{{-- <div style="border: 1px solid grey;"> --}}
{{--        <div class="col" style="border-top:1px solid grey; border-left:1px solid grey; border-bottom:1px solid grey; ">--}}
{{--            <div>--}}
{{--                <label class="auth-labels">First Name</label>--}}
{{--                <input type="text" name="firstname" value="{{ old('firstname') }}" required class="auth-textbox form-control form-control-sm">--}}
{{--                @error('firstname')--}}
{{--                    <span>{{ $message }}</span>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label class="auth-labels">Last Name</label>--}}
{{--                <input type="text" name="lastname" value="{{ old('lastname') }}" required class="auth-textbox form-control form-control-sm">--}}
{{--                @error('lastname')--}}
{{--                    <span>{{ $message }}</span>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label class="auth-labels">Username</label>--}}
{{--                <input type="text" name="name" value="{{ old('name') }}" required class="auth-textbox form-control form-control-sm">--}}
{{--                @error('name')--}}
{{--                    <span>{{ $message }}</span>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col" style="border-top:1px solid grey; border-right:1px solid grey; border-bottom:1px solid grey; ">--}}
{{--            <div>--}}
{{--                <label class="auth-labels">Email</label>--}}
{{--                <input type="email" name="email" class="auth-textbox form-control form-control-sm">--}}
{{--                <input type="checkbox" name="generate_email" id="generate_email" class="form-check-input">--}}
{{--                <label for="generate_email" class="form-check-label">Generate Email Address</label>--}}
{{--                @error('email')--}}
{{--                    <span>{{ $message }}</span>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label class="auth-labels">Password</label>--}}
{{--                <input type="password" name="password" required class="auth-textbox form-control form-control-sm">--}}
{{--                @error('password')--}}
{{--                    <span>{{ $message }}</span>--}}
{{--                @enderror--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <label class="auth-labels">Confirm Password</label>--}}
{{--                <input type="password" name="password_confirmation" required class="auth-textbox form-control form-control-sm">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        --}}{{-- </div> --}}
{{--        <div class="col">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <div class="col-sm-3"></div>--}}
{{--        <div class="col-sm-6 py-2" style="border-left:1px solid grey; border-right:1px solid grey; border-bottom:1px solid grey;">--}}
{{--            <div class="text-center">--}}
{{--                <button type="submit" class="btn btn-md btn-primary">Register</button>--}}
{{--                <button type="reset" class="btn btn-md btn-danger">Clear</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-sm-3"></div>--}}
{{--    </div>--}}
{{--    </form>--}}
{{--    <div class="col-row text-center">--}}
{{--        <a href="{{ route('home') }}" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Return to Landing Page</a>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}

@extends('mainLayout')

@section('page-title', 'Account Registration')

@section('auth-content')
    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 text-center" style="font-size: 1.6rem; background-color: black; color: white; padding: 10px; border-radius: 5px;">
                Register New User
            </div>
            <div class="col-sm-3"></div>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row mb-4">
                <div class="col border border-grey rounded">
                    <div class="mb-3">
                        <label for="firstname" class="form-label auth-labels">First Name</label>
                        <input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}" required class="form-control form-control-sm">
                        @error('firstname')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label auth-labels">Last Name</label>
                        <input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}" required class="form-control form-control-sm">
                        @error('lastname')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label auth-labels">Username</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" required class="form-control form-control-sm">
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col border border-grey rounded">
                    <div class="mb-3">
                        <label for="email" class="form-label auth-labels">Email</label>
                        <input type="email" name="email" id="email" class="form-control form-control-sm">
                        <div class="form-check mt-2">
                            <input type="checkbox" name="generate_email" id="generate_email" class="form-check-input">
                            <label for="generate_email" class="form-check-label">Generate Email Address</label>
                        </div>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label auth-labels">Password</label>
                        <input type="password" name="password" id="password" required class="form-control form-control-sm">
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label auth-labels">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" required class="form-control form-control-sm">
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 text-center border border-grey rounded-bottom">
                    <button type="submit" class="btn btn-md btn-primary">Register</button>
                    <button type="reset" class="btn btn-md btn-danger">Clear</button>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
        <div class="row text-center">
            <div class="col">
                <a href="{{ route('home') }}" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Return to Landing Page</a>
            </div>
        </div>
    </div>
@endsection
