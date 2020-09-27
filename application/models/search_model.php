<?php

class Search_model extends CI_Model
{

    public function get()
    {
        $term = $this->input->get("term");

        // SELECT title as value, id FROM kitaplar WHERE title LIKE '%term%'
        //LIKE ile yapılan
        //return $this->db->select("title as value, id")->like("title", $term)->get("kitaplar")->result_array();

        //Eski FULLTEXT ile yapılan
        //return $this->db->query("SELECT title as value, id FROM kitaplar WHERE MATCH(title,detail) AGAINST('$term')")->result_array();

        //Yeni FULLTEXT ile yazar ve kitap tablosu birleştirilerek yapılan
        //select title as value, id from kitaplar UNION select title as value, id from author
        //Hem kitap adı hem de yazar adlarını arayacak.
        $query_book="SELECT title as value, id, 'bookDetail' as methodName FROM kitaplar WHERE MATCH(title,detail) AGAINST('$term')";
        $query_author="SELECT title as value, id, 'authorDetail' as methodName FROM author WHERE MATCH(title) AGAINST('$term')";
        return $this->db->query("$query_book UNION $query_author")->result_array();
    }

    public function kitapDetay($id)
    {
        return $this->db->where("id", $id)->get("kitaplar")->row();
    }

    public function yazarDetay($id)
    {
        return $this->db->where("id", $id)->get("author")->row();
    }

}

