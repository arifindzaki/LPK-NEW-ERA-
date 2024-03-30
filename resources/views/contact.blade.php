@extends('layout.main')

@section('container')
<section id="pelatihan" class="pelatihan">
    <div class="container">
<div class="row row-cols-1 row-cols-lg-2 mt-3">
    <div class="col">
        
        <div class="m-0 pb-5 pb-lg-0">
            
            <div class="d-flex justify-content-start mb-1">
                <div>
                    <h2 data-aos="fade-up" data-aos-duration="1000" class="fw-bold mb-3">Kontak </h2>
                    <div class="underbar ms-0"></div>
                </div>
            </div>
            <div class="ket-email" data-aos="fade-up" data-aos-duration="1000">
            <p class="mb-2 fw-bold">Email :</p>
            <p class="mb-3">{{ $email }}</p>
            <p class="mb-2 fw-bold">Kontak :</p>
            <p class="mb-1">Telepon : {{ $nomor }} (Whatsapp)</p>
            <a href="https://api.whatsapp.com/send/?phone=62812282754446" target="_blank" class="btn btn-primary shadow ">Chat Sekarang!</a>
            </div>
        </div>
    </div>
    <div class="col">
        <div>
            <div class="d-flex justify-content-start mb-1">
                <div>
                    <h2 data-aos="fade-up" data-aos-duration="1000" class="fw-bold mb-3">Alamat</h2>
                    {{-- <div class="underbar ms-0"></div> --}}
                </div>
            </div>
            <p data-aos="fade-up" data-aos-duration="1000" class="mb-2">Perumahan GKR, Gg. Anggrek No.G11, Perumahan Puri Bagus, Sadenganmijen, Kec. Krian, Kabupaten Sidoarjo, Jawa Timur 61261</p>
        </div>
        <section data-aos="fade-up" data-aos-duration="1000" class="rounded google-map overflow-hidden shadow p-1" style="min-height: 350px; height: calc(100% - 372px);">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.3222567414587!2d112.582895!3d-7.429545799999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7809c6ff897d89%3A0xa949a56426bc87dd!2sLKP%20ILMIAH%20Krian!5e0!3m2!1sid!2sid!4v1707808496821!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    
        </section>
    </div>
</div>
    </div>
</section>
</div>
</div>
</div>
@endsection