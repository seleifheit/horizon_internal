<?php


class horizon extends CI_Controller {
	

	public function index() {

		$this->load->view("default_header");

		$this->load->view('horizon_landing_page');

		$this->load->view("default_footer");

	}
	


}