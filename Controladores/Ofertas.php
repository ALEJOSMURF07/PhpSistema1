<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Ofertas extends Controllers
{

    public function __construct()
    {
        parent::__construct();
    }

    public function ofertas()
    {
        $data['page_id'] = 7;
        $data['page_tag'] = "Ofertas";
        $data['page_title'] = "Página de Ofertas";
        $data['page_name'] = "ofertas";
        $data['page_content'] = "Puede llevar algun comentario";
        $this->views->getView($this,"ofertas",$data);
    }
}
