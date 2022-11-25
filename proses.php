<?php 
// variable permasalahan
$permasalahan = "";
// Variabel Indikasi Gejala
$arr_indikasi = array();

//Variabel Gejala
$g1 = $_POST['g1'];
$g2 = $_POST['g2'];
$g3 = $_POST['g3'];
$g4 = $_POST['g4'];
$g5 = $_POST['g5'];
$g6 = $_POST['g6'];
$g7 = $_POST['g7'];
$g8 = $_POST['g8'];
$g9 = $_POST['g9'];
$g10 = $_POST['g10'];
$g11 = $_POST['g11'];
$g12 = $_POST['g12'];
$g13 = $_POST['g13'];
$g14 = $_POST['g14'];
$g15 = $_POST['g15'];
$g16 = $_POST['g16'];
$g17 = $_POST['g17'];
$g18 = $_POST['g18'];
$g19 = $_POST['g19'];
$g20 = $_POST['g20'];
$g21 = $_POST['g21'];
$g22 = $_POST['g22'];
$g23 = $_POST['g23'];
$g24 = $_POST['g24'];
$g25 = $_POST['g25'];
$g26 = $_POST['g26'];
$g27 = $_POST['g27'];

//Algoritma & processing
if($g1 == '1'){
  array_push($arr_indikasi,"Daun berlubang tidak beraturan");
}

if($g2 == '1'){
  array_push($arr_indikasi,"Daun menjadi robek dan terpotong potong");
}

if($g3 == '1'){
  array_push($arr_indikasi,"daun tinggal tulang");
}

if($g4 == '1'){
  array_push($arr_indikasi,"daun berlubang kecil dan besar");
}

if($g5 == '1'){
  array_push($arr_indikasi,"bunga menjadi rusak");
}

if($g6 == '1'){
  array_push($arr_indikasi,"noda hitam kecil bekas tusukan");
}

if($g7 == '1'){
  array_push($arr_indikasi,"bercak coklat pada buah");
}

if($g8 == '1'){
  array_push($arr_indikasi,"buah gugur dan busuk");
}

if($g9 == '1'){
  array_push($arr_indikasi,"bentuk buah bengkok");
}

if($g10 == '1'){
  array_push($arr_indikasi,"daun kering dan mati");
}

if($g11 == '1'){
  array_push($arr_indikasi,"ukuran buah kecil");
}

if($g12 == '1'){
  array_push($arr_indikasi,"tanaman layu");
}

if($g13 == '1'){
  array_push($arr_indikasi,"daun berkerut");
}

if($g14 == '1'){
  array_push($arr_indikasi,"tanaman mati");
}

if($g15 == '1'){
  array_push($arr_indikasi,"tanaman menjadi kerdil");
}

if($g16 == '1'){
  array_push($arr_indikasi,"bercak putih di permukaan atas dan bawah daun");
}

if($g17 == '1'){
  array_push($arr_indikasi,"bercak coklat pada daun");
}

if($g18 == '1'){
  array_push($arr_indikasi,"bercak daun membesar");
}

if($g19 == '1'){
  array_push($arr_indikasi,"bercak kuning");
}

if($g20 == '1'){
  array_push($arr_indikasi,"bercak tidak beraturan");
}

if($g21 == '1'){
  array_push($arr_indikasi,"bentuk buah tidak normal");
}

if($g22 == '1'){
  array_push($arr_indikasi,"buah tidak beraroma dan berasa");
}

if($g23 == '1'){
  array_push($arr_indikasi,"batang dan daun tertutup cendawan");
}

if($g24 == '1'){
  array_push($arr_indikasi,"bila akar dicabut akar bengkak");
}

if($g25 == '1'){
  array_push($arr_indikasi,"pada batang terdapat bercak memanjang coklat tua");
}

if($g26 == '1'){
  array_push($arr_indikasi,"pada buah bercak berbentuk bulat dan kebasah-basahan");
}

if($g27 == '1'){
  array_push($arr_indikasi,"daun layu secara mendadak dan tetap");
}

$tg1 = sqrt(pow(1 - $g1, 2) + pow(1 - $g2, 2) + pow(1 - $g3, 2) + pow(0 - $g4, 2) + pow(0 - $g5, 2) + pow(0 - $g6, 2) + pow(0 - $g7, 2) + pow(0 - $g8, 2) + pow(0 - $g9, 2) + pow(0 - $g10, 2) + pow(0 - $g11, 2) + pow(0 - $g12, 2) + pow(0 - $g13, 2) + pow(0 - $g14, 2) + pow(0 - $g15, 2) + pow(0 - $g16, 2) + pow(0 - $g17, 2) + pow(0 - $g18, 2) + pow(0 - $g19, 2) + pow(0 - $g20, 2) + pow(0 - $g21, 2) + pow(0 - $g22, 2) + pow(0 - $g23, 2) + pow(0 - $g24, 2) + pow(0 - $g25, 2) + pow(0 - $g26, 2) + pow(0 - $g27, 2));
$tg2 = sqrt(pow(1 - $g1, 2) + pow(0 - $g2, 2) + pow(0 - $g3, 2) + pow(0 - $g4, 2) + pow(1 - $g5, 2) + pow(1 - $g6, 2) + pow(0 - $g7, 2) + pow(0 - $g8, 2) + pow(0 - $g9, 2) + pow(0 - $g10, 2) + pow(0 - $g11, 2) + pow(0 - $g12, 2) + pow(0 - $g13, 2) + pow(0 - $g14, 2) + pow(0 - $g15, 2) + pow(0 - $g16, 2) + pow(0 - $g17, 2) + pow(0 - $g18, 2) + pow(0 - $g19, 2) + pow(0 - $g20, 2) + pow(0 - $g21, 2) + pow(0 - $g22, 2) + pow(0 - $g23, 2) + pow(0 - $g24, 2) + pow(0 - $g25, 2) + pow(0 - $g26, 2) + pow(0 - $g27, 2));
$tg3 = sqrt(pow(0 - $g1, 2) + pow(0 - $g2, 2) + pow(0 - $g3, 2) + pow(0 - $g4, 2) + pow(0 - $g5, 2) + pow(1 - $g6, 2) + pow(1 - $g7, 2) + pow(1 - $g8, 2) + pow(1 - $g9, 2) + pow(0 - $g10, 2) + pow(0 - $g11, 2) + pow(0 - $g12, 2) + pow(0 - $g13, 2) + pow(0 - $g14, 2) + pow(0 - $g15, 2) + pow(0 - $g16, 2) + pow(0 - $g17, 2) + pow(0 - $g18, 2) + pow(0 - $g19, 2) + pow(0 - $g20, 2) + pow(0 - $g21, 2) + pow(0 - $g22, 2) + pow(0 - $g23, 2) + pow(0 - $g24, 2) + pow(0 - $g25, 2) + pow(0 - $g26, 2) + pow(1 - $g27, 2));
$tg4 = sqrt(pow(1 - $g1, 2) + pow(0 - $g2, 2) + pow(1 - $g3, 2) + pow(0 - $g4, 2) + pow(0 - $g5, 2) + pow(0 - $g6, 2) + pow(0 - $g7, 2) + pow(0 - $g8, 2) + pow(0 - $g9, 2) + pow(1 - $g10, 2) + pow(1 - $g11, 2) + pow(0 - $g12, 2) + pow(0 - $g13, 2) + pow(0 - $g14, 2) + pow(0 - $g15, 2) + pow(0 - $g16, 2) + pow(0 - $g17, 2) + pow(0 - $g18, 2) + pow(0 - $g19, 2) + pow(0 - $g20, 2) + pow(0 - $g21, 2) + pow(0 - $g22, 2) + pow(0 - $g23, 2) + pow(0 - $g24, 2) + pow(0 - $g25, 2) + pow(0 - $g26, 2) + pow(0 - $g27, 2));
$tg5 = sqrt(pow(0 - $g1, 2) + pow(0 - $g2, 2) + pow(0 - $g3, 2) + pow(0 - $g4, 2) + pow(0 - $g5, 2) + pow(0 - $g6, 2) + pow(0 - $g7, 2) + pow(1 - $g8, 2) + pow(0 - $g9, 2) + pow(0 - $g10, 2) + pow(0 - $g11, 2) + pow(1 - $g12, 2) + pow(1 - $g13, 2) + pow(1 - $g14, 2) + pow(0 - $g15, 2) + pow(0 - $g16, 2) + pow(0 - $g17, 2) + pow(0 - $g18, 2) + pow(0 - $g19, 2) + pow(0 - $g20, 2) + pow(0 - $g21, 2) + pow(0 - $g22, 2) + pow(0 - $g23, 2) + pow(0 - $g24, 2) + pow(0 - $g25, 2) + pow(0 - $g26, 2) + pow(0 - $g27, 2));
$tg6 = sqrt(pow(0 - $g1, 2) + pow(0 - $g2, 2) + pow(0 - $g3, 2) + pow(0 - $g4, 2) + pow(0 - $g5, 2) + pow(0 - $g6, 2) + pow(0 - $g7, 2) + pow(0 - $g8, 2) + pow(0 - $g9, 2) + pow(1 - $g10, 2) + pow(0 - $g11, 2) + pow(1 - $g12, 2) + pow(1 - $g13, 2) + pow(1 - $g14, 2) + pow(1 - $g15, 2) + pow(0 - $g16, 2) + pow(0 - $g17, 2) + pow(0 - $g18, 2) + pow(0 - $g19, 2) + pow(0 - $g20, 2) + pow(0 - $g21, 2) + pow(0 - $g22, 2) + pow(0 - $g23, 2) + pow(0 - $g24, 2) + pow(0 - $g25, 2) + pow(0 - $g26, 2) + pow(0 - $g27, 2));
$tg7 = sqrt(pow(0 - $g1, 2) + pow(0 - $g2, 2) + pow(0 - $g3, 2) + pow(0 - $g4, 2) + pow(0 - $g5, 2) + pow(0 - $g6, 2) + pow(0 - $g7, 2) + pow(0 - $g8, 2) + pow(0 - $g9, 2) + pow(0 - $g10, 2) + pow(0 - $g11, 2) + pow(0 - $g12, 2) + pow(0 - $g13, 2) + pow(0 - $g14, 2) + pow(0 - $g15, 2) + pow(0 - $g16, 2) + pow(1 - $g17, 2) + pow(1 - $g18, 2) + pow(0 - $g19, 2) + pow(0 - $g20, 2) + pow(1 - $g21, 2) + pow(0 - $g22, 2) + pow(0 - $g23, 2) + pow(0 - $g24, 2) + pow(1 - $g25, 2) + pow(1 - $g26, 2) + pow(0 - $g27, 2));
$tg8 = sqrt(pow(0 - $g1, 2) + pow(0 - $g2, 2) + pow(0 - $g3, 2) + pow(0 - $g4, 2) + pow(0 - $g5, 2) + pow(0 - $g6, 2) + pow(0 - $g7, 2) + pow(0 - $g8, 2) + pow(0 - $g9, 2) + pow(0 - $g10, 2) + pow(0 - $g11, 2) + pow(0 - $g12, 2) + pow(0 - $g13, 2) + pow(1 - $g14, 2) + pow(0 - $g15, 2) + pow(0 - $g16, 2) + pow(0 - $g17, 2) + pow(0 - $g18, 2) + pow(1 - $g19, 2) + pow(1 - $g20, 2) + pow(1 - $g21, 2) + pow(1 - $g22, 2) + pow(0 - $g23, 2) + pow(0 - $g24, 2) + pow(0 - $g25, 2) + pow(0 - $g26, 2) + pow(0 - $g27, 2));
$tg9 = sqrt(pow(0 - $g1, 2) + pow(0 - $g2, 2) + pow(0 - $g3, 2) + pow(0 - $g4, 2) + pow(1 - $g5, 2) + pow(0 - $g6, 2) + pow(0 - $g7, 2) + pow(0 - $g8, 2) + pow(0 - $g9, 2) + pow(1 - $g10, 2) + pow(0 - $g11, 2) + pow(0 - $g12, 2) + pow(0 - $g13, 2) + pow(0 - $g14, 2) + pow(0 - $g15, 2) + pow(1 - $g16, 2) + pow(0 - $g17, 2) + pow(0 - $g18, 2) + pow(0 - $g19, 2) + pow(0 - $g20, 2) + pow(1 - $g21, 2) + pow(1 - $g22, 2) + pow(1 - $g23, 2) + pow(0 - $g24, 2) + pow(0 - $g25, 2) + pow(0 - $g26, 2) + pow(0 - $g27, 2));
$tg10 = sqrt(pow(0 - $g1, 2) + pow(0 - $g2, 2) + pow(0 - $g3, 2) + pow(0 - $g4, 2) + pow(0 - $g5, 2) + pow(0 - $g6, 2) + pow(0 - $g7, 2) + pow(0 - $g8, 2) + pow(0 - $g9, 2) + pow(0 - $g10, 2) + pow(1 - $g11, 2) + pow(1 - $g12, 2) + pow(1 - $g13, 2) + pow(0 - $g14, 2) + pow(1 - $g15, 2) + pow(0 - $g16, 2) + pow(0 - $g17, 2) + pow(0 - $g18, 2) + pow(1 - $g19, 2) + pow(0 - $g20, 2) + pow(0 - $g21, 2) + pow(0 - $g22, 2) + pow(0 - $g23, 2) + pow(0 - $g24, 2) + pow(0 - $g25, 2) + pow(0 - $g26, 2) + pow(0 - $g27, 2));
$tg11 = sqrt(pow(0 - $g1, 2) + pow(0 - $g2, 2) + pow(0 - $g3, 2) + pow(0 - $g4, 2) + pow(0 - $g5, 2) + pow(0 - $g6, 2) + pow(1 - $g7, 2) + pow(0 - $g8, 2) + pow(0 - $g9, 2) + pow(0 - $g10, 2) + pow(0 - $g11, 2) + pow(0 - $g12, 2) + pow(0 - $g13, 2) + pow(1 - $g14, 2) + pow(0 - $g15, 2) + pow(0 - $g16, 2) + pow(0 - $g17, 2) + pow(0 - $g18, 2) + pow(0 - $g19, 2) + pow(0 - $g20, 2) + pow(0 - $g21, 2) + pow(0 - $g22, 2) + pow(0 - $g23, 2) + pow(1 - $g24, 2) + pow(1 - $g25, 2) + pow(0 - $g26, 2) + pow(0 - $g27, 2));

$urut = array(
    "ULAT GRAYAK" => $tg1,
    "KUMBANG AULACOHPRA SIMILIS" => $tg2,
    "LALAT BUAH" => $tg3,
    "KUMBANG ELIACHNA SPARSA" => $tg4,
    "KEPIK" => $tg5,
    "GUREM (THRIPS)" => $tg6,
    "PENYAKIT BERCAK COKLAT" => $tg7,
    "PENYAKIT EMBUN BULU" => $tg8,
    "PENYAKIT TEPUNG" => $tg9,
    "PENYAKIT LAYU FUSARIUM" => $tg10,
    "PENYAKIT REBAH KECAMBAH" => $tg11
);

asort($urut);

foreach (array_slice($urut, 0, 1) as $x => $x_value) {
    $permasalahan = $x;
    // echo $x;
    // echo "<br>";
}

//Hasil
// echo "<br>Pencegahan Dan Pengendalian adalah sebagai berikut :<br>";
switch ($x) {
    case "ULAT GRAYAK":
      $penanganan = "
  a.  Dengan melakukan penggenangan air sesaat. Genangan air berfungsi untuk membunuh ulat grayak<br>
  b.  Melakukan sanitasi kebun, yaitu dengan membersihkan rumput dan gulma atau sisa-sisa tanaman yang mati lalu dibakar.<br>
  c.  Melakukan feromoid sex.<br>
  d.  Memangkangkas daun yang ada ulatnya dan membakarnya.<br>
  e.  Memnungut ulat, kemudian membunuhnya.<br>
  f.  Dengan menyebarkan hewan pemangsanya ballicus thuringiensis, Bollerianvirus litura.<br>
  g.  Melakan penyemprotan insektisida, seperti Turex, curracron 500BC, ekalux 25 EC, dan lain sebaginya. (pilih salah satu). Dilakukan setiap satu sampai dua minggu sekali.
  ";
      break;
    case "KUMBANG AULACOHPRA SIMISIS":
      $penanganan = "a.    Sanitasi kebun, yaitu membersihkan rumput-rumput dan gulma maupun sisa-sisa tanaman mati, kemudian membakarnya.<br>
  b.  Memunguti telur-telur dan larva yang terletak di dekat tanaman (biasanya dibalik daun paling bawah), lalu membunuhnya.<br>
  c.  Menangkapi kumbang-kumbang yang sedang menyerang dengan menggunakan alat jala, kemudian dibunuh.<br>
  d.  Dengan insektisida, seperti Sumithion 50 EC, Decis 2,5 EC, atau Curacron 500 EC.
  ";
      break;
    case "LALAT BUAH":
      $penanganan = "a.    Buah yang akan masak bungkus menggunakan plastik, kertas karbon, atau daun pisang<br>
  b.  Buah timun yang terserang lalat bauh segera diambil, kemudian buang jauh dari area tanaman.<br>
  c.  Dengan menggunakan perangkap yang terdiri dari methyleugenol 1cc dan insektisida monokropos atau sihalotrin 1cc yang diganti setian satu bualan sekali. Dalam satu hektar luas lahan diperlukan perangkap sekitar 25 buah.<br>
  d.  Dengan penyemprotan insektisida, seperti Hostathion, lebaycid 25 EC, atau Mathion.<br>
  e.  Sanitasi kebun.
  ";
      break;
    case "KUMBANG ELIACHNA SPARSA":
      $penanganan = "
  a.  Memangkas daun yang menjadi sarang telur, kemudian kumpulkan dan dibakar. Telurnya berwarna kekuning-kuningan.<br>
  b.  Penanaman setentak, yaitu penanaman dalam satu lahan yang luas dan di waktu yang sama. Dengan demikian kerusakan yang ditimbulkan oleh kumbang Eliachna Sparsa tidak sampai pada kerusakan yang melampaui batas ambang ekonomi. Karena jumlah perbandingan makanan jauh lebih banyak dari jumlah kumbang yang menyerangnya.<br>
  c.  Melakukan penyemperotan insektisida seperti Lannate Decis, atau sejenis insektisida lainnya. Penyemperotan dapat diulangi satu minggu sekali sesuai keperluan.<br>
  d.  Menangkap kumbang, kemudian membunuhnya.
  ";
      break;
    case "KEPIK":
      $penanganan = "a.    Melakukan pergantian tanaman dengan tanaman yang bukan inangnya. Tanaman inang dari hama kepik ini antara lain pare, semangka.<br>
  b.  Sanitasi kebun.<br>
  c.  Melakukan penyemprotan insektisida, seperti Matador 25EC, Curracron 25ULV, atau Dursban 20EC.
  ";
      break;
    case "GUREM":
      $penanganan = "a.    Sanitasi kebun.<br>
  b.  Melakukan pergantian tanaman dengan yang bukan tanamna inangnya. Tanaman inang hama Thrips antara lain tomat, kentang, cabai, labu-labu, bayam, dan tembakau.<br>
  c.  Dengan melakukan teknik budidaya menggunakan sistem mulsa plastik hitam perak.<br>
  d.  Menyebarkan musuh alaminya, seperti kumbang macan, larva Chysopa sp, kepik.<br>
  e.  Membunuh kepompongnya dengan melakukan penggenangan sesaat.<br>
  f.  Dengan penyemprotan insektisida seperti Sevin 5 D, Curacron, Bayrusil, Malathion, atau Pegasus.
  ";
      break;
    case "PENYAKIT BERCAK COKLAT":
      $penanganan = "a.    Menanam benih dengan sehat.<br>
  b.  Pergantian tanaman dengan tanaman yang lainnya.<br>
  c.  Membersihkan sisa-sisa tanaman mati, lalu membakarnya.<br>
  d.  Perbaikan drainase.<br>
  e.  Mengatur jarak antar tanaman.
  ";
      break;
    case "PENYAKIT EMBUN BULU":
      $penanganan = "a.    Pergantian tanaman dengan tanaman inangnya.<br>
  b.  Mengatur jarak antar tanaman.<br>
  c.  Sanitasi kebun.<br>
  d.  Penyemprotan dengan fungisida.
  ";
      break;
    case "PENYAKIT TEPUNG":
      $penanganan = "a.    Mencabut tanaman yang terserang parah, kemuadian dibakar.<br>
  b.  Memangkas tanaman yang terserang agar tidak menjalar ke tanaman yang lain.<br>
  c.  Menjaga drainase tetap baik.<br>
  d.  Sanitasi kebun.<br>
  e.  Pergantian tanaman yang bukan tanaman inangnya.<br>
  f.  Penyemprotan fungisida tepung belerang, dengan cara dihembuskan kemudian ditaburkan, atau dengan melakukan penyemprotan fungisida Agesti Cobox, Benlate, Antracol 70WP, Cupravit -B 21, dan lain sebagainya.
  ";
      break;
    case "PENYAKIT LAYU FUSARIUM":
      $penanganan = "a.    Mencabut tanaman yang sakit dan membakarnya.<br>
  b.  Menjaga drainase tetap baik agar air tidak menggenang.<br>
  c.  Mengatur jarak antar tanaman agar kelembaba udara di sekitar tanamn tidak tinggi.<br>
  d.  Bibit yang di pindah tanam, sebaiknya dicelupkan dulu pada binomyldengan dosis 100ppm.<br>
  e.  Memberantas mamatoda akar dengan menastisida.<br>
  f.  Menanam benih yang sehat. 
  ";
      break;
    case "PENYAKIT REBAH KECAMBAH":
      $penanganan = "Ya.   Sanitasi kebun.<br>
  b.  Penggenangan sesaat, dengan tujuan mengeluarkan jangkrik dari dalam tanah, lalu menangkapnya dan membunhnya.<br>
  c.  Melakukan penyemprotan insektisida.
  ";
      break;
    default:
    $penanganan = "TANAMAN";
}

$result['permasalahan'] = $permasalahan;
$result['penanganan'] = $penanganan;
$result['indikasi'] = $arr_indikasi ;

echo json_encode($result);
exit;