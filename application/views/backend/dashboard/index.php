<?php $this->load->view('backend/template/header.php'); ?>

<!-- Page Heading -->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('success'); ?>"></div>
<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
<h4>Selamat Datang <?= $this->session->userdata('nama') ?></h4>
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total yang pernah menyewa</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            On Going Penyewa</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $going ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Total Kontrakan</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $total_kontrakan ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>



</div>
<script>
    $(document).ready(function() {
        const flashData = $('.flash-data').data('flashdata');
        if (flashData) {
            Swal.fire(
                flashData, '',
                'success'
            )
        }
    })
</script>

<?php $this->load->view('backend/template/footer.php'); ?>