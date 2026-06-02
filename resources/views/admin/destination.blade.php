@extends('layouts.app')

@section('content')

<div class="destinations">

    @foreach($destination as $item)

    <div class="card">

        <img src="{{ asset('imagesdata/'.$item->image) }}" alt="{{ $item->name }}">

        <div class="card-body">

            <h2>{{ $item->name }}</h2>

            <!-- <p><strong>ID:</strong> {{ $item->id }}</p> -->

            <p>{{ $item->description }}</p>

            <!-- <div class="action-buttons">

                <a href="/admin/destination/edit/{{ $item->id }}"
                   class="btn btn-primary">
                    Edit
                </a>

                <form action="/admin/destination/delete/{{ $item->id }}"
                      method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </form>

            </div> -->

        </div>

    </div>

    @endforeach

</div>

@endsection