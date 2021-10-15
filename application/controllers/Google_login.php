<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Google_login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('google_login_model');
        date_default_timezone_set("Asia/Jakarta");
    }
   public function login()
    {
        $type_akun = "OTOMATIS";
        $role = "2";

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $id_user = substr(str_shuffle($permitted_chars), 0, 8);

        include_once APPPATH . "../vendor/autoload.php";
        $google_client = new Google_Client();

        $google_client->setClientId('261717386692-03f51tpdedaqfoe3cos5jik4s3iu6biq.apps.googleusercontent.com'); //Define your ClientID

        $google_client->setClientSecret('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'); //Define your Client Secret Key

        $google_client->setRedirectUri('http://localhost/Project-Bale/google_login/login'); //Define your Redirect Uri

        // $google_client->setRedirectUri('http://localhost/Project-Bale/daftar'); //Define your Redirect Uri
        // $google_client->setRedirectUri('http://localhost/Project-Bale/auth'); //Define your Redirect Uri

        $google_client->addScope('email');

        $google_client->addScope('profile');

        if(isset($_GET["code"]))
        {
        $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

                if(!isset($token["error"]))
                {
                    $google_client->setAccessToken($token['access_token']);

                    $this->session->set_userdata('access_token', $token['access_token']);

                    $google_service = new Google_Service_Oauth2($google_client);

                    $data = $google_service->userinfo->get();

                    $current_datetime = date('Y-m-d H:i:s');

                    if($this->google_login_model->Is_already_register($data['email']))
                    {
                    //update data
                    $user_data = array(
                    'nama_lengkap' => $data['given_name'],
                    // 'last_name'  => $data['family_name'],
                    'email' => $data['email'],
                    // 'profile_picture'=> $data['picture'],
                    'waktu_update' => $current_datetime,
                    'waktu'  => $current_datetime
                    );

                    $this->google_login_model->Update_user_data($user_data, $data['email']);
                    }
                    else
                    {
                    //insert data
                    $user_data = array(
                    // 'login_oauth_uid' => $data['id'],
                    'id_user' => $id_user,
                    'nama_lengkap'  => $data['given_name'],
                    // 'last_name'   => $data['family_name'],
                    'email'  => $data['email'],
                    'type_akun' =>$type_akun,
                    'role' =>$role,
                    // 'profile_picture' => $data['picture'],
                    'waktu'  => $current_datetime
                    );

                    $this->google_login_model->Insert_user_data($user_data);
                    }
                    $this->session->set_userdata('user_data', $user_data);
                }
        }
            $login_button = '';
            if(!$this->session->userdata('access_token'))
                {
                    $login_button = '<a href="'.$google_client->createAuthUrl().'"><div class="col-md-12 text-center">
                    <button  style="width: 210px; height: 40px; border: 2px solid black; border-radius:20px;" class=" btn btn-light" type="submit" aria-hidden="true" ><i class="fa fa-google" aria-hidden="true"></i> Daftar Dengan Google</button>                           
                  </div></a>';
                    $data['login_button'] = $login_button;
                    
                    echo '<script>console.log("keluar"); </script>';
                    $this->load->view('google_login', $data);
                }
                else
                {
                    echo '<script>console.log("masuk"); </script>';
                    // echo '<h3><a href="' . base_url() . 'google_login/logout">Logout</h3></div>';
                    $this->load->view('google_login', $data);
                }
    }


    public function logout()
    {
        $this->session->unset_userdata('access_token');
        $this->session->unset_userdata('user_data');
        redirect('google_login/login');
    }

    
}

?>