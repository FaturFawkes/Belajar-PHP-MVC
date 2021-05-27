<?php

class About extends Controller{
    public function index($nama = "Fatur", $pekerjaan = "Pelajar"){
        $data['judul'] = "About Me";
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page($nama = "Fatur"){
        $data['judul'] = "Page";
        $data['nama'] = $nama;

        $this->view('templates/header', $data);
        $this->view('about/page', $data);
        $this->view('templates/footer');
    }
}