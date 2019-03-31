<?php


class About extends Controller{

  public function index()
    {
        $this->view('templates/header');
        $this->view('about/index');
        $this->view('templates/footer');
    }

    public function page()
    {
      $this->view('templates/header');
        $this->view('about/page');
        $this->view('templates/footer');
    }
}