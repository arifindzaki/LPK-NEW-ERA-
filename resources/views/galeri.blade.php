@extends('layout.main')

@section('container')
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">
      
              <h2 data-aos="fade-up" data-aos-duration="1000" style="text-align: center">Galery</h2>
              @foreach ($dataGalery as $model)
              <div class="row portfolio-container" data-aos="fade-up">
                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                  <div class="portfolio-img"><img src="{{  url('') }}/img/gambar/{{ $model->image }}" class="img-fluid" alt=""></div>
                  <div class="portfolio-info">
                    <h4>{{ $model->judul }}</h4>
                    <p>{{ $model->deskripsi }}</p>
                    </div>
                </div>
                @endforeach
            </div>
          </section><!-- End Portfolio Section -->
@endsection