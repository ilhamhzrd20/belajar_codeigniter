<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {

    function __construct(){
        parent::__construct();

    }

    public function index() {
        echo "ini method index pada controller belajar";
    }

    public function halo() {
        $data = array(
            'judul' => "Cara membuat view pada codeigniter",
            'tutorial' => "CodeIgniter"
        );
        $this->load->view('view_belajar',$data);
    }

}