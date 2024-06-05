@extends('layouts.renter')

@section('section-renter')
<section>
    <div class="container">
         <div class="row">
              <div class="col-md-12 col-sm-12">
                   <div class="text-center">
                        <h2>Tentang Kami</h2>
                        <br>
                        <p class="lead">Kami adalah penyedia terkemuka dalam penyewaan venue olahraga dan 
                             aplikasi booking membership gym, yang bertujuan untuk memudahkan Anda dalam menjalani gaya hidup sehat. 
                             Kami menawarkan venue berkualitas dan aplikasi canggih dengan harga terjangkau, serta dukungan pelanggan
                              yang siap membantu kapan saja. Bergabunglah dengan kami sekarang untuk meraih kesehatan dan kebugaran 
                              terbaik!</p>
                   </div>
              </div>
         </div>
    </div>
</section>

<section>
    <div class="container">
         <div class="row">
              <div class="col-md-12 col-sm-12">
                   <div class="section-title text-center">
                        <h2>Rekomendasi Kami <small>Berikut beberapa rekomendasi tempat olahraga dari kami untuk anda sewa</small></h2>
                   </div>
              </div>

              <div class="col-md-4 col-sm-4">
              <div class="courses-thumb courses-thumb-secondary">
                   <div class="courses-top">
                        <div class="courses-image">
                             <img src="images/Lapangan-Futsal-ITS.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="courses-date">
                             <span title="passegengers"><i class="fa-regular fa-clock"></i> 5</span>
                             <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                             <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                             <span title="transmission"><i class="fa fa-cog"></i> A</span>
                        </div>
                   </div>

                   <div class="courses-detail">
                        <h3><a href="fleet.html">GOR Futsal ITS</a></h3>
                        <p class="lead"><small>Harga Sewa dari</small> <strong>Rp150.000</strong> <small>per jam</small></p>
                        <p>GOR Futsal ITS beralamat di Kampus ITS, 60111, Bund. ITS, Keputih, Kec. Sukolilo, Surabaya, Jawa Timur 60117</p>
                   </div>

                   @if(Auth::check())
                        <!-- User is logged in, show a button that triggers a modal -->
                        <div class="courses-info">
                             <a href="{{ url('/booking') }}" class="section-btn btn btn-primary btn-block">Book Now</a>
                        </div>
                   @else
                        <!-- User is not logged in, show a button that redirects to the login page -->
                        <div class="courses-info">
                             <a href="{{ url('/login') }}" class="section-btn btn btn-primary btn-block">Book Now</a>
                        </div>
                   @endif

              </div>
         </div>

         <div class="col-md-4 col-sm-4">
              <div class="courses-thumb courses-thumb-secondary">
                   <div class="courses-top">
                        <div class="courses-image">
                             <img src="images/lapanganKoni.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="courses-date">
                             <span title="passegengers"><i class="fa fa-user"></i> 5</span>
                             <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                             <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                             <span title="transmission"><i class="fa fa-cog"></i> A</span>
                        </div>
                   </div>

                   <div class="courses-detail">
                        <h3><a href="fleet.html">Lapangan KONI Kertajaya</a></h3>
                        <p class="lead"><small>Harga Sewa dari</small> <strong>Rp20.000</strong> <small>sekali masuk</small></p>
                        <p>Lapangan KONI Kertajaya beralamat di Jl. Raya Kertajaya Indah No.4, RT.001/RW.09, Manyar Sabrangan, 
                             Kec. Mulyorejo, Surabaya, Jawa Timur 60116</p>
                   </div>

                   @if(Auth::check())
                        <!-- User is logged in, show a button that triggers a modal -->
                        <div class="courses-info">
                             <a href="{{ url('/booking') }}" class="section-btn btn btn-primary btn-block">Book Now</a>
                        </div>
                   @else
                        <!-- User is not logged in, show a button that redirects to the login page -->
                        <div class="courses-info">
                             <a href="{{ url('/login') }}" class="section-btn btn btn-primary btn-block">Book Now</a>
                        </div>
                   @endif
              </div>
         </div>

         <div class="col-md-4 col-sm-4">
              <div class="courses-thumb courses-thumb-secondary">
                   <div class="courses-top">
                        <div class="courses-image">
                             <img src="images/lapangan-voli-unair-1024x685.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="courses-date">
                             <span title="passegengers"><i class="fa fa-user"></i> 4</span>
                             <span title="luggages"><i class="fa fa-briefcase"></i> 4</span>
                             <span title="doors"><i class="fa fa-sign-out"></i> 4</span>
                             <span title="transmission"><i class="fa fa-cog"></i> A</span>
                        </div>
                   </div>
                   
                   <div class="courses-detail">
                        <h3><a href="fleet.html">Lapangan Voli Outdoor Kampus C Unair</a></h3>
                        <p class="lead"><small>Harga Sewa dari</small> <strong>Rp75.000</strong> <small>per jam</small></p>
                        <p>Lapangan Voli Outdoor Kampus C berada di Kampus MERR C Universitas Airlangga. Tepatnya berada dalam 
                             komplek Student Center Kampus C. Lokasinya berada di samping gedung Kahuripan Rektorat UNAIR. 
                             Kompleks ini dapat diakses melalui Bus Flash UNAIR dari Kampus A dan Kampus B.</p>
                   </div>

                   @if(Auth::check())
                        <!-- User is logged in, show a button that triggers a modal -->
                        <div class="courses-info">
                             <a href="{{ url('/booking') }}" class="section-btn btn btn-primary btn-block">Book Now</a>
                        </div>
                   @else
                        <!-- User is not logged in, show a button that redirects to the login page -->
                        <div class="courses-info">
                             <a href="{{ url('/login') }}" class="section-btn btn btn-primary btn-block">Book Now</a>
                        </div>
                   @endif
              </div>
         </div>
    </div>
</section>

<section>
    <div class="container">
         <div class="row">
              <div class="col-md-12 col-sm-12">
                   <div class="section-title text-center">
                        <h2>Latest Blog posts <small>Lorem ipsum dolor sit amet.</small></h2>
                   </div>
              </div>

              <div class="col-md-4 col-sm-4">
                   <div class="courses-thumb courses-thumb-secondary">
                   <div class="courses-thumb courses-thumb-secondary">
                             <div class="courses-top">
                                  <div class="courses-image">
                                       <img src="images/blog-1.jpg" class="img-responsive" alt="">
                                  </div>
                                  <div class="courses-date">
                                       <span title="Author"><i class="fa fa-user"></i> Corry Magdalena</span>
                                       <span title="Date"><i class="fa fa-calendar"></i> 06/12/2022</span>
                                       <span title="Views"><i class="fa fa-eye"></i>145</span>
                                  </div>
                             </div>

                             <div class="courses-detail">
                                  <h3><a href="{{url('/blog-post-details')}}">Manfaat Berolahraga Bagi Kesehatan Tubuh</a></h3>
                             </div>

                             <div class="courses-info">
                                  <a href="{{url('/blog-post-details')}}" class="section-btn btn btn-primary btn-block">Read More</a>
                             </div>
                        </div>
                   </div>
              </div>

              <div class="col-md-4 col-sm-4">
                   <div class="courses-thumb courses-thumb-secondary">
                             <div class="courses-top">
                                  <div class="courses-image">
                                       <img src="images/blog-2.jpg" class="img-responsive" alt="">
                                  </div>
                                  <div class="courses-date">
                                       <span title="Author"><i class="fa fa-user"></i> Kurnia Bahari</span>
                                       <span title="Date"><i class="fa fa-calendar"></i> 02/01/2023</span>
                                       <span title="Views"><i class="fa fa-eye"></i> 255</span>
                                  </div>
                             </div>

                             <div class="courses-detail">
                                  <h3><a href="{{url('/blog-post-details')}}">Awal Tahun Lebih Sehat, Berikut Manfaat dan Latihan Gym Pemula</a></h3>
                             </div>

                             <div class="courses-info">
                                  <a href="{{url('/blog-post-details')}}" class="section-btn btn btn-primary btn-block">Read More</a>
                             </div>
                        </div>
              </div>

              <div class="col-md-4 col-sm-4">
              <div class="courses-thumb courses-thumb-secondary">
                             <div class="courses-top">
                                  <div class="courses-image">
                                       <img src="images/blog-5.jpeg" class="img-responsive" alt="">
                                  </div>
                                  <div class="courses-date">
                                       <span title="Author"><i class="fa fa-user"></i>Mercy Raya</span>
                                       <span title="Date"><i class="fa fa-calendar"></i> 10/10/2023</span>
                                       <span title="Views"><i class="fa fa-eye"></i> 189</span>
                                  </div>
                             </div>

                             <div class="courses-detail">
                                  <h3><a href="{{url('/blog-post-details')}}">Menpora Dito: Bulutangkis Gagal di Asia Games 2023 karena...</a></h3>
                             </div>

                             <div class="courses-info">
                                  <a href="{{url('/blog-post-details')}}" class="section-btn btn btn-primary btn-block">Read More</a>
                             </div>
                        </div>
              </div>
         </div>
    </div>
</section>

<section id="testimonial">
    <div class="container">
         <div class="row">

              <div class="col-md-12 col-sm-12">
                   <div class="section-title text-center">
                        <h2>Testimoni <small>testimoni dari pelanggan kami</small></h2>
                   </div>

                   <div class="owl-carousel owl-theme owl-client">
                        <div class="col-md-4 col-sm-4">
                             <div class="item">
                                  <div class="tst-image">
                                       <img src="images/tst-image-1-200x216.jpg" class="img-responsive" alt="">
                                  </div>
                                  <div class="tst-author">
                                       <h4>Jackson</h4>
                                       <span>Shopify Developer</span>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam voluptas, facilis adipisci dolorem exercitationem nemo aut error impedit repudiandae iusto.</p>
                                  <div class="tst-rating">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                  </div>
                             </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                             <div class="item">
                                  <div class="tst-image">
                                       <img src="images/tst-image-2-200x216.jpg" class="img-responsive" alt="">
                                  </div>
                                  <div class="tst-author">
                                       <h4>Camila</h4>
                                       <span>Marketing Manager</span>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente error, unde eos laborum consequatur officiis perferendis vel debitis, dolore, ipsum quibusdam culpa quisquam, reiciendis aspernatur.</p>
                                  <div class="tst-rating">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                  </div>
                             </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                             <div class="item">
                                  <div class="tst-image">
                                       <img src="images/tst-image-3-200x216.jpg" class="img-responsive" alt="">
                                  </div>
                                  <div class="tst-author">
                                       <h4>Barbie</h4>
                                       <span>Art Director</span>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit laborum minima autem, reprehenderit mollitia amet id, beatae quo sequi culpa assumenda neque a quisquam, magni.</p>
                                  <div class="tst-rating">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                  </div>
                             </div>
                        </div>

                        <div class="col-md-4 col-sm-4">
                             <div class="item">
                                  <div class="tst-image">
                                       <img src="images/tst-image-4-200x216.jpg" class="img-responsive" alt="">
                                  </div>
                                  <div class="tst-author">
                                       <h4>Andrio</h4>
                                       <span>Web Developer</span>
                                  </div>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore natus culpa laudantium sit dolores quidem at nulla, iure atque laborum! Odit tempora, enim aliquid at modi illum ducimus explicabo soluta.</p>
                                  <div class="tst-rating">
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                       <i class="fa fa-star"></i>
                                  </div>
                             </div>
                        </div>

                   </div>
             </div>
         </div>
    </div>
</section> 
@endsection