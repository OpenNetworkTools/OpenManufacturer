<?php
    namespace OpenNetworkTools;
        
    class Manufacturer implements \OpenNetworkTools\Interfaces\ManufacturerInterfaces {

        private $config;
        private $configFile;
        private $running;

        public function __construct(){
            $this->config = new \OpenNetworkTools\OpenConfig();
        }

        public function getConfig(){
            return $this->config;
        }

        public function setConfig($config){
            $this->config = $config;
            return $this;
        }

        public function addConfigFile($line){
        }

        public function getConfigFile(){
        }

        public function loadConfigFile($filename, $ignoreComment = false, $ignoreSymbole = array()){
        }

        public function saveConfigFile($filename){
        }

        public function setConfigFile($configFile){
        }

        public function getRunning(){
        }

        public function setRunning(){
        }

    }