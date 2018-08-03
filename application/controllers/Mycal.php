<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mycal extends CI_Controller {

	public function index($year = NULL , $month = NULL)
	{
		$this->load->model('Mycal_model');
		$data['calender'] = $this->Mycal_model->getcalender($year , $month);
		$this->load->view('calview', $data);
	}
}
