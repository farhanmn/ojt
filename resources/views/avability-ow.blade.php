@extends('layouts.app')
@section('content')
<div class="container margin-container">
  <div class="row">
        <div class="panel panel-primary panelbordertop">
          <div class="panel-heading paneledit panelbordertop" style="padding-bottom: 0; padding-top: 4px"></div>
          <div class="panel-body">
          <div class="col-lg-6">
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
          <div>
          <div class="col-lg-6 text-right">
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
                    <input type="text" class="form-control form-control-non-radius" value="{{ $dari }}" name="dari" id="inputdari" placeholder="Yogyakarta(JOG), Adi Sutjipto">
                  </div>
                    <button id="btnswap" type="button" class="col-lg-1 btn btn-default btn-circle visible-lg">
                      <span class="glyphicon glyphicon-sort"></span>
                    </button>
                  <div class="col-lg-2 padding-form">Ke
                    <input type="text" class="form-control form-control-non-radius" value="{{ $ke }}" name="ke" id="inputke" placeholder="Yogyakarta(JOG), Adi Sutjipto">
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
                </div>
              </div>
            </form>

		  </div>
		  </div>

        </div>
      </div>
  </div>
  <!-- end up section -->

  <!-- start left section -->
  <!-- filter -->
  <div class="row" id="">
    <div class="col-lg-7">
      <div class="form-inline" style="margin-bottom: 20px" role="group" aria-label="...">
      	<div style="display: inline; position: relative; margin-left: 5%">
      		<a id="filter" class="font-filter">Filter : </a>
      	</div>
      	<div  style="display: inline; position: relative;">
      		<a href="" class="font-filter" class="warna dropdown-toggle" data-toggle="dropdown">Harga<span class="caret" style="color: black;"></span></a>
    		<ul class="dropdown-menu">
      			<li><a href="#">Dropdown link</a></li>
      			<li><a href="#">Dropdown link</a></li>
    		</ul>
    	</div>
    	<div  style="display: inline; position: relative;">
      		<a href="" class="font-filter" class="warna dropdown-toggle" data-toggle="dropdown">Maskapai<span class="caret" style="color: black;"></span></a>
    		<ul class="dropdown-menu" style="min-width: 200px">
    			<div class="" style="padding: 5px">
    				<div class="checkbox">
	  					<label><input type="checkbox" value=""> Pilih Semua</label>
					</div>
    				<div class="checkbox">
	  					<label><input type="checkbox" value=""> Sriwijaya Air Group</label>
					</div>
					<div class="checkbox">
	  					<label><input type="checkbox" value=""> Garuda Indonesia Altea</label>
					</div>
					<div class="checkbox">
					 	<label><input type="checkbox" value=""> Airasia Group</label>
					</div>
				</div>
			</ul>
    		<div  style="display: inline; position: relative;">
      			<a href="" class="font-filter" class="warna dropdown-toggle" data-toggle="dropdown">Waktu<span class="caret" style="color: black;"></span></a>
    			<ul class="dropdown-menu">
			      <li><a href="#">Dropdown link</a></li>
			      <li><a href="#">Dropdown link</a></li>
			    </ul>
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
          		<ul class="nav nav-tabs nav-justified" role="tablist">
		            <li role="presentation" class="active garis"><a class="tab-top1" href="#keberangkatan" aria-controls="home" role="tab" data-toggle="tab" style="font-weight: bold">Keberangkatan</a></li>
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
			                  <div class="panel-heading heading panelbordertop" id="kontenDiv1" style="border-top: 1px solid #DDDDDD">
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
					                      <a data-toggle = "collapse" id="pesawat1detail" href="#headingkonten1">
					                      <p class="small" id="detail1" >Detail</p></a>
					                      <a data-toggle="collapse" id="pesawat1pilih" href="#headingpilih1">
					                      <p class="small" id="pilih1" >Pilih Kelas Lain?</p></a>
					                    </div>
                  					</div>
                				</center>
                  			  </div>
                  
                  			<!-- isi detail konten 1 -->
			                  <div class="panel-heading heading panel-collapse collapse" id="headingkonten1">
			                    <center>
			                      <div class="row">
			                        <div class="col-md-2">
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
                 
                  <!-- isi detail pilih kelas 1 -->
                  <div class="panel-heading heading panel-collapse collapse" id="headingpilih1">
                   	<div class="row">
                    	<div class="col-md-6">
                      		<div class="marginleft">
                      			<strong><p>Pilih Class</p></strong>
                      		</div>
                    	</div>
	                    <div class="col-md-6">
	                      <div class="marginright">
	                        <span class="pull-right">x</span>
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
						</ul>
					  </div>
                	</div>
                  </div>
                  </div>
                  <!-- end isi detail pilih kelas 1 -->
                  
                  <!-- isi konten 2 -->
                  <div class="panel-heading heading panelbordertop" id="kontenDiv2">
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
                  </div>
                </center>
                  </div>
                  <!-- isi detail konten 2 -->
                  <div class="panel-heading heading panel-collapse collapse" id="headingkonten2">
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
                  <!-- isi detail pilih kelas 2 -->
                  <div class="panel-heading heading panel-collapse collapse" id="headingpilih2">
                    <div class="row">
                    <div class="col-md-6">
                      <div class="marginleft">
                      <strong><p>Pilih Class</p></strong>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="marginright">
                        <span class="pull-right">x</span>

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
						</div>
                    </div>
                  </div>
                  </div>
                  <!-- end isi detail 2 -->
                  <!-- isi konten 3 -->
                  <div class="panel-heading heading">
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
                      <p>Rp.800.000</p>
                      <p>Transit</p>
                      </div>
                    </div>
                    <div class="col-md-2" >
                      <button type="button" class="btn btn-primary btnpilih" name="button">Pilih</button>
                      <a data-toggle="collapse" href="#headingkonten3">
                        <p class="text-primary" id="detail3">Detail</p></a>
                        <a data-toggle="collapse" href="#headingpilih3">
                      <p class="text-primary" id="pilih3">Pilih Kelas Lain?</p></a>
                    </div>
                  </div>
                </center>
                  </div>
                  <!-- isi detail konten 3 -->
                  <div class="panel-heading" id="headingkonten3" style="display: none;">
                    <center>
                      <div class="row">
                        <div class="col-md-2">
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

                      </div>
                    </center>
                  </div>
                  <!-- isi detail pilih kelas 3 -->
                  <div class="panel-heading" id="headingpilih3" style="display: none;">
                    <div class="row">
                    <div class="col-md-6">
                      <div class="marginleft">
                      <strong><p>Pilih Class</p></strong>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="marginright">
                        <span class="pull-right">x</span>

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
						<input class="ClassFare css-radio" type="radio" checked="" name="Fare_JT-0-14_Segment_0" onclick="selectFare('0','1','JT-0-14','Q')" 			publishfare="506000" nta="506000" availablecount="7" faresellkey="Q~QIDOW~M0_C23_F0_S16" id="FareClass-0-JT-0-14-Q" classofservice="Q">
						<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
						<b> Rp. 950.000</b>
						<br>
						Sisa : <b>7</b>
						</li>
						<li class="Economy text-center">
						J <br>
						<input class="ClassFare css-radio" type="radio" checked="" name="Fare_JT-0-14_Segment_0" onclick="selectFare('0','1','JT-0-14','Q')" 			publishfare="506000" nta="506000" availablecount="7" faresellkey="Q~QIDOW~M0_C23_F0_S16" id="FareClass-0-JT-0-14-Q" classofservice="Q">
						<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
						<b> Rp. 1.950.000</b>
						<br>
						Sisa : <b>7</b>
						</li>
						<li class="Economy text-center">
						J <br>
						<input class="ClassFare css-radio" type="radio" checked="" name="Fare_JT-0-14_Segment_0" onclick="selectFare('0','1','JT-0-14','Q')" 			publishfare="506000" nta="506000" availablecount="7" faresellkey="Q~QIDOW~M0_C23_F0_S16" id="FareClass-0-JT-0-14-Q" classofservice="Q">
						<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
						<b> Rp. 2.950.000</b>
						<br>
						Sisa : <b>7</b>
						</li>
						<li class="Economy text-center">
						J <br>
						<input class="ClassFare css-radio" type="radio" checked="" name="Fare_JT-0-14_Segment_0" onclick="selectFare('0','1','JT-0-14','Q')" 			publishfare="506000" nta="506000" availablecount="7" faresellkey="Q~QIDOW~M0_C23_F0_S16" id="FareClass-0-JT-0-14-Q" classofservice="Q">
						<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
						<b> Rp. 3.950.000</b>
						<br>
						Sisa : <b>7</b>
						</li>
						<li class="Economy text-center">
						J <br>
						<input class="ClassFare css-radio" type="radio" checked="" name="Fare_JT-0-14_Segment_0" onclick="selectFare('0','1','JT-0-14','Q')" 			publishfare="506000" nta="506000" availablecount="7" faresellkey="Q~QIDOW~M0_C23_F0_S16" id="FareClass-0-JT-0-14-Q" classofservice="Q">
						<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
						<b> Rp. 4.950.000</b>
						<br>
						Sisa : <b>7</b>
						</li>
						<li class="Economy text-center">
						J <br>
						<input class="ClassFare css-radio" type="radio" checked="" name="Fare_JT-0-14_Segment_0" onclick="selectFare('0','1','JT-0-14','Q')" 			publishfare="506000" nta="506000" availablecount="7" faresellkey="Q~QIDOW~M0_C23_F0_S16" id="FareClass-0-JT-0-14-Q" classofservice="Q">
						<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
						<b> Rp. 5.000.000</b>
						<br>
						Sisa : <b>7</b>
						</li>
						<li class="Economy text-center">
						J <br>
						<input class="ClassFare css-radio" type="radio" checked="" name="Fare_JT-0-14_Segment_0" onclick="selectFare('0','1','JT-0-14','Q')" 			publishfare="506000" nta="506000" availablecount="7" faresellkey="Q~QIDOW~M0_C23_F0_S16" id="FareClass-0-JT-0-14-Q" classofservice="Q">
						<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
						<b> Rp. 5.550.000</b>
						<br>
						Sisa : <b>7</b>
						</li>
						<li class="Bisnis text-center">
						J <br>
						<input class="ClassFare css-radio" type="radio" checked="" name="Fare_JT-0-14_Segment_0" onclick="selectFare('0','1','JT-0-14','Q')" 			publishfare="506000" nta="506000" availablecount="7" faresellkey="Q~QIDOW~M0_C23_F0_S16" id="FareClass-0-JT-0-14-Q" classofservice="Q">
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
            </div>
          </div>
          </div>
        </div>
        <!-- end row list pesawat -->

        <!-- ini buat bagian kanan -->
        <div class="col-md-4 editmargin">
        <form action="{{ url('/isi') }}">
          <div class="panel panel-primary panelbordertop">
            <div class="panel-heading primary-blue panelbordertop radius">Tiket Keberangkatan</div>
            <div class="panel-body">
              <a data-toggle="collapse" href="#pergi1" class="isipesawat1" style="display: none">
              
              <div class="col-md-10">
                <strong>Batik Air</strong>
                <strong class="pull-right"><p class="hargapesawat1">Rp.950.000</p></strong>
              </div></a>
              <!-- button remove -->
              <div class="col-md-2 isipesawat1" style="display: none">
                <span class="close" id="tutuppesawat1">x</span>
              </div>

              <!-- panel down -->
              <div id="pergi1" class="panel-collapse collapse">
                <div class="panel-body margin5-top" style="margin-top:5%">
                  <!-- icon -->
                  <div class="col-md-2" style="margin-left:-3%">
                    <div class="buled"></div>
                    <div class="fa fa-plane"></div>
                    <div class="buled primary-blue" style="margin-top:80px"></div>
                  </div>
                  <!-- content kota -->
                  <div class="col-md-4">
                      <div class="row">Jakarta</div>
                      <div class="row">CGK</div>
                      <div class="row">GA xxxx</div>
                      <div class="row margin8-top">&nbsp</div>
                      <div class="row">Yogyakarta</div>
                      <div class="row">JOG</div>
                  </div>
                  <!-- content waktu -->
                  <div class="col-md-6">
                      <div class="row">&nbsp</div>
                      <div class="row">7 Juli 2017</div>
                      <div class="row">12.00</div>
                      <div class="row margin8-top">&nbsp</div>
                      <div class="row" style="margin-top:-12%;">&nbsp</div>
                      <div class="row">7 Juli 2017</div>
                      <div class="row">12.00</div>
                  </div>
                </div>
                <hr>
              </div> <!-- ct #panel pergi1 -->
              <a data-toggle="collapse" href="#pesawat2" class="isipesawat2" style="display: none;">
              <div class="col-md-10">
                <strong>Garuda</strong>
                <strong class="pull-right"><p class="hargapesawat2">Rp. 950.000</p></strong>
              </div></a>
              <!-- button remove -->
              <div class="col-md-2 isipesawat2" style="display: none">
                <span class="close" id="tutuppesawat2">x</span>
              </div>

              <!-- panel down -->
              <div id="pesawat2" class="panel-collapse collapse">
                <div class="panel-body margin5-top" style="margin-top:5%">
                  <!-- icon -->
                  <div class="col-md-2" style="margin-left:-3%">
                    <div class="buled"></div>
                    <div class="garis"></div>
                    <div class="buled primary-blue" style="margin-top:80px"></div>
                  </div>
                  <!-- content kota -->
                  <div class="col-md-4">
                      <div class="row">Jakarta</div>
                      <div class="row">CGK</div>
                      <div class="row">GA xxxx</div>
                      <div class="row margin8-top">&nbsp</div>
                      <div class="row">Yogyakarta</div>
                      <div class="row">JOG</div>
                  </div>
                  <!-- content waktu -->
                  <div class="col-md-6">
                      <div class="row">&nbsp</div>
                      <div class="row">7 Juli 2017</div>
                      <div class="row">12.00</div>
                      <div class="row margin8-top">&nbsp</div>
                      <div class="row" style="margin-top:-12%;">&nbsp</div>
                      <div class="row">7 Juli 2017</div>
                      <div class="row">12.00</div>
                  </div>
                </div>
              </div> <!-- ct #panel pesawat2 -->

            </div>
          </div>
          <button type="submit" class="btn btn-warning btn-block" role="group" id="editbtn">Pesan Sekarang</button>
          </form>
        </div>
      </div>
      </div>
      </div>
      </div>
@endsection
