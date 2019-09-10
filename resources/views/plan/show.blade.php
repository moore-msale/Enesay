@extends('layouts.constructor')

@push('styles')
    <style>

    </style>
@endpush

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-8 px-0 bg-dark">
                <img src="{{ asset('storage/'.$plan->image) }}" class="img-fluid" alt="">
                <div class="backzone"></div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $.ajax({
            url: '{{ route('dot.index') }}',
            data: {
                plan_id: '{{ $plan->id }}'
            },
            success: data => {
                let width = $('img').width();
                let height = $('img').height();
                let naturalWidth = parseFloat('{{ $plan->width }}');
                let naturalHeight = parseFloat('{{ $plan->height }}');
                let ratio = height / naturalHeight;
                for (let item of data) {
                    let dot = $('<div class="dot bg-danger" style=top:' + parseInt(ratio * item.top) + 'px;left:' + parseInt(ratio * item.left) + 'px;width:' + parseInt(ratio * 15) + 'px;height:' + parseInt(ratio * 15) + 'px;></div>');
                    $('.backzone').append(dot);
                }
            },
            error: () => {
                console.log('error');
            }
        })
    </script>
@endpush