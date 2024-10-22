<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_fabricante extends CI_Model {
    public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function listar2()
	{
        $consulta=$this->db->query("
        SELECT fabricante.codigo, fabricante.nombre, producto.nombre as nombre_producto, producto.precio
        FROM fabricante
        LEFT JOIN producto on fabricante.codigo = producto.fk_codigo
        GROUP BY fabricante.codigo, fabricante.nombre");
		return$consulta->result();
	}
	public function listar() {
        $query = $this->db->get('fabricante'); // Reemplaza 'fabricante' con el nombre de tu tabla en la base de datos
        return $query->result();
    }
	public function adicionar($nombre){
		$consulta=$this->db->query("INSERT INTO fabricante VALUES(NULL,'$nombre')");
		if ($consulta == true) {
			return true;
		}else {
			return false;
		}
	}
	public function delete($codigo)
	{
		$consulta=$this->db->query("DELETE FROM fabricante WHERE codigo = $codigo");
	}
	public function editar($codigo, $editar="NULL", $nombre="NULL")
	{
		if ($editar == "NULL") {
			$consulta=$this->db->query("Select * From fabricante WHERE codigo = $codigo");
			return $consulta->result();
		}else {
			$consulta=$this->db->query("
			UPDATE fabricante set
			nombre='$nombre'
			
			WHERE codigo= '$codigo';
			");
			return true;
		}
	}
}
?>