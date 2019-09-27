<div class="card">
    <div class="card-header white">
        Kelola User
    </div>
        <div class="card-body">
        <?php echo $this->session->flashdata('berhasil-registerS');?>
            <table id="user_table" class="cell-border example1 table table-striped table1 delSelTable">
                <thead>
                    <tr>
                    <!-- <th><input type="checkbox" class="selAll"></th> -->
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>User Level ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
</div>
<script type="text/javascript">
    var table;
    $(document).ready(function() {
 
        //datatables
        table = $('#user_table').DataTable({ 
 
            "processing": true, 
            "serverSide": true, 
            "order": [], 
             
            "ajax": {
                "url": "<?php echo site_url('user_management/user/datatable_user')?>",
                "type": "POST"
            },
 
             
            "columnDefs": [
            { 
                "targets": [ 0 ], 
                "orderable": false, 
            },
            ],
 
        });
 
    });
 
</script>    
