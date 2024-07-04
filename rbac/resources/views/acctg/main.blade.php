{{--@extends('mainLayout')--}}

{{--@section('page-content')--}}
{{--<div class="container-fluid">--}}
{{--    Simplicity is the ultimate sophistication. - Leonardo da Vinci--}}
{{--    <p>--}}
{{--        @can('create')--}}
{{--           <a href="{{ url('acctg/new') }}">Add New Ledger Entry</a>--}}
{{--        @elsecan('viewAll')--}}
{{--           <a href="{{ url('acctg/view/all') }}">View All Ledgers</a>--}}
{{--        @endcan--}}
{{--    </p>--}}
{{--    <p>--}}
{{--        @include('slugs.homeLink')--}}
{{--    </p>--}}
{{--</div>--}}
{{--@endsection--}}


@extends('mainLayout')

@section('page-content')
    <div class="container-fluid">
        <blockquote class="blockquote text-center my-4">
            <p class="mb-0">Simplicity is the ultimate sophistication.</p>
            <footer class="blockquote-footer">Leonardo da Vinci</footer>
        </blockquote>

        <div class="text-center my-4">
            @can('create')
                <a href="{{ url('acctg/new') }}" class="btn btn-primary">Add New Ledger Entry</a>
            @elsecan('viewAll')
                <a href="{{ url('acctg/view/all') }}" class="btn btn-secondary">View All Ledgers</a>
            @endcan
        </div>

        <div class="text-center my-4">
            @include('slugs.homeLink')
        </div>
    </div>
@endsection
