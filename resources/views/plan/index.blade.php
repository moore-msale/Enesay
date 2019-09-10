@extends('layouts.constructor')

@section('content')
    <div class="container py-5">
        <div class="row">
            @foreach($plans as $plan)
                <div class="col-3">
                    @include('plan.single')
                </div>
            @endforeach
        </div>
    </div>
@endsection