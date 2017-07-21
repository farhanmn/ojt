@extends('layouts.app')

@section('content')

    <!-- main tab -->
    <div class="card">
          <ul class="nav nav-tabs nav-justified" role="tablist">
            <li role="presentation" class="active garis"><a href="#home" class="tab-top" aria-controls="home" role="tab" data-toggle="tab">  <span>Pesawat</span></a></li>
            <li role="presentation" class="garis"><a href="#profile" class="tab-top" aria-controls="profile" role="tab" data-toggle="tab">  <span>Kereta</span></a></li>
            <li role="presentation" class="garis"><a href="#messages" class="tab-top" aria-controls="messages" role="tab" data-toggle="tab">  <span>Hotel</span></a></li>
            <li role="presentation" class="garis"><a href="#settings" class="tab-top" aria-controls="settings" role="tab" data-toggle="tab">  <span>Event</span></a></li>
            <li role="presentation" class="garis"><a href="#extra" class="tab-top" aria-controls="settings" role="tab" data-toggle="tab">  <span>Paket Wisata</span></a></li>
            <li role="presentation" class="garis"><a href="#pulsa" class="tab-top" aria-controls="settings" role="tab" data-toggle="tab">  <span>Pulsa</span></a></li>
          </ul>
          <!-- black line above tab content -->
          <div style="background-color: black; width: 100%; height: 1px"></div>
          <div class="container">
          <div class="row">
          <!-- content main tab -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
            <!-- content flight -->
            <form class="form-horizontal" role="form" method="get" action="{{ url('/avability') }}">
              <div class="row search">
                <div class="form-group" style="">
                  <div class="col-lg-2 padding-form ">Dari
                    <input type="text" class="form-control form-control-non-radius" name="inputdari" id="inputdari">
                  </div>
                    <button id="btnswap" type="button" class="col-lg-1 btn btn-default btn-circle visible-lg">
                      <span class="glyphicon glyphicon-sort"></span>
                    </button>
                  <div class="col-lg-2 padding-form">Ke
                    <input type="text" class="form-control form-control-non-radius" name="inputke" id="inputke">
                  </div>
                  <div class="col-lg-2 padding-form">Berangkat
                   <input type="text" class="form-control form-control-non-radius" name="date_berangkat" id="inputdate">
                  </div>
                  <div class="col-lg-2 padding-form checkbox" style="margin-top: -7px">
                  <label>
                    <input type="checkbox" id="checkbox" value=""> Pulang
                  </label>
                    <input type="text" class="form-control form-control-non-radius" name="date_pulang" id="inputdatepulg" disabled="">
                  </div>
                  <div class="col-lg-3 padding-form">Penumpang
                    <div class="dropdown" id="inputpenumpang">
                      <div class="btn btn-default dropdown-toggle inputpenumpang form-control-non-radius" type="button" id="jumlahTotal1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span id="jumlahTotal"></span>
                      </div>
                      <ul id="dropdown-passenger" class="dropdown-menu" aria-labelledby="jumlahTotal1">
                      <center>
                      <!-- dropdown passenger -->
                        <label>Dewasa</label><br>
                        <div class="input-group col-lg-7">
                          <span class="input-group-btn">
                            <button class="btn btn-primary form-control-non-radius" id="kurangD" type="button" onclick="kurangDewasa()">-</button>
                          </span>
                          <input type="text" class="form-control form-control-non-radius" name="jumlah_dewasa" value="1" id="isiDewasa" style="text-align: center">
                          <span class="input-group-btn">
                            <button class="btn btn-primary form-control-non-radius" id="tambahD" type="button" onclick="tambahDewasa()">+</button>
                          </span>
                        </div>

                        <label>Anak</label><br>
                        <div class="input-group col-lg-7">
                          <span class="input-group-btn">
                            <button class="btn btn-primary form-control-non-radius" id="kurangA" type="button" onclick="kurangAnak()">-</button>
                          </span>
                          <input type="text" class="form-control form-control-non-radius" name="jumlah_anak" value="0" id="isiAnak" style="text-align: center">
                          <span class="input-group-btn">
                            <button class="btn btn-primary form-control-non-radius" id="tambahA" type="button" onclick="tambahAnak()">+</button>
                          </span>
                        </div>

                        <label>Bayi</label><br>
                        <div class="input-group col-lg-7">
                          <span class="input-group-btn">
                            <button class="btn btn-primary form-control-non-radius" id="kurangB" type="button" onclick="kurangBayi()">-</button>
                          </span>
                          <input type="text" class="form-control form-control-non-radius" name="jumlah_bayi" value="0" id="isiBayi" style="text-align: center">
                          <span class="input-group-btn">
                            <button class="btn btn-primary form-control-non-radius" id="tambahB" type="button" onclick="tambahBayi()">+</button>
                          </span>
                        </div>

                        </center>
                      </ul>
                    </div>
                    <a><i class="icon-arrow-down"></i></a>
                  </div>
                  <div class="col-lg-1 padding-form" style="width: 1%"><span style="color: #fff">.</span>
                    <input type="submit" class="btn btn-warning btn-submit-bold form-control-non-radius" id="btncari" value="Cari">
                  </div>
                </div>
              </div>
            </form>
            </div>
           <div role="tabpanel" class="tab-pane" id="profile">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</div>
           <div role="tabpanel" class="tab-pane" id="messages">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
           <div role="tabpanel" class="tab-pane" id="settings">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passage..</div>
           <div role="tabpanel" class="tab-pane" id="extra">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passage..</div>
           <div role="tabpanel" class="tab-pane" id="pulsa">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passage..</div>
         </div>
        </div>
        </div>
        </div>
        <!-- slider promo -->
        <div class="col-lg-14" id="carousel">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- item slider -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="http://infojalanjalan.com/wp-content/uploads/2016/06/Lion-Air-Terminal-Berapa.jpg" class="images" alt="Los Angeles">
              </div>

              <div class="item">
                <img src="https://jauhdekat.com/file/2014/09/Garuda-Indonesia.jpg" class="images" alt="Chicago">
              </div>

              <div class="item">
                <img src="https://images.trvl-media.com/media/content/expus/graphics/launch/home/tvly/150324_flights-hero-image_1330x742.jpg" class="images" alt="New york">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="container hidden-sm hidden-xs" id="why">
        <!-- citos profit -->
        <div class="row">
          <center>
            <h3>Mengapa Membeli Tiket di Citos?</h3>
          </center>
          <br>
          <div class="col-md-4 text-center">
            <span class="fa fa-money logo-icon" aria-hidden="true"></span>
            <b><p>Murah</p></b>
            <p>Dapatkan harga termurah dengan bertransaksi bersama citos.id</p>
          </div>
          <div class="col-md-4 text-center">
            <span class="fa fa-thumbs-o-up logo-icon" aria-hidden="true"></span>
            <b><p>Terjangkau</p></b>
            <p>Pastikan anda mendapatkan fasilitas memuaskan dengan biaya relatif terjangkau</p>
          </div>
          <div class="col-md-4 text-center">
            <span class="fa fa-shield logo-icon" aria-hidden="true"></span>
            <b><p>Aman</p></b>
            <p>Dengan bertransaksi bersama citos.id kami pastikan semuanya aman dan terjamin</p>
          </div>
        </div>
        </div>
        <div class="container con hidden-xs hidden-sm" id="containercon">
        <!-- card promo -->
          <div class="row">
            <div class="col-md-6">
              <div class="panel panel-default shad-card panel-card" id="backgroundimage1">
                <div class="col-md-8">
                <div class="text-card"><strong>Jakarta > Makasar</strong></div>
                <div class="keterangan-card">1 Juni 2017 - 1 Juli 2017</div>
                <div class="mulaidari-card">Mulai dari Rp. 900.000</div>
                </div>
                <div class="col-md-4">
                  <img src="https://4.bp.blogspot.com/-regiUYMlvi4/WJ34yZ_siII/AAAAAAAAONM/qkgmXbv5lPUQIx0VPFSRBYGlWNaNYPOUgCLcB/s1600/PT%2BCitilink%2BIndonesia.png" class="images iconpesawat-card">
                  <strong><center>Citilink</center></strong>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="panel panel-default shad-card panel-card" id="backgroundimage2">
              <div class="col-md-8">
                <div class="text-card"><strong>Yogyakarta > Bali</strong></div>
                <div class="keterangan-card">1 Juni 2017 - 1 Juli 2017</div>
                <div class="mulaidari-card">Mulai dari Rp. 450.000</div>
              </div>
              <div class="col-md-4">
                  <img src="https://4.bp.blogspot.com/-regiUYMlvi4/WJ34yZ_siII/AAAAAAAAONM/qkgmXbv5lPUQIx0VPFSRBYGlWNaNYPOUgCLcB/s1600/PT%2BCitilink%2BIndonesia.png" class="images iconpesawat-card">
                  <strong><center>Citilink</center></strong>
              </div>
            </div>
          </div>
            <div class="col-md-6">
              <div class="panel panel-default shad-card panel-card" id="backgroundimage3">
                <div class="col-md-8">
                <div class="text-card"><strong>Jakarta > Tokyo</strong></div>
                <div class="keterangan-card">1 Juni 2017 - 1 Juli 2017</div>
                <div class="mulaidari-card">Mulai dari Rp. 1.250.000</div>
              </div>
              <div class="col-md-4">
                <img src="https://4.bp.blogspot.com/-regiUYMlvi4/WJ34yZ_siII/AAAAAAAAONM/qkgmXbv5lPUQIx0VPFSRBYGlWNaNYPOUgCLcB/s1600/PT%2BCitilink%2BIndonesia.png" class="images iconpesawat-card">
                <strong><center>Citilink</center></strong>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="panel panel-default shad-card panel-card" id="backgroundimage4">
              <div class="col-md-8">
              <div class="text-card"><strong>Jakarta > Melbourne</strong></div>
              <div class="keterangan-card">1 Juni 2017 - 1 Juli 2017</div>
              <div class="mulaidari-card">Mulai dari Rp. 1.700.000</div>
            </div>
            <div class="col-md-4">
              <img src="https://4.bp.blogspot.com/-regiUYMlvi4/WJ34yZ_siII/AAAAAAAAONM/qkgmXbv5lPUQIx0VPFSRBYGlWNaNYPOUgCLcB/s1600/PT%2BCitilink%2BIndonesia.png" class="images iconpesawat-card">
              <strong><center>Citilink</center></strong>
            </div>
          </div>
        </div>
        </div>
      </div>
      <!-- email subscribe -->
        <div class="well" id="panel-promo">
          <form class="form-inline">
          <div class="form-group col-lg-12 col-xs-12">
          <center>
            <label>Dapatkan Promo dan Informasi Terbaru dengan Berlangganan</label>

            <input type="text" class="form-control" style="width: 30%; margin-left: 5%">
            <input type="submit" class="btn btn-warning" value="Langganan">
          </center>
          </div>
          </form>
          </div>
@endsection
