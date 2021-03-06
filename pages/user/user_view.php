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
				<input type="button" class="btn btn-block btn-primary" name="addBtnUser" value="Tambah Pengguna" onclick="window.location='?page=adUs'">
			</div>
			<div class="col-xs-12">
			  <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Pengguna</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
						<th>#</th>
						<th>Username</th>
                        <th>Nama Pengguna</th>
						<th>Email</th>
						<th>Status</th>
                        <th>Photo</th>
                        <th>Blokir</th>
						<th>Aksi</th>
                      </tr>
                    </thead>
					
					<tbody>
					
					<?php
						include "conf/koneksi.php";
						
						$vw = mysqli_query($connect, "SELECT * FROM pengguna ORDER BY nm_lengkap DESC");
						$no = 1;
						while ($r = mysqli_fetch_array($vw)){
					?>
					
                      <tr>
						<td><?php echo $no; ?></td>
						<td><?php echo "$r[usernm]"; ?></td>
                        <td><?php echo "$r[nm_lengkap]"; ?></td>
						<td><?php echo "$r[email_pengguna]"; ?></td>
						<td><?php echo "$r[status_pengguna]"; ?></td>
                        <td><?php echo "<img src='img_user/small_$r[img_pengguna]' width=50 oncontextmenu='return false;'>"; ?></td>
                        <td><?php echo "$r[blokir]"; ?></td>
						<td>
							<div class="btn-group">
								<div class="btn-group">
				                <a href="?page=edUs&tid=<?php echo $r['usernm']; ?>" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				                <a href="?page=dlUs&tid=<?php echo $r['email_pengguna']; ?>" title="Hapus Data" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>  
				              </div>
							</div>
						</td>
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


