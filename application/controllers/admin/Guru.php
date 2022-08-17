<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class guru extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Guru');

        if ($this->session->userdata('logged_in') != "login") {
            ?>
            <script type="text/javascript">
                    alert('Login Dahulu Sebelum Akses Halaman Ini !');
                    window.location='<?php echo base_url(''); ?>'
                </script>
            <?php
        }
	}

    public function cetak() 
    {
        $this->load->view('admin/guru/cetak');
    }
	public function index()

	{
		$data['page'] = "guru";
		$data['data_guru']   = $this->db->get('guru');
		$this->load->view('admin/guru/data_guru', $data);
	}

	public function create()
	{
		$data['page'] = "guru";
		$this->load->view('admin/guru/input_guru', $data);
	}

	public function tambah()
	{
        $nama_guru= $this->input->post('nama_guru');
        $nip            = $this->input->post('nip');
        $ttl            = $this->input->post('ttl');
        $pendidikan     = $this->input->post('pendidikan');
        $jabatan        = $this->input->post('jabatan');
        $studi          = $this->input->post('studi');
        $data           = array(
                         'nama_guru'  =>$nama_guru,
                         'nip'              =>$nip,
                         'ttl'              =>$ttl,
                         'pendidikan'       =>$pendidikan,
                         'jabatan'          =>$jabatan,
                         'studi'            =>$studi,
                        );
        
        if ($this->Model_Guru->insert($data) == TRUE) {
        	$this->session->set_flashdata('tambah', true);
        }else{
        	$this->session->set_flashdata('tambah', false);
        }

        redirect('admin/guru');
	}

    public function view_edit($id_guru)
    {
        $data['page'] = "guru";
		$data['view'] = $this->db->where('id_guru',$id_guru)->get('guru')->row();
        $this->load->view('admin/guru/edit_guru', $data);

    }

    public function edit($id_guru)
    {
        $nama_guru= $this->input->post('nama_guru', true);
        $nip            = $this->input->post('nip', true);
        $ttl            = $this->input->post('ttl', true);
        $pendidikan     = $this->input->post('pendidikan', true);
        $jabatan        = $this->input->post('jabatan', true);
        $studi          = $this->input->post('studi', true);
        $data           = array(
                        'nama_guru'  =>$nama_guru,
                        'nip'              =>$nip,
                        'ttl'              =>$ttl,
                        'pendidikan'       =>$pendidikan,
                        'jabatan'          =>$jabatan,
                        'studi'            =>$studi,
                        );
        if ($this->Model_Guru->edit($data, $id_guru) == TRUE) {
            $this->session->set_flashdata('edit', true);
        }else{
            $this->session->set_flashdata('edit', false);
        }

        redirect('admin/guru');
    }

    public function delete($id_guru)
    {
        if ($this->Model_Guru->delete($id_guru) == TRUE) {
            $this->session->set_flashdata('delete', true);
        }else{
            $this->session->set_flashdata('delete', false);
        }
        redirect('admin/guru');
    }

}