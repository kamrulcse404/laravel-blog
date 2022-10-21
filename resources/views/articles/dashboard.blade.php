@extends('master._layout')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 style="color: #405e48;">
                List of All Articles
                <a href="/article/create" class="btn btn-outline-primary float-end">Add Article</a>
            </h4>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="color: #405e48;">ID</th>
                        <th style="color: #405e48;">Image</th>
                        <th style="color: #405e48;">Title</th>
                        <th style="color: #405e48;">Category</th>
                        <th style="color: #405e48;">View Details</th>
                        <th style="color: #405e48;">Action</th>
                        <th style="color: #405e48;">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @if ($articles)
                        @foreach ($articles as $article)
                            <tr>
                                <td>{{$article->id}}</td>
                                <td>{{$article->image}}</td>
                                <td>{{$article->title}}</td>
                                <td>{{$article->category}}</td>
                                <td>
                                    <a href="#" class="btn btn-outline-info">View</a>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-outline-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="#" method="POST">
                                        <input type="hidden" name="id" value="#">
                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    {{-- <tr>
                        <td colspan="7">No Record Found</td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
@endsection
