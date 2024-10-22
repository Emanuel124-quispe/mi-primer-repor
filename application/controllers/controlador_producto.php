<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador_producto extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->helper("url");
		// modelo producto
		$this->load->model("modelo_producto");
		// modelo fabricante
		$this->load->model("modelo_fabricante");
	}
	public function ver()
	{
		//$data2['ver2']=$this->modelo_fabricante->listar2();
		/*if (empty($this->session->userdata("codigo"))) {
			redirect(base_url("controlador_principal"));
		}else {*/
        $data['ver']=$this->modelo_producto->listar();
        //print_r($data);die();
		//$this->load->view('producto/vista_producto',);
		//$this->load->view('producto/vista_producto',$data);
		//$this->load->view('fabricante/vista_fabricante',$data2);
		$this->load->view('plantillas/header');
		$this->load->view('producto/vista_producto',$data);
		$this->load->view('plantillas/footer');
		
	}
	public function verAdd()
    {
		//$this->load->model("modelo_fabricante");
		//$data2['ver2']=$this->modelo_fabricante->listar2();
        $this->load->view("fabricante/vista_fabricante");
    }
	public function ver_view_new_product()
	{
		$data['marcas'] = $this->modelo_fabricante->listar();
		$this->load->view('plantillas/header');
		$this->load->view('producto/view_new_product',$data);
		$this->load->view('plantillas/footer');
	}
	public function adicionar()
	{   $nombre_img=$_FILES['upload']['name'];
        $this->guardar_archivo();
		//print_r($this->input->POST());die();
		$adicionar=$this->modelo_producto->adicionar(
			$this->input->post("nombre"),
			$this->input->post("precio"),
			$this->input->post("fk_codigo"),
			$nombre_img
		);
		redirect(base_url('controlador_producto/ver'));
	}
	public function delete($codigo)
    {
        //print_r($codigo);die();
        $eliminar=$this->modelo_producto->delete($codigo);
        redirect(base_url('index.php/controlador_producto/ver'));
    }
	public function editar($codigo)
    {
        //print_r($codigo);
        if (is_numeric($codigo)) {
            $data["datos"]=$this->modelo_producto->editar($codigo);
			$data["marcas"] = $this->modelo_fabricante->listar();
            //print_r($data).die();
			$this->load->view('plantillas/header');
            $this->load->view('producto/view_new_edit_product', $data);
			$this->load->view('plantillas/footer');
            if ($this->input->post("editar")) {
				if(!empty($_FILES['upload']['name'])){
				$nombre_img=$_FILES['upload']['name'];
                  $this->guardar_archivo();
				}else{
					$nombre_img = $this->input->post("imagen_actual");
				}
                //print_r($this->input->post("nombre")).die();
                $modificar=$this->modelo_producto->editar(
                    $codigo,
                    $this->input->post("editar"),
                    $this->input->post("nombre"),
					$this->input->post("precio"),
					$this->input->post("fk_codigo"),
					$nombre_img
                );
                redirect(base_url('controlador_producto/ver'));
            }
        }
    }
	private function guardar_archivo()
    {
        $mi_archivo = 'upload';
        //    print_r($mi_archivo);die();
        $config['upload_path'] = "imagen/";
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