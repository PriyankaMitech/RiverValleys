<?php

namespace App\Controllers;
use App\Models\Admin_model;


class Home extends BaseController
{
    public function index(): string
        {
            return view('home');
        }

    public function Header()
        {
            return view('header');
        }

    public function Footer()
        {
            return view('footer');
        }
    
    public function AddCart()
        {
            return view('addtocart');
        }
        public function Category()
        {
            return view('category');
        }
    public function admindashboard() 
    {
        return view('Admin/admindashboard');
    }
    // public function get_menu_list() 
    // {
    //     return view('Admin/menu_list');
    // }
    public function get_menu_list() 
    {
        $model = new Admin_model();

        $uri = service('uri');
        $menu_id = $uri->getSegment(2);   // Assuming the ID is the second segment

        if(!empty($menu_id)){

            $wherecond1 = array('is_deleted' => 'N', 'id' => $menu_id);

            $data['single_data'] = $model->get_single_data('tbl_menu', $wherecond1);


        }else{
            $wherecond = array('is_deleted' => 'N');
            $data['menu_data'] = $model->getalldata('tbl_menu', $wherecond);
        }
        return view('Admin/menu_list',$data);


    }
    public function setmenu()
    {
        $menu_name = $this->request->getVar('menu_name');
        $url_location = $this->request->getVar('url_location');
        $data = [
            'menu_name' => $menu_name,
            'url_location' => $url_location,
            'created_on' => date('Y:m:d H:i:s'),
        ];
        $db = \Config\Database::connect();
        $menuTable = $db->table('tbl_menu');
        $existingMenu = $menuTable
            ->where('menu_name', $menu_name)
            ->where('url_location', $url_location)
            ->get()
            ->getFirstRow();
        if ($existingMenu && ($this->request->getVar('id') == "" || $existingMenu->id != $this->request->getVar('id'))) {
            session()->setFlashdata('error', 'Menu name and URL location combination already exists.');
            return redirect()->to('menulist'); 
        }

        if ($this->request->getVar('id') == "") {
            $menuTable->insert($data);
            session()->setFlashdata('success', 'Menu added successfully.');
        } else {
            $menuTable->where('id', $this->request->getVar('id'))->update($data);
            session()->setFlashdata('success', 'Menu updated successfully.');
        }

        return redirect()->to('menulist');
    }

    public function delete()
    {
        $uri = service('uri');
        $id = $uri->getSegment(2);   // Assuming the ID is the second segment
        $table = $uri->getSegment(3); // Assuming the table name is the third segment
        
       
        $data = ['is_deleted' => 'Y'];
        $db = \Config\Database::connect();

        $update_data = $db->table($table)->where('id', $id);
        $update_data->update($data);
        session()->setFlashdata('success', 'Data deleted successfully.');
        return redirect()->back();

        // Redirect or return a response as needed
    }
}