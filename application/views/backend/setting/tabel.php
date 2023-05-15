<?php $this->load->view('backend/template/datatable.php'); ?>
<table class="table table-hover" id="example">
    <thead>
        <tr>
            <th>No</th>
            <th>Action</th>
            <th>Nama</th>
            <th>Type</th>
            <th>Update</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($penyewa as $data) {
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><button class="btn btn-secondary" onclick="edit(<?= $data->id ?>)">Ubah</button></td>
            <td><?= $data->nama ?></td>
            <td><?= $data->type ?></td>
            <td><?= $data->upddate ?></td>
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