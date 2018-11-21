<?php

defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
require_once('class-array-config-writer.php');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('welcome_message');
    }

    public function post() {
        $this->load->library('config_writer');
        $writer = $this->config_writer->get_db_instance();

//        echo "<pre>";
//        print_r($writer->db['default']['hostname']);
//        exit();
//        $message['base_url'] = 'My New title' ;


        $host = $this->input->post('host');
        $username = $this->input->post('username');
        $pass = $this->input->post('pass');
        $db = $this->input->post('db');

        $writer_array = array(
            'dsn' => '',
            'hostname' => 'localhost----',
            'username' => '',
            'password' => '',
            'database' => '',
            'dbdriver' => 'mysqli',
            'dbprefix' => '',
            'pconnect' => FALSE,
            'db_debug' => (ENVIRONMENT !== 'production'),
            'cache_on' => FALSE,
            'cachedir' => '',
            'char_set' => 'utf8',
            'dbcollat' => 'utf8_general_ci',
            'swap_pre' => '',
            'encrypt' => FALSE,
            'compress' => FALSE,
            'stricton' => FALSE,
            'failover' => array(),
            'save_queries' => TRUE
        );
        $writer->write(['default'], $writer_array);
        $conn = new mysqli($host, $username, $pass);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Create database
        $sql = "CREATE DATABASE $db";
        if ($conn->query($sql) === TRUE) {
            echo "Database created successfully";
        } else {
            echo "Error creating database: " . $conn->error;
        }

        $conn->close();
    }

}
