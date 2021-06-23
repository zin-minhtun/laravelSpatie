@extends('home')

@section('home-content')

    <div class="card-header">
        {{ __('Posts') }}
        @can('create post')
            <a href="#" class="float-right">Create</a>
        @endcan
    </div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        {{-- Hello I am a new born for this --}}
        {{-- Hello I am a new born for this --}}
        {{-- Hello I am a new born for this --}}
        {{-- Posts Table --}}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    @can('edit post')
                        <th>Action</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>
                            @can('edit post')
                                <a href="#">Edit</a>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- ./ Posts Table --}}

    </div>
@endsection
