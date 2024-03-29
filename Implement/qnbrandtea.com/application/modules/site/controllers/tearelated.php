<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tearelated extends Base_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('tearelated/mod_tea_front');
        $this->load->helper('text');
         $this->load->helper('facebook');
    }

    public function index() {
        $this->allteas();
    }
    public function allteas() {
        $data['slideshow'] = $this->mod_slideshow->getSlideshowByCatId(5);
        $config['base_url'] = base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/allteas/';
        $config['total_rows'] = $this->mod_tea_front->getAllTeaNum();
        $config['per_page'] = 9;
        $config['uri_segment'] = 4;
        //$data['langs'] = $this->mod_translation->getLanguages();
        $this->pagination->initialize($config);

        // Get tea knowledge
        $data['teas'] = $this->mod_tea_front->getTea($this->uri->segment(4), $config['per_page']);

        $data['title'] = $this->lang->line('men_teaknowledge');
        $data['page'] = 'tearelated/tearelated';
        $data['action'] = $this->lang->line('men_teaknowledge');
        $this->load->view('master', $data);
    }

    /**
     * Get one Tea related knowledge to view details information
     * @param int $teaId
     */
    public function detail($teaId = 0) {
        $data['slideshow'] = $this->mod_slideshow->getSlideshowByCatId(5);
        if ($teaId == 0) {
            redirect($this->uri->segment(1) . '/' . $this->uri->segment(2));
            exit();
        }
		$config['base_url'] = base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/detail/';
        $config['total_rows'] = $this->mod_tea_front->getAllTeaNum();
        $config['per_page'] = 9;
        $config['uri_segment'] =5;
        $this->pagination->initialize($config);
        $data['detail'] = $this->mod_tea_front->getTeaDetails($this->uri->segment(4));
        $data['teas'] = $this->mod_tea_front->getTea($this->uri->segment(5),  $config['per_page'] );
        $data['title'] = $this->lang->line('men_teaknowledge');
        $data['page'] = 'tearelated/detail';
        $data['action'] = $this->lang->line('men_detail_tea');
        $this->load->view('master', $data);
    }

}
