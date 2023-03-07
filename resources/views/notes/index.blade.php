@extends('layouts.master')
@section('content')
    <div class="row header-container">
        <div class="col">
            <h1>POST-IT</h1>
        </div>
    </div>
    <div class="row row-responsive">
        @foreach($notes as $key => $note)
            <div class="col-lg-4 mt-4">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">{{ $note->title }}</h5>
                      <p class="card-text">{{ $note->content }}</p>
                      <a href="{{ route('destroy.note', $note) }}" class="card-link mt-3">Delete</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>

    <a class="btn-float" data-bs-toggle="modal" data-bs-target="#exampleModal">+</a>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">New Post-it</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('store.note') }}" method="POST" class="form">
              @csrf
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">content</label>
                <input type="text" name="content" id="content" class="form-control">
            </div>
            <input type="submit" value="Save" class="btn btn-primary mt-3">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection
