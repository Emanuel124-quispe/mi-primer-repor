<?php
    class Controlador_fabricante extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->helper("url");
            $this->load->model("modelo_fabricante");
        }
        public function ver2()
        {
            $data2['ver2']=$this->modelo_fabricante->listar2();
            //print_r($data2);die();
            $this->load->view('plantillas/header');
            $this->load->view('fabricante/vista_fabricante',$data2);
            $this->load->view('plantillas/footer');
        }
        public function ver_view_new_maker()
        {
            $this->load->view('plantillas/header');
            $this->load->view('fabricante/view_new_maker');
            $this->load->view('plantillas/footer');
        }
        public function adicionar()
        {
            //print_r($this->input->POST());die();
            $adicionar=$this->modelo_fabricante->adicionar(
                $this->input->post("nombre")
            );
            redirect(base_url('controlador_fabricante/ver2'));
        }
        public function delete($codigo)
        {
            //print_r($codigo);die();
            $eliminar=$this->modelo_fabricante->delete($codigo);
            redirect(base_url('controlador_fabricante/ver2'));
        }
        public function editar($codigo)
        {
            //print_r($codigo);
            if (is_numeric($codigo)) {
                $data2["datos"]=$this->modelo_fabricante->editar($codigo);
                $this->load->view('plantillas/header');
                $this->load->view('fabricante/view_new_edit_maker', $data2);
                $this->load->view('plantillas/footer');
                if ($this->input->post("editar")) {
                    //print_r($this->input->post().die());
                    //print_r($this->input->post("nombre")).die();
                    $modificar=$this->modelo_fabricante->editar(
                        $codigo,
                        $this->input->post("editar"),
                        $this->input->post("nombre")
                    );
                    redirect(base_url('controlador_fabricante/ver2'));
                }
            }
        }
    }
?>
