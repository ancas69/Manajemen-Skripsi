<?php
	class Bimbingan_skripsi{
		
		private $user, $pass, $host, $db, $result, $conn;

		function __construct(){
			$this->host = "localhost";
			$this->user = "root";
			$this->pass = "";
			$this->db = "manajemen_skripsi_rpl";
		}
		public function connect(){
			$this->conn = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
		} 

		public function execute($query){
			$this->result = mysqli_query($this->conn, $query);
		}
		
		public function show_data($jey)
		{
			$query = "SELECT skripsi.id_skripsi as idsk, dosen.Nama as namdos ,skripsi.judul_skripsi as judul , mahasiswa_metopen.Nama as name , mahasiswa_metopen.NIM as nim from dosen join mahasiswa_metopen on dosen.NIY = mahasiswa_metopen.Dosen join skripsi on mahasiswa_metopen.NIM = skripsi.NIM and mahasiswa_metopen.NIM = $jey ";
			$this->execute($query);
			return $this->result;
		}

		public function masuk_ke_log($id,$materi,$id_skripsi,$tanggal,$jam)
		{
			$query = "INSERT INTO logbook_bimbingan values ('$id','$materi','$id_skripsi','$tanggal','$jam')";
			$this->execute($query);
			return $this->result;
		}

		public function select_one_mahasiswa($key)
		{
			$query = "SELECT *,mahasiswa_metopen.Nama as namaa, mahasiswa_metopen.NIM as Nm, dosen.Nama as namdis from logbook_bimbingan join skripsi on logbook_bimbingan.id_skripsi = skripsi.id_skripsi join mahasiswa_metopen on mahasiswa_metopen.NIM = skripsi.NIM join dosen on dosen.NIY = mahasiswa_metopen.Dosen and skripsi.NIM = $key";
			$this->execute($query);
			return $this->result;
		}

	}
?>

