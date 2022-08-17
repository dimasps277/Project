<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hasil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Guru');
        $this->load->model('Model_Kriteria');
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
        $data['page'] = "Hasil";
		$this->load->view('admin/hasil/data_hasil', $data);
    }
	
	public function cetak() 
    {
		$this->load->view('admin/hasil/cetak');
    }

    public function proses_normalisasi()
    {
        $guru = $this->db->query("SELECT DISTINCT kriteria.tipe, penilaian.id_guru, penilaian.id_kriteria FROM penilaian,kriteria,guru WHERE kriteria.id_kriteria=penilaian.id_kriteria AND guru.id_guru=penilaian.id_guru");
        foreach ($guru->result() as $a1) {
            $id_kriteria = $a1->id_kriteria;
            $id_guru  = $a1->id_guru;

            if ($a1->tipe =="benefit"){

            $max   = $this->db->query("SELECT kriteria.kriteria, MAX(penilaian.nilai) as hasilmax FROM penilaian,kriteria,guru WHERE kriteria.id_kriteria=penilaian.id_kriteria AND kriteria.id_kriteria='$id_kriteria' ")->row();
            $nil = $this->db->query("SELECT nilai FROM penilaian WHERE id_kriteria='$id_kriteria' AND id_guru='$id_guru'")->row();
            $minim   = $this->db->query("SELECT kriteria.kriteria, MIN(penilaian.nilai) as minim FROM penilaian,kriteria,guru WHERE kriteria.id_kriteria=penilaian.id_kriteria AND kriteria.id_kriteria='$id_kriteria' ")->row();

            $data = array(
                'id_guru' => $a1->id_guru,
                'id_kriteria' => $a1->id_kriteria,
                'normalisasi' => number_format(($nil->nilai-$minim->minim)/($max->hasilmax-$minim->minim),2));
            $nimax = number_format(($nil->nilai-$minim->minim)/($max->hasilmax-$minim->minim),2);
            $cek = $this->db->query("SELECT * FROM normalisasi WHERE id_guru='$a1->id_guru' and id_kriteria='$a1->id_kriteria' and normalisasi='$nimax'");
            if ($cek->num_rows() == null) {
                $this->db->insert('normalisasi', $data);
                
            } elseif ($cek->num_rows() == 1) {
                $this->session->set_flashdata('gagal','Data Sudah Di normalisasikan');
                ?>
                
                <?php
            }

        }elseif($a1->tipe == "cost"){

            $min   = $this->db->query("SELECT kriteria.kriteria, MIN(penilaian.nilai) as hasilmin FROM penilaian,kriteria,guru WHERE kriteria.id_kriteria=penilaian.id_kriteria AND kriteria.id_kriteria='$id_kriteria' ")->row();
            $nil = $this->db->query("SELECT nilai FROM penilaian WHERE id_kriteria='$id_kriteria' AND id_guru='$id_guru'")->row();
            $maxim   = $this->db->query("SELECT kriteria.kriteria, MAX(penilaian.nilai) as maxim FROM penilaian,kriteria,guru WHERE kriteria.id_kriteria=penilaian.id_kriteria AND kriteria.id_kriteria='$id_kriteria' ")->row();


            $data = array(
                'id_guru' => $a1->id_guru,
                'id_kriteria' => $a1->id_kriteria,
                'normalisasi' => number_format(($nil->nilai-$maxim->maxim)/($min->hasilmin-$maxim->maxim),2));
            $nimin = number_format(($nil->nilai-$maxim->maxim)/($min->hasilmin-$maxim->maxim),2);
            $cek = $this->db->query("SELECT * FROM normalisasi WHERE id_guru='$a1->id_guru' and id_kriteria='$a1->id_kriteria' and normalisasi='$nimin'");
            if ($cek->num_rows() == null) {
                $this->db->insert('normalisasi', $data);
                
            } elseif ($cek->num_rows() == 1) {
                $this->session->set_flashdata('gagal','Data Sudah Di normalisasikan');
                ?>
                
                <?php
            }

       
        }
        }
        redirect('admin/hasil');

    }

    public function proses_keputusan()
    {
        $guru = $this->db->query("SELECT DISTINCT kriteria.tipe, normalisasi.id_guru, normalisasi.id_kriteria FROM normalisasi,kriteria,guru WHERE kriteria.id_kriteria=normalisasi.id_kriteria AND guru.id_guru=normalisasi.id_guru");
        foreach ($guru->result() as $a1) {
            $id_kriteria = $a1->id_kriteria;
            $id_guru  = $a1->id_guru;

            $kriteria   = $this->db->query("SELECT kriteria.bobot, normalisasi.normalisasi FROM normalisasi,kriteria,guru WHERE kriteria.id_kriteria=normalisasi.id_kriteria AND kriteria.id_kriteria='$id_kriteria' ")->row();
            $nil = $this->db->query("SELECT normalisasi FROM normalisasi WHERE id_kriteria='$id_kriteria' AND id_guru='$id_guru'")->row();

                $data = array(
                    'id_guru' => $a1->id_guru,
                    'id_kriteria' => $a1->id_kriteria,
                    'bobot_keputusan' => number_format(($kriteria->bobot * $nil->normalisasi) + $kriteria->bobot,4));
                    $keputusan = number_format(($kriteria->bobot * $nil->normalisasi) + $kriteria->bobot,4);
                        $cek = $this->db->query("SELECT * FROM keputusan WHERE id_guru='$a1->id_guru' and id_kriteria='$a1->id_kriteria' and bobot_keputusan='$keputusan'");
                if ($cek->num_rows() == null) {
                    $this->db->insert('keputusan', $data);
                    
                } elseif ($cek->num_rows() == 1) {
                    $this->session->set_flashdata('gagal','Data Sudah Di normalisasikan');
                    ?>
                    
                    <?php
                }

        }         
        redirect('admin/hasil');

    
    }

    public function proses_matriks_batas()
    {
        $guru = $this->db->query("SELECT DISTINCT keputusan.id_kriteria, keputusan.id_guru FROM keputusan,kriteria,guru WHERE kriteria.id_kriteria=keputusan.id_kriteria AND guru.id_guru=keputusan.id_guru");
        foreach ($guru->result() as $a1) {
            $id_kriteria = $a1->id_kriteria;
            $id_guru = $a1->id_guru;

            $kriteria1  = $this->db->query("SELECT EXP(SUM(LOG(COALESCE(bobot_keputusan,1)))) AS jumlah FROM keputusan WHERE id_kriteria='$id_kriteria'")->row();
            $bagi       = $this->db->query("SELECT * FROM guru")->num_rows();
                $data = array(
                    'id_kriteria' => $a1->id_kriteria,
                    'nilai_batas' => number_format(pow($kriteria1->jumlah, 1/$bagi),4));
                    $nilai_batas = number_format(pow($kriteria1->jumlah, 1/$bagi),4);
                        $cek = $this->db->query("SELECT * FROM matriks_batas WHERE id_kriteria='$a1->id_kriteria' and nilai_batas='$nilai_batas'");
                if ($cek->num_rows() == null) {
                    $this->db->insert('matriks_batas', $data);
                    
                } elseif ($cek->num_rows() == 1) {
                    $this->session->set_flashdata('gagal','Data Sudah Di normalisasikan');
                    ?>
                    
                    <?php
                }

        }         
        redirect('admin/hasil');

    
    }


    public function proses_perkiraan_batas()
    {
        $guru = $this->db->query("SELECT DISTINCT matriks_batas.id_kriteria, keputusan.id_kriteria, keputusan.id_guru FROM keputusan,kriteria,guru,matriks_batas WHERE kriteria.id_kriteria=keputusan.id_kriteria AND guru.id_guru=keputusan.id_guru AND kriteria.id_kriteria=matriks_batas.id_kriteria");
        foreach ($guru->result() as $a1) {
            $id_kriteria = $a1->id_kriteria;
            $id_guru = $a1->id_guru;

            $bobot  = $this->db->query("SELECT bobot_keputusan FROM keputusan WHERE id_kriteria='$id_kriteria' AND id_guru='$id_guru'")->row();
            $batas  = $this->db->query("SELECT nilai_batas FROM matriks_batas WHERE id_kriteria='$id_kriteria'")->row();

                $data = array(
                    'id_guru' => $a1->id_guru,
                    'id_kriteria' => $a1->id_kriteria,
                    'nilai_perkiraan' => number_format($bobot->bobot_keputusan-$batas->nilai_batas,4));
                    $nilai_perkiraan = number_format($bobot->bobot_keputusan-$batas->nilai_batas,4);
                        $cek = $this->db->query("SELECT * FROM perkiraan_perbatasan WHERE id_guru='$id_guru' and id_kriteria='$a1->id_kriteria' and nilai_perkiraan='$nilai_perkiraan'");
                
				if ($cek->num_rows() == null) {
                    $this->db->insert('perkiraan_perbatasan', $data);
                    
                } elseif ($cek->num_rows() == 1) {
                    $this->session->set_flashdata('gagal','Data Sudah Di normalisasikan');
                    ?>
                    
                    <?php
                }

        }         
        redirect('admin/hasil');

    
    }
        
    public function delete_analisa()
    {
        $this->db->query("DELETE FROM rangking");
        redirect('admin/hasil');
    }

    public function delete_perkiraan_batas()
    {
        $this->db->query("DELETE FROM perkiraan_perbatasan");
        redirect('admin/hasil');
    }

    public function delete_matriks_batas()
    {
        $this->db->query("DELETE FROM matriks_batas");
        redirect('admin/hasil');
    }

    public function delete_keputusan()
    {
        $this->db->query("DELETE FROM keputusan");
        redirect('admin/hasil');
    }

    public function delete_normalisasi()
    {
        $this->db->query("DELETE FROM normalisasi");
        redirect('admin/hasil');
    }

    public function proses_rangking()
    {

        $sql = $this->db->query("SELECT * FROM guru");
        foreach ($sql->result() as $a) {
            $id_guru = $a->id_guru;
            $nama_guru = $a->nama_guru;
            $sum = 0;
            $sql2 = $this->db->query("SELECT id_kriteria FROM kriteria");
            foreach ($sql2->result() as $row) {
                $id_kriteria = $row->id_kriteria;
                $sql4 = $this->db->query("SELECT nilai_perkiraan FROM perkiraan_perbatasan WHERE id_guru='$id_guru' and id_kriteria='$id_kriteria'")->row();
                $sum = $sum + $sql4->nilai_perkiraan;

            }
            $data = array(
                'id_guru'     => $id_guru,
                'nama_guru'   => $nama_guru,
                'nilai_rangking' => $sum
                );
            $this->db->insert('rangking', $data);
        }    
        redirect('admin/hasil');
    }
}