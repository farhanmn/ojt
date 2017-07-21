@extends('layouts.app')

@section('content')
    
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
            <div class="carousel-inner" style="max-height: 100px !important;">
              <div class="item active">
                <img src="http://www.travelweekly.com/uploadedImages/All_TW_Art/2016/032816/T0328COVERILLO2_HR.jpg?n=3385&width=1540&height=866&mode=crop&Anchor=MiddleCenter" class="images" alt="Los Angeles">
              </div>

              <div class="item">
                <img src="https://static1.squarespace.com/static/55fd7031e4b05d951e5158dc/55fd89b4e4b0fa9f9a864240/56003425e4b00af19b54c631/1448536539304/suitcase.jpg?format=2500w" class="images" alt="Chicago">
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
    <div class="container">

    <!-- main tab -->
    <div class="card">
          <ul class="nav nav-tabs nav-justified hidden-xs" role="tablist">
            <li role="presentation" class="active garis"><a href="#home" class="tab-top" aria-controls="home" role="tab" data-toggle="tab">  <span>Pesawat</span></a></li>
            <li role="presentation" class="garis"><a href="#profile" class="tab-top" aria-controls="profile" role="tab" data-toggle="tab">  <span>Kereta</span></a></li>
            <li role="presentation" class="garis"><a href="#messages" class="tab-top" aria-controls="messages" role="tab" data-toggle="tab">  <span>Hotel</span></a></li>
            <li role="presentation" class="garis"><a href="#settings" class="tab-top" aria-controls="settings" role="tab" data-toggle="tab">  <span>Event</span></a></li>
            <li role="presentation" class="garis"><a href="#extra" class="tab-top" aria-controls="settings" role="tab" data-toggle="tab">  <span>Paket Wisata</span></a></li>
            <li role="presentation" class="garis"><a href="#pulsa" class="tab-top" aria-controls="settings" role="tab" data-toggle="tab">  <span>Pulsa</span></a></li>
          </ul>

          <div class="container">
          <!-- content main tab -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
            <!-- content flight -->
            <form class="form-horizontal" role="form" method="get" action="{{ url('/avability') }}">
              <div class="row search">
                <div class="form-group" style="">
                  <div class="col-lg-2 padding-form">Kota Asal
                  <div class="input-group">
                    <span class="form-control-non-radius input-group-addon" style="background-color: white;"><i class="fa fa-paper-plane-o"></i></span>
                    <input type="text" class="form-control-non-radius form-control" name="dari" id="inputdari" placeholder="Kota/ Bandara">
                    </div>
                  </div>
                    <button id="btnswap" type="button" class="col-lg-1 btn btn-default btn-circle visible-lg">
                      <span class="glyphicon glyphicon-sort"></span>
                    </button>
                  <div class="col-lg-2 padding-form">Kota Tujuan

                  <div class="input-group">
                    <span class="form-control-non-radius input-group-addon" id=""><i class="fa fa-paper-plane"></i></span>
                    <input type="text" class="form-control-non-radius form-control" name="ke" id="inputke" placeholder="Kota/ Bandara">
                    </div>
                  </div>
                  <div class="col-lg-2 padding-form">Berangkat
                  <div class="input-group">
                    <span class="form-control-non-radius input-group-addon" id=""><i class="fa fa-calendar"></i></span>
                   <input type="text" class="form-control-non-radius form-control" name="date_berangkat" id="inputdate">
                   </div>
                  </div>
                  <div class="col-lg-2 padding-form">Pulang
                  <div class="input-group">
                    <span class="form-control-non-radius input-group-addon" id="iconpulang"><i class="fa fa-calendar"></i></span>
                    <input type="text" class="form-control-non-radius form-control" name="date_pulang" id="inputdatepulg" disabled="" style="border-right-style: none">
                  <span class="form-control-non-radius input-group-addon" id="show-check" style="border-left-style: none" id=""><i class="fa fa-square" style="color: white; font-size: 20.5px"></i></span>
                  </div>
                  <div class="col-lg-3 padding-form-penumpang-mobile">Penumpang
                    <div class="dropdown" id="inputpenumpang1">
                      <div class="form-control-non-radius btn btn-default dropdown-toggle inputpenumpang" type="button" id="jumlahTotal1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span id="jumlahTotal"></span>
                      </div>
                      <ul id="dropdown-passenger-mobile" class="dropdown-menu" aria-labelledby="jumlahTotal1">
                      <center>
                      <!-- dropdown passenger -->
                        <label>Dewasa</label><br>
                        <div class="input-group col-lg-7">
                          <span class="input-group-btn">
                            <button class="btn btn-primary" id="kurangD" type="button" onclick="kurangDewasa()">-</button>
                          </span>
                          <input type="text" class="form-control" name="jumlah_dewasa" value="1" id="isiDewasa" style="text-align: center">
                          <span class="input-group-btn">
                            <button class="btn btn-primary" id="tambahD" type="button" onclick="tambahDewasa()">+</button>
                          </span>
                        </div>
                        
                        <label>Anak</label><br>
                        <div class="input-group col-lg-7">
                          <span class="input-group-btn">
                            <button class="btn btn-primary" id="kurangA" type="button" onclick="kurangAnak()">-</button>
                          </span>
                          <input type="text" class="form-control" name="jumlah_anak" value="0" id="isiAnak" style="text-align: center">
                          <span class="input-group-btn">
                            <button class="btn btn-primary" id="tambahA" type="button" onclick="tambahAnak()">+</button>
                          </span>
                        </div>
                        
                        <label>Bayi</label><br>
                        <div class="input-group col-lg-7">
                          <span class="input-group-btn">
                            <button class="btn btn-primary" id="kurangB" type="button" onclick="kurangBayi()">-</button>
                          </span>
                          <input type="text" class="form-control" name="jumlah_bayi" value="0" id="isiBayi" style="text-align: center">
                          <span class="input-group-btn">
                            <button class="btn btn-primary" id="tambahB" type="button" onclick="tambahBayi()">+</button>
                          </span>
                        </div>
                        </center>
                        <center>  
                        <div class="" style="margin-top: 10px">
                        <a href="#" class="col-xs-12 visible-xs"><b>Selesai</b></a>
                        </div>
                        </center>
                      </ul>
                    </div>
                    
                  </div>
                  <div class="col-xs-14 padding-form-penumpang-mobile"><span style="color: #fff">.</span>
                    <input type="submit" class="btn btn-warning btn-block btn-submit-bold form-control-radius-button" id="btncari" value="Cari Tiket">
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
        </div>
        <div class="scroll visible-xs">
          <nav class="">
            <a href="#"><button type="button" class="buttonNav" name="buttonPesawat"><i class="fa fa-plane" aria-hidden="true"></i><br>Pesawat</button></a><a href="#"><button type="button" class="buttonNav" name="buttonKereta"><i class="fa fa-train" aria-hidden="true"></i><br>Kereta</button></a><a href="#"><button type="button" class="buttonNav" name="buttonHotel"><i class="fa fa-bed" aria-hidden="true"></i><br>Hotel</button></a><a href="#"><button type="button" class="buttonNav" name="buttonEvent"><i class="fa fa-calendar-o" aria-hidden="true"></i><br>Event</button></a><a href="#"><button type="button" class="buttonNav" name="buttonPulsa"><i class="fa fa-bar-chart" aria-hidden="true"></i><br>Pulsa</button></a><a href="#"><button type="button"class="buttonNav" name="buttonTour"><i class="fa fa-suitcase" aria-hidden="true"></i><br>Tour</button></a>
          </nav>
</div>
@endsection
