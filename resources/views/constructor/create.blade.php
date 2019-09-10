@extends('layouts.constructor')

@push('styles')
    <style>
        .dot {
            width: 15px;
            height: 15px;
            position: absolute;
            left: 0;
            top: 0;
            border-radius: 50%;
            background: #ffffff;
            z-index: 2;
        }
        .backzone {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            display: flex;
        }
    </style>
@endpush

@section('content')
    <div class="container py-5">
        <div class="row">
            <h2>Создание планировки</h2>
        </div>
        <div class="row">
            <div class="col-12 mb-3">
                <div class="form-row align-items-end">
                    <div class="form-group col-6">
                        <label for="plan">Планировка</label>
                        <input type="file" class="form-control plan" id="plan">
                    </div>
                    <div class="form-group col-auto ml-auto d-none" id="activeFormGroup">
                        <label>Активировать
                            <input type="checkbox" name="active" class="">
                        </label>
                    </div>
                    <input type="hidden" id="planId">
                </div>
            </div>
            <div class="col-12 mb-3">
                <div class="form-row align-items-end">
                    <div class="form-group col-5">
                        <label for="buildName">Название категории</label>
                        <input type="text" name="buildName" id="buildName" class="form-control buildName">
                    </div>
                    <div class="form-group col-5">
                        <label for="buildColor">Цвет категории</label>
                        <input type="color" name="buildColor" id="buildColor" class="form-control buildColor">
                    </div>
                    <div class="form-group col">
                        <button class="btn btn-primary" id="submitBuild">Добавить</button>
                    </div>
                </div>
                <p class="small text-muted">Чтобы добавить категорию, название и цвет новой категории должны быть разными!</p>
            </div>
            <div class="col-12 mb-3">
                <div class="form-row align-items-end">
                    <div class="form-group col-5">
                        <label for="buildSelect">Выберите категорию</label>
                        <select name="buildSelect" id="buildSelect" class="form-control">
                            <option value="{{ json_encode(['title' => null, 'color' => null], true) }}">Выберите...</option>
                        </select>
                    </div>
                    <div class="form-group col-5">
                        <label for="buildCount">Количество точек категории</label>
                        <input type="number" class="form-control" id="buildCount">
                    </div>
                    <div class="form-group col">
                        <button class="btn btn-primary" id="buildApply">Добавить точки</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 px-0 mb-5 ">
                <div id="image-preview" class="bg-dark">
                    <img src="" id="image-preview-img" class="w-100" alt="">
                    <div class="backzone"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        let imageInput = $('#plan');
        imageInput.change(e => {
            let oFReader = new FileReader();
            oFReader.readAsDataURL(imageInput[0].files[0]);
            oFReader.onload = function (oFREvent) {
                $('#image-preview-img').attr('src', this.result);
            };
            setTimeout(
                function()
                {
                    let image = imageInput.get(0).files[0];
                    let formData = new FormData();
                    formData.append('_token', '{{ csrf_token() }}');
                    if (image != undefined) {
                        let back = $('.backzone');
                        formData.append('plan', image);
                        formData.append('width', back.width());
                        formData.append('height', back.height());
                    }

                    $.ajax({
                        url: '{{ route('plan.store') }}',
                        type: 'POST',
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: data => {
                            $('#planId').val(data.id);
                            $('#activeFormGroup').removeClass('d-none');
                        },
                        error: () => {
                            console.log('error');
                        }
                    });
                }, 1000);




        });

        $('#submitBuild').click(e => {
            let btn = $(e.currentTarget);
            let buildName = $('#buildName').val();
            let buildColor = $('#buildColor').val();
            let buildSelect = $('#buildSelect');


            if ((buildColor && buildName)) {
                let checked = false;


                buildSelect.find('option').each((index, item) => {
                    let json = JSON.parse($(item).val());
                    if (json.title == buildName || json.color == buildColor) {
                        checked = true;
                        return false;
                    }
                });
                if (!checked) {


                    let formData = new FormData();
                    formData.append('title', buildName);
                    formData.append('color', buildColor);
                    formData.append('_token', '{{ csrf_token() }}');
                    formData.append('plan_id', $('#planId').val());

                    $.ajax({
                        url: '{{ route('build.store') }}',
                        type: 'POST',
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: data => {
                            console.log(data);
                            let string = '{"title":"' + buildName + '","color":"' + buildColor + '","id":"' + data.id + '"}';
                            let option = $('<option value=' + string + '>' + buildName + '</option>');
                            buildSelect.append(option);
                        },
                        error: () => {
                            console.log('error');
                        }
                    });
                }
            }
        });

        $('#buildApply').click(e => {
            e.preventDefault();

            let btn = $(e.currentTarget);
            let buildSelect = $('#buildSelect');
            let buildCount = $('#buildCount');
            let buildSelectData = JSON.parse(buildSelect.val());
            let buildCountData = buildCount.val();
            let container = $('.backzone');
            let dot = '';

            if (buildCountData && buildSelectData) {
                console.log((buildSelectData && buildCountData));

                $.ajax({
                    url: '{{ route('dot.store') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        top: parseFloat(0),
                        left: parseFloat(0),
                        build_id: buildSelectData.id,
                        count: buildCountData
                    },
                    success: data => {
                        console.log(data);
                        for (let item of data) {
                            dot = '<div class="dot" data-id=' + item.id + ' data-build=' + buildSelectData.id + ' data-color="' + buildSelectData.color + '" style="background: ' + buildSelectData.color + '; top: 0; left: 0;"></div>';

                            container.append(() => {
                                return registerDraggable($(dot));
                            });
                        }

                    },
                    error: () => {
                        console.log('error');
                    }
                });

            } else {
                console.log((buildSelectData && buildCountData));
            }
        });

        function registerDraggable(item) {
            console.log(item);
            item.draggable({
                containment: '.backzone',
                stop: () => {
                    $.ajax({
                        url: '/dot/'+item.data('id'),
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}',
                            _method: 'PUT',
                            top: parseFloat(item.css('top')),
                            left: parseFloat(item.css('left')),
                            build_id: item.data('build')
                        },
                        success: data => {
                            console.log(data);
                        },
                        error: () => {
                            console.log('error');
                        }
                    })
                }
            });
            item.css('position', 'absolute');
            return item;
        }
    </script>
@endpush
