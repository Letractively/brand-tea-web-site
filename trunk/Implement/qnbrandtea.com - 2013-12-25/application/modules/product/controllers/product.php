<?php

/**
 * Description of group
 * It is a controller of group. It will controll all action of group management
 * @author Richat
 */
class product extends Admin_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        if (!$this->checkSession()) {
            redirect('authentication/login');
        }
        $this->load->model('mod_product');
        $this->load->model('category/mod_category');
        $this->load->model('group/mod_group');
        
    }
    
    public function index() {
        $this->viewProduct();
    }

    /**
     * View all categories
     * All category will get from table category
     */
    public function viewProduct() {
        $config['base_url'] = base_url() . $this->uri->segment(1) . '/viewProduct/';
        $config['total_rows'] = $this->mod_product->getProNum();
        $config['per_page'] = 25;

        $this->pagination->initialize($config);

        $data['pros'] = $this->mod_product->getProduct($this->uri->segment(3), $config['per_page']);
        
        $data['title'] = "Product";
        $data['page'] = 'product';
        $data['action'] = 'View Product';
        $this->load->view('masterpage/master', $data);
    }

    public function addnew() {
        $data['title'] = "New Product";
        $data['page'] = 'addnew';
        $data['action'] = 'Add New Product';
        $data['gros'] = $this->mod_group->getAllGro();

        $this->form_validation->set_rules('txt_gro_name', 'Group Name', 'trim|required|max_length[50]|is_unique[' . table('group') . '.' . field('groName') . ']');
        $this->form_validation->set_rules('dro_cat_name', 'Category Name', 'trim|required');
        if ($this->form_validation->run() == TRUE) {
            $groName = $this->input->post('txt_gro_name');
            $catId = $this->input->post('dro_cat_name');
            $groDes = $this->input->post('txt_gro_dec');
            if ($this->mod_group->addNew($groName, $groDes, $catId)) {
                $this->session->set_userdata('ms', $this->lang->line('ms_success'));
                redirect($this->uri->segment(1));
            }
        }
        $this->load->view('masterpage/master', $data);
    }

    public function edit() {
        $data['title'] = "Update Group";
        $data['page'] = 'edit';
        $data['action'] = 'Update Group';
        $data['cats'] = $this->mod_category->getAllCat();
        $check='';
        if($this->input->post('hid_gro_name')!= $this->input->post('txt_gro_name')){
            $check = '|is_unique['.table('group').'.'. field('groName').']';
        }
        $this->form_validation->set_rules('txt_gro_name', 'Group Name', 'trim|required|max_length[50]'.$check);
        if ($this->form_validation->run() == TRUE) {
            $groName = $this->input->post('txt_gro_name');
            $catId = $this->input->post('dro_cat_name');
            $groDes = $this->input->post('txt_gro_des');
            
            if ($this->mod_group->update($groName, $groDes, $catId,$this->uri->segment(3))) {
                $this->session->set_userdata('ms', $this->lang->line('ms_success'));
                redirect($this->uri->segment(1));
            }
        }
        $data['gros'] = $this->mod_group->getGro($this->uri->segment(3));
        $this->load->view('masterpage/master', $data);
    }

    public function delete() {
        if ($this->mod_group->delete($this->uri->segment(3))) {
            $this->session->set_userdata('ms', $this->lang->line('ms_success'));
            redirect($this->uri->segment(1));
        }
    }
    
    /**
     * Check user had logged in or not
     * @return boolean
     */
    public function checkSession() {
        if ($this->session->userdata('admin')) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    
    /**
     * Get fields from category by using ajax jquery
     */
    public function getFields(){
        $groId = $this->input->post('gro_id');
        $fields = $this->mod_group->getFields($groId);
        echo $fields;
    }
}
