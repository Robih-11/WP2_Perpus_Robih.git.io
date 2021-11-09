<?php
class tokosepatu extends CI_Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    // }
    public function index()
    {
        $this->load->view('view-form-tokosepatu');
        // $this->load->model('ModelTokosepatu');
    }

    public function cetak()
    {
        $this->load->model('ModelToko');
        $data = [
            'nama' => $this->input->post('nama'),
            'hp' => $this->input->post('hp'),
            'brand' => $this->input->post('brand'),
            'harga' => $this->input->post('harga'),
            'size' => $this->input->post('size'),
            'harga'=> $this->ModelToko->harga($this->input->post('brand'))
        ];
        $this->load->view('view-data-tokosepatu', $data);
        // if ($this->input->post('brand')=='Nike'){
        //     $data['harga']= 375000;
        // }
        // elseif ($this->input->post('brand')=='Adidas'){
        //     $data['harga']= 300000;
        // }
        // elseif ($this->input->post('brand')=='Adidas'){
        //     $data['harga']= 300000;
        // }
        // elseif ($this->input->post('brand')=='Kickers'){
        //     $data['harga']= 250000;
        // }
        // elseif ($this->input->post('brand')=='Eiger'){
        //     $data['harga']= 275000;
        // }
        // elseif ($this->input->post('brand')=='Bucherri'){
        //     $data['harga']= 400000;
        // }

        //  $this->load->view('view-data-tokosepatu', $data);
    }
}