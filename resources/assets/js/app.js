// first middle last name
$("#namaLengkap").on('input',function(){
      var name = $('#namaLengkap').val();
      var first=""; var middle=""; var last="";
      var angka=0; var countSpace=0; var simpan=[];
      var s_untrim=name;
      var s=s_untrim.trim();
      var s_upper=s.toUpperCase();
      s_upper = s_upper.replace( /\s\s+/g,' ');
      for (var i=0; i<s_upper.length; i++){
        if ( s_upper[i]==' '){
            countSpace++;
            simpan[angka]=i;
            angka++;
          }
      }
      var angkaAkhir=angka;
      angka=0;
      var batasFirst=0; var batasMiddle=0;
      if (countSpace==0 || (countSpace==1 && simpan[angka]<3)) {
        first=last=s_upper;
        console.log("satu");
    }else if ((countSpace==1 && simpan[angka]>3) || (countSpace==2 && simpan[angka]<3)) {
        if (simpan[angka]<3) {
            batasFirst=simpan[angka+1];
        }else {
            batasFirst=simpan[angka];
        }
        first=s_upper.substr(0,batasFirst);
        last=s_upper.substr(batasFirst,s_upper.length);
        console.log("dua");
    }else {
        if (simpan[angka]<3) {
            batasFirst=simpan[angka+1];
        }else {
            batasFirst=simpan[angka];
        }
        first=s_upper.substr(0,batasFirst);
        batasMiddle=simpan[angkaAkhir-1];
        var batasLast=batasMiddle;
        batasMiddle-=batasFirst;
        middle=s_upper.substr(batasFirst, batasMiddle);
        last=s_upper.substr(batasLast, s_upper.length);
        console.log("tiga");
    }

    first = first.replace( ' ','');
    middle = middle.replace( ' ','');
    last = last.replace( ' ','');
  document.getElementById('firstName').innerHTML=first;
  document.getElementById('middleName').innerHTML=middle;
  document.getElementById('lastName').innerHTML=last;
});

// passanger validation
var isianDewasa= "1 Dewasa"; var vDewasa=1;
var isianAnak; var vAnak=0;
var isianBayi; var vBayi=0;
document.getElementById("jumlahTotal").innerText = isianDewasa;
document.getElementById('kurangD').disabled=true;
document.getElementById('kurangA').disabled=true;
document.getElementById('kurangB').disabled=true;

function tambahDewasa(){
    var isiTotal = document.getElementById("jumlahTotal").innerText;
    var dewasa = document.getElementById("isiDewasa").value;
    if (vDewasa+vAnak<9) vDewasa = parseInt(dewasa)+1;
    if (vDewasa>0) isianDewasa = " Dewasa";
    if (vAnak>0) isianAnak = " Anak";
    if (vBayi>0) isianBayi = " Bayi";
    document.getElementById("isiDewasa").value = vDewasa;
    if (vDewasa>0 && vAnak+vBayi>0) {
        isianDewasa = vDewasa + isianDewasa + ",";
    }else if (vDewasa>0 && vAnak+vBayi==0){
        isianDewasa = vDewasa + isianDewasa;
    }else {
        isianDewasa = "";
    }
    if (vAnak>0 && vBayi>0) {
        isianAnak = vAnak + isianAnak + ",";
    }else if (vAnak>0 && vBayi==0) {
        isianAnak = vAnak + isianAnak;
    }else {
        isianAnak = "";
    }
    if (vBayi>0) {
        isianBayi = vBayi + isianBayi;
    }else {
        isianBayi = "";
    }

    if (vDewasa>1){
        document.getElementById('kurangD').disabled=false;
    }else {
        document.getElementById('kurangD').disabled=true;
    }

    if (vDewasa+vAnak>8) {
        document.getElementById('tambahD').disabled=true;
        document.getElementById('tambahA').disabled=true;
    }else{
        document.getElementById('tambahD').disabled=false;
        document.getElementById('tambahA').disabled=false;
    }

    if (vBayi<vDewasa) {
        document.getElementById('tambahB').disabled=false;
    }else{
        document.getElementById('tambahB').disabled=true;
    }

    document.getElementById("jumlahTotal").innerText = isianDewasa + " " + isianAnak + " " + isianBayi;
}
function kurangDewasa(){
    var isiTotal = document.getElementById("jumlahTotal").innerText;
    var dewasa = document.getElementById("isiDewasa").value;
    if (vDewasa>1) vDewasa = parseInt(dewasa)-1;
    if (vBayi>vDewasa) {
        vBayi=vDewasa;
        document.getElementById("isiBayi").value = vBayi;
    }
    if (vDewasa>0) isianDewasa = " Dewasa";
    if (vAnak>0) isianAnak = " Anak";
    if (vBayi>0) isianBayi = " Bayi";
    document.getElementById("isiDewasa").value = vDewasa;
    if (vDewasa>0 && vAnak+vBayi>0) {
        isianDewasa = vDewasa + isianDewasa + ",";
    }else if (vDewasa>0 && vAnak+vBayi==0){
        isianDewasa = vDewasa + isianDewasa;
    }else {
        isianDewasa = "";
    }
    if (vAnak>0 && vBayi>0) {
        isianAnak = vAnak + isianAnak + ",";
    }else if (vAnak>0 && vBayi==0) {
        isianAnak = vAnak + isianAnak;
    }else {
        isianAnak = "";
    }
    if (vBayi>0) {
        isianBayi = vBayi + isianBayi;
    }else {
        isianBayi = "";
    }

    if (vDewasa>1){
        document.getElementById('kurangD').disabled=false;
    }else {
        document.getElementById('kurangD').disabled=true;
    }

    if (vDewasa+vAnak>8) {
        document.getElementById('tambahD').disabled=true;
        document.getElementById('tambahA').disabled=true;
    }else{
        document.getElementById('tambahD').disabled=false;
        document.getElementById('tambahA').disabled=false;
    }

    if (vBayi<vDewasa) {
        document.getElementById('tambahB').disabled=false;
    }else{
        document.getElementById('tambahB').disabled=true;
    }

    document.getElementById("jumlahTotal").innerText = isianDewasa + " " + isianAnak + " " + isianBayi;
}
function tambahAnak(){
    var isiTotal = document.getElementById("jumlahTotal").innerText;
    var anak = document.getElementById("isiAnak").value;
    if (vDewasa+vAnak<9) vAnak = parseInt(anak)+1;
    if (vDewasa>0) isianDewasa = " Dewasa";
    if (vAnak>0) isianAnak = " Anak";
    if (vBayi>0) isianBayi = " Bayi";
    document.getElementById("isiAnak").value = vAnak;
    if (vDewasa>0 && vAnak+vBayi>0) {
        isianDewasa = vDewasa + isianDewasa + ",";
    }else if (vDewasa>0 && vAnak+vBayi==0){
        isianDewasa = vDewasa + isianDewasa;
    }else {
        isianDewasa = "";
    }
    if (vAnak>0 && vBayi>0) {
        isianAnak = vAnak + isianAnak + ",";
    }else if (vAnak>0 && vBayi==0) {
        isianAnak = vAnak + isianAnak;
    }else {
        isianAnak = "";
    }
    if (vBayi>0) {
        isianBayi = vBayi + isianBayi;
    }else {
        isianBayi = "";
    }

    if (vAnak>0){
        document.getElementById('kurangA').disabled=false;
    }else {
        document.getElementById('kurangA').disabled=true;
    }

    if (vDewasa+vAnak>8) {
        document.getElementById('tambahD').disabled=true;
        document.getElementById('tambahA').disabled=true;
    }else{
        document.getElementById('tambahD').disabled=false;
        document.getElementById('tambahA').disabled=false;
    }

    if (vBayi<vDewasa) {
        document.getElementById('tambahB').disabled=false;
    }else{
        document.getElementById('tambahB').disabled=true;
    }

    document.getElementById("jumlahTotal").innerText = isianDewasa + " " + isianAnak + " " + isianBayi;
}
function kurangAnak(){
    var isiTotal = document.getElementById("jumlahTotal").innerText;
    var anak = document.getElementById("isiAnak").value;
    if (vAnak>0) vAnak = parseInt(anak)-1;

    if (vDewasa>0) isianDewasa = " Dewasa";
    if (vAnak>0) isianAnak = " Anak";
    if (vBayi>0) isianBayi = " Bayi";
    document.getElementById("isiAnak").value = vAnak;
    if (vDewasa>0 && vAnak+vBayi>0) {
        isianDewasa = vDewasa + isianDewasa + ",";
    }else if (vDewasa>0 && vAnak+vBayi==0){
        isianDewasa = vDewasa + isianDewasa;
    }else {
        isianDewasa = "";
    }
    if (vAnak>0 && vBayi>0) {
        isianAnak = vAnak + isianAnak + ",";
    }else if (vAnak>0 && vBayi==0) {
        isianAnak = vAnak + isianAnak;
    }else {
        isianAnak = "";
    }
    if (vBayi>0) {
        isianBayi = vBayi + isianBayi;
    }else {
        isianBayi = "";
    }

    if (vAnak>0){
        document.getElementById('kurangA').disabled=false;
    }else {
        document.getElementById('kurangA').disabled=true;
    }

    if (vDewasa+vAnak>8) {
        document.getElementById('tambahD').disabled=true;
        document.getElementById('tambahA').disabled=true;
    }else{
        document.getElementById('tambahD').disabled=false;
        document.getElementById('tambahA').disabled=false;
    }

    if (vBayi<vDewasa) {
        document.getElementById('tambahB').disabled=false;
    }else{
        document.getElementById('tambahB').disabled=true;
    }

    document.getElementById("jumlahTotal").innerText = isianDewasa + " " + isianAnak + " " + isianBayi;
}
function tambahBayi(){
    var isiTotal = document.getElementById("jumlahTotal").innerText;
    var bayi = document.getElementById("isiBayi").value;
    if (vBayi<vDewasa+vAnak) vBayi = parseInt(bayi)+1;
    if (vDewasa>0) isianDewasa = " Dewasa";
    if (vAnak>0) isianAnak = " Anak";
    if (vBayi>0) isianBayi = " Bayi";
    document.getElementById("isiBayi").value = vBayi;
    if (vDewasa>0 && vAnak+vBayi>0) {
        isianDewasa = vDewasa + isianDewasa + ",";
    }else if (vDewasa>0 && vAnak+vBayi==0){
        isianDewasa = vDewasa + isianDewasa;
    }else {
        isianDewasa = "";
    }
    if (vAnak>0 && vBayi>0) {
        isianAnak = vAnak + isianAnak + ",";
    }else if (vAnak>0 && vBayi==0) {
        isianAnak = vAnak + isianAnak;
    }else {
        isianAnak = "";
    }
    if (vBayi>0) {
        isianBayi = vBayi + isianBayi;
    }else {
        isianBayi = "";
    }

    if (vBayi>0){
        document.getElementById('kurangB').disabled=false;
    }else {
        document.getElementById('kurangB').disabled=true;
    }

    if (vBayi>=vDewasa) {
        document.getElementById('tambahB').disabled=true;
    }else{
        document.getElementById('tambahB').disabled=false;
    }

    document.getElementById("jumlahTotal").innerText = isianDewasa + " " + isianAnak + " " + isianBayi;
}
function kurangBayi(){
    var isiTotal = document.getElementById("jumlahTotal").innerText;
    var bayi = document.getElementById("isiBayi").value;
    if (vBayi>0) vBayi = parseInt(bayi)-1;
    if (vDewasa>0) isianDewasa = " Dewasa";
    if (vAnak>0) isianAnak = " Anak";
    if (vBayi>0) isianBayi = " Bayi";
    document.getElementById("isiBayi").value = vBayi;
    if (vDewasa>0 && vAnak+vBayi>0) {
        isianDewasa = vDewasa + isianDewasa + ",";
    }else if (vDewasa>0 && vAnak+vBayi==0){
        isianDewasa = vDewasa + isianDewasa;
    }else {
        isianDewasa = "";
    }
    if (vAnak>0 && vBayi>0) {
        isianAnak = vAnak + isianAnak + ",";
    }else if (vAnak>0 && vBayi==0) {
        isianAnak = vAnak + isianAnak;
    }else {
        isianAnak = "";
    }
    if (vBayi>0) {
        isianBayi = vBayi + isianBayi;
    }else {
        isianBayi = "";
    }

    if (vBayi>0){
        document.getElementById('kurangB').disabled=false;
    }else {
        document.getElementById('kurangB').disabled=true;
    }

    if (vBayi>=vDewasa) {
        document.getElementById('tambahB').disabled=true;
    }else{
        document.getElementById('tambahB').disabled=false;
    }

    document.getElementById("jumlahTotal").innerText = isianDewasa + " " + isianAnak + " " + isianBayi;
}

$('#checkbox').click(function(){
  if (document.getElementById('checkbox').checked) {
    document.getElementById('inputdatepulg').disabled=false;
  }else {
    document.getElementById('inputdatepulg').disabled=true;
  }
});

$('#btnswap').click(function(){
  var dari = $select[0].selectize.getValue();
  var ke = $select2[0].selectize.getValue();

  $select[0].selectize.setValue(ke);
  $select2[0].selectize.setValue(dari);

});

// fungsi checkbox + badge ya ini
$('#checkbox1').click(function(){

  if (document.getElementById('checkbox1').checked) {
    var nilaibadge = parseInt($('#nomorbadge').text(), 10) +1;
    $('#nomorbadge').text(nilaibadge);
  } else {
    var nilaibadge = parseInt($('#nomorbadge').text(), 10) -1;
    $('#nomorbadge').text(nilaibadge);
  }
});
$('#checkbox2').click(function(){

  if (document.getElementById('checkbox2').checked) {
    var nilaibadge = parseInt($('#nomorbadge').text(), 10) +1;
    $('#nomorbadge').text(nilaibadge);
  } else {
    var nilaibadge = parseInt($('#nomorbadge').text(), 10) -1;
    $('#nomorbadge').text(nilaibadge);
  }
});
$('#checkbox3').click(function(){

  if (document.getElementById('checkbox3').checked) {
    var nilaibadge = parseInt($('#nomorbadge').text(), 10) +1;
    $('#nomorbadge').text(nilaibadge);
  } else {
    var nilaibadge = parseInt($('#nomorbadge').text(), 10) -1;
    $('#nomorbadge').text(nilaibadge);
  }
});
$('#checkbox4').click(function(){

  if (document.getElementById('checkbox4').checked) {
    var nilaibadge = parseInt($('#nomorbadge').text(), 10) +1;
    $('#nomorbadge').text(nilaibadge);
  } else {
    var nilaibadge = parseInt($('#nomorbadge').text(), 10) -1;
    $('#nomorbadge').text(nilaibadge);
  }
});
$('#checkbox5').click(function(){

  if (document.getElementById('checkbox5').checked) {
    var nilaibadge = parseInt($('#nomorbadge').text(), 10) +1;
    $('#nomorbadge').text(nilaibadge);
  } else {
    var nilaibadge = parseInt($('#nomorbadge').text(), 10) -1;
    $('#nomorbadge').text(nilaibadge);
  }
});
// yak fungsi click checkbox auto increment nya sampe sini aja
