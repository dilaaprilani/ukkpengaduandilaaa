<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\petugas;
class PetugasController extends BaseController{

    protected $petugass;

    function __construct()
    {
        $this->petugass = new Petugas();
    }
    public function index()
    {
        $data['petugas']=$this->petugass->findAll();
        return view('petugas_view',$data);
    }
    public function create()
    {
        return view('fpetugas_view');
    }
    public function simpan()
    {
        $data = array(
            'nama_petugas'=>$this->request->getpost('nama_petugas'),
            'username'=>$this->request->getpost('username'),
            'telp'=>$this->request->getpost('telp'),
            'level'=>$this->request->getpost('level'),
            'password'=> password_hash($this->request->getpost('password'), PASSWORD_DEFAULT),
        );
        $this->petugass->insert($data);
        session()->setFlashdata("message","Data Berhasil Disimpan");
        return $this->response->redirect('/petugas');
    }
    public function edit($id)
    {
        if($this->request->getpost(''))
        $data = array(
            'nama_petugas'=>$this->request->getpost('nama_petugas'),
            'username'=>$this->request->getpost('username'),
            'telp'=>$this->request->getpost('telp'),
            'level'=>$this->request->getpost('level'),
            'password'=> password_hash($this->request->getpost('password'), PASSWORD_DEFAULT),
        );
        $this->petugass->update($id, $data);
        session()->getFlashdata("message","Data Berhasil Disimpan");
        return redirect('/petugas');
    }
    public function delete($id)
    {
        $this->petugass->delete($id);
        session()->setFlashdata("message","Data Berhasil Dihapus");
        return $this->response->redirect('/petugas');
    }
}