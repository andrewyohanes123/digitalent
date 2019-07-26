@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @include('menu')
      <div class="col-md-9">
        <div class="card">
          <div class="card-header">{{ $shoe->name }}</div>
          <div class="card-body">
            <form enctype="multipart/form-data" action="{{ route('sepatu.update', ['id' => $shoe->id]) }}" method="post" class="form-group">
              @csrf
              @method('PUT')
              <label for="" class="control-label">Nama sepatu</label>
              <input type="text" name="name" placeholder="Nama sepatu" id="" value="{{ $shoe->name }}" class="form-control">
              <label for="" class="control-label">Tipe</label>
              <select name="type_id" id="" class="form-control">
                <option value="">-- Pilih Tipe --</option>
                @foreach ($types as $type)
                    <option {{ $shoe->type_id === $type->id ? 'selected' : '' }} value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
              </select>
              <label for="" class="control-label">Merk</label>
              <select name="brand_id" id="" class="form-control">
                <option value="">-- Pilih Merk --</option>
                @foreach ($brands as $brand)
                    <option {{ $shoe->brand_id === $brand->id ? 'selected' : '' }} value="{{ $brand->id }}">{{ $brand->name }}</option>
                @endforeach
              </select>
              <label for="" class="control-label">Kategori</label>
              <select name="category_id" id="" class="form-control">
                <option value="">-- Pilih Merk --</option>
                @foreach ($categories as $cat)
                    <option {{ $shoe->category_id === $cat->id ? 'selected' : '' }} value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
              </select>
              <hr>
              <button type="submit" class="btn btn-success btn-sm">Simpan</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection