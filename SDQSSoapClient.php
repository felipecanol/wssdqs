<?php
    class SDQSSoapClient extends SoapClient {
        function __doRequest($request, $location, $action, $version, $one_way = NULL) {
            $dom = new DOMDocument('1.0', 'UTF-8');
            $dom->preserveWhiteSpace = false;
            $dom->loadXML($request);
            $dom->documentElement->setAttribute('xmlns:req', 'requerimiento');
            $request = $dom->saveXML();
            $request = str_replace("<requerimiento>","<req:requerimiento>",$request);
            $request = str_replace("</requerimiento>","</req:requerimiento>",$request);
            $r=parent::__doRequest($request, $location, $action, $version, $one_way);
            $this->__last_request = $request;
            return $r;
        }
    }
?>
