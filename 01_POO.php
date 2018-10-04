<?php
/**
 * Created by PhpStorm.
 * User: quiquework
 * Date: 4/10/18
 * Time: 16:40
 */

class Peliculas{
    #PROPIEDADES
    public $titulo;
    public $year;

    #METODO
    public function peli(){
        echo "<p> Peli titulada $this->titulo, del año $this->year</p>"
    }
}


#OBJETO
$a= new Peliculas();
$a -> titulo = "Blade Runner";
$a -> year = "1982";
$a -> peli();
?>