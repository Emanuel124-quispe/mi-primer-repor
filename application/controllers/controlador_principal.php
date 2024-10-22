<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Controlador_principal extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->helper("url");
            $this->load->model("modelo_principal");
        }
        public function index(){
            //$this->load->view('plantillas/principal');
            //$this->load->view('principal', $data);
            /*if (empty($this->session->userdata("codigo"))) {
                redirect(base_url("index.php/controlador_principal/logout"));
            }else {
         */
         $data['total_productos']=$this->db->count_all('producto');
         $data['total_usuarios']=$this->db->count_all('usuarios');
         $data['total_fabricantes']=$this->db->count_all('fabricante');
            $this->load->view('plantillas/header');
            $this->load->view('plantillas/principal',$data);
            $this->load->view('plantillas/footer');
            
        }
        public function logout() {
            $this->session->sess_destroy();
            $this->load->view('plantillas/login');
        }
       public function verificarUsuario()
        {
            //print_r($this->input->post());die();
            $datos["verificar"] = $this->modelo_principal->verificarUsuario(
                $this->input->post("usuario"),
                $this->input->post("password")
            );
            //print_r($datos);die();
            if (empty($datos["verificar"])) {
                redirect(base_url("controlador_principal/logout"));
            } else {
                    foreach ($datos["verificar"] as $fila) {
                        $id = $fila->id;
                        $nombre = $fila->nombre;
                        $email = $fila->email;
                        $contraseña =$fila->contraseña;
                        $foto = $fila->foto;
                    }
                    $data = array(
                        'id' => $id,
                        'nombre' => $nombre,
                        'email' => $email,
                        'contraseña'=>$contraseña,
                        'foto' => $foto,
                        'login' => TRUE
                    );
                        //print_r($data);die();
                        $this->session->set_userdata($data);
                        redirect(base_url("controlador_principal"));
            }
        }
        
     
    }
?>