<!DOCTYPE html>
<html>
	<head>
		<title> Ajax </title>
	</head>
	<body>
		<form>
			<table>
				<h1 align="center">BIODATA MAHASISWA </h1>
					<tr><td>NIM</td><td><input type="text" onkeyup="isi_otomatis()" id="nim"></td></tr>
					<tr><td>NAMA</td><td><input type="text" id="nama"></td></tr>
					<tr><td>JURUSAN</td><td><input type="text" id="jurusan"></td></tr>
					<tr><td>ALAMAT</td><td><input type="text" id="alamat"></td></tr>
			</table>
		</form>
		<script src="jquery-1.11.3.min.js"></script>
		<script type="text/javascript">
			function isi_otomatis(){
				var nim = $("#nim").val();
				$.ajax({
					url: 'proses.php',
					data:"nim= "+nim ,
				}).success(function (data){
					var json = data,
					obj = JSON.parse(json);
					$('#nama').val(obj.nama);
					$('#jurusan').val(obj.jurusan);
					$('#alamat').val(obj.alamat);
				});
			}
		</script>	
	</body>
</html>