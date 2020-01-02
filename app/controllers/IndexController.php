<?php

use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;

class IndexController extends Controller
{
    public function indexAction()
    {
        
    }
    public function carinomorAction()
    {
        
    }
    public function detailnomorAction()
    {
        
    }
    public function loginadminAction()
    {
        
    }
    public function nomorAction()
    {
        // $data = nomor_surat::findFirst("idKMS='$idp'");
        $max = nomor_surat::maximum(
            [
                'column' => 'id',
            ]
        );
        $data = nomor_surat::findFirst("id='$max'");
        // if($data) echo("ada");
        // else echo("tidak"); die();
        $this->view->data = $data;
        
    }
    public function uploadAction()
    {
        
    }
    public function halamanadminAction()
    {
        
    }
    public function registerAction()
    {
        
    }
    public function show404Action()
    {
        
    }
    public function storesuratAction()
    {
        $tanggal = $this->request->getPost('tanggal');
        $jenissurat = $this->request->getPost('jenissurat');
        $data = nomor_surat::findFirst(
            [
                "tanggal='$tanggal'",
                'order' => 'id DESC',
                'limit' => 1,
            ]
        );
        if($data)
        {
            echo("ada");
            $nomor = $data->nomor+1;
            // echo ($data->nama_surat);
            // var_dump($data);
            // die();
        }
        else{
            // echo("tidak ada");
            // $max = nomor_surat::maximum(
            //     [
            //         'column' => 'nomor',
            //     ]
            // );
            $data = nomor_surat::findFirst(
                [
                    // 'condition' => 'tanggal < ?1',
                    "tanggal<'$tanggal'",
                    'order' => 'tanggal DESC',
                    'limit' => 1,
                ]
            );
            if($data)
            {
                $tanggal1 = strtotime($tanggal);
                $tanggal2 = strtotime($data->tanggal);
                $diff = abs($tanggal1 - $tanggal2)/60/60/24; 
                // $difftanggal = $diff-1;
                // echo($diff);
                // var_dump($data);
                // die();
            
                $nomor=$data->nomor + (5*$diff);
                
            }
            else
            {
                $nomor=1;
            }
            
            
        }
        if($jenissurat == 5)
            {
                $nomorsurat = "TEL.".($nomor)."/LG000/R5W-5M470000/2020";
            }
            elseif($jenissurat == 6)
            {
                $nomorsurat = "TEL.".($nomor)."/YN100/R5W-5M470000/2020";
            }
            else
            {
                $nomorsurat = "TEL.".($nomor)."/YN000/R5W-5M470000/2020";
            }
        echo($nomorsurat);
        // die();
        $surat = new nomor_surat();
        $surat->name = $this->request->getPost('nama');
        $surat->nama_surat = $this->request->getPost('namasurat');
        $surat->jenis_surat = $jenissurat;
        $surat->nomor = $nomor;
        $surat->no_surat = $nomorsurat;
        $surat->tanggal = $this->request->getPost('tanggal');
        $surat->save();
        $this->response->redirect('nomor');
    }
   
    



}