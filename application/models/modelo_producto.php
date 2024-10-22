<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_producto extends CI_Model {
    public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function listar()
	{
        $consulta=$this->db->query("SELECT p.*, f.nombre AS nombre_marca 
                                    FROM producto p 
                                    LEFT JOIN fabricante f ON p.fk_codigo = f.codigo");
		return$consulta->result();
	}
	public function adicionar($nombre,$precio,$fk_codigo,$foto){
		$consulta=$this->db->query("INSERT INTO producto VALUES(NULL,'$nombre','$precio','$fk_codigo','$foto')");
		if ($consulta == true) {
			return true;
		}else {
			return false;
		}
	}
	public function delete($codigo)
	{
		$consulta=$this->db->query("DELETE FROM producto WHERE codigo = $codigo");
	}
	public function editar($codigo, $editar="NULL", $nombre="NULL", $precio="NULL", $fk_codigo="NULL",$foto="NULL")
	{
		if ($editar == "NULL") {
			$consulta=$this->db->query("Select * From producto WHERE codigo = $codigo");
			return $consulta->result();
		}else {
			$consulta=$this->db->query("
			UPDATE producto set
			nombre='$nombre',
			precio='$precio',
			fk_codigo='$fk_codigo',
			foto='$foto'

			WHERE codigo= '$codigo';
			");
			return true;
		}
	}
	public function reportesPro2($id)
    {
        $consulta = $this->db->query("
        SELECT p.*, f.nombre AS nombre_fabricante
        FROM producto p
        JOIN fabricante f ON p.fk_codigo = f.codigo
        WHERE p.codigo =  $id

        ");

        return $consulta->result();
    }}
?>