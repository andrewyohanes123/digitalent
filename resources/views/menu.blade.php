<div class="col-md-3">
    <div class="card">
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item disabled">Menu</a>
            <a href="{{ route('sepatu.index') }}" class="list-group-item {{ Route::currentRouteName() === 'sepatu.index' ? 'active' : '' }}">Sepatu</a>
            <a href="{{ route('merk.index') }}" class="list-group-item {{ Route::currentRouteName() === 'merk.index' ? 'active' : '' }}">Merk</a>
            <a href="{{ route('tipe.index') }}" class="list-group-item {{ Route::currentRouteName() === 'tipe.index' ? 'active' : '' }}">Tipe</a>
        </div>
    </div>
</div>