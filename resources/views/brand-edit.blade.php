@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @include('menu')
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">{{ $brand->name }}</div>
          <div class="card-body">
            <form action="{{ route('merk.update', ['id' => $brand->id]) }}" method="post" class="form-group">
              @csrf
                <div class="input-group input-group-sm">
                  <input type="text" name="name" placeholder="Merk" value="{{ $brand->name }}" class="form-control @error('name') is-invalid @enderror">
                  <div class="input-group-append">
                    <button class="btn btn-success" type="submit">Edit</button>
                  </div>
                </div>
                @method('PUT')
            </form>
            @error('name')
              <span class="alert alert-danger">{{ $message }}</span>
            @enderror
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection