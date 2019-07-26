@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @include('menu')
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">Sepatu</div>
          <div class="card-body">
            <a href="{{ route('sepatu.create') }}" class="btn btn-success btn-sm">Tambah sepatu</a>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama sepatu</th>
                  <th>Merk</th>
                  <th>Tipe</th>
                  <th>Kategori</th>
                  <th>Edit/Hapus</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($shoes as $i => $shoe)
                    <tr>
                      <td>{{ $i + 1 }}</td>
                      <td>{{ $shoe->name }}</td>
                      <td>{{ $shoe->brand->name }}</td>
                      <td>{{ $shoe->type->name }}</td>
                      <td>{{ $shoe->category->name }}</td>
                      <td>
                        <a href="{{ route('sepatu.edit', ['id' => $shoe->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('sepatu.destroy', ['id' => $shoe->id]) }}" class="form-inline" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                      </td>
                    </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="card-body py-1">
            {{ $shoes->links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection