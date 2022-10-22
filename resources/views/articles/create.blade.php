@extends('master._layout')

@section('content')
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="text-center" style="color: #405e48;">Add New Article</h4>
                </div>
                <form action="/" method="POST">
                    @csrf
                    <div class="form-group mt-1">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Article title"
                            required>
                    </div>
                    <div class="form-group mt-1">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" name="description" id="description" class="form-control" placeholder="Article Description"
                            required></textarea>
                    </div>
                    <div class="form-group mt-1">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" name="category" id="category" class="form-control"
                            placeholder="Article category" required>
                    </div>
                    <div class="form-group mt-1">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" name="author" id="author" class="form-control"
                            placeholder="Article author" required>
                    </div>
                    {{-- <div class="form-group mt-1">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" id="image" class="form-control" required>
                    </div> --}}
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-outline-success btn-sm">Add Article</button>
                        <a href="/" class="btn btn-outline-primary d-left btn-sm">Back To List</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
