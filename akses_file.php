<?php
	$pg = isset($_GET['page']) ? $_GET['page'] : '' ;
	switch ($pg) {
				
		//-- sign out --//
		case 'sign-out' :
			if(!file_exists ("sign_out.php"))die("File sign out tidak tersedia.");
			include ("sign_out.php");
			break;
		
		//--------------------------------------------------------------------------------------------------------------------//
	
		//-- dashboard --//
		case 'dashboard' :
			if(!file_exists ("dashboard.php"))die("File dashboard tidak tersedia.");
			include ("dashboard.php");
			break;
	

			
		//--------------------------------------------------------------------------------------------------------------------//
		
		
		//--------------------------------------------------------------------------------------------------------------------//
		
		//-- tampil pengguna --//
		case 'vwUs' :
			if(!file_exists ("pages/user/user_view.php"))die("File tampil pengguna tidak tersedia.");
			include ("pages/user/user_view.php");
			break;
			
		//-- tambah pengguna --//
		case 'adUs' :
			if(!file_exists ("pages/user/user_new.php"))die("File tambah pengguna tidak tersedia.");
			include ("pages/user/user_new.php");
			break;
			
		//-- simpan pengguna --//
		case 'svUs' :
			if(!file_exists ("pages/user/user_save.php"))die("File simpan pengguna tidak tersedia.");
			include ("pages/user/user_save.php");
			break;
			
		//-- edit pengguna --//
		case 'edUs' :
			if(!file_exists ("pages/user/user_edit.php"))die("File edit pengguna tidak tersedia.");
			include ("pages/user/user_edit.php");
			break;
			
		//-- update pengguna --//
		case 'upUs' :
			if(!file_exists ("pages/user/user_update.php"))die("File update pengguna tidak tersedia.");
			include ("pages/user/user_update.php");
			break;
		
		//-- hapus pengguna --//
		case 'dlUs' :
			if(!file_exists ("pages/user/user_del.php"))die("File hapus pengguna tidak tersedia.");
			include ("pages/user/user_del.php");
			break;
			
		//--------------------------------------------------------------------------------------------------------------------//
		
		//-- tampil dataketinggian --//
		case 'vwOp' :
			if(!file_exists ("pages/dataketinggian/dataketinggian.php"))die("File tampil data dataketinggian tidak tersedia.");
			include ("pages/dataketinggian/dataketinggian.php");
			break;
			
		//-- tambah dataketinggian --//
		case 'adOp' :
			if(!file_exists ("pages/dataketinggian/dataketinggian_new.php"))die("File tambah data dataketinggian tidak tersedia.");
			include ("pages/dataketinggian/dataketinggian_new.php");
			break;

			
	}
?>