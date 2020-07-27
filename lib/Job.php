<?php

class Job {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    //Get all jobs

    public function getAllJobs(){
        $this->db->query("SELECT * FROM jobs");
        $result = $this->db->resultSet();
        return $result;
    }
}