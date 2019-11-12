  <div class="row-fluid">
	<div class="span3 well">
		<form method="post" action="checklogin.php">
			<label>
				<input name="username" id="username" type="text" value="" placeholder="Username..." class="span12" autofocus>
			</label>
			<label>
				<input name="password" id="password" type="password" value="" placeholder="Password..." class="span12">
			</label>
			<label>
				<select name="type" class="span12">
				  <option value=1>Petugas</option>
				  <option value=2>Dosen</option>
				  <option value=3>Mahasiswa</option>
				</select>
			</label>
			<label>
				<input name="login" id="login" type="submit" value="Login" class="btn btn-block btn-inverse">
			</label>
		</form>
	</div><!--/span-->
	<div class="span9 well" id="main-content">
	  <div class="row-fluid">
		<div class="span12" background-color="black">
		
		  <?php 
			if(!isset($page)) {
		  ?>
			  <p align="center"><MARQUEE align="center" ><font color="=#8B0000"><b><i><blink>Selamat Datang</blink></i></b>
			  <p>Anda dapat melakukan login di panel sebelah kiri, kemudian melakukan peminjaman buku.</p>
			  <p>Batas peminjaman buku adalah maks 1 x 2 buku / hari</p>
			  
			  <!--
			  <a href="?page=register" rel="tooltip" title="Daftar" class="btn btn-large btn-success">
				<i class="icon-user icon-white"></i> Daftar
			  </a>
			  -->
			  <br /><br /><br /><br /><br />
		  <?php
			} else
				include("includes/p_". $page .".php"); 
		  ?>
		  
		</div><!--/span-->
	  </div><!--/row-->
	</div><!--/span-->
  </div><!--/row-->

  <div class="row-fluid">
  		<div class="span12 well" align="center" id="main-content-footer">
  			<p>Copyright c 2018 digilibme-PENS.com. All Riht Reserved<br>bagasrth@outlook.co.id</p></div></div></div></font></div>