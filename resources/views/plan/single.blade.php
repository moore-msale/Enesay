<div class="card shadow-sm">
    <div class="card-img-top bg-dark">
        <img src="{{ asset('storage/'.$plan->image) }}" class="img-fluid" alt="">
    </div>
    <div class="card-body d-flex">
        <div class="col-auto">
            <a href="{{ route('plan.edit', $plan) }}" class="btn btn-sm btn-warning">Изменить</a>
        </div>
        <div class="col-auto">
            <form action="{{ route('plan.destroy', $plan) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">Удалить</button>
            </form>
        </div>
    </div>
</div>