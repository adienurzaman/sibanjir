		<?php
			include "conf/koneksi.php";
			include "lib/inc.session.php";
			
			$ed = mysqli_query($connect, "SELECT * FROM pengguna
			                   WHERE usernm = '$_GET[tid]'");
			while ($r = mysqli_fetch_array($ed)){
		?>
		
		<!-- Main content -->
        <section class="content">
			<div class="row">
			
				<div class="col-md-12">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">Edit Data Pengguna <small>Day Motor</small></h3>
							<!-- tools box -->
							<div class="pull-right box-tools">
								<button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
								<button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
							</div><!-- /. tools -->
						</div><!-- /.box-header -->
				  
						<form role="form" name="form1" action="?page=upUs" method="post" enctype="multipart/form-data" onSubmit="return validasi()">
							<input type='hidden' name='tid' value="<?php echo $r['usernm']; ?>" >
							<div class="box-body">
								<p>
									<div class="form-group">
										<label for="exampleInputPasswd1">Password Pengguna</label>
										<input type="text" class="form-control" name="passwd" id="exampleInputPasswd1" placeholder="Masukkan Password Baru" value="<?php echo $r['passwd']; ?>" required="required">
									</div>
								</p>
				  
								<p>
									<div class="form-group">
										<label for="exampleInputPengguna1">Nama Pengguna</label>
										<input type="text" class="form-control" name="nama_pengguna" id="exampleInputPengguna1" placeholder="Masukkan nama pengguna" value="<?php echo $r['nm_lengkap']; ?>" required="required">
									</div>
								</p>
					
								<?php
									if ($r['jns_kelamin']=='L'){
								?>
					
								<p>				
									<div class="form-group">
										<label>Jenis Kelamin</label>
									</div>
										
									<div class="form-group">
										<input type="radio" name="kelamin" id="optionsRadios1" value="L" checked> Laki-laki &nbsp;
										<input type="radio" name="kelamin" id="optionsRadios1" value="P" > Perempuan
									</div>
								</p>
					
								<?php } else { ?>
					
								<p>				
									<div class="form-group">
										<label>Jenis Kelamin</label>
									</div>
										
									<div class="form-group">
										<input type="radio" name="kelamin" id="optionsRadios1" value="L" > Laki-laki &nbsp;
										<input type="radio" name="kelamin" id="optionsRadios1" value="P" checked> Perempuan
									</div>
								</p>
					
								<?php } ?>
					
								<p>
									<div class="box-body pad">
										<label>Alamat Lengkap</label>
										<textarea class="textarea" name="alamat" placeholder="Masukkan alamat pengguna (nama jalan, nama daerah/komplek/cluster, blok, no. rumah, rt, rw, desa/kelurahan, kecamatan)" required="required" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $r['alamat_pengguna']; ?></textarea>
									</div>
								</p>
					
								<p>
									<div class="form-group">
										<label for="exampleInputEmail1">Email Pengguna</label>
										<input type="text" class="form-control" name="email" id="exampleInputEmail1" placeholder="Masukkan email pengguna (format: nama_email@domain.com)" value="<?php echo $r['email_pengguna']; ?>" required="required">
									</div>
								</p>
					
								<p>
									<div class="form-group">
										<label for="exampleInputHp1">No. HP Pengguna</label>
										<input type="text" class="form-control" name="hp" id="exampleInputHp1" placeholder="Masukkan no. HP pengguna (hanya dapat di isi angka)" value="<?php echo $r['hp_pengguna']; ?>" required="required">
									</div>
								</p>
					
								<p>
									<div class="form-group">
										<?php echo "<img src='img_user/$r[img_pengguna]' oncontextmenu='return false;'>"; ?>
										<!-- script (oncontextmenu='return false;'): mencegah gambar tidak dapat di klik kanan. -->
									</div>
								</p>

								<p>
									<div class="form-group">
										<label for="exampleInputFile">Ubah Foto Pengguna</label>
										<input type="file" id="exampleInputFile" name="fupload">
										<p class="help-block">File foto harus bertipe *.jpeg, *.jpg, atau *.png</p>
									</div>
								</p>
					
								<?php
									if ($r['status_pengguna']=='Admin'){
								?>
					
								<p>				
									<div class="form-group">
										<label>Status Pengguna</label>
									</div>
										
									<div class="form-group">
										<input type="radio" name="status_user" id="optionsRadios1" value="Admin" checked> Administrator &nbsp;
										<input type="radio" name="status_user" id="optionsRadios1" value="Atasan" > Pimpinan
									</div>
								</p>
					
								<?php } else { ?>
					
								<p>				
									<div class="form-group">
										<label>Status Pengguna</label>
									</div>
										
									<div class="form-group">
										<input type="radio" name="status_user" id="optionsRadios1" value="Admin" > Administrator &nbsp;
										<input type="radio" name="status_user" id="optionsRadios1" value="Atasan" checked> Pimpinan
									</div>
								</p>
					
								<?php } ?>
					
								<?php
									if ($r['blokir']=='Y'){
								?>
					
								<p>				
									<div class="form-group">
										<label>Blokir Pengguna</label>
									</div>
										
									<div class="form-group">
										<input type="radio" name="blokir" id="optionsRadios1" value="Y" checked> Ya &nbsp;
										<input type="radio" name="blokir" id="optionsRadios1" value="N" > Tidak
									</div>
								</p>
					
								<?php } else { ?>
					
								<p>				
									<div class="form-group">
										<label>Blokir Pengguna</label>
									</div>
										
									<div class="form-group">
										<input type="radio" name="blokir" id="optionsRadios1" value="Y" > Ya &nbsp;
										<input type="radio" name="blokir" id="optionsRadios1" value="N" checked> Tidak
									</div>
								</p>
								<?php } ?>
							</div>
							<div class="box-footer">
								<button type="button" class="btn btn-default pull-left" data-dismiss="modal" onclick="self.history.back()">Cancel</button>
								<button type="submit" class="btn btn-primary pull-right" name="submit">Save changes</button>
							</div>
						</form>
					</div>
				</div><!-- /.col-->
			</div><!-- ./row -->
        </section><!-- /.content -->
		
		<?php } ?>