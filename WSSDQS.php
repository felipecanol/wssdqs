<?php
    require_once("SDQSSoapClient.php");
    
    class WSSDQS{

        private $url = "http://sdqspruebas.alcaldiabogota.gov.co/sdqs-ws/radicacion?wsdl";
        private $client = null;
        
        public function WSSDQS(){
            $options = array('soap_version' => SOAP_1_2, 'trace' => 1);
            $this->client = new SDQSSoapClient($this->url, $options);
        }
        
        public function registroRequerimiento($params){
            $resp = $this->client->registroRequerimiento($params);
            return $resp;
        }
        
        public function cierreRequerimiento($params){
            $resp = $this->client->cierreRequerimiento($params);
            return $resp;
        }
        
        public function consultarEstadoRequerimiento($codigoRequerimiento){
            $params = array('codigoRequerimiento' => $codigoRequerimiento);
            $resp = $this->client->consultarEstadoRequerimiento($params);
            return $resp;
        }
        
        public function consultarHojaRutaRequerimiento($codigoRequerimiento){
            $params = array('codigoRequerimiento' => $codigoRequerimiento);
            $resp = $this->client->consultarHojaRutaRequerimiento($params);
            return $resp;
        }
        
        public function ConsultaRequerimiento($codigoRequerimiento){
            $params = array('codigoRequerimiento' => $codigoRequerimiento);
            $resp = $this->client->ConsultaRequerimiento($params);
            return $resp;
        }
        
        public function Consultafecha($params){
            $resp = $this->client->Consultafecha($params);
            return $resp;
        }
        
        public function AdjuntarArchivo($params){
            $resp = $this->client->AdjuntarArchivo($params);
            return $resp;
        }
        
        public function getLastResponse(){
            $resp = $this->client->__getLastResponse();
            return htmlentities($this->formatXml($resp), ENT_QUOTES);
        }
        
        public function getLastRequest(){
            $resp = $this->client->__getLastRequest();
            return htmlentities($this->formatXml($resp), ENT_QUOTES);
        }
        
        public function getFunctions(){
            $resp = $this->client->__getFunctions();
            return $resp;
        }
        
        public function formatXml($xml) {
            $doc = new DOMDocument();
            $doc->preserveWhiteSpace = false;
            $doc->formatOutput = true;
            $doc->loadXML($xml);
            return $doc->saveXML();
        }
    }
?>
