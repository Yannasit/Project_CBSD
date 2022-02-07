<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\NameModel;


class Name extends Controller{

    public function viewName()
    {
        $model = new NameModel();
        $data['name'] = $model->orderBy('km_id', "ASC")->findAll();
        return view('Name', $data);
    }

    public function index()
    {
        return view('AddName');
    }

    public function addName()
    {
        $model = new NameModel();
        $data = [
            'km_id' => $this->request->getVar('km_id'),
            'km_name' => $this->request->getVar('km_name'),
            'km_pic' => $this->request->getVar('km_pic'),
            'km_group' => $this->request->getVar('km_group')
        ];
        $model->insert($data);
        return view('AddName', $data);
        return $this->response->redirect(site_url('/Name'));
    }

    public function showName($id = null) {
        $model = new NameModel();
        $data['data_obj'] = $model->where('km_id', $id)->first();
        return view('EditName', $data);
    }
    
    public function updateName()
    {
        $model = new NameModel();
        $id = $this->request->getVar('km_id');
        $data = [
            'km_name' => $this->request->getVar('km_name'),
            'km_pic' => $this->request->getVar('km_pic'),
            'km_group' => $this->request->getVar('km_group')
        ];
        $model->update($id, $data);
        return $this->response->redirect(site_url('/Name'));
    }

    public function deleteName($id = null) {
        $Model = new NameModel();
        $data['data'] = $Model->where('km_id', $id)->delete($id);
        return $this->response->redirect(site_url('/Name'));
    }
    
}
?>