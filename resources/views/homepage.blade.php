@extends('layouts.app')

@section('content')
    <div style="max-width: 800px;" class="container">
      <div class="card">
        <div class="card-body">
          <form action="" method="get">
            <div class="input-group input-group-sm">
              <select name="category" class="form-control" id="">
                <option value="">-- Pilih kategori --</option>
                @foreach ($categories as $category)
                    <option {{ Request::get('category') === strtolower($category->name) ? 'selected' : '' }} value="{{ strtolower($category->name) }}">{{ $category->name }}</option>
                @endforeach
              </select>
              <select name="brand" class="form-control" id="">
                <option value="">-- Pilih Merk --</option>
                @foreach ($brands as $brand)
                    <option {{ Request::get('brand') === strtolower($brand->name) ? 'selected' : '' }} value="{{ strtolower($brand->name) }}">{{ $brand->name }}</option>
                @endforeach
              </select>
              <select name="type" class="form-control" id="">
                <option value="">-- Pilih Tipe --</option>
                @foreach ($types as $type)
                    <option {{ Request::get('type') === strtolower($type->name) ? 'selected' : '' }} value="{{ strtolower($type->name) }}">{{ $type->name }}</option>
                @endforeach
              </select>
              <div class="input-group-append">
                <button class="btn btn-success">Cari</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <hr>
      @if (sizeof($shoes) > 0)
        <div class="card-columns">
          @foreach ($shoes as $shoe)
              <div class="card border-0 animation shadow-sm bg-dark text-white">
                <img src="{{ Storage::url('pictures/' . $shoe->picture) }}" alt="" class="card-img-top">
                <div class="card-body">
                  <span class="badge badge-danger rounded-pill">{{ $shoe->brand->name }}</span>
                  <span class="badge badge-primary rounded-pill">{{ $shoe->type->name }}</span>
                  <h5 class="m-0">{{ $shoe->name }}</h5>
                  <p class="small m-0">{{ $shoe->category->name }}</p>
                </div>
              </div>
          @endforeach
        </div>
        <div class="mx-auto">
          {{ $shoes->links() }}
        </div>
        @else
            <div class="card border-0 shadow-sm bg-dark text-white">
              <div class="card-body text-center">
                <h4 class="m-0">Tidak ada sepatu yang dicari</h4>
                <p class="m-0">
                  @if (!is_null(Request::get('category')))
                    {{ e("Kategori : " . ucfirst(Request::get('category'))) }}
                  @endif;
                  @if (!is_null(Request::get('brand')))
                    {{ e("Merk : " . ucfirst(Request::get('brand'))) }}
                  @endif;
                  @if (!is_null(Request::get('type')))
                    {{ e("Type : " . ucfirst(Request::get('type'))) }}
                  @endif;
                </p>
              </div>
            </div>
        @endif
      </div>    
@endsection