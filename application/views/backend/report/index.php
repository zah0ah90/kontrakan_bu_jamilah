<?php $this->load->view('backend/template/header.php'); ?>
<style>
.error {
    color: red;
}
</style>



<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Report Penyewa Kontrakan</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">

        <div class="row mb-3">
            <div class="col-lg-4">
                <label class="form-label">Filter Tanggal Dari <input type="date" class="form-control" value=""
                        name="filterawal">
                    Filter Tanggal Sampai <input type="date" class="form-control" value="" name="filterakhir">
                </label>
                <br>
            </div>
            <div class="col-lg-4">
                <label for="form-label">STATUS <select class="form-control" name="status">
                        <option value="">Pilih Status</option>
                        <option value="1">Masih Ngontrak</option>
                        <option value="2">Tidak Mengongrak</option>
                    </select></label>
                <br>
                <button class="btn btn-primary" onclick="filter()">Filter</button>
            </div>
        </div>

        <div class="table-responsive">
            <div class="tabel"></div>
        </div>
    </div>
</div>



<script>
$(document).ready(function() {
    // tabel()
});

function filter() {
    var filterawal = $('[name=filterawal]').val();
    var filterakhir = $('[name=filterakhir]').val();
    var status = $('[name=status]').val();
    if (filterawal == '' || filterakhir == '' || status == '') {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Mohon untuk memilih filter Tanggal Awal Akhir dan Status',
        })
    } else {
        tabel()
    }

}

function tabel() {
    var filterawal = $('[name=filterawal]').val();
    var filterakhir = $('[name=filterakhir]').val();
    var status = $('[name=status]').val();
    $.ajax({
        url: "<?= base_url(); ?>report/tabel",
        method: "POST",
        data: {
            filterawal,
            filterakhir,
            status
        },
        beforeSend: function() {},
        success: function(data) {
            $('.tabel').html(data)
        },
        error: function() {}
    });
}
</script>


<?php $this->load->view('backend/template/footer.php'); ?>