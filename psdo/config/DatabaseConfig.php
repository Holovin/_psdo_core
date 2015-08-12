<?php
    namespace PSDO\Config;


    class DatabaseConfig extends AbstractConfig {
        const configStoreName = 'Database';

        protected function load() {
            $this->data['host']             = 'localhost';
            $this->data['user']            = 'psdo3ez';
            $this->data['password']         = 'psdo3ez';
            $this->data['dbName']               = 'psdo';
        }

        public function  __construct() {
            parent::__construct();
            $this->load();
        }
    }