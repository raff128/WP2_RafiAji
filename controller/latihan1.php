<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat datang .. selamat belajar web programming";
        //this->load->view('view-latihan1');
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('model_contoh2');
        $hasil = $this->model_contoh2->jumlah($n1, $n2);
        echo "hasil penjumlahan dari ". $n1 ." + ". $n2 . " = "
.$hasil;
    }
}