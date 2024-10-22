<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Reportes_fabricantes extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->helper("url");
            $this->load->library("fpdf/fpdf");
            $this->load->model("modelo_fabricante");

            define('FPDF_FONTPAHT',BASEPATH.'/libraries/fpdf/font/');
            
        }
        public function imprimir()
        {
            $this->fpdf->AddPage(); //añade la primera pagina 
            $this->fpdf->SetFont('Times','U',20);
            $this->fpdf->SetXY(40,40);
            $this->fpdf->Cell(150,15,"LISTADO DE FABRICANTES",'',0,'C',0);
            $this->fpdf->SetFont('Times','B',20);
            $this->fpdf->SetXY(80,60);
            $this->fpdf->Cell(15,10,"nro",1,0,'C',0);
            $this->fpdf->Cell(60,10,"nombre",1,0,'C',0);
         
         
            $datos["ver2"]=$this ->modelo_fabricante->listar();
            $i=1;
            $y=70;
            $this->fpdf->SetFont('Times','',12);
            foreach($datos["ver2"] as $fila){
            $this->fpdf->setXY(80,$y);
            $this->fpdf->Cell(15,10,$i++,1,0,'C',0);
            $this->fpdf->Cell(60,10,$fila->nombre,1,0,'C',0);
            //$this->fpdf->Image(base_url("fotos/").$fila->foto,175,$y,8);//para ingresar una imagen 
           
            $y += 10;
            }
            $this->fpdf->Output('contactos.pdf','I');//salida
        }
    }