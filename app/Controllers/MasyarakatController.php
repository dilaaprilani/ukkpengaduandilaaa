<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\masyarakat;
class MasyarakatController extends BaseController{
    protected $masyarakts;

    function __construct()
    {
        $this->masyarakats = new Masyarakat();
    }
    public function index()
    {
        $data['masyarakat']=$this->masyarakats->findAll();
        return view('masyarakat_view',$data);
    }
    public function create()
    {
        return view('fmasyarakat_view');
    }
    public function simpan()
    {
        $data = array(
            'nik'=>$this->request->getpost('nik'),
            'nama'=>$this->request->getpost('nama'),
            'username'=>$this->request->getpost('username'),
            'telp'=>$this->request->getpost('telp'),
            'password'=> password_hash($this->request->getpost('password'), PASSWORD_DEFAULT),
        );
        $this->masyarakats->insert($data);
        session()->setFlashdata("message","Data Berhasil Disimpan");
        return $this->response->redirect('/masyarakat');
    }
    public function edit($id)
    {
        if($this->request->getpost(''))
        $data = array(
            'nik'=>$this->request->getpost('nik'),
            'nama'=>$this->request->getpost('nama'),
            'username'=>$this->request->getpost('username'),
            'telp'=>$this->request->getpost('telp'),
            'password'=> password_hash($this->request->getpost('password'), PASSWORD_DEFAULT),
        );
        $this->masyarakats->update($id, $data);
        session()->getFlashdata("message","Data Berhasil Disimpan");
        return redirect('/masyarakat');
    }
    public function delete($id)
    {
        $this->masyarakats->delete($id);
        session()->setFlashdata("message","Data Berhasil Dihapus");
        return $this->response->redirect('/masyarakat');
    }
}