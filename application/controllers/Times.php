<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Times extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		//echo "Welcome to CodeIgniter. The default Controller is Main.php";
		redirect('/times/main');
	}
	public function main()
	{ 
		$date = new DateTime();
		//$time_zone = new DateTimeZone('PST'); // or whatever zone you're after
		$time_zone = new DateTimeZone('America/Los_Angeles');
		$date->setTimezone($time_zone);
		$current_time=date_format($date, 'M d 20y , g:i A T');
		$view_data= array(
		            'current_time' => $current_time);
		$this->load->view('times/main',$view_data);
	}
}

//end of main controller