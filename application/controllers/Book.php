<?php

class Book extends CI_Controller
{

    public function index()
    {
        $this->load->view('search_view');
    }

    public function search()
    {
        $this->load->model("search_model");

        $get_rows = $this->search_model->get();
        echo json_encode($get_rows);
    }

    public function bookDetail($id)
    {
        $this->load->model("search_model");
        $viewData['book'] = $this->search_model->kitapDetay($id);
        $this->load->view("book_detail", $viewData);
    }

    public function authorDetail($id)
    {

        $this->load->model("search_model");
        $viewData['author'] = $this->search_model->yazarDetay($id);
        $this->load->view("author_detail", $viewData);
    }
}