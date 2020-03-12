
<?php
	include "lib/inc.session.php";
?>

<!DOCTYPE html>
<html>

  <body class="hold-transition skin-blue sidebar-mini">

        <!-- Main content -->
        <section class="content">
          <div class="row">
		
			<div class="col-xs-12">
			  <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Ketinggian Air</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="tableBanjir" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Ketinggian</th>
                      <th>Keterangan</th>
                      <th>Tanggal dan Waktu</th>
                    </tr>
                  </thead>
                
                <tbody>
                
                  </tbody>
                
                </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
	<!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    
	
	<!-- script datatables -->
    <script>
      $(function () {

      setInterval(function () {
        reload_table();
      }, 5000); //tujuhdetik

      var table;
      table = $('#tableBanjir').DataTable({
            "processing": true,
            "serverSide": true,
            "ordering": true, // Set true agar bisa di sorting
            "cache": false,
            "order": [[ 2, 'desc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
            "ajax":
            {
                "url": "./pages/dataketinggian/query_table.php", // URL file untuk proses select datanya
                "type": "POST"
            },
            "deferRender": true,
            "aLengthMenu": [[5, 10, 50, 1000],[ 5, 10, 50, 1000]], // Combobox Limit
            "columns": [
                // { "data": no++},
                { "data": "ketinggian" }, // Tampilkan nis
                { "data": "keterangan" },  // Tampilkan nama
                { "data": "waktu" }, // Tampilkan telepon
            ],
        });

      function reload_table()
      {
          table.ajax.reload(null,false); //reload datatable ajax 
      }

    });
    </script>
	
  </body>
</html>


