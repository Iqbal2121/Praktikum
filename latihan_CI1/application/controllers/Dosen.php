<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller{

    public function index(){
        $this->load->model("dosen_model","dsn1");

        $this->dsn1->nidn = 45213;
        $this->dsn1->nama = "Qibaludin";
        $this->dsn1->pendidikan = "S-3";

        $this->load->model("dosen_model","dsn2");

        $this->dsn2->nidn = 36812;
        $this->dsn2->nama = "Defirman";
        $this->dsn2->pendidikan = "S-2";

        $this->load->model("dosen_model","dsn3");

        $this->dsn3->nidn = 36812;
        $this->dsn3->nama = "Padine";
        $this->dsn3->pendidikan = "S-3";

        $lst_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['ListDosen'] = $lst_dsn;

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/use_dosen', $data);
        $this->load->view('layout/footer');
    }

    public function create(){

        $data['judul'] = 'Form Kelola Mahasiswa';

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/create',$data);
        $this->load->view('layout/footer');

    }

    public function save(){

        $this->load->model('dosen_model', 'dsn');

        $this->dsn->nidn = $this->input->post('nidn');
        $this->dsn->nama = $this->input->post('nama');
        $this->dsn->gender = $this->input->post('gender');
        $this->dsn->tmp_lahir = $this->input->post('tmp_lahir');
        $this->dsn->tgl_lahir = $this->input->post('tgl_lahir');
        $this->dsn->pendidikan = $this->input->post('pendidikan');
        $this->dsn->prodi = $this->input->post('prodi');

        $data['dsn'] = $this->dsn; 

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('dosen/view', $data);
        $this->load->view('layout/footer');

    }

}