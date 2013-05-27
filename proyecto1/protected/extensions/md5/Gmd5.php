<?php

class Gmd5 extends CActiveRecordBehavior
{
    
    public function beforeSave($event) //Abans de fer save, treu els punts
    {
        $clau = $_POST['Usuaris']['clau'];
        
        $this->getOwner()->clau = md5($clau);
        
    }

    
}