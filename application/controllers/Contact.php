<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Contact_Model", "model");
        $this->load->library('user_agent');
    }

    public function index()
    {
        $fcpath = str_replace("\\", "/", FCPATH);
        $data = array();
        $data['image'] = '';
        $this->load->helper('captcha');
        $values = array(
            'word' => '', //Generate alternate word by default. You can also set your word.
            'word_length' => 4, // To set length of captcha word.
            'img_path' => $fcpath . 'uploads/captcha/', // Create  folder "images" in root directory, and give path.
            'img_url' => base_url() . 'uploads/captcha/', // To store captcha images in "images" folder.
            'font_size' => 12,
            // Font path is used font library, which will stored  in system/fonts/texb.ttf.
            'font_path' => FCPATH . '/assets/fonts/captcha0.ttf', 'img_width' => '120', //Set image width.
            'img_height' => 30, // Set image height.
            'expiration' => 60, // This will automatically expire images in given time.

            'colors' => array('background' => array(69, 141, 213), 'border' => array(69, 141, 213), 'text' => array(255, 255, 255), 'grid' => array(79, 125, 151)),
            'pool' => '123456789abcdefghklmnpqrstuvwxyz'
        );

        $data = create_captcha($values);
        $this->session->set_userdata('Captch', $data);
        $dataArray['image'] = $data['image'];

        $this->load->view('contact/index.php', $dataArray);
    }

    public function refreshCaptcha()
    {
        $fcpath = str_replace("\\", "/", FCPATH);
        $this->load->helper('captcha');
        $values = array(
            'word' => '', //Generate alternate word by default. You can also set your word.
            'word_length' => 4, // To set length of captcha word.
            'img_path' => $fcpath . 'uploads/captcha/', // Create  folder "images" in root directory, and give path.
            'img_url' => base_url() . 'uploads/captcha/', // To store captcha images in "images" folder.
            'font_size' => 12,
            // Font path is used font library, which will stored  in system/fonts/texb.ttf.
            'font_path' => FCPATH . '/html/fonts/captcha0.ttf', 'img_width' => '120', //Set image width.
            'img_height' => 30, // Set image height.
            'expiration' => 60, // This will automatically expire images in given time.
            'colors' => array('background' => array(69, 141, 213), 'border' => array(69, 141, 213), 'text' => array(255, 255, 255), 'grid' => array(79, 125, 151)),
            'pool' => '123456789abcdefghklmnpqrstuvwxyz'
        );

        $data = create_captcha($values);
        $this->session->unset_userdata('Captch');
        $this->session->set_userdata('Captch', $data);
        echo $data['image'];
    }

    public function contact()
    {
        $data = $this->security->xss_clean($this->input->post());

        // if (xssClean($data)->success == false) {
        //     echo json_encode(array('statusCode' => 400, 'error' => 'Something goes wrong'));
        //     die;
        // }

        $captcha_word = trim($this->input->post('captcha_word'));
        $captchaArray = $this->session->userdata('Captch');

        if (strcmp($captcha_word, $captchaArray['word']) != 0) {
            echo json_encode(array('statusCode' => 400, 'error' => 'Invalid captcha'));
            exit;
        }

        $rules = array(
            array(
                'field' => 'first_name',
                'label' => 'First Name',
                'rules' => 'required|trim|min_length[2]|max_length[20]'
            ),
            array(
                'field' => 'last_name',
                'label' => 'Last Name',
                'rules' => 'required|trim|min_length[2]|max_length[20]'
            ),
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|trim|valid_email|min_length[2]'
            ),
            array(
                'field' => 'phone',
                'label' => 'Mobile No.',
                'rules' => 'required|trim|integer|min_length[10]|max_length[10]'
            ),

            array(
                'field' => 'message',
                'label' => 'Message',
                'rules' => 'required|trim|min_length[2]|max_length[100]'
            )
        );
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {
            unset($data['captcha_word']);
            $res = $this->model->addData($data);
            if ($res) {
                $this->mailer->sendEmail($data['email'], 'Devdarshan', 'Welcome to Devdarshan');
                echo json_encode(array('statusCode' => 200, 'message' => 'Details Submitted'));
            } else {
                echo json_encode(array('statusCode' => 400, 'error' => 'Something goes wrong'));
            }
        } else {
            echo json_encode(array('statusCode' => 400, 'error' => validation_errors()));
        }
    }

    public function visit()
    {
        $data = [];

        $data['user_browser'] = $this->agent->browser();;
        $data['user_ip'] = $_SERVER['REMOTE_ADDR'];

        if ($this->agent->is_mobile()) {
            $data['user_device'] = "mobile";
        } else {
            $data['user_device'] = "pc";
        }

        $this->model->visitData($data);
    }

    public function subscribe()
    {
        $data = $this->security->xss_clean($this->input->post());

        // if (xssClean($data)->success == false) {
        //     echo json_encode(array('statusCode' => 400, 'error' => 'Something goes wrong'));
        //     die;
        // }

        $rules = array(
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|trim|valid_email|min_length[2]'
            )
        );

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {
            $res = $this->model->visitData($data);
            if ($res) {
                $this->mailer->sendEmail($data['email'], 'Devdarshan', 'Welcome to Devdarshan');
                echo json_encode(array('statusCode' => 200, 'message' => 'Subscribe successfully, Please check your email'));
            } else {
                echo json_encode(array('statusCode' => 400, 'error' => 'Something goes wrong'));
            }
        } else {
            echo json_encode(array('statusCode' => 400, 'error' => validation_errors()));
        }
    }
}
