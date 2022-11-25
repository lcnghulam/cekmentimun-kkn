$('#overlayBos').height("100vh")

//Sweet Alert 2
$(document).ready(function () {

    $('button#mulai').on('click', function () {
        console.log('mulai')
        $('#overlayBos').height(0)
    })

    $('.penyakit').each(function(){
        let id = $('input').val()
        let label = $('label[for="'+this.id+'"]').text()
        $('select').on('change', function(){
            if($('option:selected').val() == 1){
                $()
            }
        })
    })

    $('#cek').on('click', function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'Sudah Yakin?',
            text: "Pastikan gejala yg dipilih sesuai!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, proses!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: 'post',
                    url: 'proses.php',
                    data: $('#form-penyakit').serialize(),
                    success: function (data) {
                        let res = $.parseJSON(data);
                        // console.log(res);
                        let permasalahan = res.permasalahan;
                        let penanganan = res.penanganan;
                        let indikasi = res.indikasi
                        // console.log(data);

                        // console.log('BERHASIL')
                        $('#modal-hasil').show()
                        // $('#hasil_diagnosa').html(data)
                        if(indikasi.length > 0){
                            $('#indikasi_gejala').append(`Indikasi gejala yang terjadi : <br><br>`)
                            $.each(indikasi, function( index, value ) {
                                $('#indikasi_gejala').append(`${index+1}. ${value}<br>`)
                            });
                        }

                        $('#hasil_diagnosa').append(`${permasalahan}<br><br>`)
                        $('#hasil_diagnosa').append(penanganan)
                    },
                    error: function (data) {
                        console.log(data)
                    }
                });
            }
        })
    })

    $('.corner-close, .btn-selesai').on('click', function (e) {
        $('#form-penyakit')[0].reset()
        $('#modal-hasil').hide()
        $('#indikasi_gejala').empty()
        $('#hasil_diagnosa').empty()
    })
});