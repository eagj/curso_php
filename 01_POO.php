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
        echo "<p> Peli titulada $this->titulo,  del año $this->year</p>";
    }
}


#OBJETO1
$a= new Peliculas();
$a -> titulo = "Blade Runner";
$a -> year = "1982";
$a -> peli();
#OBJETO2
$b= new Peliculas();
$b -> titulo = "Blade Runner 2049";
$b -> year = "2017";
$b -> peli();
?>