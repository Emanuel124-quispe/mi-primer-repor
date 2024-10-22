<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_usuario extends CI_Model {
    public function __construct(){
		parent::__construct();
		$this->load->database();
	}
    public function listar3() {
        $consulta=$this->db->query("Select * From usuarios");
        return $consulta->result();
    }
    public function adicionar($nombre,$email,$contraseña, $foto){
		$consulta=$this->db->query("INSERT INTO usuarios VALUES(NULL,'$nombre','$email','$contraseña','$foto')");
		return TRUE;
	}
    public function delete($id)
	{
		$consulta=$this->db->query("DELETE FROM usuarios WHERE id = $id");
	}
    public function editar($id, $editar="NULL", $nombre="NULL", $email="NULL", $contraseña="NULL")
	{
		if ($editar == "NULL") {
			$consulta=$this->db->query("Select * From usuarios WHERE id = $id");
			return $consulta->result();
		}else {
			$consulta=$this->db->query("
			UPDATE usuarios set
			nombre='$nombre',
			email='$email',
			contraseña='$contraseña'

			WHERE id= '$id';
			");
			return true;
		}
	}
}