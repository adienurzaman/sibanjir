<?php
	include "lib/inc.session.php";
?>

<!DOCTYPE html>
<html>

  <body class="hold-transition skin-blue sidebar-mini">

        <!-- Main content -->
        <section class="content">
          <div class="row">
                      <div class="col-xs-3">
        <input type="button" class="btn btn-block btn-primary" name="addBtnEdu" value="Export To PDF" onclick="window.location='?page=adBk'">
      </div>
			<div class="col-xs-12">
			  <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Laporan Data Anggota</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
						<th>No</th>
                        <th>Kode Anggota</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Kelas</th>
                      </tr>
                    </thead>
					
					<tbody>
					
					<?php
						include "conf/koneksi.php";
						
						$sql = mysqli_query($connect, "SELECT  a.nm_anggota,a.kd_anggota,a.alamat,b.nama as jk, d.nama as kelas FROM anggota a join opsi b on a.kd_jk=b.kd_opsi join opsi d on a.kd_kelas=d.kd_opsi");
						$no = 1;
						while ($r = mysqli_fetch_array($sql)){
					?>
					
                      <tr>
						<td><?php echo $no; ?></td>
                        <td><?php echo "$r[kd_anggota]"; ?></td>
                        <td><?php echo "$r[nm_anggota]"; ?></td>
                        <td><?php echo "$r[jk]"; ?></td>
                        <td><?php echo "$r[kelas]"; ?></td>
                      </tr>
					  
					  <?php $no++; } ?>
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
        $("#example1").DataTable();
      });
    </script>
	
  </body>
</html>


