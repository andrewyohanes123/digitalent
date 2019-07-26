@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @include('menu')
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">Merk</div>
          <div class="card-body">
            <form action="{{ route('merk.store') }}" method="post" class="form-group">
              @csrf
                <div class="input-group input-group-sm">
                  <input type="text" name="name" placeholder="Merk" class="form-control @error('name') is-invalid @enderror">
                  <div class="input-group-append">
                    <button class="btn btn-success" type="submit">Tambah</button>
                  </div>
                </div>
            </form>
            @error('name')
              <span class="alert alert-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Merk</th>
                  <th>Edit/Hapus</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($brands as $i => $brand)
                    <tr>
                      <td>{{ $i + 1 }}</td>
                      <td>{{ $brand->name }}</td>
                      <td>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Hapus</button>
                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-body py-1">
            {{ $brands->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection