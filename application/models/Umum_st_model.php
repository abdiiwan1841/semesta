<?php

class Umum_st_model extends CI_Model {
	
	public function GetStAll()
	{

		$query = $this->db->select("id, jenis_st, no, tanggal, tahun, hal, spd, created_at")
			->from("umum_st_header")
			->where("status", 1)
			->get();

		return $query->result();
	}

	public function GetSt($id_st='')
	{
		$data = [];

		$data['st_header'] = $this->GetStHeader($id_st);
		$st_detail = $this->GetStDetail($id_st);

		for ($i=0; $i < count($st_detail); $i++) { 
			$st_detail[$i]->jabatan = ucwords(strtolower($st_detail[$i]->jabatan));
		}

		$data['st_detail'] = $st_detail;

		return $data;
	}

	public function GetStHeader($id_st='')
	{

		$query = $this->db->select("
				a.id,
				a.jenis_st, 
				a.no, 
				a.tahun, 
				a.tanggal, 
				a.hal, 
				a.tgl_tugas_start, 
				a.tgl_tugas_end, 
				a.wkt_tugas_start, 
				a.wkt_tugas_end, 
				a.tempat_tugas, 
				a.kota_tugas, 
				a.plh, 
				a.id_pejabat,
				b.nip, 
				b.nama, 
				a.dipa,
				a.spd,
				a.ppk,
				c.nip nip_ppk,
				c.nama nama_ppk
			")
			->from("umum_st_header a")
			->join("profile b", "a.id_pejabat = b.id")
			->join("dim_pejabat_tambahan c", "a.ppk = c.id", "left")
			->where("a.id", $id_st)
			->get();

		$result = $query->result();

		switch ($result[0]->jenis_st) {
			case 'KK':
				$no_st = 'ST-' . $result[0]->no . '/KPU.03/' . $result[0]->tahun;
				$jabatan = 'Kepala Kantor';
				break;

			case 'KBU':
				$no_st = 'ST-' . $result[0]->no . '/KPU.03/BG.01/' . $result[0]->tahun;
				$jabatan = 'Kepala Bagian Umum';
				break;
			
			default:
				$no_st = 'NO TIDAK TERDAFTAR';
				$jabatan = 'PEJABAT TIDAK TERDAFTAR';
				break;
		}

		switch ($result[0]->dipa) {
			case 1:
				$ur_dipa = 'KPU BC Tipe C Soekarno Hatta';
				break;

			case 2:
				$ur_dipa = 'Sekretariat DJBC';
				break;
			
			default:
				$ur_dipa = 'DIPA TIDAK TERDAFTAR';
				break;
		}

		$result[0]->no_st = $no_st;
		$result[0]->jabatan = $jabatan;
		$result[0]->ur_dipa = $ur_dipa;

		return $result[0];
	}

	public function GetStDetail($id_st='')
	{
		$query = $this->db->select("a.id_pegawai, b.nama, b.nip, b.pangkatgolongan, c.pangkat, b.jabatan, a.no_spd, a.plh_kbu, d.nama pejabat_kbu, d.nip nip_kbu")
			->from("umum_st_detail a")
			->join("profile b", "a.id_pegawai = b.id")
			->join("dim_pangkat_gol c", "b.pangkatgolongan = c.gol")
			->join("profile d", "a.pjb_kbu = d.id")
			->where("a.id_st", $id_st)
			->order_by("a.id")
			->get();
		$result = $query->result();
		for ($i=0; $i < count($result); $i++) { 
			$nama = $result[$i]->nama;
			$nama = explode(',', $nama);
			$nama = $nama[0];
			$result[$i]->nama = $nama;
		}
		return $result;
	}

	public function SaveSt($input=[], $no_st='')
	{
		$header = $input['header'];
		$pegawai = $input['pegawai'];
		$header['no'] = $no_st;

		if (isset($header['spd'])) {
			$header['ppk'] = $this->GetPpk($header['dipa']);
		} else {
			$header['ppk'] = null;
		}
		
		$header = $this->SaveStHeader($header);

		$this->SaveStDetail($header, $pegawai);
	}

	public function SaveStHeader($header=[])
	{
		$header['tanggal'] = date('Y-m-d');
		$header['tahun'] = date('Y');
		$header['tgl_tugas_start'] = ($header['tgl_tugas_start'] == '' ? NULL : date('Y-m-d', strtotime($header['tgl_tugas_start'])));
		$header['tgl_tugas_end'] = ($header['tgl_tugas_end'] == '' ? NULL : date('Y-m-d', strtotime($header['tgl_tugas_end'])));
		$header['wkt_tugas_end'] = ($header['wkt_tugas_end'] == '' ? NULL : $header['wkt_tugas_end']);

		$this->db->insert('umum_st_header', $header);
		$last_insert = $this->db->select("LAST_INSERT_ID() id")->get()->result();

		return $last_insert[0]->id;
	}

	public function SaveStDetail($id_header='', $pegawai=[])
	{
		if (count($pegawai) > 0) {
			for ($i=0; $i < count($pegawai); $i++) { 
				$pegawai[$i]['id_st'] = $id_header;
			}
		}

		$this->db->insert_batch('umum_st_detail', $pegawai);
	}

	public function GetPejabat($jabatan='')
	{
		$query = $this->db->query("
			SELECT
				a.id,
				a.nama,
				a.nip,
				a.jabatan
			FROM db_semesta.profile a
			INNER JOIN db_semesta.jabatan b ON b.nama = a.jabatan COLLATE utf8_unicode_ci
			WHERE b.k_jbtn = '" . $jabatan . "'
		");

		return $query->result();
	}

	public function GetPpk($dipa='')
	{
		switch ($dipa) {
			case 1:
				$level = 'kpu bc soetta';
				break;

			case 2:
				$level = 'sekretariat djbc';
				break;
			
			default:
				$level = '';
				break;
		}

		$query = $this->db->select('id')
			->from('dim_pejabat_tambahan')
			->where('level', $level)
			->where('jabatan', 'ppk')
			->get()
			->result();


		return $query[0]->id;
	}

	public function GetPegawai($input='', $exclude='')
	{
		$excludeStr = implode(',', $exclude);

		$query = $this->db->query("
			SELECT a.id, a.nip, a.nama
			from db_semesta.profile a
			where 
				(
					a.nip like '%" . $input . "%' or
					a.nama like '%" . $input . "%'
				) and
				a.id not in (" . $excludeStr . ")
			limit 10
		");

		return $query->result();
	}

	public function CekJmlSpd($id_st='')
	{

		$query = $this->db->select('id_pegawai, no_spd')
			->from('umum_st_detail')
			->where('id_st', $id_st)
			->get();

		return $query->result();
	}

	public function CekSpd($id_st='', $id_pegawai='')
	{

		$query = $this->db->select('id_pegawai, no_spd')
			->from('umum_st_detail')
			->where('id_st', $id_st)
			->where('id_pegawai', $id_pegawai)
			->get()
			->result();

		if (count($query) > 0) {
			return $query[0]->no_spd;
		} else {
			return null;
		}
	}

	public function UpdateSt($header='', $new_detail=[], $del_detail=[])
	{
		$this->UpdateStHeader($header);
		$this->DeleteStDetail($header['id_st'], $del_detail);
		$this->UpdateStDetail($header['id_st'], $new_detail);

		return $header;
	}

	private function UpdateStHeader($header='')
	{
		$update_id = $header['id_st'];
		unset($header['id_st']);

		$header['tgl_tugas_start'] = ($header['tgl_tugas_start'] == '' ? NULL : date('Y-m-d', strtotime($header['tgl_tugas_start'])));
		$header['tgl_tugas_end'] = ($header['tgl_tugas_end'] == '' ? NULL : date('Y-m-d', strtotime($header['tgl_tugas_end'])));
		$header['wkt_tugas_end'] = ($header['wkt_tugas_end'] == '' ? NULL : $header['wkt_tugas_end']);

		$update_data = $header;

		$this->db->where('id', $update_id);
		$this->db->update('umum_st_header', $update_data);
	}

	public function DeleteStDetail($id_st='', $del_detail='')
	{
		if (isset($del_detail)) {
			if (count($del_detail) > 0) {
				foreach ($del_detail as $key => $value) {

					$this->db->where('id_st', $id_st);
					$this->db->where('id_pegawai', $value);
					$this->db->delete('umum_st_detail');
				}
			}
		}
	}

	public function UpdateStDetail($id_st='', $new_detail='')
	{

		foreach ($new_detail as $key => $value) {
			$value['id_st'] = $id_st;

			$insert_query = $this->db->insert_string('umum_st_detail', $value);
			$insert_query = str_replace('INSERT INTO','INSERT IGNORE INTO',$insert_query);
			$this->db->query($insert_query);
		}
	}

	public function DeleteSt($id_st='')
	{
		$this->db->set('status', 0);
		$this->db->where('id', $id_st);
		$this->db->update('umum_st_header');
	}

}