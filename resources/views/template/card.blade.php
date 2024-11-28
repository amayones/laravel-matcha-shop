<div class="container mt-5">
    <h2 class="card-title text-center fw-bold text-secondary">PRODUK | MAY MATCHA</h2>
    <hr>
    <div class="row">
        @foreach ($produk as $item)
        <div class="col-3">
            <div class="card shadow" style="background-color: rgb(190, 243, 163)">
                <div class="card-body">
                    <img src="{{ $item->foto }}" alt="" class="card-img-top" style="object_fit: cover; height: 150px">
                    <h3 class="card-title">{{ $item->nama }}</h3>
                    <p class="card-text"> Rp. {{ $item->harga }}</p>
                    <a href="{{ route('detail', $item->id ) }}" class="btn btn-secondary d-block">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
