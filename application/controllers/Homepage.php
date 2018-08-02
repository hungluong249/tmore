<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include "class.phpmailer.php";
include "class.smtp.php";
class Homepage extends CI_Controller {
    public function __construct(){
        parent::__construct();
        //Do your magic here
    }
    public function index()
    {
        $data['the_view_content'] = 'homepage_view';

        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->load->view('templates/master_view', $data);
    }

    public function get_data_to_send_mail() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('register_name', 'Họ và tên', 'required');
        $this->form_validation->set_rules('register_mail', 'EMAIL', 'required|valid_email');
        $this->form_validation->set_rules('register_phone', 'Số điện thoại', 'required');
        $this->form_validation->set_rules('register_address', 'Địa chỉ', 'required');

        if ($this->form_validation->run() == true) {
            if($this->input->post()){
                $data = array();
                $data['name'] = $this->input->post('register_name');
                $data['email'] = $this->input->post('register_mail');
                $data['phone'] = $this->input->post('register_phone');
                $data['address'] = $this->input->post('register_address');
                $data['message'] = $this->input->post('register_message');
            }
            // $this->order_model->common_insert($data);
            $send = $this->send_mail($data);

            if($send == false){
                $this->output->set_status_header(404)
                    ->set_output(json_encode(array('message' => 'Fail', 'data' => $data)));
            }else{
                redirect('/');
            }
        }else{
            $data['the_view_content'] = 'homepage_view';
            $this->load->view('templates/master_view', $data);
        }
    }


    public function send_mail($data) {
        $mail = new PHPMailer();
        $mail->IsSMTP(); // set mailer to use SMTP
        $mail->Host = "smtp.gmail.com"; // specify main and backup server
        $mail->Port = 465; // set the port to use
        $mail->SMTPAuth = true; // turn on SMTP authentication
        $mail->SMTPSecure = 'ssl';
        $mail->Username = "nghemalao@gmail.com"; // your SMTP username or your gmail username
        $mail->Password = "Huongdan1"; // your SMTP password or your gmail password
        $from = "minhtruong93gtvt@gmail.com"; // Reply to this email
        $to = "truong.do@matocreative.vn"; // Recipients email ID
        $name = 'WEBMAIL'; // Recipient's name
        $mail->From = $from;
        $mail->FromName = $name; // Name to indicate where the email came from when the recepient received
        $mail->AddAddress($to, $name);
        $mail->CharSet = 'UTF-8';
        $mail->WordWrap = 50; // set word wrap
        $mail->IsHTML(true); // send as HTML
        $mail->Subject = "Mail từ " . strip_tags($data['name']);

        $mail->Body = $this->email_template($data); //HTML Body

        //$mail->SMTPDebug = 2;

        if(!$mail->Send()){
            return false;
        } else {
            return true;
        }
    }

    public function email_template($data){
        $message = '<html><body>';
        $message .= '<p>Chào Admin, bạn có 1 liện hệ mới từ người dùng trên website</p>';
        $message .= '<p>Thông tin như sau:</p>';
        $message .= '<p>Họ tên: ' . $data['name'] . '</p>';
        $message .= '<p>Email: ' . $data['email'] . '</p>';
        $message .= '<p>Số điện thoại: ' . $data['phone'] . '</p>';
        $message .= '<p>Địa chỉ: ' . $data['address'] . '</p>';
        $message .= '<p>Lời nhắn: ' . $data['message'] . '</p>';
        $message .= "</body></html>";

        return $message;
    }

}

/* End of file Homepage.php */
/* Location: ./application/controllers/Homepage.php */