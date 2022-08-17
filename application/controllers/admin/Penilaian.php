<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Kriteria');
        $this->load->model('Model_Guru');
		$this->load->model('Model_Penilaian');

        if ($this->session->userdata('logged_in') != "login") {
            ?>
            <script type="text/javascript">
                    alert('Login Dahulu Sebelum Akses Halaman Ini !');
                    window.location='<?php echo base_url(''); ?>'
                </script>
            <?php
        }
	}

	public function index()
	{
		$data['page'] = "Penilaian";
		$guru = $this->db->get('guru')->result();
		$data['jumlah_guru'] = count($guru);
		$data['data_guru']   = $this->db->get('guru');
		$this->load->view('admin/penilaian/data_penilaian', $data);
	}

	public function create($id_guru)
	{
        $data['page'] = "Penilaian";
		$data['view'] = $this->db->where('id_guru',$id_guru)->get('guru')->row();
        $data['data_kriteria']   = $this->db->get('kriteria')->result();
        $data['data_penilaian'] = $this->db->query("SELECT penilaian.id_penilaian, kriteria.kriteria, penilaian.nilai, penilaian.keterangan FROM penilaian,kriteria WHERE penilaian.id_kriteria=kriteria.id_kriteria AND penilaian.id_guru='$id_guru'")->result();
		$this->load->view('admin/penilaian/input_penilaian', $data);
	}

	public function tambah()
	{
        $id_guru   = $this->input->post('id_guru');
        $id_kriteria     = $this->input->post('id_kriteria');
        $nilai           = $this->input->post('nilai');
        $keterangan      = $this->input->post('keterangan');
        $data            = array('id_guru'        =>$id_guru,
                                 'id_kriteria'       =>$id_kriteria,
                                 'nilai'          =>$nilai,
                                 'keterangan'     =>$keterangan
                             	 );
        
        if ($this->Model_Penilaian->insert($data) == TRUE) {
        	$this->session->set_flashdata('tambah', true);
        }else{
        	$this->session->set_flashdata('tambah', false);
        }

        redirect_back();
	}

    public function view_edit($id_penilaian)
    {
        $data['page'] = "Penilaian";
		$data['view'] = $this->db->where('id_penilaian',$id_penilaian)->get('penilaian')->row();
        $this->load->view('admin/penilaian/edit_penilaian', $data);

    }

    public function edit($id_penilaian)
    {
        $id_guru         = $this->input->post('id_guru', true);
        $id_kriteria        = $this->input->post('id_kriteria', true);
        $nilai           = $this->input->post('nilai', true);
        $keterangan      = $this->input->post('keterangan', true);
        $data            = array('id_guru'        =>$id_guru,
                                 'id_kriteria'       =>$id_kriteria,
                                 'nilai'          =>$nilai,
                                 'keterangan'     =>$keterangan
                                 );
        
        if ($this->Model_Penilaian->edit($data, $id_penilaian) == TRUE) {
            $this->session->set_flashdata('edit', true);
        }else{
            $this->session->set_flashdata('edit', false);
        }

        redirect('admin/penilaian/create/'.$id_guru);
    }

    public function delete($id_penilaian)
    {
		$this->Model_Penilaian->delete($id_penilaian);
            $this->session->set_flashdata('delete', 'Berhasil Dihapus');
        redirect_back();
    }

}