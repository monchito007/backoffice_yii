<?php
class GMensajes
{
    static function getNecesitoTraduccion($event)
    {
        $text="";
        $text.= " lenguaje: {$event->language} <br>";
        $text.= " Categoria: {$event->category} <br>";
        $text.= " Mensage: {$event->message} <br>";
        
        mail('monchito007@gmail.com','Necesito traduccion!!!',$text);
    }
}
