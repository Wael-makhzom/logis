@extends('layouts.index')
@section('content')


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('assets/img/page-header.jpg');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Services</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="{{route('/')}}">Home</a></li>
            <li>Services</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->
     @include('layouts/featured_services')
    <!-- ======= Services Section ======= -->
     @include('layouts/services')
    <!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    @include('layouts/features')
    <!-- End Features Section -->

    <!-- ======= Testimonials Section ======= -->
     @include('layouts/Testimonials')
    <!-- End Testimonials Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->

     @include('layouts/frecuently_asked')

<!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->

@endsection