<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Favoritos extends Controllers
{

    public function __construct()
    {
        parent::__construct();
    }

    public function favoritos()
    {
        $data['page_id'] = 11;
        $data['page_tag'] = "Favoritos";
        $data['page_title'] = "Página de Favoritos";
        $data['page_name'] = "favoritos";
        $data['page_content'] = "Puede llevar algun comentario";
        $this->views->getView($this,"favoritos",$data);
    }
}
