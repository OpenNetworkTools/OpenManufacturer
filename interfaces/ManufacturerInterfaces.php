<?php
    namespace OpenNetworkTools\Interfaces;

    interface ManufacturerInterfaces {

        public function __construct();
        public function getConfig();
        public function setConfig($config);
        public function addConfigFile($line);
        public function getConfigFile();
        public function loadConfigFile($filename, $ignoreComment = false, $ignoreSymbole = array());
        public function saveConfigFile($filename);
        public function setConfigFile($configFile);
        public function getRunning();
        public function setRunning();

    }