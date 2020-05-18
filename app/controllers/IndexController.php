<?php
declare(strict_types=1);

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        // $transaksi = Transaksi::findFirst();
        $totals =  Transaksi::find(["kategori = 'Uang'"]);
        $uang = 0;
        foreach($totals as $total){
            $uang += $total->jumlah;
        }
        $this->view->setVar("uang",$uang);
        $transaksis = Transaksi::find(['order' => 'kategori']);
        $this->view->setVar("transaksis",$transaksis);
        //echo $transaksi->nama;
    }

    public function submitAction(){
        $dataNam = $this->request->getPost("nama");
        $dataKat = $this->request->getPost("kategori");
        // print_r(sizeof($dataKat));
        print_r($dataKat);
        $databBar = $this->request->getPost("namabarang");
        print_r($databBar);
        $dataJum = $this->request->getPost("jumlah");
        print_r($dataJum);
        for($x = 0; $x < sizeof($dataKat); $x++){
            $transaksi = new Transaksi();
            $transaksi->nama = $dataNam;
            $transaksi->kategori = $dataKat[$x];
            $transaksi->namabarang = $databBar[$x];
            $transaksi->jumlah = $dataJum[$x];
            $transaksi->save();
        }
        
        // if ($transaksi->save() === true) {
        //     //ke page daftar
        //     echo "Success";
        // } else {
        //     echo "Failed";
        // }
        $this->response->redirect('/');
    }

}

