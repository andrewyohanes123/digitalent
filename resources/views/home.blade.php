@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('menu')
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card bg-primary border-0 shadow text-white">
                                <div class="card-body">
                                    <h4 class="m-0">Sepatu</h4>
                                    <h1>{{ $shoes }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 bg-success text-white shadow">
                                <div class="card-body">
                                    <h4 class="m-0">Merk</h4>
                                    <h1>{{ $brands }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border-0 shadow bg-dark text-white">
                                <div class="card-body">
                                    <h4 class="m-0">Tipe</h4>
                                    <h1>{{ $types }}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
