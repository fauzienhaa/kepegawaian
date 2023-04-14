<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index() //localhost:8080
    {
        return view('welcome_message');
    }
    
    public function coba() //localhost:8080/home/coba
    {
        //return view('welcome_message');
        echo "Hello World... Coba";
    }

    public function cetakNama($nama, $umur) //localhost:8080/home/cetakNama/paijo/20
    {
        //return view('welcome_message');
        echo "Nama Saya : ".$nama."</br>";
        echo "Umur Saya : ".$umur."</br>";
    }

    /*
    public function _remap($method)
    {
        if($method === 'coba') {
            return $this->index();
        } else {
            return $this->rahasia();
        }
    }
    */

    private function rahasia() //localhost:8080/home/rahasia
    {
        echo "Ini Rahasia";
    }

    public function cetakView() //localhost:8080/home/cetakView
    {
        return view('cetak_view');
    }

    public function cetakNamaView($nama, $umur) //localhost:8080/home/cetakNamaView/Fauzi/19
    {
        $data['nama']=$nama;
        $data['umur']=$umur;
        $data['fakultas']="SV";
        $data['prodi']="D3TI";
        //echo view('cetak_nama', $data, ['cache' => 60]);
        return view('cetak_nama', $data);
    }

    public function cetakArray()
    {
        $data = [
                
                'title'     => 'My Real Title',
                'heading'   => 'My Real Heading',
        ];
        $data['todo_list'] = ['Clean House', 'Call Mom', 'Run Errands'];

        return view('cetak_array', $data);
    }

    public function cetakObj()
    {
        $this->Nama="Mu'adz";
        $this->Umur=19;
        $data = [
                
                'title'     => 'My Real Title',
                'heading'   => 'My Real Heading',
        ];
        $data['obj'] = $this;

        return view('cetak_obj', $data);
    }
}
