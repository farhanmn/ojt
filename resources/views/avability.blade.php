@extends('layouts.app')
@section('content')
<div class="container margin-container">
  <div class="row">
    <div class="panel panel-primary panelbordertop">
      <div class="panel-heading paneledit panelbordertop" style="padding-bottom: 0; padding-top: 4px"></div>
        <div class="panel-body">
          <div class="col-lg-8">
            <div class="col-lg-3 text-center">
              <strong><div class="tujuan">{{ $dari }}</div></strong>
              <div class="small">Senin, 7 Jul 2017</div>
            </div>
            <div class="col-lg-1" id="strip">
              <div><span class="fa fa-minus"></span></div>
            </div>
            <div class="col-lg-3 text-center">
              <strong><div class="tujuan">{{ $ke }}</div></strong>
              <div class="small">Selasa, 8 Jul 2017</div>
            </div>
            <div class="col-lg-1">
              <div>
                &nbsp
              </div>
              <div class="small">|</div>
            </div>
            <div class="col-lg-4">
              <div>
                &nbsp
              </div>
            <div class="small">
               @if ($jumlah_dewasa>0 && $jumlah_anak+$jumlah_bayi>0)
			              {{ $dewasa.', ' }}
      			   @elseif ($jumlah_dewasa>0 && $jumlah_anak+$jumlah_bayi==0)
      			        {{ $dewasa }}
      			   @endif
      			   @if ($jumlah_anak>0 && $jumlah_bayi>0)
      			        {{ $anak.", " }}
      			   @elseif ($jumlah_anak>0 && $jumlah_bayi==0)
      			        {{ $anak }}
      			   @endif
      			   @if ($jumlah_bayi>0)
      			        {{ $bayi }}
      			   @endif
            </div>
          </div>
        </div>
        <div id="ubah-pencarian">
          <div class="col-lg-4 text-right">
            <!-- <div class="text-right"> -->
            <a href="#dropdownMenu1" data-toggle="collapse" style="color: black">
              Ubah Pencarian
        	     <span class="fa fa-caret-down"></span></a>
          <!-- </div> -->
          </div>
          <div id="dropdownMenu1" class="panel-collapse collapse" aria-labelledby="dropdownMenu1">
    		  <br><br><hr>
    		  <!-- form ganti pencarian -->
    		    <form class="form-horizontal" role="form" method="get" action="{{ url('/avability') }}">
              <div style="padding-left: 10px; padding-right: 10px">
                <div class="form-group" style="">
                  <div class="col-lg-2 padding-form">Dari
                    <input type="text" class="form-control form-control-non-radius" value="{{ $dari }}" name="inputdari" id="inputdari" placeholder="Yogyakarta(JOG), Adi Sutjipto">
                  </div>
                  <button id="btnswap" type="button" class="col-lg-1 btn btn-default btn-circle visible-lg">
                    <span class="glyphicon glyphicon-sort"></span>
                  </button>
                  <div class="col-lg-2 padding-form">Ke
                    <input type="text" class="form-control form-control-non-radius" value="{{ $ke }}" name="inputke" id="inputke" placeholder="Yogyakarta(JOG), Adi Sutjipto">
                  </div>
                  <div class="col-lg-2 padding-form">Berangkat
                   <input type="text" class="form-control form-control-non-radius" value="{{ $date_berangkat }}" name="date_berangkat" id="inputdate">
                  </div>
                  <div class="col-lg-2 padding-form checkbox" style="margin-top: -7px">
                    <label>
                      <input type="checkbox" id="checkbox" value=""> Pulang
                    </label>
                    <input type="text" class="form-control form-control-non-radius" value="{{ $date_pulang }}" name="date_pulang" id="inputdatepulg" disabled="">
                  </div>
                  <div class="col-lg-3 padding-form">Penumpang
                    <div class="dropdown" id="inputpenumpang">
                      <div class="btn btn-default dropdown-toggle form-control-non-radius inputpenumpang" type="button" id="jumlahTotal1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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
                    <input type="submit" class="btn btn-warning form-control-non-radius btn-submit-bold" id="btncari" value="Cari">
                  </div>
                </div> <!-- end of div class form-group -->
              </div> <!-- end of div padding-left: 10px -->
            </form>
          </div> <!-- end of div id dropdownMenu1 -->
		     </div> <!-- end of div id ubah-pencarian -->
       </div> <!-- end of div class panel-body -->
      </div> <!-- end of div class panel -->
    </div> <!-- end up section row -->

  <!-- start left section -->
  <!-- filter -->
  <div class="col-md-7">
      <div class="col-md-1">
        <h5><strong>Filter</strong></h5>
      </div>
      <div class="col-md-2">
        <div class="dropdown">
          <button class="btn dropdown-toggle" style="color:#000; background:#fff" type="button" data-toggle="dropdown">
            Harga
          <span class="caret"></span></button>
          <div class="dropdown-menu">
            <center>
            <div id="slider-range"></div>
            <div id="slider-container" style="width:150px"></div>
            <p>
                <input class="input-sm" type="text" id="amount" style="border: 0; color: #EC971F; font-weight: bold" />
            </p>
            <div id="slider-range"></div>
          </center>
          </div>
        </div>
      </div>
      <div class="col-md-2" style="margin-left:-4%">
        <div class="dropdown">
          <button class="btn dropdown-toggle" style="color:#000; background:#fff" type="button" data-toggle="dropdown">
            Maskapai
          <span class="caret"></span></button>
          <div class="dropdown-menu">
            <div id="filters">
                <span>
                  <input type="checkbox" value="semua" id="semuaa" checked="checked" style="margin-left:5%" />
                  <label for="semuaa">Semuanya</label>
                </span>
                <span id="categories">
                    <li style="margin-left:5%">
                        <input type="checkbox" value="lion" id="filter-lion" checked="" />
                        <label for="filter-lion">Lion</label>
                    </li>
                    <li style="margin-left:5%">
                        <input type="checkbox" value="garuda" id="filter-garuda" checked="" />
                        <label for="filter-garuda">Garuda</label>
                    </li>
                    <li style="margin-left:5%">
                        <input type="checkbox" value="sriwijaya" id="filter-sriwijaya" checked="" />
                        <label for="filter-sriwijaya">Sriwijaya</label>
                    </li>
                    <li style="margin-left:5%">
                        <input type="checkbox" value="jetstar" id="filter-jetstar" checked="" />
                        <label for="filter-jetstar">Jetstar</label>
                    </li>
                </span>
              </div>
          </div>
        </div>
      </div>
      <div class="col-md-2">
        <div class="dropdown">
          <button class="btn dropdown-toggle" style="color:#000; background:#fff" type="button" data-toggle="dropdown">
            Waktu
          <span class="caret"></span></button>
          <div class="dropdown-menu">
            <div id="filters">
              <div class="categories">
                <li style="margin-left:5%">
                  <input type="checkbox" value="satu" id="filter-satu" checked="" />
                  <label for="filter-satu">00.00 - 06.00</label>
                </li>
                <li style="margin-left:5%">
                  <input type="checkbox" value="dua" id="filter-dua" checked="" />
                  <label for="filter-dua">06.00 - 12.00</label>
                </li>
                <li style="margin-left:5%">
                  <input type="checkbox" value="tiga" id="filter-tiga" checked="" />
                  <label for="filter-tiga">12.00 - 18.00</label>
                </li>
                <li style="margin-left:5%">
                  <input type="checkbox" value="empat" id="filter-empat" checked="" />
                  <label for="filter-empat">18.00 - 00.00</label>
                </li>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

   <div class="container">
  	<!-- list pesawat -->
      <div class="row">
      	<div class="col-md-8" style="padding: 0 15px 0 0">
        	<div class="card">

          	<!-- Nav tabs -->
          		<ul class="nav nav-tabs nav-justified" id="stick" role="tablist">
		            <li role="presentation" class="active garis"><a class="tab-top1" href="#keberangkatan" aria-controls="home" role="tab" data-toggle="tab" style="font-weight: bold">Keberangkatan</a></li>
		            <li role="presentation" class="garis"><a class="tab-top1" href="#kepulangan" aria-controls="profile" role="tab" data-toggle="tab" style="font-weight: bold">Kepulangan</a></li>
	            </ul>

              <!-- Tab panes -->
          		<div class="tab-content padding-o">
	            	<div role="tabpanel" class="tab-pane padding-o active" id="keberangkatan">
		              	<div class="panel panel-default panelbordertop">
	                	<!-- <div class="panel-heading">kepala</div> -->
	                  		<div class="panel-body">
			                    <center>
			                    	<b>
					                    <div class="row">
						                    <div class="col-md-2">Pesawat</div>
						                    <div class="col-md-3">Berangkat</div>
						                    <div class="col-md-3">Tiba</div>
						                    <div class="col-md-2">Harga</div>
						                    <div class="col-md-2"></div>
					                    </div>
			                    	</b>
			                	</center>
			                 </div>
                       <!-- isi konten 1 -->
                       <div id="konten1" class="konten">
                         <div id="saring">
			                  <div class="panel-heading heading panelbordertop system lion satu semua" data-price="950000" id="kontenDiv1" style="border-top: 1px solid #DDDDDD">
			                    <center>
				                    <div class="row">
					                    <div class="col-md-2" >
					                      <img src="/image/Batik.png" class="gambar editmargintop">
					                      <p>Batik Air</p>
					                    </div>
					                    <div class="col-md-3" >
					                      <div class="editmargintop">
					                      	<p>21:00</p>
					                      	<p>CGK(7 Juli 2017)</p>
					                      </div>
					                    </div>
					                    <div class="col-md-3" >
					                      <div class="editmargintop">
					                      	<p>00:17</p>
					                      	<p>JOG(8 Juli 2017)</p>
					                      </div>
				                    	</div>
					                    <div class="col-md-2">
					                      <div class="editmargintopharga">
					                      <p class="hargapesawat1">Rp.950.000</p>
					                      <p>Langsung</p>
					                      </div>
					                    </div>
					                    <div class="col-md-2" >
					                      <button type="button" id="pilihpesawat1" class="btn btn-primary btnpilih btn-block" name="button">Pilih</button>
					                      <a data-toggle = "collapse" id="pesawat1detail" href="#headingkonten1" data-parent="#konten1">
					                      <p class="small" id="detail1" >Detail</p></a>
					                      <a data-toggle="collapse" id="pesawat1pilih" href="#headingpilih1" data-parent="#konten1">
					                      <p class="small" id="pilih1" >Pilih Kelas Lain?</p></a>
					                    </div>
                  					</div>
            				      </center>
                        </div> <!-- end of saring -->
                			  </div> <!-- end of kontenDiv1 -->

                  			<!-- isi detail konten 1 -->
			                  <div class="panel-heading heading panel-collapse collapse konten-isi" id="headingkonten1">
			                    <center>
			                      <div class="row">
			                        <div class="col-md-2 size">
			                          <strong><p>Detail Pesawat</p></strong>
			                          <img src="/image/Batik.png" class="gambar">
			                          <p>Batik Air</p>
			                        </div>
			                        <div class="col-md-3">
			                          <div class="margintransitcol3 size">
			                          <p>7 Juli 2017; 12:17</p>
			                          <p>Jakarta</p>
			                          </div>
			                        </div>
			                        <div class="col-md-3">
			                          <div class="margintransitcol3">
			                            <p>_________________</p>
			                          </div>
			                        </div>
			                        <div class="col-md-2">
			                          <div class="margintransit size">
			                          <p>7 Juli 2017; 12:45</p>
			                          <p>Solo</p>
			                          </div>
			                        </div>
			                        <div class="col-md-2">
			                          <div class="margintransit size">
			                            <p>30 Menit</p>
			                          </div>
			                        </div>
			                      </div>
			                    </center>
			                  </div> <!-- end of headingkonten1 -->

                  <!-- isi detail pilih kelas 1 -->
                  <div class="panel-heading heading panel-collapse collapse konten-isi" id="headingpilih1">
                   	<div class="row">
                    	<div class="col-md-6">
                      		<div class="marginleft">
                      			<strong><p>Pilih Class</p></strong>
                      		</div>
                    	</div>
	                    <div class="col-md-6">
	                      <div class="marginright">
		                      <center>
		                      	<div class="textcolor pull-right buttonb1" name="button">Bisnis</div>
			                    <div class="textcolor pull-right buttone1" name="button">Ekonomi</div>
			                    <div class="textcolor pull-right buttonp1" name="button">Promo</div>
			                  </center>
	                      </div>
	                    </div>
                  	</div>

                  <div class="row">
                    <div class="col-md-6 text-right">
                      <span class="fa fa-long-arrow-left"></span>
                      <p>Harga Murah</p>
                    </div>
                    <div class="col-md-6 text-left">
                      <span class="fa fa-long-arrow-right"></span>
                      <p>Harga Mahal</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="menu-seat-responsive">
            						<ul class="menu-seat">
            							<li class="Promo text-center">
            							J <br>
            								<input class="ClassFare css-radio" type="radio" checked="" name="pesawat-1" value="Rp.950.000">
            								<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
            								<b> Rp. 950.000</b>
            							<br>
            							Sisa : <b>7</b>
            							</li>
            							<li class="Economy text-center">
            							J <br>
            								<input class="ClassFare css-radio" type="radio" name="pesawat-1" value="Rp.1.950.000">
            								<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
            								<b> Rp. 1.950.000</b>
            							<br>
            							Sisa : <b>7</b>
            							</li>
            							<li class="Economy text-center">
            							J <br>
            								<input class="ClassFare css-radio" type="radio" name="pesawat-1" value="Rp.2.950.000">
            								<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
            								<b> Rp. 2.950.000</b>
            							<br>
            							Sisa : <b>7</b>
            							</li>
            							<li class="Economy text-center">
            							J <br>
            								<input class="ClassFare css-radio" type="radio" name="pesawat-1" value="Rp.3.950.000">
            								<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
            								<b> Rp. 3.950.000</b>
            							<br>
            							Sisa : <b>7</b>
            							</li>
            							<li class="Economy text-center">
            							J <br>
            								<input class="ClassFare css-radio" type="radio" name="pesawat-1" value="Rp.4.950.000">
            								<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
            								<b> Rp. 4.950.000</b>
            							<br>
            							Sisa : <b>7</b>
            							</li>
            							<li class="Economy text-center">
            							J <br>
            								<input class="ClassFare css-radio" type="radio" name="pesawat-1" value="Rp.5.000.000">
            								<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
            								<b> Rp. 5.000.000</b>
            							<br>
            							Sisa : <b>7</b>
            							</li>
            							<li class="Economy text-center">
            							J <br>
            								<input class="ClassFare css-radio" type="radio" name="pesawat-1" value="Rp.5.550.000">
            								<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
            								<b> Rp. 5.550.000</b>
            							<br>
            							Sisa : <b>7</b>
            							</li>
            							<li class="Bisnis text-center">
            							J <br>
            								<input class="ClassFare css-radio" type="radio" name="pesawat-1" value="Rp.5.950.000">
            								<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
            								<b> Rp. 5.950.000</b>
            							<br>
            							Sisa : <b>7</b>
            							</li>
          						</ul> <!-- end of menu-seat -->
	                  </div> <!-- end of menu-seat-responsive -->
              	  </div> <!-- end of div class col-lg-12 -->
                </div> <!-- end of div class row -->
              </div> <!-- end isi detail pilih kelas 1 -->
            </div> <!-- end of konten1 -->

                  <!-- isi konten 2 -->
                  <div id="konten2" class="konten">
                    <div id="saring">
                  <div class="panel-heading heading panelbordertop system lion semua" data-price="950000" id="kontenDiv2">
                    <center>
                      <div class="row">
                        <div class="col-md-2" >
                          <img src="/image/Lion.png" class="gambar editmargintop">
                          <p>Lion Air</p>
                        </div>
                        <div class="col-md-3" >
                          <div class="editmargintop">
                          <p>21:00</p>
                          <p>CGK(7 Juli 2017)</p>
                          </div>
                        </div>
                        <div class="col-md-3" >
                          <div class="editmargintop">
                          <p>00:17</p>
                          <p>JOG(8 Juli 2017)</p>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="editmargintopharga">
                          <p class="hargapesawat2">Rp.950.000</p>
                          <p>Langsung</p>
                          </div>
                        </div>
                        <div class="col-md-2" >
                          <button type="button" class="btn btn-primary btnpilih" id="pilihpesawat2"name="button">Pilih</button>
                          <a data-toggle="collapse" href="#headingkonten2" id="pesawat2detail">
                          <p class="small" id="detail2">Detail</p></a>
                          <a data-toggle="collapse" href="#headingpilih2" id="pesawat2pilih">
                          <p class="small" id="pilih2">Pilih Kelas Lain?</p></a>
                        </div>
                      </div> <!-- end row -->
                    </center>
                  </div> <!-- end of saring -->
                  </div> <!-- end of kontenDiv2 -->
                  <!-- isi detail konten 2 -->
                  <div class="panel-heading heading panel-collapse collapse konten-isi" id="headingkonten2">
                    <center>
                      <div class="row">
                        <div class="col-md-2 size">
                          <strong><p>Detail Pesawat</p></strong>
                          <img src="/image/Lion.png" class="gambar">
                          <p>Lion Air</p>
                        </div>
                        <div class="col-md-3">
                          <div class="margintransitcol3 size">
                          <p>7 Juli 2017; 12:17</p>
                          <p>Jakarta</p>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="margintransitcol3">
                            <p>_________________</p>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="margintransit size">
                          <p>7 Juli 2017; 12:45</p>
                          <p>Solo</p>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="margintransit size">
                            <p>30 Menit</p>
                          </div>
                        </div>
                      </div> <!-- end row -->
                    </center>
                  </div> <!-- end headingkonten2 -->

                  <!-- isi detail pilih kelas 2 -->
                  <div class="panel-heading heading panel-collapse collapse konten-isi" id="headingpilih2">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="marginleft">
                        <strong><p>Pilih Class</p></strong>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="marginright">
                          <center><div class="textcolor pull-right buttonb1" name="button">Bisnis</div></center>
                          <center><div class="textcolor pull-right buttone1" name="button">Ekonomi</div></center>
                          <center><div class="textcolor pull-right buttonp1" name="button">Promo</div></center>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6 text-right">
                        <span class="fa fa-long-arrow-left"></span>
                        <p>Harga Murah</p>
                      </div>
                      <div class="col-md-6 text-left">
                        <span class="fa fa-long-arrow-right"></span>
                        <p>Harga Mahal</p>
                      </div>
                    </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="menu-seat-responsive">
          							<ul class="menu-seat">
            							<li class="Promo text-center">
            							J <br>
            							<input class="ClassFare css-radio" type="radio" checked="" name="pesawat-2" value="Rp.950.000">
            							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
            							<b> Rp. 950.000</b>
            							<br>
            							Sisa : <b>7</b>
            							</li>
            							<li class="Economy text-center">
            							J <br>
            							<input class="ClassFare css-radio" type="radio" name="pesawat-2" value="Rp.1.950.000">
            							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
            							<b> Rp. 1.950.000</b>
            							<br>
            							Sisa : <b>7</b>
            							</li>
            							<li class="Economy text-center">
            							J <br>
            							<input class="ClassFare css-radio" type="radio" name="pesawat-2" value="Rp.2.950.000">
            							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
            							<b> Rp. 2.950.000</b>
            							<br>
            							Sisa : <b>7</b>
            							</li>
            							<li class="Economy text-center">
            							J <br>
            							<input class="ClassFare css-radio" type="radio" name="pesawat-2" value="Rp.3.950.000">
            							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
            							<b> Rp. 3.950.000</b>
            							<br>
            							Sisa : <b>7</b>
            							</li>
            							<li class="Economy text-center">
            							J <br>
            							<input class="ClassFare css-radio" type="radio" name="pesawat-2" value="Rp.4.950.000">
            							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
            							<b> Rp. 4.950.000</b>
            							<br>
            							Sisa : <b>7</b>
            							</li>
            							<li class="Economy text-center">
            							J <br>
            							<input class="ClassFare css-radio" type="radio" name="pesawat-2" value="Rp.5.000.000">
            							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
            							<b> Rp. 5.000.000</b>
            							<br>
            							Sisa : <b>7</b>
            							</li>
            							<li class="Economy text-center">
            							J <br>
            							<input class="ClassFare css-radio" type="radio" name="pesawat-2" value="Rp.5.550.000">
            							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
            							<b> Rp. 5.550.000</b>
            							<br>
            							Sisa : <b>7</b>
            							</li>
            							<li class="Bisnis text-center">
            							J <br>
            							<input class="ClassFare css-radio" type="radio" name="pesawat-2" value="Rp.5.950.000">
            							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
            							<b> Rp. 5.950.000</b>
            							<br>
            							Sisa : <b>7</b>
            							</li>
          							</ul>
			                </div> <!-- end of menu-seat-responsive -->
                    </div> <!-- end of div class col-lg-12 -->
                  </div> <!-- end row -->
                </div> <!-- end isi detail 2 (headingpilih2) -->
              </div> <!-- end of konten2 -->

                  <!-- isi konten 3 -->
                  <div id="konten3" class="konten">
                  <div class="panel-heading heading panelbordertop" id="kontenDiv3">
                    <center>
                      <div class="row">
                      <div class="col-md-2" >
                        <img src="/image/jetStar.png" class="gambar editmargintop">
                        <p>Jet Star</p>
                      </div>
                      <div class="col-md-3" >
                        <div class="editmargintop">
                        <p>21:00</p>
                        <p>CGK(7 Juli 2017)</p>
                        </div>
                      </div>
                      <div class="col-md-3" >
                        <div class="editmargintop">
                        <p>00:17</p>
                        <p>JOG(8 Juli 2017)</p>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="editmargintopharga">
                        <p class="hargapesawat3">Rp.950.000</p>
                        <p>Transit</p>
                        </div>
                      </div>
                      <div class="col-md-2" >
                        <button type="button" class="btn btn-primary btnpilih" id="pilihpesawat3" name="button">Pilih</button>
                        <a data-toggle="collapse" href="#headingkonten3" id="pesawat3detail">
                          <p class="small" id="detail3">Detail</p></a>
                          <a data-toggle="collapse" href="#headingpilih3" id="pesawat3pilih">
                        <p class="small" id="pilih3">Pilih Kelas Lain?</p></a>
                      </div>
                    </div>
                  </center>
                </div> <!-- end of kontenDiv3 -->

                  <!-- isi detail konten 3 -->
                  <div class="panel-heading heading panel-collapse collapse konten-isi" id="headingkonten3">
                    <center>
                      <div class="row">
                        <div class="col-md-2 size">
                          <strong><p>Detail Pesawat</p></strong>
                          <img src="/image/jetStar.png" class="gambar">
                          <p>Jet Star</p>
                        </div>
                        <div class="col-md-3">
                          <div class="margintransitcol3 size">
                          <p>30 November 2017</p>
                          <p>12:40</p>
                          <p>Jakarta</p>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="margintransitcol3">
                            <p>_________________</p>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="margintransit size">
                          <p>31 November 2017</p>
                          <p>13:10</p>
                          <p>Solo</p>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="margintransit size">
                            <p>30 Menit</p>
                          </div>
                        </div>
                          <div class="col-md-12">
                              <div class="panel-body overridecol">
                                <div class="col-md-6 margintoptransit">
                                  <p>Transit</p>
                                </div>
                                <div class="col-md-6 margintoptransit">
                                  <p>1 Jam 15 Menit</p>
                                </div>
                              </div>
                          </div>

                          <!-- isi konten detail transit 3  -->
                          <div class="col-md-2">
                            <div>&nbsp</div>
                            <img src="/image/jetStar.png" class="gambar">
                            <p>Jet Star</p>
                          </div>
                          <div class="col-md-3">
                            <div class="margintransitcol3 size">
                            <p>30 November 2017</p>
                            <p>12:40</p>
                            <p>Jakarta</p>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="margintransitcol3">
                              <p>_________________</p>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="margintransit size">
                            <p>31 November 2017</p>
                            <p>13:10</p>
                            <p>Solo</p>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="margintransit size">
                              <p>30 Menit</p>
                            </div>
                          </div>
                        </div> <!-- end row -->
                      </center>
                      </div> <!-- end of headingkonten3 -->

                          <!-- isi detail pilih kelas 3 -->
                          <div class="panel-heading heading panel-collapse collapse konten-isi" id="headingpilih3">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="marginleft">
                                <strong><p>Pilih Class</p></strong>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="marginright">
                                  <center><div class="textcolor pull-right buttonb1" name="button">Bisnis</div></center>
                                  <center><div class="textcolor pull-right buttone1" name="button">Ekonomi</div></center>
                                  <center><div class="textcolor pull-right buttonp1" name="button">Promo</div></center>
                                </div>
                              </div>
                          </div> <!-- end row -->
                          <div class="row">
                            <div class="col-md-6 text-right">
                              <span class="fa fa-long-arrow-left"></span>
                              <p>Harga Murah</p>
                            </div>
                            <div class="col-md-6 text-left">
                              <span class="fa fa-long-arrow-right"></span>
                              <p>Harga Mahal</p>
                            </div>
                          </div> <!-- end row -->
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="menu-seat-responsive">
                  							<ul class="menu-seat">
                    							<li class="Promo text-center">
                    							J <br>
                    							<input class="ClassFare css-radio" type="radio" checked="" name="pesawat-3" value="Rp.950.000">
                    							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
                    							<b> Rp. 950.000</b>
                    							<br>
                    							Sisa : <b>7</b>
                    							</li>
                    							<li class="Economy text-center">
                    							J <br>
                    							<input class="ClassFare css-radio" type="radio" name="pesawat-3" value="Rp.1.950.000">
                    							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
                    							<b> Rp. 1.950.000</b>
                    							<br>
                    							Sisa : <b>7</b>
                    							</li>
                    							<li class="Economy text-center">
                    							J <br>
                    							<input class="ClassFare css-radio" type="radio" name="pesawat-3" value="Rp.2.950.000">
                    							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
                    							<b> Rp. 2.950.000</b>
                    							<br>
                    							Sisa : <b>7</b>
                    							</li>
                    							<li class="Economy text-center">
                    							J <br>
                    							<input class="ClassFare css-radio" type="radio" name="pesawat-3" value="Rp.3.950.000">
                    							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
                    							<b> Rp. 3.950.000</b>
                    							<br>
                    							Sisa : <b>7</b>
                    							</li>
                    							<li class="Economy text-center">
                    							J <br>
                    							<input class="ClassFare css-radio" type="radio" name="pesawat-3" value="Rp.4.950.000">
                    							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
                    							<b> Rp. 4.950.000</b>
                    							<br>
                    							Sisa : <b>7</b>
                    							</li>
                    							<li class="Economy text-center">
                    							J <br>
                    							<input class="ClassFare css-radio" type="radio" name="pesawat-3" value="Rp.5.000.000">
                    							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
                    							<b> Rp. 5.000.000</b>
                    							<br>
                    							Sisa : <b>7</b>
                    							</li>
                    							<li class="Economy text-center">
                    							J <br>
                    							<input class="ClassFare css-radio" type="radio" name="pesawat-3" value="Rp.5.550.000">
                    							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
                    							<b> Rp. 5.550.000</b>
                    							<br>
                    							Sisa : <b>7</b>
                    							</li>
                    							<li class="Bisnis text-center">
                    							J <br>
                    							<input class="ClassFare css-radio" type="radio" name="pesawat-3" value="Rp.5.950.000">
                    							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
                    							<b> Rp. 5.950.000</b>
                    							<br>
                    							Sisa : <b>7</b>
                    							</li>
                  							</ul>
  						                </div> <!-- end menu-seat-responsive -->
                            </div> <!-- end of div class col-lg-12 -->
                      </div> <!-- end row -->
                  </div> <!-- end isi detail 3 (headingpilih3) -->
                </div> <!-- end konten3 -->
              </div> <!-- end panel keberangkatan -->
            </div> <!-- end id keberangkatan -->

            <!-- kepulangan -->
            <div role="tabpanel" class="tab-pane padding-o" id="kepulangan">
		              	<div class="panel panel-default panelbordertop">
	                	<!-- <div class="panel-heading">kepala</div> -->
	                  		<div class="panel-body">
			                    <center>
			                    	<b>
					                    <div class="row">
						                    <div class="col-md-2">Pesawat</div>
						                    <div class="col-md-3">Berangkat</div>
						                    <div class="col-md-3">Tiba</div>
						                    <div class="col-md-2">Harga</div>
						                    <div class="col-md-2"></div>
					                    </div>
			                    	</b>
			                	</center>
			                 </div>

                  <!-- isi konten 4 -->
                      <div id="konten4" class="konten">
                        <div id="saring">
			                  <div class="panel-heading heading panelbordertop system jetstar semua" data-price="950000" id="kontenDiv4" style="border-top: 1px solid #DDDDDD">
			                    <center>
				                    <div class="row">
					                    <div class="col-md-2" >
					                      <img src="/image/kalstar.png" class="gambar editmargintop">
					                      <p>Kalstar Aviation</p>
					                    </div>
					                    <div class="col-md-3" >
					                      <div class="editmargintop">
					                      	<p>21:00</p>
					                      	<p>CGK(7 Juli 2017)</p>
					                      </div>
					                    </div>
					                    <div class="col-md-3" >
					                      <div class="editmargintop">
					                      	<p>00:17</p>
					                      	<p>JOG(8 Juli 2017)</p>
					                      </div>
				                    	</div>
					                    <div class="col-md-2">
					                      <div class="editmargintopharga">
					                      <p class="hargapesawat4">Rp.950.000</p>
					                      <p>Langsung</p>
					                      </div>
					                    </div>
					                    <div class="col-md-2" >
					                      <button type="button" class="btn btn-primary btnpilih btn-block" id="pilihpesawat4" name="button">Pilih</button>
					                      <a data-toggle = "collapse" href="#headingkonten4" id="pesawat4detail">
					                      <p class="small" id="detail4">Detail</p></a>
					                      <a data-toggle="collapse" href="#headingpilih4" id="pesawat4pilih">
					                      <p class="small" id="pilih4">Pilih Kelas Lain?</p></a>
					                    </div>
                  					</div>
                				</center>
                      </div>
                  			  </div>

                  			<!-- isi detail konten 4 -->
			                  <div class="panel-heading heading panel-collapse collapse konten-isi" id="headingkonten4">
			                    <center>
			                      <div class="row">
			                        <div class="col-md-2 size">
			                          <strong><p>Detail Pesawat</p></strong>
			                          <img src="/image/Batik.png" class="gambar">
			                          <p>Batik Air</p>
			                        </div>
			                        <div class="col-md-3">
			                          <div class="margintransitcol3 size">
			                          <p>7 Juli 2017; 12:17</p>
			                          <p>Jakarta</p>
			                          </div>
			                        </div>
			                        <div class="col-md-3">
			                          <div class="margintransitcol3">
			                            <p>_________________</p>
			                          </div>
			                        </div>
			                        <div class="col-md-2">
			                          <div class="margintransit size">
			                          <p>7 Juli 2017; 12:45</p>
			                          <p>Solo</p>
			                          </div>
			                        </div>
			                        <div class="col-md-2">
			                          <div class="margintransit size">
			                            <p>30 Menit</p>
			                          </div>
			                        </div>
			                      </div>
			                    </center>
			                  </div>

                  <!-- isi detail pilih kelas 4 -->
                  <div class="panel-heading heading panel-collapse collapse konten-isi" id="headingpilih4">
                   	<div class="row">
                    	<div class="col-md-6">
                      		<div class="marginleft">
                      			<strong><p>Pilih Class</p></strong>
                      		</div>
                    	</div>
	                    <div class="col-md-6">
	                      <div class="marginright">
		                      <center>
		                      	<div class="textcolor pull-right buttonb1" name="button">Bisnis</div>
			                    <div class="textcolor pull-right buttone1" name="button">Ekonomi</div>
			                    <div class="textcolor pull-right buttonp1" name="button">Promo</div>
			                  </center>
	                      </div>
	                    </div>
                  	</div>

                  <div class="row">
                    <div class="col-md-6 text-right">
                      <span class="fa fa-long-arrow-left"></span>
                      <p>Harga Murah</p>
                    </div>
                    <div class="col-md-6 text-left">
                      <span class="fa fa-long-arrow-right"></span>
                      <p>Harga Mahal</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="menu-seat-responsive">
						<ul class="menu-seat">
							<li class="Promo text-center">
							J <br>
								<input class="ClassFare css-radio" type="radio" name="pesawat-4" checked="" value="Rp.950.000">
								<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
								<b> Rp. 950.000</b>
							<br>
							Sisa : <b>7</b>
							</li>
							<li class="Economy text-center">
							J <br>
								<input class="ClassFare css-radio" type="radio" name="pesawat-4" value="Rp.1.950.000">
								<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
								<b> Rp. 1.950.000</b>
							<br>
							Sisa : <b>7</b>
							</li>
							<li class="Economy text-center">
							J <br>
								<input class="ClassFare css-radio" type="radio" name="pesawat-4" value="Rp.2.950.000">
								<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
								<b> Rp. 2.950.000</b>
							<br>
							Sisa : <b>7</b>
							</li>
							<li class="Economy text-center">
							J <br>
								<input class="ClassFare css-radio" type="radio" name="pesawat-4" value="Rp.3.950.000">
								<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
								<b> Rp. 3.950.000</b>
							<br>
							Sisa : <b>7</b>
							</li>
							<li class="Economy text-center">
							J <br>
								<input class="ClassFare css-radio" type="radio" name="pesawat-4" value="Rp.4.950.000">
								<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
								<b> Rp. 4.950.000</b>
							<br>
							Sisa : <b>7</b>
							</li>
							<li class="Economy text-center">
							J <br>
								<input class="ClassFare css-radio" type="radio" name="pesawat-4" value="Rp.5.000.000">
								<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
								<b> Rp. 5.000.000</b>
							<br>
							Sisa : <b>7</b>
							</li>
							<li class="Economy text-center">
							J <br>
								<input class="ClassFare css-radio" type="radio" name="pesawat-4" value="Rp.5.550.000">
								<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
								<b> Rp. 5.550.000</b>
							<br>
							Sisa : <b>7</b>
							</li>
							<li class="Bisnis text-center">
							J <br>
								<input class="ClassFare css-radio" type="radio" name="pesawat-4" value="Rp.5.950.000">
								<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
								<b> Rp. 5.950.000</b>
							<br>
							Sisa : <b>7</b>
							</li>
						</ul>
					  </div>
                	</div>
                  </div>
                  </div>
                </div>
                  <!-- end isi detail pilih kelas 4 -->

                  <!-- isi konten 5 -->
                  <div id="konten5" class="konten">
                    <div id="saring">
                  <div class="panel-heading heading panelbordertop system lion semua" data-price="950000" id="kontenDiv5">
                    <center>
                    <div class="row">
                    <div class="col-md-2" >
                      <img src="/image/Lion.png" class="gambar editmargintop">
                      <p>Lion Air</p>
                    </div>
                    <div class="col-md-3" >
                      <div class="editmargintop">
                      <p>21:00</p>
                      <p>CGK(7 Juli 2017)</p>
                      </div>
                    </div>
                    <div class="col-md-3" >
                      <div class="editmargintop">
                      <p>00:17</p>
                      <p>JOG(8 Juli 2017)</p>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="editmargintopharga">
                      <p class="hargapesawat5">Rp.950.000</p>
                      <p>Langsung</p>
                      </div>
                    </div>
                    <div class="col-md-2" >
                      <button type="button" class="btn btn-primary btnpilih" id="pilihpesawat5" name="button">Pilih</button>
                      <a data-toggle="collapse" href="#headingkonten5" id="pesawat5detail">
                      <p class="text-primary small" id="detail5">Detail</p></a>
                      <a data-toggle="collapse" href="#headingpilih5" id="pesawat5pilih">
                      <p class="text-primary small" id="pilih5">Pilih Kelas Lain?</p></a>
                    </div>
                  </div>
                </center>
              </div>
                  </div>
                  <!-- isi detail konten 5 -->
                  <div class="panel-heading heading panel-collapse collapse konten-isi" id="headingkonten5">
                    <center>
                      <div class="row">
                        <div class="col-md-2 size">
                          <strong><p>Detail Pesawat</p></strong>
                          <img src="/image/Lion.png" class="gambar">
                          <p>Lion Air</p>
                        </div>
                        <div class="col-md-3">
                          <div class="margintransitcol3 size">
                          <p>7 Juli 2017; 12:17</p>
                          <p>Jakarta</p>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="margintransitcol3">
                            <p>_________________</p>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="margintransit size">
                          <p>7 Juli 2017; 12:45</p>
                          <p>Solo</p>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="margintransit size">
                            <p>30 Menit</p>
                          </div>
                        </div>
                      </div>
                    </center>
                  </div>
                  <!-- isi detail pilih kelas 5 -->
                  <div class="panel-heading heading panel-collapse collapse konten-isi" id="headingpilih5">
                    <div class="row">
                    <div class="col-md-6">
                      <div class="marginleft">
                      <strong><p>Pilih Class</p></strong>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="marginright">

                      <center><div class="textcolor pull-right buttonb1" name="button">Bisnis</div></center>
                        <center><div class="textcolor pull-right buttone1" name="button">Ekonomi</div></center>
                          <center><div class="textcolor pull-right buttonp1" name="button">Promo</div></center>
                          </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 text-right">
                      <span class="fa fa-long-arrow-left"></span>
                      <p>Harga Murah</p>
                    </div>
                    <div class="col-md-6 text-left">
                      <span class="fa fa-long-arrow-right"></span>
                      <p>Harga Mahal</p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="menu-seat-responsive">
							<ul class="menu-seat">
							<li class="Promo text-center">
							J <br>
							<input class="ClassFare css-radio" type="radio" name="pesawat-5" checked="" value="Rp.950.000">
							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
							<b> Rp. 950.000</b>
							<br>
							Sisa : <b>7</b>
							</li>
							<li class="Economy text-center">
							J <br>
							<input class="ClassFare css-radio" type="radio" name="pesawat-5" value="Rp.1.950.000">
							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
							<b> Rp. 1.950.000</b>
							<br>
							Sisa : <b>7</b>
							</li>
							<li class="Economy text-center">
							J <br>
							<input class="ClassFare css-radio" type="radio" name="pesawat-5" value="Rp.2.950.000">
							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
							<b> Rp. 2.950.000</b>
							<br>
							Sisa : <b>7</b>
							</li>
							<li class="Economy text-center">
							J <br>
							<input class="ClassFare css-radio" type="radio" name="pesawat-5" value="Rp.3.950.000">
							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
							<b> Rp. 3.950.000</b>
							<br>
							Sisa : <b>7</b>
							</li>
							<li class="Economy text-center">
							J <br>
							<input class="ClassFare css-radio" type="radio" name="pesawat-5" value="Rp.4.950.000">
							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
							<b> Rp. 4.950.000</b>
							<br>
							Sisa : <b>7</b>
							</li>
							<li class="Economy text-center">
							J <br>
							<input class="ClassFare css-radio" type="radio" name="pesawat-5" value="Rp.5.000.000">
							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
							<b> Rp. 5.000.000</b>
							<br>
							Sisa : <b>7</b>
							</li>
							<li class="Economy text-center">
							J <br>
							<input class="ClassFare css-radio" type="radio" name="pesawat-5" value="Rp.5.550.000">
							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
							<b> Rp. 5.550.000</b>
							<br>
							Sisa : <b>7</b>
							</li>
							<li class="Bisnis text-center">
							J <br>
							<input class="ClassFare css-radio" type="radio" name="pesawat-5" value="Rp.5.950.000">
							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
							<b> Rp. 5.950.000</b>
							<br>
							Sisa : <b>7</b>
							</li>

							</ul>
						</div>
                    </div>
                  </div>
                  </div>
                </div>
                  <!-- end isi detail 5 -->
                  <!-- isi konten 6 -->
                  <div id="konten6" class="konten">
                  <div class="panel-heading heading panelbordertop" id="kontenDiv6">
                    <center>
                      <div class="row">
                      <div class="col-md-2" >
                        <img src="/image/jetStar.png" class="gambar editmargintop">
                        <p>Jet Star</p>
                      </div>
                      <div class="col-md-3" >
                        <div class="editmargintop">
                        <p>21:00</p>
                        <p>CGK(7 Juli 2017)</p>
                        </div>
                      </div>
                      <div class="col-md-3" >
                        <div class="editmargintop">
                        <p>00:17</p>
                        <p>JOG(8 Juli 2017)</p>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <div class="editmargintopharga">
                        <p class="hargapesawat6">Rp.950.000</p>
                        <p>Transit</p>
                        </div>
                      </div>
                      <div class="col-md-2" >
                        <button type="button" class="btn btn-primary btnpilih" id="pilihpesawat6" name="button">Pilih</button>
                        <a data-toggle="collapse" href="#headingkonten6" id="pesawat6detail">
                          <p class="small" id="detail6">Detail</p></a>
                          <a data-toggle="collapse" href="#headingpilih6" id="pesawat6pilih">
                        <p class="small" id="pilih6">Pilih Kelas Lain?</p></a>
                      </div>
                    </div>
                  </center>
                </div> <!-- end of kontenDiv6 -->

                  <!-- isi detail konten 6 -->
                  <div class="panel-heading heading panel-collapse collapse konten-isi" id="headingkonten6">
                    <center>
                      <div class="row">
                        <div class="col-md-2 size">
                          <strong><p>Detail Pesawat</p></strong>
                          <img src="/image/jetStar.png" class="gambar">
                          <p>Jet Star</p>
                        </div>
                        <div class="col-md-3">
                          <div class="margintransitcol3 size">
                          <p>30 November 2017</p>
                          <p>12:40</p>
                          <p>Jakarta</p>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="margintransitcol3">
                            <p>_________________</p>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="margintransit size">
                          <p>31 November 2017</p>
                          <p>13:10</p>
                          <p>Solo</p>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="margintransit size">
                            <p>30 Menit</p>
                          </div>
                        </div>
                          <div class="col-md-12">
                              <div class="panel-body overridecol">
                                <div class="col-md-6 margintoptransit">
                                  <p>Transit</p>
                                </div>
                                <div class="col-md-6 margintoptransit">
                                  <p>1 Jam 15 Menit</p>
                                </div>
                              </div>
                          </div>

                          <!-- isi konten detail transit 6  -->
                          <div class="col-md-2">
                            <div>&nbsp</div>
                            <img src="/image/jetStar.png" class="gambar">
                            <p>Jet Star</p>
                          </div>
                          <div class="col-md-3">
                            <div class="margintransitcol3 size">
                            <p>30 November 2017</p>
                            <p>12:40</p>
                            <p>Jakarta</p>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="margintransitcol3">
                              <p>_________________</p>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="margintransit size">
                            <p>31 November 2017</p>
                            <p>13:10</p>
                            <p>Solo</p>
                            </div>
                          </div>
                          <div class="col-md-2">
                            <div class="margintransit size">
                              <p>30 Menit</p>
                            </div>
                          </div>
                        </div> <!-- end row -->
                      </center>
                    </div> <!-- end of headingkonten6 -->

                          <!-- isi detail pilih kelas 6 -->
                          <div class="panel-heading heading panel-collapse collapse konten-isi" id="headingpilih6">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="marginleft">
                                <strong><p>Pilih Class</p></strong>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="marginright">
                                  <center><div class="textcolor pull-right buttonb1" name="button">Bisnis</div></center>
                                  <center><div class="textcolor pull-right buttone1" name="button">Ekonomi</div></center>
                                  <center><div class="textcolor pull-right buttonp1" name="button">Promo</div></center>
                                </div>
                              </div>
                          </div> <!-- end row -->
                          <div class="row">
                            <div class="col-md-6 text-right">
                              <span class="fa fa-long-arrow-left"></span>
                              <p>Harga Murah</p>
                            </div>
                            <div class="col-md-6 text-left">
                              <span class="fa fa-long-arrow-right"></span>
                              <p>Harga Mahal</p>
                            </div>
                          </div> <!-- end row -->
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="menu-seat-responsive">
                  							<ul class="menu-seat">
                    							<li class="Promo text-center">
                    							J <br>
                    							<input class="ClassFare css-radio" type="radio" checked="" name="pesawat-6" value="Rp.950.000">
                    							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
                    							<b> Rp. 950.000</b>
                    							<br>
                    							Sisa : <b>7</b>
                    							</li>
                    							<li class="Economy text-center">
                    							J <br>
                    							<input class="ClassFare css-radio" type="radio" name="pesawat-6" value="Rp.1.950.000">
                    							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
                    							<b> Rp. 1.950.000</b>
                    							<br>
                    							Sisa : <b>7</b>
                    							</li>
                    							<li class="Economy text-center">
                    							J <br>
                    							<input class="ClassFare css-radio" type="radio" name="pesawat-6" value="Rp.2.950.000">
                    							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
                    							<b> Rp. 2.950.000</b>
                    							<br>
                    							Sisa : <b>7</b>
                    							</li>
                    							<li class="Economy text-center">
                    							J <br>
                    							<input class="ClassFare css-radio" type="radio" name="pesawat-6" value="Rp.3.950.000">
                    							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
                    							<b> Rp. 3.950.000</b>
                    							<br>
                    							Sisa : <b>7</b>
                    							</li>
                    							<li class="Economy text-center">
                    							J <br>
                    							<input class="ClassFare css-radio" type="radio" name="pesawat-6" value="Rp.4.950.000">
                    							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
                    							<b> Rp. 4.950.000</b>
                    							<br>
                    							Sisa : <b>7</b>
                    							</li>
                    							<li class="Economy text-center">
                    							J <br>
                    							<input class="ClassFare css-radio" type="radio" name="pesawat-6" value="Rp.5.000.000">
                    							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
                    							<b> Rp. 5.000.000</b>
                    							<br>
                    							Sisa : <b>7</b>
                    							</li>
                    							<li class="Economy text-center">
                    							J <br>
                    							<input class="ClassFare css-radio" type="radio" name="pesawat-6" value="Rp.5.550.000">
                    							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
                    							<b> Rp. 5.550.000</b>
                    							<br>
                    							Sisa : <b>7</b>
                    							</li>
                    							<li class="Bisnis text-center">
                    							J <br>
                    							<input class="ClassFare css-radio" type="radio" name="pesawat-6" value="Rp.5.950.000">
                    							<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
                    							<b> Rp. 5.950.000</b>
                    							<br>
                    							Sisa : <b>7</b>
                    							</li>
                  							</ul>
  						                </div> <!-- end menu-seat-responsive -->
                            </div> <!-- end of div class col-lg-12 -->
                      </div> <!-- end row -->
                  </div> <!-- end isi detail 6 (headingpilih6) -->
                </div> <!-- end konten6 -->
              </div>
            </div>
            <!-- <div role="tabpanel" class="tab-pane overidetabpane" id="kepulangan">aasdasf</div> -->
          </div>
          </div>
        </div>
        <!-- end row list pesawat -->

        <!-- ini buat bagian kanan -->
        <div class="col-md-4 editmargin">
        <form action="{{ url('/isi') }}">
          <div class="panel panel-default panelbordertop">
          <div class="panel-heading primary-blue form-control-non-radius">Tiket Keberangkatan
            <div class="badge" id="badge-depart">0</div>
          </div>
            <div class="panel-body panelbody-nonpaddingtb" id="listy-depart">

            </div>
          </div>
          <!-- Tiket kepulangan -->
          <div class="panel panel-default panelbordertop">
            <div class="panel-heading primary-blue form-control-non-radius">Tiket Kepulangan
              <div class="badge" id="badge-return">0</div>
            </div>
            <div class="panel-body panelbody-nonpaddingtb" id="listy-return">

            </div>
          </div>
          <button type="submit" class="btn btn-warning btn-block" role="group" id="editbtn" disabled>Pesan Sekarang</button>
          </form>
        </div>
      </div>
      </div>
      </div>
      </div>
@endsection
