@extends('layouts.page')
@section('content')
    <div class="container">
        <div class="row">
            <h2 class="border-start border-danger border-4 py-2" style="">Kontak Desa</h2>
            <div class="col-md-6 py-4">
                <div class="card text-dark mb-3 mx-auto" style="background-color: #6DFA84;max-width: 18rem;">
                    <div class="card-header">Telepon</div>
                    <div class="card-body">
                        <h5 class="card-title">+62 877-7327-3312</h5>
                        <p class="card-text text-center"><a href="link-ke-whatsapp" class="btn btn-light rounded-pill">WhatsApp</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 py-4">
                <div class="card text-dark mb-3 mx-auto" style="background-color: #FF5B5B;max-width: 18rem;">
                    <div class="card-header">Lokasi</div>
                    <div class="card-body">
                        <h5 class="card-title">(Jln. Astroredjo, No. 002, Ds. Genukwatu, Kec. Ngoro, Kab. Jombang, Prov.Jawa Timur)</h5>
                        <p class="card-text text-center"><a href="link-ke-google-maps" class="btn btn-light rounded-pill">Maps</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
