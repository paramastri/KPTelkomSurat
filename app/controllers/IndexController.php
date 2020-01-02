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
        $surat = new nomor_surat();
        $surat->name = $this->request->getPost('nama');
        $surat->nama_surat = $this->request->getPost('namasurat');
        $surat->jenis_surat = $this->request->getPost('jenissurat');
        $surat->tanggal = $this->request->getPost('tanggal');
        $surat->save();
        $this->response->redirect('nomor');
    }
   
    



}