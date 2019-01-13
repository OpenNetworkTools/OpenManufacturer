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
            try {
                $fh = fopen($filename, "r");
                if(!$fh) throw new \Exception();
                while(!feof($fh)){
                    $line = fgets($fh, 256);
                    if($ignoreComment == true && in_array($line[0], $ignoreSymbole));
                    else $this->configFile[] = $line;
                }
            } catch (\Exception $e){
                throw new \Exception();
            }
        }

        public function saveConfigFile($filename){
            try {
                $fh = fopen($filename, "w+");
                if(!$fh) throw new \Exception();
                foreach ($this->getConfigFile() as $v){
                    fputs($fh, $v."\n");
                }
            } catch (\Exception $e){
                throw new \Exception();
            }
        }

        public function setConfigFile($configFile){
        }

        public function getRunning(){
        }

        public function setRunning(){
        }

    }