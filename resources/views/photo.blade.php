    <form action="{{ route('photo.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" class="form-control" multiple name="photos[]">
        <button type="submit">Submit</button>
    </form>
