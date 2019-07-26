@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @include('menu')
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">Merk</div>
          <div class="card-body">
            <form enctype="multipart/form-data" action="{{ route('sepatu.store') }}" method="post" class="form-group">
              @csrf
              <label for="" class="control-label">Nama sepatu</label>
              <input type="text" name="name" placeholder="Nama sepatu" id="" class="form-control">
              <label for="" class="control-label">Tipe</label>
              <select name="type_id" id="" class="form-control">
                <option value="">-- Pilih Tipe --</option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
              </select>
              <label for="" class="control-label">Merk</label>
              <select name="brand_id" id="" class="form-control">
                <option value="">-- Pilih Merk --</option>
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
              </select>
              <label for="" class="control-label">Kategori</label>
              <select name="category_id" id="" class="form-control">
                <option value="">-- Pilih Merk --</option>
                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
              </select>
              <label for="" class="control-label">Gambar</label>
              <input type="file" name="picture" id="" class="form-control">
              <hr>
              <button type="submit" class="btn btn-success btn-sm">Tambah</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection