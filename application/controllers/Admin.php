<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('rekamMedis_model');
        date_default_timezone_set('Asia/Jakarta');
        // fungsi timespan pada detail pasien harus load helper
        $this->load->helper('date');

        // block akses dari url
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
    }

    public function index()
    {

        $data['title'] = 'Dashboard';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

        $data['patient'] = $this->rekamMedis_model->patient_total();
        $data['medical'] = $this->rekamMedis_model->medical_total();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function pasien()
    {

        $data['title'] = 'Patients';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['pasien'] = $this->db->get('patient')->result_array();

        $data['pasien_id'] = $this->rekamMedis_model->pasien_id();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/pasien', $data);
        $this->load->view('templates/footer');
    }

    public function pasien_add()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['pasien'] = $this->db->get('patient')->result_array();

        $this->form_validation->set_rules('medical_record_number', 'Medical Record Number', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/pasien', $data);
            $this->load->view('templates/footer');

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Error!!! Address Must Be Filled </div>');
            redirect('admin/pasien');
        } else {
            $this->rekamMedis_model->pasien_add();
        }
    }

    public function detailPasien($pasien_id)
    {
        $data['title'] = 'Patient Details';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['pasien'] = $this->rekamMedis_model->ambil_idPasien($pasien_id);
        $data['medis'] = $this->rekamMedis_model->ambil_idMedis($pasien_id);

        $data['medicalid'] = $this->rekamMedis_model->medical_id();

        $this->load->view('templates/header', $data);
        // $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detailPasien', $data);
        $this->load->view('templates/footer');
    }

    public function editPasien($pasien_id)
    {
        $data['title'] = 'Patient Edit';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['pasien'] = $this->rekamMedis_model->ambil_idPasien($pasien_id);

        // Generate data
        $data['religion'] = ['Islam', 'Kristen Katolik', 'Kristen Protestan', 'Hindu', 'Buddha'];
        $data['gender'] = ['Laki-laki', 'Perempuan'];

        $this->form_validation->set_rules('address', 'Address', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            // $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/editPasien', $data);
            $this->load->view('templates/footer');
        } else {
            $this->rekamMedis_model->pasien_edit();
        }
    }

    public function hapusPasien($pasien_id)
    {
        $this->rekamMedis_model->pasien_delete($pasien_id);
        redirect('admin/pasien');
    }



    public function medis_add()
    {
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['medical'] = $this->db->get('medical')->result_array();

        $this->rekamMedis_model->medical_add();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Medical Has Been Added! </div>');
        redirect('admin/detailPasien/' . $this->input->post('medical_record_number'));
    }

    public function detailMedis($id)
    {
        $data['title'] = 'Medical Details';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

        // Ambil id medis yang sesuai dengan id pasien
        $detailMedis = $this->rekamMedis_model->medical_detail($id);
        $data['pasien'] = $this->rekamMedis_model->ambil_idPasien($detailMedis['medical_record_number']);

        $data['detailMedis'] = $detailMedis;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/detailMedis', $data);
        $this->load->view('templates/footer');
    }

    public function rekamMedis()
    {
        $data['title'] = 'Medical Records';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['medis'] = $this->db->get('medical')->result_array();

        $data['medis_id'] = $this->rekamMedis_model->medical_id();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/rekamMedis', $data);
        $this->load->view('templates/footer');
    }

    public function printPasien()
    {
        $data['title'] = 'Pasien';
        $data['pasien'] = $this->db->get('patient')->result_array();
        $this->load->view('admin/printPasien', $data);
    }

    public function printRekamMedis()
    {
        $data['title'] = 'Rekam Medis';
        $data['medical'] = $this->db->get('medical')->result_array();
        $this->load->view('admin/printRekamMedis', $data);
    }

    public function printDetailPasien($pasien_id)
    {
        $data['title'] = 'Detail Pasien';
        $data['pasien'] = $this->rekamMedis_model->ambil_idPasien($pasien_id);
        $data['medis'] = $this->rekamMedis_model->ambil_idMedis($pasien_id);
        $this->load->view('admin/printDetailPasien', $data);
    }

    public function adminProfil()
    {
        $data['title'] = 'Profile';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/adminProfil', $data);
        $this->load->view('templates/footer');
    }

    public function adminEdit()
    {
        $data['title'] = 'Edit Profile';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/adminEdit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->rekamMedis_model->admin_edit();
        }
    }

    public function gantiPassword()
    {
        $data['title'] = 'Change Password';
        $data['admin'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('currentPassword', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('newPassword1', 'New Password', 'required|trim|min_length[3]|matches[newPassword2]');
        $this->form_validation->set_rules('newPassword2', 'Confirm New Password', 'required|trim|min_length[3]|matches[newPassword1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/gantiPassword', $data);
            $this->load->view('templates/footer');
        } else {
            $this->rekamMedis_model->gantiPassword();
        }
    }
}
