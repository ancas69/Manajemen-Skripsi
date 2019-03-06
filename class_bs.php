<?php
	class Bimbingan_skripsi{
		
		private $user, $pass, $host, $db, $result, $conn;

		function __construct(){
			$this->host = "localhost";
			$this->user = "root";
			$this->pass = "";
			$this->db = "manajemen_skripsi";
		}
		public function connect(){
			$this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
		} 

		public function execute($query){
			$this->result = mysqli_query($this->conn, $query);
		}




		
		public function show_data($jey)
		{
			$query = "SELECT dosen_pembimbing.nama_dosen as namdos ,skripsi.judul_skripsi as judul , mahasiswa_table.name_mahasiswa as name , mahasiswa_table.nim as nim from dosen_pembimbing join mahasiswa_table on dosen_pembimbing.niy = mahasiswa_table.id_dosen join skripsi on mahasiswa_table.nim = skripsi.id_mahasiswa and nim = $jey";
			$this->execute($query);
			return $this->result;
		}

		public function masuk_ke_log($nama,$nim,$dosen,$materi,$tanggal)
		{
			$query = "INSERT INTO bimbingan values ('$nama','$nim','$dosen','$materi','$tanggal')";
			mysqli_query($this->conn , $query);
		}

	}
?>

