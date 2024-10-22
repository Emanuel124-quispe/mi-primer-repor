<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador_usuario extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		// modelo usuario
		$this->load->model("modelo_usuario");

	}
    public function ver3()
    {
        $data3['ver3']=$this->modelo_usuario->listar3();
        //print_r($data2);die();
        $this->load->view('plantillas/header');
        $this->load->view('usuario/vista_usuario',$data3);
        $this->load->view('plantillas/footer');
    }
    public function verF()
    {
        $this->load->view('plantillas/header');
        $this->load->view('usuario/vista_formulario');
        $this->load->view('plantillas/footer');
    }
    public function adicionar()
	{  $nombre_img=$_FILES['upload']['name'];
        $this->guardar_archivo();
		//print_r($this->input->POST());die();
		$adicionar=$this->modelo_usuario->adicionar(
			$this->input->post("nombre"),
			$this->input->post("email"),
			$this->input->post("contraseña"),
            $nombre_img

		);
        redirect(base_url('controlador_usuario/ver3'));  
    }
    public function delete($id)
    {
        //print_r($codigo);die();
        $eliminar=$this->modelo_usuario->delete($id);
        redirect(base_url('controlador_usuario/ver3'));
    }
    public function editar($id)
    {
        //print_r($id);
        if (is_numeric($id)) {
            $data3["datos"]=$this->modelo_usuario->editar($id);
            $this->load->view('plantillas/header');
            $this->load->view('usuario/vista_editar', $data3);
            $this->load->view('plantillas/footer');
            if ($this->input->post("editar")) {
                //print_r($this->input->post().die());
                //print_r($this->input->post("nombre")).die();
                $modificar=$this->modelo_fabricante->editar(
                    $id,
                    $this->input->post("editar"),
                    $this->input->post("nombre"),
                    $this->input->post("email"),
					$this->input->post("contraseña")
                );
                redirect(base_url('controlador_usuario/ver3'));
            }
        }
    }
    private function guardar_archivo()
    {
        $mi_archivo = 'upload';
        //    print_r($mi_archivo);die();
        $config['upload_path'] = "fotos/";
        //$config['file_name']= "nombre_archivo";
        $config['allowed_types'] = "jpg";
        $config['allowed_types'] = "png";
        $config['max_size'] = "5000";
        $config['max_width'] = "2000";
        $config['max_height'] = "2000";

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload($mi_archivo)) {
            $data['uploadError'] = $this->upload->display_errors();
            echo $this->upload->display_errors();
            return;
        }
        var_dump($this->upload->data());
    }
}
?>