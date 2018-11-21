<?php
error_reporting(0);
require_once APPPATH . 'libraries/array_config_writer/class-array-config-writer.php';

class Config_Writer {

    public function get_instance($file = null, $variable_name = "config") {
        if (!$file) {
            $file = APPPATH . "config/config.php";
        }
        return new Array_Config_Writer($file, $variable_name);
    }
    
    public function get_db_instance($file = null, $variable_name = "db") {
        if (!$file) {
            $file = APPPATH . "config/database.php";
        }
        return new Array_Config_Writer($file, $variable_name);
    }

}
