<?php $this->load->view('backend/template/datatable.php'); ?>
<table class="table table-hover" id="example">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nomor Telepon</th>
            <th>Dearah Asal</th>
            <th>Jumlah Orang</th>
            <th>Berkas</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($penyewa as $data) {
            $queryGetGambar = $this->db->where('id_penyewa_kontrakan', $data->id)->get('tbl_penyewa_kontrakan_berkas');
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $data->nama ?></td>
                <td><?= $data->nomor_telepon ?></td>
                <td><?= $data->daerah_asal ?></td>
                <td><?= $data->jumlah_orang ?></td>
                <td>
                    <?php if (!empty($queryGetGambar)) {
                        foreach ($queryGetGambar->result() as $dataGambar) {
                    ?>


                            <label for=""><?= $dataGambar->nama_berkas ?> <button data-url="<?= base_url('uploads/') . $dataGambar->nama_berkas ?>" class="btn btn-sm btn-warning modalImage">Lihat</button> <a href="<?= base_url('uploads/') . $dataGambar->nama_berkas ?>" class="btn btn-sm btn-primary" download="<?= $dataGambar->nama_berkas ?>">Download</a> </label>
                    <?php
                        }
                    }  ?>

                </td>
                <td><button class="btn <?= ($data->status == '1' ? 'btn-primary' : 'btn-secondary') ?>"><?= ($data->status == '1' ? 'Masih Ngontrak' : 'Sudah Tidak Ngontrak') ?></button>
                </td>
                <td><button class="btn btn-secondary" onclick="edit(<?= $data->id ?>)">Ubah</button></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="image" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Gambar Berkas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="" alt="" style="width: 100%;" data-action="zoom" class="imgs">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<script>
    $(document).ready(function() {
        $('#example').DataTable();
        $('.modalImage').click(function() {
            $('#image').modal('show');
            var url = $(this).data('url');
            $('.imgs').attr('src', url);

        })
    })
</script>