<?php

class Homepages extends BaseController
{

    public function index($firstname = NULL, $infix = NULL, $lastname = NULL)
    {
        $data = [
            'title' => 'Dit is de homepage!',
            'name' => 'Mijn naam is Thomas Meijer'
        ];
        $this->view('homepages/index', $data);
    }
}