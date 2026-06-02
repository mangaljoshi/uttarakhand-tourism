@extends('layouts.app')

@section('content')

<div class="edit-container">

    <h1 class="edit-title">Add Package</h1>

    <form action="{{ url('/admin/packages/store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <label>Package Title</label>
            <input type="text"
                   name="title"
                   class="form-control"
                   required>
        </div>

        <div class="form-group">
            <label>Price (₹)</label>
            <input type="number"
                   name="price"
                   class="form-control"
                   required>
        </div>

        <div class="form-group">
            <label>Duration</label>
            <input type="text"
                   name="duration"
                   class="form-control"
                   placeholder="3 Days / 2 Nights"
                   required>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="description"
                      class="form-control"
                      rows="5"
                      required></textarea>
        </div>

        <div class="form-group">
            <label>Package Image</label>
            <input type="file"
                   name="image"
                   class="form-control"
                   accept="image/*"
                   required>
        </div>

        <button type="submit" class="update-btn">
            Add Package
        </button>

    </form>

</div>

@endsection