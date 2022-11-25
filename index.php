<!DOCTYPE html>

<head>
  <title>DIAGNOSA SERANGAN HAMA DAN PENYAKIT PADA MENTIMUN MENGGUNAKAN KKN</title>

  <!-- Custom CSSnya brokkk... -->
  <link rel="stylesheet" href="assets/style.css">
  <!-- Nih bootstrapnya buat percantik, jangan diutak-utik, 
  harus connect internet karena ini pake CDN bkn offline package-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<html>


<body>
  <!-- Overlay -->
  <div id="overlayBos" class="overlay">
    <div class="overlay-content">
      <h1>Selamat Datang di Aplikasi Diagnosa Penyakit Mentimun!</h1>
      <div class="tombol-mulai d-flex justify-content-center">
        <button id="mulai" class="btn btn-primary btn-sm">MULAI <i class="fa-solid fa-arrow-right"></i></button>
      </div>
    </div>
  </div>

  <!-- Judulnya brok -->
  <div id="judul-brok">
    <h1>DIAGNOSA SERANGAN HAMA DAN PENYAKIT PADA MENTIMUN MENGGUNAKAN KNN</h1>
  </div>

  <!-- Contentnya brok -->
  <div id="content-wrapper">
    <h2>Masukkan Indikasi Gejala Tanaman :</h2>
    <form id="form-penyakit" action="proses.php" method="POST">
      <div id="list-gejala" class="row">
        <div class="col-4">

          <div class="penyakit">
            <input type="hidden" name="id-g1" value="g1">
            <label for="g1">1. daun berlubang tidak beraturan</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g1" name="g1">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g2" value="g2">
            <label for="g2">2. daun menjadi robek dan terpotong potong</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g2" name="g2">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g3" value="g3">
            <label for="g3">3. daun tinggal tulang</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g3" name="g3">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g4" value="g4">
            <label for="g4">4. daun berlubang kecil dan besar</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g4" name="g4">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g5" value="g5">
            <label for="g5">5. bunga menjadi rusak</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g5" name="g5">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>

          <div class="penyakit">
            <input type="hidden" name="id-g6" value="g6">
            <label for="g6">6. noda hitam kecil bekas tusukan</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g6" name="g6">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g7" value="g7">
            <label for="g7">7. bercak coklat pada buah</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g7" name="g7">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g8" value="g8">
            <label for="g8">8. buah gugur dan busuk</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g8" name="g8">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g9" value="g9">
            <label for="g9">9. bentuk buah bengkok</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g9" name="g9">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
        </div>
        <div class="col-4">
          
          <div class="penyakit">
            <input type="hidden" name="id-g10" value="g10">
            <label for="g10">10. daun kering dan mati</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g10" name="g10">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g11" value="g11">
            <label for="g11">11. ukuran buah kecil</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g11" name="g11">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g12" value="g12">
            <label for="g12">12. tanaman layu</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g12" name="g12">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g13" value="g13">
            <label for="g13">13. daun berkerut</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g13" name="g13">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g14" value="g14">
            <label for="g14">14. tanaman mati</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g14" name="g14">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>

          <div class="penyakit">
            <input type="hidden" name="id-g15" value="g15">
            <label for="g15">15. tanaman menjadi kerdil</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g15" name="g15">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g16" value="g16">
            <label for="g16">16. bercak putih di permukaan atas dan bawah daun</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g16" name="g16">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g17" value="g17">
            <label for="g17">17. bercak coklat pada daun</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g17" name="g17">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g18" value="g18">
            <label for="g18">18. bercak daun membesar</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g18" name="g18">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          
        </div>
        <div class="col-4">
          
          <div class="penyakit">
            <input type="hidden" name="id-g19" value="g19">
            <label for="g19">19. bercak kuning</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g19" name="g19">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g20" value="g20">
            <label for="g20">20. bercak tidak beraturan</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g20" name="g20">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g21" value="g21">
            <label for="g21">21. bentuk buah tidak normal</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g21" name="g21">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g22" value="g22">
            <label for="g22">22. buah tidak beraroma dan berasa</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g22" name="g22">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g23" value="g23">
            <label for="g23">23. batang dan daun tertutup cendawan</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g23" name="g23">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g24" value="g24">
            <label for="g24">24. bila akar dicabut akar bengkak</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g24" name="g24">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g25" value="g25">
            <label for="g25">25. pada batang terdapat bercak memanjang coklat tua</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g25" name="g25">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g26" value="g26">
            <label for="g26">26. pada buah bercak berbentuk bulat dan kebasah-basahan</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g26" name="g26">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>
          
          <div class="penyakit">
            <input type="hidden" name="id-g27" value="g27">
            <label for="g27">27. daun layu secara mendadak dan tetap</label>
            <select class="dropdown-penyakit btn btn-warning btn-sm" id="g27" name="g27">
              <option value="0">tidak</option>
              <option value="1">ya</option>
            </select>
          </div>

        </div>
      </div>

      <!-- Tombol Cek -->
      <div class="tombol-cek d-flex justify-content-center">
        <button id="cek" type="button" class="btn btn-primary btn-sm">CEK <i class="fa-solid fa-arrow-right"></i></button>
      </div>
    </form>
  </div>

  <!-- The Modal -->
  <div class="modal" id="modal-hasil" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Hasil Diagnosa</h5>
          <button type="button" class="close corner-close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- hasil indikasi yang dipilih muncul disini -->
          <div id="indikasi_gejala">
          </div>
          <br>
          <!-- hasil diagnosa muncul disini -->
          <div id="hasil_diagnosa">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-selesai" data-dismiss="modal">Selesai</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Custom function -->
  <?php
  $a = "required=true";
  ?>

  <!-- jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <!-- Custom JS -->
  <script src="assets/anu.js"></script>
  <!-- JS nya bootstrap, jangan diutak-utik -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Font awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"></script>
  <!-- Sweet Alert 2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.7/dist/sweetalert2.all.min.js"></script>
</body>

</html>