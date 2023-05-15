<?php $this->load->view('backend/template/header.php'); ?>
<link href="<?= base_url('assets/backend/') ?>vendor/zoom/css/zoom.css" rel="stylesheet" type="text/css">
<script src="<?= base_url('assets/backend/') ?>vendor/zoom/js/zoom.js"></script>
<style>
    .error {
        color: red;
    }
</style>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <form method="post" id="formModal" action="<?= base_url('barang/process') ?>" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="">
                            <input type="hidden" name="type_save" value="">
                            <div class="form-group">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" value="" name="nama">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Nomor Telepon</label>
                                <input type="number" class="form-control" value="" name="nomor_telepon" placeholder="contoh 0857....">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Daerah Asal</label>
                                <input type="text" class="form-control" value="" name="daerah_asal">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Jumlah Orang</label>
                                <input type="number" class="form-control" value="" name="jumlah_orang">
                            </div>

                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <select class="form-control" name="status">
                                    <option value="">Pilih Status</option>
                                    <option value="1">Masih Ngontrak</option>
                                    <option value="2">Tidak Mengongrak</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary tambah-berkas" onclick="tambahberkas()">Tambah
                                    Berkas</button>
                                <input type="hidden" id="jumlah-berkas" value="0">
                                <br><br>
                                <div class="berkas"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnClose" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Add Data </button>
            </div>
        </div>
    </div>
</div>




<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Penyewa Kontrakan</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">

        <button type="button" class="btn btn-primary btn btn-primary float-right mb-2" onclick="add()">
            Tambah Data
        </button>

        <div class="table-responsive">
            <div class="tabel"></div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        tabel()
    });

    function tabel() {
        $.ajax({
            url: "<?= base_url(); ?>penyewa_kontrakan/tabel",
            method: "POST",
            beforeSend: function() {},
            success: function(data) {
                $('.tabel').html(data)
            },
            error: function() {}
        });
    }

    function tambahberkas() {
        var jumlah = parseInt($('#jumlah-berkas').val());
        var nextForm = jumlah + 1;
        // console.log(jumlah);
        console.log(nextForm);
        $(".berkas").append("<table>" +
            "<tr class='row" + nextForm + "'>" +
            "<td>Berkas</td>" +
            "<td><input type='file' class='form-control' name='berkas[]'></td><td><button type='button' onclick='hapusSatuBerkas(" +
            nextForm + ")' class='btn btn-danger'>X</button></td>" +
            "</tr>" +
            "</table>");
        $('#jumlah-berkas').val(nextForm)
    }

    function hapusSatuBerkas(nomor) {
        $('.row' + nomor).html('');
    }

    function hapusSatuBerkasDelete(nomor, id) {

        Swal.fire({
            title: 'Apakah anda ingin menghapus berkas nya?',
            showCancelButton: true,
            confirmButtonText: 'Ya!',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= base_url('penyewa_kontrakan/hapusBerkas/') ?>" + id,
                    type: "POST",
                    dataType: "JSON",
                    beforeSend: function() {},
                    success: function(data) {
                        if (data.status == true) {
                            $('.row' + nomor).html('');
                            Swal.fire('Terhapus!', '', 'success')

                        } else if (data.status == false) {
                            swal.fire({
                                icon: 'warning',
                                title: 'Terjadi Kesalahan',
                                text: 'Harap Hubungi Admin'
                            });
                        }

                    },
                    error: function() {}
                });

            }
        })

    }

    function add() {
        $('.berkas').html('');
        $('#exampleModal').attr('hidden', false)
        $('#formModal')[0].reset();
        $('[name=type_save]').val('add');
        $('[name=id]').val('');
        $('#exampleModal').modal('show');
        $('.modal-title').text('Tambah Data Penyewa Kontrakan');
        $('#btnSave').text('Tambah Data Penyewa Kontrakan');
        cekStatus()

    }

    function cekStatus() {
        $.ajax({
            url: "<?= base_url('penyewa_kontrakan/ceksisakontrakan') ?>",
            type: "POST",
            dataType: "JSON",
            beforeSend: function() {
                $('[name=status]').html('');
            },
            success: function(data) {
                if (data.status == true) {
                    $('[name=status]').append(`<option value="1">Masih Ngontrak</option>`);
                    $('[name=status]').append(`<option value="2">Tidak Mengongrak</option>`);
                } else {
                    $('[name=status]').append(`<option value="2">Tidak Mengongrak</option>`);
                }
            },
            error: function() {}
        });
    }

    function edit(id) {
        cekStatus()
        $('#formModal')[0].reset();
        $('[name=type_save]').val('edit');
        $('#exampleModal').modal('show');
        $('.modal-title').text('Ubah Data Penyewa Kontrakan');
        $('#btnSave').text('Ubah Data Penyewa Kontrakan');
        $.ajax({
            url: "<?= base_url('penyewa_kontrakan/edit/') ?>" + id,
            type: "POST",
            dataType: "JSON",
            beforeSend: function() {},
            success: function(data) {
                $('[name=id]').val(data.id)
                $('[name=nama]').val(data.nama)
                $('[name=nomor_telepon]').val(data.nomor_telepon)
                $('[name=daerah_asal]').val(data.daerah_asal)
                $('[name=jumlah_orang]').val(data.jumlah_orang)
                $('[name=status]').val(data.status)
                if (data.status == 1) {
                    $('[name=status]').html('');
                    $('[name=status]').append(`<option value="1">Masih Ngontrak</option>`);
                    $('[name=status]').append(`<option value="2">Tidak Mengongrak</option>`);
                    $('[name=status]').val(data.status)
                }
            },
            error: function() {}
        });



        $.ajax({
            url: "<?= base_url('penyewa_kontrakan/berkas/') ?>" + id,
            method: "POST",
            data: {
                id: id
            },
            dataType: "json",
            beforeSend: function() {
                $('.berkas').html('')
            },
            success: function(dataDetail) {
                $.each(dataDetail, function(keyDetail, valueDetail) {
                    $('#jumlah-berkas').val(id + 1)
                    var nextForm = id++;
                    $(".berkas").append("<table>" +
                        "<tr class='row" + nextForm + "'>" +
                        "<td></td>" +
                        "<td>" + valueDetail.nama_berkas +
                        "</td><td><button type='button' onclick='hapusSatuBerkasDelete(" +
                        nextForm + ", " + valueDetail.id +
                        ")' class='btn btn-danger'>X</button></td>" +
                        "</tr>" +
                        "</table>");
                })

            },
        })
    }

    function save() {
        var form = $('#formModal');
        form.validate({
            rules: {
                nama: {
                    required: true,
                },
                nomor_telepon: {
                    required: true,
                    number: true,
                },
                daerah_asal: {
                    required: true,
                },
                jumlah_orang: {
                    required: true,
                    number: true,
                },
                status: {
                    required: true,
                    number: true
                },
            },
            messages: {}
        });
        if (form.valid()) {
            var formData = new FormData($('#formModal')[0]);
            $.ajax({
                url: '<?= base_url('penyewa_kontrakan/add') ?>',
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(data) {
                    $('#exampleModal').modal('hide');
                    if (data.status == true) {
                        swal.fire({
                            icon: 'success',
                            title: 'Save Data',
                            text: 'Saving Data '
                            // + data.nomor_item
                        });
                        tabel();

                    } else if (data.status == false) {
                        swal.fire({
                            icon: 'warning',
                            title: 'Terjadi Kesalahan',
                            text: 'Harap Hubungi Admin'
                        });
                    }
                },
                error: function(jqXHR, textStatus, errorwhrown) {}
            });
        }
    }
</script>


<?php $this->load->view('backend/template/footer.php'); ?>