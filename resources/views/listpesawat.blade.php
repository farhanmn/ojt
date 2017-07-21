@extends('layouts.apps')
@section('content')
<div class="container editpadding">
  <center>
  <div class="row rowedit">

    <div class="col-xs-5 fontsize2 margintop1">
      Yogyakarta(JOG)
    </div>
    <div class="col-xs-2 margintop1">
      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    </div>
    <div class="col-xs-5 fontsize2 margintop1">
      Jakarta(CGK)
    </div>
    </div>
  <div class="row rowedit">
    <div class="col-xs-5 fontsize1">
      Senin, 17 Jul 2017
    </div>
    <div class="col-xs-2">

    </div>
    <div class="col-xs-5 fontsize1">
      Selasa, 18 Agt 2017
    </div>
  </div>
  <button type="button" class="btn btn-primary" id="btnpencarian" name="button">Ganti Pencarian</button>
  <div class="row rowedit">
  <div class="col-xs-12 " >
  <!-- Nav tabs -->

  <ul class="nav nav-tabs overidenavtab2" role="tablist">
    <li role="presentation" class="active"><a href="#keberangkatan" aria-controls="home" role="tab" data-toggle="tab">Keberangkatan</a></li>
    <li role="presentation"><a href="#kepulangan" aria-controls="profile" role="tab" data-toggle="tab">Kepulangan</a></li>
  </ul>
  </div>
  </div>
    </center>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="keberangkatan">
      <div class="panel panel-default radius">
        <div class="panel-heading warnaheading">
          <div class="row">
            <div class="col-xs-12 editpadding">
              <div class="col-xs-3 text-right editsizetext marginkhusus warnabiru" id="xc">
                Filter :
              </div>
              <div class="col-xs-3 text-left editpadding editsizetext widthharga warnabiru">
                Harga<span class="caret"></span>
              </div>

              <a href="" class="font-filter" class="warna dropdown-toggle" data-toggle="dropdown">
              <div class="col-xs-3 text-left editpadding editsizetext widthmaskapai warnabiru">
                Maskapai<span class="caret" style="color: black;"></span></a>
                <ul class="dropdown-menu" style="min-width: 200px">
                 <div  style="padding: 5px">
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
                </div>

              <div class="col-xs-3 text-left editpadding editsizetext widthwaktu warnabiru">
                Waktu<span class="caret"></span>
              </div>
            </div>
          </div>
        </div>

        <!-- mulai dari sini bagian isi nya, isi 1 -->
        <div class="panel panel-default radius bordertop" >
         <div class="panel-body" >
          <center>
          <div class="row">
            <div class="col-xs-3 kota">
             <img src="/image/Batik.png" style="width:100%;height:100%">
             <p>Batik Air</p>
            </div>
            <div class="col-xs-2 list1">
             <p>15:00</p>
             <p><br>16:00</p>
            </div>
            <div class="col-xs-3 list1" style="text-align:left">
            <p>JOG<br>(12-07-17)</p>
            <p>CGK<br>(12-07-17)</p>
            </div>
            <div class="col-xs-4 list1">
             <p>Rp 900.000<br>Langsung</p>
            </div>
         </div>

         <div class="row">
          <div class="col-xs-3"></div>
          <div class="col-xs-2 tanggal">
            <a data-toggle="collapse" href="#isidetail1">
           <button class="btn btn-primary btn-xs" id="details1">Detail</button></a>
          </div>
          <div class="col-xs-3 tanggal pointer">
            <a data-toggle="collapse" href="#pilihkelas1">
           <p class="clickable" id="kelas1" style="text-align:left">Pilih Kelas Lain</p></a>
          </div>
          <div class="col-xs-4">
           <input type="checkbox"></div>
          </div>
         </div>
        </center>

        <!-- isi detail 1 -->
        <div class="panel-heading panel-collapse collapse editdetailnya" id="isidetail1">
          <center>
            <div class="row">
              <div class="col-xs-3 editpadding">
                <p class="list1">Detail Pesawat</p>
                <img src="/image/Batik.png" style="width:60%;height:60%;">
                <p class="list1">Batik Air</p>
              </div>
              <div class="col-xs-2 editpadding top">
                <center>
                <p class="list1">7 Juli </p>
                <p class="list1">2017;12:17</p>
                <p class="list1">Jakarta</p>
              </center>
              </div>
              <div class="col-xs-3 editpadding editlamajalan">
                <p class="list1 cobasss">30 Menit</p>
              </div>
              <div class="col-xs-4 editpadding widthxs4 top">
                <p class="list1">7 Juli </p>
                <p class="list1">2017;13:10</p>
                <p class="list1">Solo</p>
              </div>
            </div>
          </center>
        </div>

        <!-- isi detail pilih kelas 1 -->
        <div class="panel-heading collapse editpadding editdetailnya" id="pilihkelas1">
          <div class="row rowedit">
        <div class="col-xs-12 fontsize2">
          <span>Pilih Kelas Lain</span>
        </div>
        </div>
        <div class="row rowedit">
          <div class="col-xs-12 editpadding atur1">
            <center>
              <div class="siputih pull-right buttonb1" name="button">Bisnis</div>
              <div class="siputih pull-right buttone1" name="button">Ekonomi</div>
                <div class="siputih pull-right buttonp1" name="button">Promo</div>
            </center>
          </div>
          <div class="col-xs-12 editpadding toptransit">
            <div class="menu-seat-responsive">
<ul class="menu-seat" style="width:100%;">
<li class="Promo text-center" style="width:45%;margin-left:4%;">
J <br>
<input class="ClassFare css-radio" type="radio" checked="" name="Fare_JT-0-14_Segment_0" onclick="selectFare('0','1','JT-0-14','Q')" 			publishfare="506000" nta="506000" availablecount="7" faresellkey="Q~QIDOW~M0_C23_F0_S16" id="FareClass-0-JT-0-14-Q" classofservice="Q">
<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
<b> Rp. 950.000</b>
<br>
Sisa : <b>7</b>
</li>
<li class="Economy text-center" style="width:45%;">
J <br>
<input class="ClassFare css-radio" type="radio" checked="" name="Fare_JT-0-14_Segment_0" onclick="selectFare('0','1','JT-0-14','Q')" 			publishfare="506000" nta="506000" availablecount="7" faresellkey="Q~QIDOW~M0_C23_F0_S16" id="FareClass-0-JT-0-14-Q" classofservice="Q">
<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
<b> Rp. 5.000.000</b>
<br>
Sisa : <b>7</b>
</li>
<li class="Economy text-center" style="width:45%; margin-left:4%;">
J <br>
<input class="ClassFare css-radio" type="radio" checked="" name="Fare_JT-0-14_Segment_0" onclick="selectFare('0','1','JT-0-14','Q')" 			publishfare="506000" nta="506000" availablecount="7" faresellkey="Q~QIDOW~M0_C23_F0_S16" id="FareClass-0-JT-0-14-Q" classofservice="Q">
<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
<b> Rp. 5.550.000</b>
<br>
Sisa : <b>7</b>
</li>
<li class="Bisnis text-center" style="width:45%;">
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

       <!-- mulai dari sini bagian isi nya, isi 2 -->
       <div class="panel panel-default radius" >
        <div class="panel-body">
         <center>
         <div class="row">
           <div class="col-xs-3 kota">
            <img src="/image/Lion.png" style="width:100%;height:100%">
            <p>Lion Air</p>
           </div>
           <div class="col-xs-2 list1">
            <p>15:00</p>
            <p><br>16:00</p>
           </div>
           <div class="col-xs-3 list1" style="text-align:left">
           <p>JOG<br>(12-07-17)</p>
           <p>CGK<br>(12-07-17)</p>
           </div>
           <div class="col-xs-4 list1">
            <p>Rp 900.000<br>Transit</p>
           </div>
        </div>

        <div class="row">
         <div class="col-xs-3"></div>
         <div class="col-xs-2 tanggal">
           <a data-toggle="collapse" href="#isidetail2">
          <button class="btn btn-primary btn-xs" id="details2">Detail</button></a>
         </div>
         <div class="col-xs-3 tanggal pointer">
           <a data-toggle="collapse" href="#pilihkelas2">
          <p class="clickable" id="kelas2" style="text-align:left">Pilih Kelas Lain</p></a>
         </div>
         <div class="col-xs-4">
          <input type="checkbox"></div>
         </div>
        </div>
       </center>

       <!-- isi detail 2 -->
       <div class="panel-heading collapse editdetailnya" id="isidetail2">
         <center>
           <div class="row rowedit">
             <div class="col-xs-12 editpadding text-left p">
               <span class="list1">Detail Penerbangan</span>
             </div>
             <div class="col-xs-3 toptransit editpadding">
               <img src="/image/Lion.png" style="width:60%;height:60%">
               <p class="list1">Lion Air</p>
             </div>
             <div class="col-xs-2 editpadding toptransit">
               <center>
               <p class="list1">7 Juli </p>
               <p class="list1">2017;12:30</p>
               <p class="list1">Jakarta</p>
             </center>
             </div>
             <div class="col-xs-3 editpadding editlamajalant">
               <p class="list1 cobasss">1 Jam 30 Menit</p>
             </div>
             <div class="col-xs-4 editpadding widthxs4 toptransit">
               <p class="list1">7 Juli </p>
               <p class="list1">2017;14:00</p>
               <p class="list1">Padang</p>
             </div>

             <div class="col-xs-12">
                 <div class="panel-body editpadding overridecol2">
                   <div class="col-xs-6 toptransit list1">
                     <p>Transit</p>
                   </div>
                   <div class="col-xs-6 toptransit list1">
                     <p>1 Jam 15 Menit</p>
                   </div>
                 </div>
             </div>

             <div class="col-xs-3 toptransit editpadding">
               <img src="/image/Citilink.png" style="width:60%;height:60%">
               <p class="list1">Citilink</p>
             </div>
             <div class="col-xs-2 editpadding toptransit">
               <center>
               <p class="list1">7 Juli </p>
               <p class="list1">2017;12:30</p>
               <p class="list1">Bandung</p>
             </center>
             </div>
             <div class="col-xs-3 editpadding editlamajalant">
               <p class="list1 cobasss">1 Jam 30 Menit</p>
             </div>
             <div class="col-xs-4 editpadding widthxs4 toptransit">
               <p class="list1">7 Juli </p>
               <p class="list1">2017;14:00</p>
               <p class="list1">Padang</p>
             </div>

           </div>
         </center>

       </div>

       <!-- isi detail pilih kelas 2 -->
       <div class="panel-heading collapse editdetailnya" id="pilihkelas2">
         <div class="row rowedit">
       <div class="col-xs-12 fontsize2">
         <span>Pilih Kelas Lain</span>
       </div>
       </div>
       <div class="row rowedit">
         <div class="col-xs-12 editpadding atur2">
           <center>
             <div class="siputih pull-right buttonb1" name="button">Bisnis</div>
             <div class="siputih pull-right buttone1" name="button">Ekonomi</div>
               <div class="siputih pull-right buttonp1" name="button">Promo</div>
           </center>
         </div>
         <div class="col-xs-12 editpadding toptransit">
           <div class="menu-seat-responsive">
<ul class="menu-seat" style="width:100%;">
<li class="Promo text-center" style="width:45%; margin-left:4%;">
J <br>
<input class="ClassFare css-radio" type="radio" checked="" name="Fare_JT-0-14_Segment_0" onclick="selectFare('0','1','JT-0-14','Q')" 			publishfare="506000" nta="506000" availablecount="7" faresellkey="Q~QIDOW~M0_C23_F0_S16" id="FareClass-0-JT-0-14-Q" classofservice="Q">
<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
<b> Rp. 950.000</b>
<br>
Sisa : <b>7</b>
</li>
<li class="Economy text-center" style="width:45%;">
J <br>
<input class="ClassFare css-radio" type="radio" checked="" name="Fare_JT-0-14_Segment_0" onclick="selectFare('0','1','JT-0-14','Q')" 			publishfare="506000" nta="506000" availablecount="7" faresellkey="Q~QIDOW~M0_C23_F0_S16" id="FareClass-0-JT-0-14-Q" classofservice="Q">
<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
<b> Rp. 5.000.000</b>
<br>
Sisa : <b>7</b>
</li>
<li class="Economy text-center" style="width:45%; margin-left:4%;">
J <br>
<input class="ClassFare css-radio" type="radio" checked="" name="Fare_JT-0-14_Segment_0" onclick="selectFare('0','1','JT-0-14','Q')" 			publishfare="506000" nta="506000" availablecount="7" faresellkey="Q~QIDOW~M0_C23_F0_S16" id="FareClass-0-JT-0-14-Q" classofservice="Q">
<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
<b> Rp. 5.550.000</b>
<br>
Sisa : <b>7</b>
</li>
<li class="Bisnis text-center" style="width:45%;">
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

    <!-- BAGIAN KEPULANGAN -->
    <div role="tabpanel" class="tab-pane" id="kepulangan">
      <div class="panel panel-default radius">
        <div class="panel-heading warnaheading">
          <div class="row">
            <div class="col-xs-12 editpadding">
              <div class="col-xs-3 text-right editsizetext marginkhusus warnabiru" id="xc2">
                Filter :
              </div>
              <div class="col-xs-3 text-left editpadding editsizetext widthharga warnabiru">
                Harga<span class="caret"></span>
              </div>
              <div class="col-xs-3 text-left editpadding editsizetext widthmaskapai warnabiru">
                Maskapai<span class="caret"></span>
              </div>
              <div class="col-xs-3 text-left editpadding editsizetext widthwaktu warnabiru">
                Waktu<span class="caret"></span>
              </div>
            </div>
          </div>
        </div>

        <!-- mulai dari sini bagian isi kepulangan, isi 1 -->
        <div class="panel panel-default radius bordertop" >
         <div class="panel-body" >
          <center>
          <div class="row">
            <div class="col-xs-3 kota">
             <img src="/image/Batik.png" style="width:100%;height:100%">
             <p>Batik Air</p>
            </div>
            <div class="col-xs-2 list1">
             <p>15:00</p>
             <p><br>16:00</p>
            </div>
            <div class="col-xs-3 list1" style="text-align:left">
            <p>JOG<br>(12-07-17)</p>
            <p>CGK<br>(12-07-17)</p>
            </div>
            <div class="col-xs-4 list1">
             <p>Rp 900.000<br>Langsung</p>
            </div>
         </div>

         <div class="row">
          <div class="col-xs-3"></div>
          <div class="col-xs-2 tanggal">
            <a data-toggle="collapse" href="#isidetail3">
           <button class="btn btn-primary btn-xs" id="details3">Detail</button></a>
          </div>
          <div class="col-xs-3 tanggal pointer">
            <a data-toggle="collapse" href="#pilihkelas3">
           <p class="clickable" id="kelas3" style="text-align:left">Pilih Kelas Lain</p></a>
          </div>
          <div class="col-xs-4">
           <input type="checkbox"></div>
          </div>
         </div>
        </center>

        <!-- isi detail 1 kepulangan-->
        <div class="panel-heading panel-collapse collapse editdetailnya" id="isidetail3">
          <center>
            <div class="row rowedit">
              <div class="col-xs-3 editpadding">
                <p class="list1">Detail Pesawat</p>
                <img src="/image/Batik.png" style="width:60%;height:60%;">
                <p class="list1">Batik Air</p>
              </div>
              <div class="col-xs-2 editpadding top">
                <center>
                <p class="list1">7 Juli </p>
                <p class="list1">2017;12:17</p>
                <p class="list1">Jakarta</p>
              </center>
              </div>
              <div class="col-xs-3 editpadding editlamajalan">
                <p class="list1 cobasss">30 Menit</p>
              </div>
              <div class="col-xs-4 editpadding widthxs4 top">
                <p class="list1">7 Juli </p>
                <p class="list1">2017;13:10</p>
                <p class="list1">Solo</p>
              </div>
            </div>
          </center>
        </div>

        <!-- isi detail pilih kelas 1 -->
        <div class="panel-heading collapse editpadding editdetailnya" id="pilihkelas3">
          <div class="row rowedit">
        <div class="col-xs-12 fontsize2">
          <span>Pilih Kelas Lain</span>
        </div>
        </div>
        <div class="row rowedit">
          <div class="col-xs-12 editpadding atur1">
            <center>
              <div class="siputih pull-right buttonb1" name="button">Bisnis</div>
              <div class="siputih pull-right buttone1" name="button">Ekonomi</div>
                <div class="siputih pull-right buttonp1" name="button">Promo</div>
            </center>
          </div>
          <div class="col-xs-12 editpadding toptransit">
            <div class="menu-seat-responsive">
<ul class="menu-seat" style="width:100%;">
<li class="Promo text-center" style="width:45%;margin-left:4%;">
J <br>
<input class="ClassFare css-radio" type="radio" checked="" name="Fare_JT-0-14_Segment_0" onclick="selectFare('0','1','JT-0-14','Q')" 			publishfare="506000" nta="506000" availablecount="7" faresellkey="Q~QIDOW~M0_C23_F0_S16" id="FareClass-0-JT-0-14-Q" classofservice="Q">
<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
<b> Rp. 950.000</b>
<br>
Sisa : <b>7</b>
</li>
<li class="Economy text-center" style="width:45%;">
J <br>
<input class="ClassFare css-radio" type="radio" checked="" name="Fare_JT-0-14_Segment_0" onclick="selectFare('0','1','JT-0-14','Q')" 			publishfare="506000" nta="506000" availablecount="7" faresellkey="Q~QIDOW~M0_C23_F0_S16" id="FareClass-0-JT-0-14-Q" classofservice="Q">
<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
<b> Rp. 5.000.000</b>
<br>
Sisa : <b>7</b>
</li>
<li class="Economy text-center" style="width:45%;margin-left:4%;">
J <br>
<input class="ClassFare css-radio" type="radio" checked="" name="Fare_JT-0-14_Segment_0" onclick="selectFare('0','1','JT-0-14','Q')" 			publishfare="506000" nta="506000" availablecount="7" faresellkey="Q~QIDOW~M0_C23_F0_S16" id="FareClass-0-JT-0-14-Q" classofservice="Q">
<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
<b> Rp. 5.550.000</b>
<br>
Sisa : <b>7</b>
</li>
<li class="Bisnis text-center" style="width:45%;">
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



      <!-- mulai dari sini bagian isi kepulangan, isi 2 -->
      <div class="panel panel-default radius" >
       <div class="panel-body">
        <center>
        <div class="row">
          <div class="col-xs-3 kota">
           <img src="/image/Lion.png" style="width:100%;height:100%">
           <p>Lion Air</p>
          </div>
          <div class="col-xs-2 list1">
           <p>15:00</p>
           <p><br>16:00</p>
          </div>
          <div class="col-xs-3 list1" style="text-align:left">
          <p>JOG<br>(12-07-17)</p>
          <p>CGK<br>(12-07-17)</p>
          </div>
          <div class="col-xs-4 list1">
           <p>Rp 900.000<br>Transit</p>
          </div>
       </div>

       <div class="row">
        <div class="col-xs-3"></div>
        <div class="col-xs-2 tanggal">
          <a data-toggle="collapse" href="#isidetail4">
         <button class="btn btn-primary btn-xs" id="details4">Detail</button></a>
        </div>
        <div class="col-xs-3 tanggal pointer">
          <a data-toggle="collapse" href="#pilihkelas4">
         <p class="clickable" id="kelas4" style="text-align:left">Pilih Kelas Lain</p></a>
        </div>
        <div class="col-xs-4">
         <input type="checkbox"></div>
        </div>
       </div>
      </center>

      <!-- isi detail 2 -->
      <div class="panel-heading collapse editdetailnya" id="isidetail4">
        <center>
          <div class="row rowedit">
            <div class="col-xs-12 editpadding text-left p">
              <span class="list1">Detail Penerbangan</span>
            </div>
            <div class="col-xs-3 toptransit editpadding">
              <img src="/image/Lion.png" style="width:60%;height:60%">
              <p class="list1">Lion Air</p>
            </div>
            <div class="col-xs-2 editpadding toptransit">
              <center>
              <p class="list1">7 Juli </p>
              <p class="list1">2017;12:30</p>
              <p class="list1">Jakarta</p>
            </center>
            </div>
            <div class="col-xs-3 editpadding editlamajalant">
              <p class="list1 cobasss">1 Jam 30 Menit</p>
            </div>
            <div class="col-xs-4 editpadding widthxs4 toptransit">
              <p class="list1">7 Juli </p>
              <p class="list1">2017;14:00</p>
              <p class="list1">Padang</p>
            </div>

            <div class="col-xs-12">
                <div class="panel-body editpadding overridecol2">
                  <div class="col-xs-6 toptransit list1">
                    <p>Transit</p>
                  </div>
                  <div class="col-xs-6 toptransit list1">
                    <p>1 Jam 15 Menit</p>
                  </div>
                </div>
            </div>

            <div class="col-xs-3 toptransit editpadding">
              <img src="/image/Citilink.png" style="width:60%;height:60%">
              <p class="list1">Citilink</p>
            </div>
            <div class="col-xs-2 editpadding toptransit">
              <center>
              <p class="list1">7 Juli </p>
              <p class="list1">2017;12:30</p>
              <p class="list1">Bandung</p>
            </center>
            </div>
            <div class="col-xs-3 editpadding editlamajalant">
              <p class="list1 cobasss">1 Jam 30 Menit</p>
            </div>
            <div class="col-xs-4 editpadding widthxs4 toptransit">
              <p class="list1">7 Juli </p>
              <p class="list1">2017;14:00</p>
              <p class="list1">Padang</p>
            </div>

          </div>
        </center>

      </div>

      <!-- isi detail pilih kelas 2 -->
      <div class="panel-heading collapse editdetailnya" id="pilihkelas4">
        <div class="row rowedit">
      <div class="col-xs-12 fontsize2">
        <span>Pilih Kelas Lain</span>
      </div>
      </div>
      <div class="row rowedit">
        <div class="col-xs-12 editpadding atur2">
          <center>
            <div class="siputih pull-right buttonb1" name="button">Bisnis</div>
            <div class="siputih pull-right buttone1" name="button">Ekonomi</div>
              <div class="siputih pull-right buttonp1" name="button">Promo</div>
          </center>
        </div>
        <div class="col-xs-12 editpadding toptransit">
          <div class="menu-seat-responsive">
<ul class="menu-seat" style="width:100%;">
<li class="Promo text-center" style="width:45%; margin-left:4%;">
J <br>
<input class="ClassFare css-radio" type="radio" checked="" name="Fare_JT-0-14_Segment_0" onclick="selectFare('0','1','JT-0-14','Q')" 			publishfare="506000" nta="506000" availablecount="7" faresellkey="Q~QIDOW~M0_C23_F0_S16" id="FareClass-0-JT-0-14-Q" classofservice="Q">
<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
<b> Rp. 950.000</b>
<br>
Sisa : <b>7</b>
</li>
<li class="Economy text-center" style="width:45%;">
J <br>
<input class="ClassFare css-radio" type="radio" checked="" name="Fare_JT-0-14_Segment_0" onclick="selectFare('0','1','JT-0-14','Q')" 			publishfare="506000" nta="506000" availablecount="7" faresellkey="Q~QIDOW~M0_C23_F0_S16" id="FareClass-0-JT-0-14-Q" classofservice="Q">
<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
<b> Rp. 5.000.000</b>
<br>
Sisa : <b>7</b>
</li>
<li class="Economy text-center" style="width:45%; margin-left:4%;">
J <br>
<input class="ClassFare css-radio" type="radio" checked="" name="Fare_JT-0-14_Segment_0" onclick="selectFare('0','1','JT-0-14','Q')" 			publishfare="506000" nta="506000" availablecount="7" faresellkey="Q~QIDOW~M0_C23_F0_S16" id="FareClass-0-JT-0-14-Q" classofservice="Q">
<label for="FareClass-0-JT-0-14-Q" class="css-label-radio radGroup2"></label><br>
<b> Rp. 5.550.000</b>
<br>
Sisa : <b>7</b>
</li>
<li class="Bisnis text-center" style="width:45%;">
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

  <!-- Floating button -->
<div class="container editpadding">
  <div class="row rowedit">
    <div class="col-xs-12">
      <div class="btn-group">
        <a href="#" class="btn btn-primary btn-circle btn-lg btn-fab" id="main" data-toggle="tooltip" data-placement="right" data-original-title="Other">
          <i class="glyphicon glyphicon-list" style="line-height: 1.50;">

          </i>
        </a>
      </div>
    </div>
  </div>
</div>





<!-- ini penutup div container paling atas -->
</div>


@stop
