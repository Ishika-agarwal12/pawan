<?php
class Website extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->view('website/globals/head');
		$this->load->view('website/globals/header');
	}


		// destructor run at last
		public function __destruct(){
			echo $this->load->view('website/globals/footer',[],true);

			echo $this->load->view('website/globals/scripts',[],true);
		}



Public function index()
{
$this->load->view('website/'.__FUNCTION__);
}


public function about()
{
$this->load->view('website/'.__FUNCTION__);
}


public function contact()
{
$this->load->view('website/'.__FUNCTION__);
}

// public function portfolio-details()
// {
// $this->load->view('website/'.__FUNCTION__);
// }

public function portfolio()
{
$this->load->view('website/'.__FUNCTION__);
}

public function resume()
{
$this->load->view('website/'.__FUNCTION__);
}

public function services()
{
$this->load->view('website/'.__FUNCTION__);
}
}
