<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {
    
    public function index(){
        $this->load->model("mahasiswa_model","mhs1");

        $this->mhs1->id = 011211;
        $this->mhs1->nama = "Muhammad Farhan";
        $this->mhs1->gender = "BD";
        $this->mhs1->ipk = 3.89;

        $this->load->model("mahasiswa_model","mhs2");

        $this->mhs2->id = 021110;
        $this->mhs2->nama = "Nabillah Putri";
        $this->mhs2->gender = "SI";
        $this->mhs2->ipk = 3.52;

        $this->load->model("mahasiswa_model","mhs3");

        $this->mhs3->id = 013410;
        $this->mhs3->nama = "Nadya Izzati";
        $this->mhs3->prodi = "TI";
        $this->mhs3->ipk = 3.98;

        $lst_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];

        $data['mahasiswa1'] = $this->mhs1;
        $data['list_mahasiswa'] = $lst_mhs;


        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('layout/footer');
        
    }

    public function create(){

        $data['judul'] = 'Form Kelola Mahasiswa';

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/create',$data);
        $this->load->view('layout/footer');
    }

    public function save(){

        $this->load->model('mahasiswa_model', 'mhs');

        $this->mhs->nim = $this->input->post('nim');
        $this->mhs->nama = $this->input->post('nama');
        $this->mhs->prodi = $this->input->post('prodi');
        $this->mhs->gender = $this->input->post('gender');
        $this->mhs->tmp_lahir = $this->input->post('tmp_lahir');
        $this->mhs->tgl_lahir = $this->input->post('tgl_lahir');
        $this->mhs->ipk = $this->input->post('ipk');

        $data['mhs'] = $this->mhs; 

        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('mahasiswa/view',$data);
        $this->load->view('layout/footer');

    }

}