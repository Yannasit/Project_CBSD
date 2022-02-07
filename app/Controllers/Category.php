<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CategoryModel;


class Category extends Controller{

    public function viewCategory()
    {
        $model = new CategoryModel();
        $data['category'] = $model->orderBy('group_id', "ASC")->findAll();
        return view('Category', $data);
    }

    public function index()
    {
        return view('AddCategory');
    }

    public function addCategory()
    {
        $model = new CategoryModel();
        $data = [
            'group_id' => $this->request->getVar('group_id'),
            'group_name' => $this->request->getVar('group_name'),
            'group_pic' => $this->request->getVar('group_pic')
        ];
        $model->insert($data);
        return view('AddCategory', $data);
        return $this->response->redirect(site_url('/Category'));
    }

    public function showCategory($id = null) {
        $model = new CategoryModel();
        $data['data_obj'] = $model->where('group_id', $id)->first();
        return view('EditCategory', $data);
    }
    
    public function update()
    {
        $model = new CategoryModel();
        $id = $this->request->getVar('group_id');
        $data = [
            'group_name' => $this->request->getVar('group_name'),
            'group_pic' => $this->request->getVar('group_pic')
        ];
        $model->update($id, $data);
        return $this->response->redirect(site_url('/Category'));
    }

    public function delete($id = null) {
        $Model = new CategoryModel();
        $data['data'] = $Model->where('group_id', $id)->delete($id);
        return $this->response->redirect(site_url('/Category'));
    }
    
}
?>