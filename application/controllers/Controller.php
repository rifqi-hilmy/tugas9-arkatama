<?php
class Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library("pdf");
		$this->load->helper("url");
		$this->load->model("users");
		ini_set("memory_limit", "1024m");
	}

	public function index()
	{

		$path = base_url('public/image/image.png');
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$datapdf = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($datapdf);

		$data['data'] = array(
			'users' => $this->users->get_users(),
			'image' => array(
				'image' => $base64,
			)
		);

		$size_paper = array(0, 0, 480, 286.5);
		$this->pdf->setPaper($size_paper, 'potrait');

		$this->pdf->load_view('pdf', $data);
	}
}
