<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';
use chriskacerguis\RestServer\RestController;

class ApiStudentController extends RestController
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Mahasiswa');
    }

    public function index()
    {
        $students = new M_Mahasiswa;
        $students = $students->getDataMahasiswa();
        $this->response($students, 200);
    }


}

?>
