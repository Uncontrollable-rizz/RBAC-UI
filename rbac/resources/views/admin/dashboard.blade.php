{{--@extends('mainLayout')--}}

{{--@section('page-content')--}}
{{--<div class="container-fluid">--}}
{{--    People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius--}}
{{--    <p>--}}
{{--        <a href="{{ route('usertool') }}" class="link-primary">Manage User Roles and Permissions</a>--}}
{{--    </p>--}}
{{--    <p>--}}
{{--        <a href="{{ route('home') }}" class="link-dark">Back</a>--}}
{{--    </p>--}}
{{--</div>--}}
{{--@endsection--}}


{{--@extends('mainLayout')--}}

{{--@section('page-content')--}}
{{--    <div class="container-fluid">--}}
{{--        People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius--}}
{{--        <p>--}}
{{--            <a href="{{ route('usertool') }}" class="link-primary">Manage User Roles and Permissions</a>--}}
{{--        </p>--}}
{{--        <p>--}}
{{--            <a href="{{ route('home') }}" class="link-dark">Back</a>--}}
{{--        </p>--}}
{{--    </div>--}}
{{--@endsection--}}


@extends('mainLayout')

@section('page-content')
    <div class="container-fluid">
        <blockquote class="blockquote">
            <p class="mb-0">People find pleasure in different ways. I find it in keeping my mind clear.</p>
            <footer class="blockquote-footer">- Marcus Aurelius</footer>
        </blockquote>

        <p>
            <a href="{{ route('usertool') }}" class="btn btn-primary">Manage User Roles and Permissions</a>
        </p>
        <p>
            <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>
        </p>
    </div>
@endsection

