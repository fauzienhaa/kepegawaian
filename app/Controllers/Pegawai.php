<?php

namespace App\Controllers;

use App\Models\PegawaiModel;

class Pegawai extends BaseController
{
    public function __construct()
    {
        $this->pgwModel = new PegawaiModel();
        // $this->$table = new \CodeIgniter\view\Table();
        // helper(['form', 'url']);
    }

    public function index()
    {
        //$mhs = $this->mhsModel->findAll();
        
        $pgw = $this->pgwModel->getPgw();
        $data = [
            'pgw'   => $pgw,
            'title' => 'Beranda' 
        ];
        echo view('Pegawai/listPgw', $data);
    }

    public function detail($username)
    {
        $pgw = $this->pgwModel->getPgw($username);
        $data = [
            'pgw'   => $pgw,
            'title' => 'Detail Pegawai'
        ];
        echo view('Pegawai/detailPegawai', $data);
    }

    public function add()
    {
        $data = array(
            'username'  => $this->request->getPost('username'),
            'password'  => $this->request->getPost('password'),
            'email'     => $this->request->getPost('email'),
            'kota'      => $this->request->getPost('kota')
        );
        $this->pgwModel->savePgw($data);
        echo '<script>
                alert("Sukses Tambah data");
                window.location="' . base_url('Pegawai') . '"
              </script>';
    }

    public function input()
    {
        helper(['form', 'url']);

        $periksa = $this->validate(
            [
                'username' => ['label' => 'Username', 'rules' => 'required|max_length[10]'],
                'password' => ['label' => 'Password', 'rules' => 'required|min_length[3]'],
                'passconf' => ['label' => 'Passconf', 'rules' => 'required|matches[password]'],
                'email'    => ['label' => 'email', 'rules' => 'required|valid_email'],
            ],
            [
                'username' => ['required'    => 'Anda harus mengisi Username',],
                'email'    => ['valid_email' => 'Email anda tidak valid',],
            ]
        );

        $data = [
            'title' => 'Tambah Data'
        ];

        if (!$periksa) {
            echo view('Pegawai/Signup',[
                'validation' => $this->validator,
                'title' => 'Tambah Data'
            ] );
        } else {
            $this->add();
            echo view('Pegawai/Success', $data);
        }
    }

    

    public function delete($username) {
        $this->pgwModel->delete($username);
        return redirect()->to('/');
    }

    // public function edit($username) {
    //     $this->pgwModel->edit($username);
    //     return redirect()->to('/');
    // }

}
