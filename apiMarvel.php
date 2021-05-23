<?php

class apiMarvel
{
    protected static $_public= 'b9dfaedc73cd200003db9fd0a86024a9', $_private='88a8efde6b09fd40c668a5f58e2e68763d02fc52', $_parameters;
    public $_debug = false, $_url_api, $ts, $hash;
    public $_test = 0;

    public function __construct($params=array()) {

        $date = new DateTime();

        $this->ts = $date->getTimestamp().'00';
        $this->hash = md5($this->ts.self::$_private.self::$_public);

    }

    public function connect($url, $http_methode=0, $json='{}')
    {
        var_dump(self::$_parameters);
        $ch = curl_init($url.(!$http_methode?'?apikey='.self::$_public.'&ts='.$this->ts.'&hash='.$this->hash:''));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //curl_setopt($ch, CURLOPT_HTTPHEADER, self::$_parameters);
        //curl_setopt($ch, CURLOPT_HEADER, true);//işi bitince kapat
        //curl_setopt($ch, CURLINFO_HEADER_OUT, true);//işi bitince kapat
        if ($http_methode)
        {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
            //curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $http_methode==2?"PUT":"POST");
        }
        $result = curl_exec($ch);
      
        $result_a = json_decode($result);
        //exit;
        $information = curl_getinfo($ch);
        //var_dump('----- INFORMATION: -----');
        //var_dump($information);
        if ((isset($information->message) && $information->message!='') || (isset($information['http_code']) && $information['http_code']!=200))
        {
            //var_dump('----------------------------  Error !!!   -----------------------------------');
            $response = new stdClass();
            $response->error = new stdClass();
            $response->error->errorCode = 'http '.$information['http_code'];
            $response->error->errorId = '';
            $response->error->viewMessage = '';
            $response->error->message = (isset($result_a->message)?$result_a->message:'').' - '.(isset($information->message)?$information->message:'').' - http_code: '.$information['http_code'];
            return json_encode($response);
        }
        //var_dump($result);
        //$html = '<html>'
        return $result;
    }
}