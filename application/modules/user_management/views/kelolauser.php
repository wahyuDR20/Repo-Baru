<!-- <div class="card">
    <div class="card-header">
        <div class="card-body">
          <?php //  <table id="example1" class="cell-border example1 table table-striped table1 delSelTable"> ?>
          <table class="table table-bordered table-hover data-tables"
   data-options='{"searching":false}'> -->

   <!-- <div class="card my-3 no-b">
                    <div class="card-body">
                        <div class="card-title">Simple usage</div> -->
                        <table id="example1" class="table table-bordered table-hover data-tables"
                            >
                           
                <thead>
                    <tr>
                    <!-- <th><input type="checkbox" class="selAll"></th> -->
                        <th>Status</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Last Update</th>
                        <th>Deleted At</th>
                        <th>Last Logged in IP</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                </tbody> 
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
 
 var save_method; //for save method string
 var table;

 $(document).ready(function() {
     //datatables
     table = $('#example1').DataTable({ 
         "processing": true, //Feature control the processing indicator.
         "serverSide": true, //Feature control DataTables' server-side processing mode.
         "order": [], //Initial no order.
         // Load data for the table's content from an Ajax source
         "ajax": {
             "url": '<?php echo site_url('user_management/user/userTabels'); ?>',
             "type": "POST"
         },
         //Set column definition initialisation properties.
         "columns": [
             {"data": "username",width:170},
             {"data": "no_telepon",width:100},
             {"data": "email",width:100},
             {"data": "alamat",width:100}
         ],

     });

 });
</script>