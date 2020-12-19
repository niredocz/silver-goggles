<?php namespace App\Models;

use CodeIgniter\Model;

class Datasiswa_model extends Model {

    public function get_data_siswa() {
        $data = $this->db->table('data_siswa');
        $data->select("data_siswa.*, gender.nama_gender, agama.nama_agama");
        $data->join('gender', 'gender.id_gender = data_siswa.id_gender','left');
        $data->join('agama', 'agama.id_agama = data_siswa.id_agama','left');
        return $data->get();
    }

    public function get_gender() {
        $data = $this->db->table('gender');
        return $data->get();
    }

    public function get_agama() {
        $data = $this->db->table('agama');
        return $data->get();
    }

    public function edit_data_siswa($data, $id) {
        $query = $this->db->table('data_siswa')->update($data, array('nisn' => $id));
        return $query;
    }

    public function simpan_data_siswa($data) {
        $query = $this->db->table('data_siswa')->insert($data);
        return $query;
    }

    public function hapus_data_siswa($id) {
        $query = $this->db->table('data_siswa')->delete(array('nisn' => $id));
        return $query;
    }

}