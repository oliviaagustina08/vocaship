<?php
defined('BASEPATH') or exit('No direct script access allowed');
require_once APPPATH . 'third_party/Spout/Autoloader/autoload.php';

use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class BeasiswaI extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('BeasiswaI_model');
    }



    public function index()
    {
        $tanggalawal = $this->input->get('tanggalawal');
        $tanggalakhir = $this->input->get('tanggalakhir');
        $data['title'] = 'Export Import';
        $data['semuabeasiswai'] = $this->BeasiswaI_model->getdatabeasiswai($tanggalawal, $tanggalakhir);
        $this->load->view('index/indexi', $data);
    }

    public function uploaddata()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['file_name'] = 'doc' . time();
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('importexcel')) {
            $file = $this->upload->data();
            $reader = ReaderEntityFactory::createXLSXReader();

            $reader->open('uploads/' . $file['file_name']);
            foreach ($reader->getSheetIterator() as $sheet) {
                $numRow = 1;
                foreach ($sheet->getRowIterator() as $row) {
                    if ($numRow > 1) {
                        $databeasiswai = array(
                            'nik'  => $row->getCellAtIndex(1),
                            'beasiswa'  => $row->getCellAtIndex(2),
                            'nama' => $row->getCellAtIndex(3),
                            'jenis_kelamin'       => $row->getCellAtIndex(4),
                            'kota'       => $row->getCellAtIndex(5),
                            'date_created' => time(),
                            'date_modified' => time(),
                        );
                        $this->BeasiswaI_model->import_data($databeasiswai);
                    }
                    $numRow++;
                }
                $reader->close();
                unlink('uploads/' . $file['file_name']);
                $this->session->set_flashdata('pesan', 'import Data Berhasil');
                redirect('beasiswai');
            }
        } else {
            echo "Error :" . $this->upload->display_errors();
        };
    }
    public function mpdfi()
    {
        $tanggalawal = $this->input->get('tanggalawal');
        $tanggalakhir = $this->input->get('tanggalakhir');
        $mpdfi = new \Mpdf\Mpdf();
        $databeasiswai = $this->BeasiswaI_model->getdatabeasiswai($tanggalawal, $tanggalakhir);
        $data = $this->load->view('pdf/mpdfi', ['semuabeasiswai' => $databeasiswai], TRUE);
        $mpdfi->WriteHTML($data);
        $mpdfi->Output();
    }

    public function exceli()
    {
        $tanggalawal = $this->input->get('tanggalawal');
        $tanggalakhir = $this->input->get('tanggalakhir');
        $data['title'] = 'Laporan Excel';
        $data['semuabeasiswai'] = $this->BeasiswaI_model->getdatabeasiswai($tanggalawal, $tanggalakhir);
        $this->load->view('excel/exceli', $data);
    }

    public function highcharti()
    {
        $tanggalawal = $this->input->get('tanggalawal');
        $tanggalakhir = $this->input->get('tanggalakhir');
        $data['title'] = 'Export Grafik';
        $data['semuabeasiswai'] = $this->BeasiswaI_model->getdatabeasiswai($tanggalawal, $tanggalakhir);
        $this->load->view('grafik/highcharti', $data);
    }

    public function hapus($id)
    {
        $this->BeasiswaI_model->hapusdatabeasiswai($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('beasiswai');
    }

    
}
