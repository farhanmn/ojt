@extends('layouts.app')
@section('content')
<div class="container margin-container">

  <!-- step 1 2 3 -->
  <center>
    <div class="row">
      <div class="col-xs-6 col-md-4">
      </div>
      <div class="col-xs-6 col-md-4">
        <div class="connecting-line"></div>
        <button class="btn btn-circle btn-lg" style="float:left; background-color: #2d8727; color: #fff">1</button>
        <button class="btn btn-circle btn-lg" style="float:right; background-color: #2d8727; color: #fff">2</button>
      </div>
      <div class="col-xs-6 col-md-4">
      </div>
    </div>

    <div class="row" style="margin-bottom:5%; margin-top:1%">
      <div class="col-xs-6 col-md-4">

      </div>
      <div class="col-xs-6 col-md-4 small">
        <span style="float:left; margin-left:-5%">ISI FORMULIR</span>
        <span style="float:right; margin-right:-15%">BAGASI DAN ASURANSI</span>
      </div>
      <div class="col-xs-6 col-md-4">
      </div>
    </div>
  </center>
  <!-- close step 1 2 3 -->

  <!-- Left Side -->
  <div class="container col-md-8 col-xs-10">
    <div class="test"><h5 style="padding: 2% 0 2% 7%; margin: 0;color: #fff">Pilih Bagasi</h5></div>
    <div id="accordion">
    <div class="panel panel-default form-control-non-radius" style="background-color:#efefef">
      <div class="panel-body margin5">
        <a data-toggle="collapse" data-parent="#accordion" href="#penumpang1">
        <div>
          <strong>Keberangkatan</strong>
          <span id="caretp1" class="caret pull-right"></span>
        </div></a>

        <!-- panel down -->
        <div id="penumpang1" class="panel-collapse collapse">
          <div class="panel-body" style="background-color: #fff; margin-top: 2%">
            <div class="row"> <!-- 0 -->
              <div class="col-md-4">
                <strong style="color:#0033A8">Penumpang Dewasa 1</strong>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 margin5-top">
                Bagasi Lion Air
              </div>
              <div class="col-md-8 margin2-top">
                <div class="form-inline">
                  :&nbsp <select class="form-control form-control-non-radius" style="width: 50%">
                    <option>20Kg (Gratis)</option>
                    <option>30Kg (Rp 100.000)</option>
                    <option>40Kg (Rp 250.000)</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 margin5-top">
                Bagasi Lion Air
              </div>
              <div class="col-md-8 margin2-top">
                <div class="form-inline">
                  :&nbsp <select class="form-control form-control-non-radius" style="width: 50%">
                    <option>20Kg (Gratis)</option>
                    <option>30Kg (Rp 100.000)</option>
                    <option>40Kg (Rp 250.000)</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row"> <!-- 0 -->
              <div class="col-md-4" style="margin-top: 3%">
                <strong style="color:#0033A8">Penumpang Anak 1</strong>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 margin5-top">
                Bagasi Lion Air
              </div>
              <div class="col-md-8 margin2-top">
                <div class="form-inline">
                  :&nbsp <select class="form-control form-control-non-radius" style="width: 50%">
                    <option>20Kg (Gratis)</option>
                    <option>30Kg (Rp 100.000)</option>
                    <option>40Kg (Rp 250.000)</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 margin5-top">
                Bagasi Lion Air
              </div>
              <div class="col-md-8 margin2-top">
                <div class="form-inline">
                  :&nbsp <select class="form-control form-control-non-radius" style="width: 50%">
                    <option>20Kg (Gratis)</option>
                    <option>30Kg (Rp 100.000)</option>
                    <option>40Kg (Rp 250.000)</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- ct #penumpang1 -->

        <hr>
        <a data-toggle="collapse" data-parent="#accordion" href="#penumpang2">
        <div>
          <strong>Kepulangan</strong>
          <span class="caret pull-right"></span>
        </div></a>

        <!-- panel down -->
        <div id="penumpang2" class="panel-collapse collapse">
          <div class="panel-body" style="background-color: #fff; margin-top: 2%">
            <div class="row"> <!-- 0 -->
              <div class="col-md-4">
                <strong style="color:#0033A8">Penumpang Dewasa 1</strong>
              </div>

            </div>
            <div class="row">
              <div class="col-md-4 margin5-top">
                Bagasi Lion Air
              </div>
              <div class="col-md-8 margin2-top">
                <div class="form-inline">
                  :&nbsp <select class="form-control form-control-non-radius" style="width: 50%">
                    <option>20Kg (Gratis)</option>
                    <option>30Kg (Rp 100.000)</option>
                    <option>40Kg (Rp 250.000)</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row"> <!-- 1 -->
            </div>
            <div class="row">
              <div class="col-md-4 margin5-top">
                Bagasi Sriwijaya
              </div>
              <div class="col-md-8 margin2-top">
                <div class="form-inline">
                  :&nbsp <select class="form-control form-control-non-radius" style="width: 50%">
                    <option>20Kg (Gratis)</option>
                    <option>30Kg (Rp 100.000)</option>
                    <option>40Kg (Rp 250.000)</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row"> <!-- 0 -->
              <div class="col-md-4" style="margin-top: 3%">
                <strong style="color:#0033A8">Penumpang Anak 1</strong>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 margin5-top">
                Bagasi Lion Air
              </div>
              <div class="col-md-8 margin2-top">
                <div class="form-inline">
                  :&nbsp <select class="form-control form-control-non-radius" style="width: 50%">
                    <option>20Kg (Gratis)</option>
                    <option>30Kg (Rp 100.000)</option>
                    <option>40Kg (Rp 250.000)</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 margin5-top">
                Bagasi Lion Air
              </div>
              <div class="col-md-8 margin2-top">
                <div class="form-inline">
                  :&nbsp <select class="form-control form-control-non-radius" style="width: 50%">
                    <option>20Kg (Gratis)</option>
                    <option>30Kg (Rp 100.000)</option>
                    <option>40Kg (Rp 250.000)</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- ct #penumpang2 -->
      </div>
    </div>
    </div> <!-- close tag panel default -->

    <!-- Citos Shield -->
    <div class="test"><h5 style="padding: 2% 0 2% 7%; margin: 0;color: #fff">Citos Shield (CTShield)</h5></div>
    <div class="panel panel-default form-control-non-radius" style="background-color:#efefef">
      <div class="panel-body" style="margin-top:1%; padding-top: 0%; margin-left: 5%">
        <div class="checkbox small margin5-top">
          <label><input type="checkbox" value=""></label>
          <strong><a padding="0" id="tooltip" href="#" title="Citos Shield adalah asuransi......(more info, click)">Apa itu Citos Shield?</a></strong>
        </div>
      </div>
    </div>

    <!-- Potongan Harga -->
    <div class="test"><h5 style="padding: 2% 0 2% 7%; margin: 0;color: #fff">Potongan Harga</h5></div>
    <div class="panel panel-default form-control-non-radius" style="background-color:#efefef">
      <div class="panel-body margin5">

        <div class="checkbox small" style="margin-top:1%; padding-top: 0%">
          <label>
          <input type="checkbox" value=""> GUNAKAN HOT WALLET
          </label>
        </div>

        <p class="margin5-top">Punya Kode Kupon? Masukkan kode unik untuk harga spesial</p>
        <div id="cek-kupon" class="input-group col-lg-6 has-success">
        <input type="text" name="" class="form-control form-control-non-radius" value="">
        <span class="input-group-btn">
        <button id="kupon-berhasil" class="btn btn-primary form-control-non-radius primary-blue" type="button" name="button">Gunakan</button>
        </span>
        </div>
        <div id="keterangan-kupon" class="has-success">
          <label class="control-label">Kode voucher berhasil digunakan</label>
        </div>
      </div>
    </div>

    
    <div class="panel panel-default form-control-non-radius" style="background-color:#efefef">
      <div class="panel-body margin5" style="margin-top: 1%; margin-bottom: 1%">
        <div class="checkbox small margin5-top">
          <label><input type="checkbox" value="">Saya yakin dan menyetujui segala syarat dan ketentuan yang berlaku</label>
        </div>
      </div>

    <!-- Button back -->


    <ul class="list-inline pull-right margin5-top">
        <li><a href="{{ url('/isi') }}"><button type="button" class="btn form-control-non-radius primary-yellow" style="width: 200px">Tambahkan ke Keranjang</button></a></li>
        <li><a href="{{ url('/bayar') }}"><button type="button" class="btn form-control-non-radius primary-yellow" style="width: 200px">Pesan Sekarang</button></a></li>
    </ul>
    </div>


  </div>  <!-- close tag container left -->

  <!-- Right Side -->
  <div class="container col-md-4 col-xs-2">
    <div class="panel panel-default form-control-non-radius" style="background-color:#efefef">
      <div class="panel-heading primary-blue form-control-non-radius">Tiket Keberangkatan</div>
      <div class="panel-body">
        <a data-toggle="collapse" href="#pergi1">
        <div class="col-md-10">
          <strong>Lion Air</strong>
          <strong class="pull-right">Rp. 400.000</strong>
        </div></a>
        <!-- button remove -->
        <div class="col-md-2">
          <span class="caret pull-right"></span>
        </div>

        <!-- panel down -->
        <div id="pergi1" class="panel-collapse collapse">
          <div class="panel-body margin5-top" style="margin-top:5%">
            <!-- icon -->
            <div class="col-md-2" style="margin-left:-3%">
              <div class="buled"></div>
              <div class="garis-non-transit"></div>
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
                <div class="row">7 Juli 2017</div>
                <div class="row">12.00</div>
                <div class="row margin8-top">&nbsp</div>
                <div class="row" style="margin-top:-12%;">&nbsp</div>
                <div class="row">7 Juli 2017</div>
                <div class="row">12.00</div>
            </div>
          </div>
        </div> <!-- ct #panel pergi1 -->

        <hr>
        <a data-toggle="collapse" href="#pesawat2">
        <div class="col-md-10">
          <strong>Garuda</strong>
          <strong class="pull-right">Rp. 1.500.000</strong>
        </div></a>
        <!-- button remove -->
        <div class="col-md-2">
          <span class="caret pull-right"></span>
        </div>

        <!-- panel down -->
        <div id="pesawat2" class="panel-collapse collapse">
          <div class="panel-body margin5-top" style="margin-top:12%">
            <!-- icon -->
            <div class="col-md-2" style="margin-left:-3%">
              <div class="buled"></div>
              <div class="garis-non-transit"></div>
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
    <!-- Tiket kepulangan -->
    <div class="panel panel-default form-control-non-radius" style="background-color:#efefef">
      <div class="panel-heading primary-blue form-control-non-radius">Tiket Kepulangan</div>
      <div class="panel-body">
        <a data-toggle="collapse" href="#pulang1">
        <div class="col-md-10">
          <strong>Lion Air</strong>
          <strong class="pull-right">Rp. 400.000</strong>
        </div></a>
        <!-- button remove -->
        <div class="col-md-2">
          <span class="caret pull-right"></span>
        </div>

        <!-- panel down -->
        <div id="pulang1" class="panel-collapse collapse">
          <center>
            <div class="kotak">
              <span style="margin-top:80px">Transit 1 jam 30 menit</span>
            </div>
          </center>
          <div class="panel-body margin5-top" style="margin-top:5%">
            <!-- icon -->
            <div class="col-md-2" style="margin-left:-3%">
              <div class="buled"></div>
              <div class="garis-transit"></div>
              <div class="buled primary-blue" style="margin-top:80px"></div>
              <div class="garis-transit"></div>
              <div class="buled primary-blue" style="margin-top:80px"></div>
            </div>
            <!-- content kota -->
            <div class="col-md-4">
                <div class="row">Yogyakarta</div>
                <div class="row">JOG</div>
                <div class="row">GA xxxx</div>
                <div class="row margin8-top">&nbsp</div>
                <div class="row">Bandung</div>
                <div class="row">BDO</div>
                <div class="row margin8-top" style="margin-top:60%">&nbsp</div>
                <div class="row">Jakarta</div>
                <div class="row">CGK</div>
            </div>
            <!-- content waktu -->
            <div class="col-md-6">
                <div class="row">&nbsp</div>
                <div class="row">7 Agustus 2017</div>
                <div class="row">12.00</div>
                <div class="row margin8-top">&nbsp</div>
                <div class="row" style="margin-top:-12%;">&nbsp</div>
                <div class="row">7 Agustus 2017</div>
                <div class="row">12.30</div>
                <div class="row margin8-top">&nbsp</div>
                <div class="row" style="margin-top:-12%;">&nbsp</div>
                <div class="row">7 Agustus 2017</div>
                <div class="row">13.10</div>
            </div>
          </div>
        </div> <!-- ct #panel pesawat1 -->

        <hr>
        <a data-toggle="collapse" href="#pesawat3">
        <div class="col-md-10">
          <strong>Garuda</strong>
          <strong class="pull-right">Rp. 1.500.000</strong>
        </div></a>
        <!-- button remove -->
        <div class="col-md-2">
          <span class="caret pull-right"></span>
        </div>

        <!-- panel down -->
        <div id="pesawat3" class="panel-collapse collapse">
          <div class="panel-body margin5-top" style="margin-top:12%">
            <!-- icon -->
            <div class="col-md-2" style="margin-left:-3%">
              <div class="buled"></div>
              <div class="garis-non-transit"></div>
              <div class="buled primary-blue" style="margin-top:80px"></div>
            </div>
            <!-- content kota -->
            <div class="col-md-4">
                <div class="row">Yogyakarta</div>
                <div class="row">JOG</div>
                <div class="row">GA xxxx</div>
                <div class="row margin8-top">&nbsp</div>
                <div class="row">Bandung</div>
                <div class="row">BDO</div>
            </div>
            <!-- content waktu -->
            <div class="col-md-6">
                <div class="row">7 Juli 2017</div>
                <div class="row">12.00</div>
                <div class="row margin8-top">&nbsp</div>
                <div class="row" style="margin-top:-12%;">&nbsp</div>
            </div>
          </div>
        </div> <!-- ct #panel pesawat2 -->
      </div>
      <!-- penumpang detail -->
    </div>
    <div class="panel panel-default form-control-non-radius" style="background-color:#efefef">
      <div class="panel-heading primary-blue form-control-non-radius">Total Biaya Perjalanan</div>
      <div class="panel-body">
        <a data-toggle="collapse" href="#detail1">
        <div class="col-md-10">
          <span style="color:#000000">Biaya Keberangkatan</span>
          <span class="pull-right" style="color:#000000">Rp. 3.900.000</span>
        </div></a>
        <!-- button remove -->
        <div class="col-md-2">
          <span class="caret pull-right"></span>
        </div>

        <!-- panel down -->
        <div id="detail1" class="panel-collapse collapse">
          <div class="panel-body margin5-top" style="margin-top:5%">
           <div class="col-md-6">
              <p>Lion Air</p>
              <p>Dewasa x1</p>
              <p>Anak x1</p>
              <p style="text-style:bold">Garuda</p>
              <p>Dewasa x1</p>
              <p>Anak x1</p>
            </div>
            <div class="col-md-6">
              <p><br></p>
              <p>Rp. 800.000</p>
              <p>Rp. 700.000</p>
              <p><br></p>
              <p>Rp. 800.000</p>
              <p>Rp. 700.000</p>
            </div>
          </div>
        </div> <!-- ct #panel penumpang1 -->

        <hr>
        <a data-toggle="collapse" href="#detail2">
        <div class="col-md-10">
          <span style="color:#000000">Biaya Kepulangan</span>
          <span class="pull-right" style="color:#000000">Rp. 3.900.000</span>
        </div></a>
        <!-- button remove -->
        <div class="col-md-2">
          <span class="caret pull-right"></span>
        </div>

        <!-- panel down -->
        <div id="detail2" class="panel-collapse collapse">
          <div class="panel-body margin5-top" style="margin-top:12%">
            <div class="col-md-6">
              <p>Lion Air</p>
              <p>Dewasa x1</p>
              <p>Anak x1</p>
              <p style="text-style:bold">Garuda</p>
              <p>Dewasa x1</p>
              <p>Anak x1</p>
            </div>
            <div class="col-md-6">
              <p><br></p>
              <p>Rp. 800.000</p>
              <p>Rp. 700.000</p>
              <p><br></p>
              <p>Rp. 800.000</p>
              <p>Rp. 700.000</p>
            </div>
          </div>
          </div>
        </div> <!-- ct #panel penumpang1 -->

      </div>
    </div>


  </div>
  <!-- ct Right Side -->

</div><!-- close tag container POL -->
@stop
