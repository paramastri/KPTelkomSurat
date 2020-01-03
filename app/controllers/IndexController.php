<?php

use Phalcon\Mvc\Controller;
use Phalcon\Http\Response;
use Phalcon\Mvc\Dispatcher;
use App\Events\AdminProtectController;


// use App\Events\UserProtectController;

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

    public function createAction()
    {
        
    }

    public function loginadminAction()
    {
        
    }

    public function storeAction(){
        $admin = new admin();
        $admin->username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        // echo $password;
        // die();
        $admin->password = $this->security->hash($password);
        $admin->save();
        // echo $admin->password;
        // die();
        // echo $admin->username;
        // echo $admin->password;
        // die();
        $this->response->redirect('loginadmin');
    }

    public function storeloginAction()
    {
        $username = $this->request->getPost('username');
        $pass = $this->request->getPost('password');
        // echo $pass;
        // die();
        $user = admin::findFirst("username = '$username'");
        // echo $user->password;
        // die();
        if ($user){
            if($this->security->checkHash($pass, $user->password)){
                $this->session->set(
                    'admin',
                    [
                        'id' => $user->id,
                        'username' => $user->username,
                    ]
                );

                (new Response())->redirect('halamanadmin')->send();
            }
            else{
                $this->response->redirect('loginadmin');
                echo "gagal";
                die();
            }
        }
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
    // public function registerAction()
    // {
        

    //}
    public function nomorterpakaiAction()
    {
        
    }

    // }

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
   
    public function logoutAction()
    {
        $this->session->destroy();
        $this->response->redirect();
    }

    public function listsuratAction()
    {
        // $id = $this->session->get('auth')['id'];
        $surats = nomor_surat::find();
            $data = array();

            foreach ($surats as $surat) {

                if($surat->jenis_surat == 1)
                {
                    $jenissurat = "Berita Acara Penjelasan";
                }
                elseif($surat->jenis_surat == 2)
                {
                    $jenissurat = "BASO";
                }
                elseif($surat->jenis_surat == 3)
                {
                    $jenissurat = "BADO";
                }
                elseif($surat->jenis_surat == 4)
                {
                    $jenissurat = "Surat Keluar";
                }
                elseif($surat->jenis_surat == 5)
                {
                    $jenissurat = "P0/P1";
                }
                elseif($surat->jenis_surat == 6)
                {
                    $jenissurat = "Surat Penawaran";
                }
                
                    $data[] = array(
                        'no_surat' => $surat->no_surat,
                        'tanggal' => $surat->tanggal,
                        'nama' => $surat->name,
                        'nama_surat' => $surat->nama_surat,
                        'jenis_surat' => $jenissurat,
                        'link' => $surat->id,
                    );


            }
            
            $content = json_encode($data);
            return $this->response->setContent($content);
    }


}