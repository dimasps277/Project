<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in') != "login") {
			?>
			<script type="text/javascript">
				alert('Login Dahulu Sebelum Akses Halaman Ini !');
				window.location='<?php echo base_url(); ?>'
			</script>
            <?php
		}
	}

	public function index()
	{
		$data['page'] = "Dashboard";
		$this->load->view('user/dashboard', $data);
	}
}