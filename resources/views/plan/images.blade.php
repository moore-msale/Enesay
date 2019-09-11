@extends('layouts.constructor')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-10">
                <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-4">
                            <label for="plan">Выберите план</label>
                            <select name="plan_id" id="plan" class="form-control">
                                <option value="{{ null }}">Выберите...</option>
                            @foreach($plans as $plan)
                                    <option value="{{ $plan->id }}">{{ $plan->id }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-4">
                            <label for="build">Выберите категорию</label>
                            <select name="build_id" id="build" class="form-control" disabled>

                            </select>
                        </div>
                        <div class="form-group col">
                            <label for="images">Загрузите картинки</label>
                            <input type="file" id="images" name="images[]" class="form-control" multiple>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Применить</button>
                </form>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $('#plan').change(e => {
            let plan_id = $('#plan').val();

            $.ajax({
                url: '{{ route('image.create') }}',
                data: {
                    plan_id: plan_id
                },
                success: data => {
                    let buildSelect = $('#build');
                    buildSelect.attr('disabled', 'disabled');
                    buildSelect.empty();
                    let option = $('<option value=' + null + '>Выберите ...</option>');
                    buildSelect.append(option);
                    for (let item of data) {
                        option = $('<option value=' + item.id + '>' + item.title + '</option>');
                        buildSelect.append(option);
                    }
                    buildSelect.removeAttr('disabled');
                },
                error: () => {
                    console.log('error');
                    let buildSelect = $('#build');
                    buildSelect.attr('disabled', 'disabled');
                    buildSelect.empty();
                }
            })
        });
    </script>
@endpush
