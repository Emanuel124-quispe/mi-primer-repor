<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Reportes_productos extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->helper("url");
            $this->load->library("fpdf/fpdf");
            $this->load->model("modelo_producto");

            define('FPDF_FONTPAHT',BASEPATH.'/libraries/fpdf/font/');
            
        }
        public function imprimir()
        {
            $this->fpdf->AddPage(); //añade la primera pagina 
            $this->fpdf->SetFont('Times','U',20);
            $this->fpdf->SetXY(40,40);
            $this->fpdf->Cell(150,15,"LISTADO DE PRODUCTOS",'',0,'C',0);
            $this->fpdf->SetFont('Times','B',20);
            $this->fpdf->SetXY(10,60);
            $this->fpdf->Cell(15,10,"nro",1,0,'C',0);
            $this->fpdf->Cell(60,10,"nombre",1,0,'C',0);
            $this->fpdf->Cell(40,10,"precio",1,0,'C',0);
            $this->fpdf->Cell(60,10,"marca",1,0,'C',0);
         
            $datos["ver"]=$this ->modelo_producto->listar();
            $i=1;
            $y=70;
            $this->fpdf->SetFont('Times','',12);
            foreach($datos["ver"] as $fila){
            $this->fpdf->setXY(10,$y);
            $this->fpdf->Cell(15,10,$i++,1,0,'C',0);
            $this->fpdf->Cell(60,10,$fila->nombre,1,0,'C',0);
            $this->fpdf->Cell(40,10,$fila->precio,1,0,'C',0);
            $this->fpdf->Cell(60,10,$fila->nombre_marca,1,0,'C',0);
            //$this->fpdf->Image(base_url("fotos/").$fila->foto,175,$y,8);//para ingresar una imagen 
           
            $y += 10;
            }
            $this->fpdf->Output('contactos.pdf','I');//salida
        }
        public function imprimirProducto($id){

            $this->fpdf->AddPage(); //añade la primera pagina 
            $this->fpdf->SetFont('Times','',20);
            $this->fpdf->SetXY(40,40);
            $this->fpdf->Cell(150,15,"PRODUCTOS",'',0,'C',0);
            
            $data["datos"] = $this->modelo_producto->reportesPro2($id);
            
                foreach($data["datos"] as $fila){
                    //$this->fpdf->SetXY(100,30);
                    $this->fpdf->Image(base_url("imagen/").$fila->foto,10,60,30);
                    $this->fpdf->SetXY(60,60);
                    $this->fpdf->Cell(100,10,"nombre:",0,'l','C',0);
                    $this->fpdf->SetXY(100,70);
                    $this->fpdf->Cell(50,10,$fila->nombre,'B','l','C',0);
                    $this->fpdf->SetXY(60,60);
                    $this->fpdf->Cell(100,60,"precio:",0,'l','C',0);
                    $this->fpdf->SetXY(100,95);
                    $this->fpdf->Cell(100,10,$fila->precio,'B','l','C',0);
                    $this->fpdf->SetXY(20,90);
                    $this->fpdf->Cell(10,60,"marca:",0,'l','C',0);
                    $this->fpdf->SetXY(10,125);
                    $this->fpdf->Cell(50,10,$fila->nombre_fabricante,'B','l','C',0);
                    $this->fpdf->Output('Producto.pdf','I');//salida
       
               }
            }
     }

