@extends('layouts.app')

@section('content')
<div class="container">

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>
                        <a href="{{ route('admin.posts.show', $post) }}">{{ $post->title }}</a>
                    </td>
                    <td>{{ $post->slug }}</td>
                    <td>
                        <a class="btn btn-warning" href="">Edit</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
                </tr>

            @empty
                <tr>
                    <td colspan="4">
                        <h1 class="text-center">Non ci sono Posts</h1>
                    </td>
                </tr>
            @endforelse

        </tbody>
    </table>
</div>
@endsection