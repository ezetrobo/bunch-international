<?php

namespace App\Clases\Carrito;

class ProductoCarrito 
{
    public $cantidad;
    public $idProducto;
    public $codigo;
    public $titulo;
    public $precio;
    public $stock;
    public $idProductoDep;
    public $etiquetasxProducto;
    public $estadoProducto;
    public $volumen;

    function __construct($xIdProducto = NULL, $xCodigo = NULL, $xTitulo = NULL, $xPrecio = NULL,  $xCantidad = 1, $oImagen = NULL, $xStock = NULL,  $xIdProductoDep = 0, $xEtiquetasxProducto = NULL, $xEstadoProducto = NULL, $volumen = 1)
    {
        $this->cantidad            = $xCantidad;
        $this->idProducto          = $xIdProducto;
        $this->codigo              = $xCodigo;
        $this->titulo              = $xTitulo;
        $this->precio              = $xPrecio;
        $this->stock               = $xStock;
        $this->idProductoDep       = $xIdProductoDep;
        $this->etiquetasxProducto  = $xEtiquetasxProducto;
        $this->estadoProducto      = $xEstadoProducto;
        $this->volumen             = $volumen;
    }

    public function setCantidad( $xCantidad )
    {
        $this->cantidad = $xCantidad;
    }
}
?>