<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BeasiswaI_model extends CI_Model
{
    public function import_data($databeasiswai)
    {
        $jumlah = count($databeasiswai);
        if ($jumlah > 0) {
            $this->db->replace('beasiswa_internasional', $databeasiswai);
        }
    }

    public function getdatabeasiswai($tanggalawal = null, $tanggalakhir = null)
    {
        $tanggalawalbaru = strtotime($tanggalawal);
        $tanggalakhirbaru = strtotime($tanggalakhir);
        if ($tanggalawal && $tanggalakhir) {
            $this->db->where('date_created >=', $tanggalawalbaru);
            $this->db->where('date_created <=', $tanggalakhirbaru);
        }
        return $this->db->get('beasiswa_internasional')->result_array();
    }
    public function getBeasiswaIById($id)
    {
        return $this->db->get_where('beasiswai', ['id' => $id])->row_array();
    }
    public function hapusdatabeasiswai($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('beasiswa_internasional',['id'=>$id]);    
    }

}