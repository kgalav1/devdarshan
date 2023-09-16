<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("ContactModel", "model");
        // $this->load->model("user_agent");
    }

    public function index()
    {
        $this->load->view('contact/index.php');
    }

    function xssClean($data)
    {
        // $cleanedData = [];
 
        foreach ($data as $key => $val) {
            $cleanedData = strip_tags($val);
            $data[$key] = htmlspecialchars($cleanedData, ENT_QUOTES, 'UTF-8');
        }

        return $data;
    }

    public function contact()
    {
        $post = $this->security->xss_clean($this->input->post());
        $data = $this->xssClean($post);

        $recaptchaSecretKey = "6Lcu0CgoAAAAAEYGZXy1NJCWcssKfHRYwAmZS1gG";
        $recaptchaResponse = $_POST['g-recaptcha-response']; // The response token sent by the client

        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $arr = [
            'secret' => $recaptchaSecretKey,
            'response' => $recaptchaResponse,
        ];

        $options = [
            'http' => [
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($arr),
            ],
        ];

        $context = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $response = json_decode($result);

        if (!$response->success) {
            echo json_encode(array('statusCode' => 400, 'error' => 'reCAPTCHA verification failed.'));
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

    public function bookNow()
    {
        $post = $this->security->xss_clean($this->input->post());
        // print_r($post);die;
        
        $data = $this->xssClean($post);
// print_r($data);die;

        $rules = array(
            array(
                'field' => 'name',
                'label' => 'First Name',
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
                'field' => 'package',
                'label' => 'Package',
                'rules' => 'required|trim|integer'
            ),
            array(
                'field' => 'check_in',
                'label' => 'Check In date',
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'check_out',
                'label' => 'Check Out date',
                'rules' => 'required|trim'
            ),
            array(
                'field' => 'message',
                'label' => 'Message',
                'rules' => 'required|trim|min_length[2]|max_length[100]'
            )
        );
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == TRUE) {
            $res = $this->model->addBookingData($data);
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
        $post = $this->security->xss_clean($this->input->post());
        $data = xssClean($post);

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
