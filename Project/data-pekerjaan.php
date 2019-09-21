<!DOCTYPE html>
<html>
<head>
	<title>Tabel Work</title>
	<link rel="stylesheet" type="text/css" href="pekerjaan.css">
</head>
<body>
<header class="Kepala">
	<nav>
		<div class="logo">
			<h1>Arkademy</h1>			
		</div>
		<div class="menu-atas">
			<label>Waktu Akses: 21 September 2019</label>
		</div>
	</nav>
	<div class="konten">
		<div class="menu-kiri">
			<img src="unduhan.jpg">
			<br>
			<hr>
			<ul>
				<li><a href="database.php"><button><img src="pic/Control Panel.png"> Home</button></a></li><hr>
				<li><a href="data-pegawai.php"><button><img src="pic/Control Panel.png"> Data Karyawan</button></a></li><hr>
				<li><a href="data-pekerjaan.php"><button><img src="pic/Control Panel.png">Data Pekerjaan</button></a></li><hr>
				<li><a href="gaji-pegawai.php"><button><img src="pic/Chrome.png">Gaji Karyawan</button></a></li><hr>
			</ul>
		</div>
		<div class="menu-kanan">
			<h1>Admin</h1>
			<p>Selamat Datang Admin</p>
			<hr><br>	
			<div class="data-a">
				<h3>Data Pekerjaan</h3>
				<div class="atas-a">
					<a href="add-work.php"><button>+Add</button></a>
				</div>
				<table class="isi-data">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Salary</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Frontend Dev</td>
							<td>10.000.000</td>
							<td><a href="edit.php">Edit</a>/<a href="hapus.php">Hapus</a></td>
						</tr>
						<tr>
							<td>Backend Dev</td>
							<td>12.000.000</td>
							<td><a href="edit.php">Edit</a>/<a href="hapus.php">Hapus</a></td>
						</tr>
					</tbody>
				</table>
				<hr>
			</div>
			
			
			</div>
		</div>
</header>
</body>
</html>