@extends('crud::dashboard.layout.master')

@section('title', 'Dashboard')


@section('content')

    <div>
        <h2 class="text-center">All Posts</h2>

        @if ($posts->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Title</th>
                        <th scope="col">Text</th>

                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->user }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->text }}</td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('post.edit', $post->id) }}">edit</a>
                                <a href="{{ route('post.destroy', $post->id) }}" class="btn btn-danger"> Delete </a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        @else
            <p>You have no posts.</p>
        @endif
    </div>

@endsection
