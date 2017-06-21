<?php

class Rets {
    
    protected $request;
    protected $query_str;
    protected $api_url;
        
    public function __construct($request, $url) {
        $this->request = $request;
        /*if ($url == NULL) {
            $this->api_url = 'http://rets-cache.homelasvegas.com/api/rets/v1'.$url;
        } else {
            $this->api_url = 'http://rets-cache.homelasvegas.com/api/rets/v1/'.$url;
        }*/

        if ($url == NULL) {
            $this->api_url = 'http://rets.local/api/rets/v1'.$url;
        } else {
            $this->api_url = 'http://rets.local/api/rets/v1/'.$url;
        }
    }

    public function get_request() {

        return $this->request;

    }
    
    public function prepare() {
        if(empty($this->request))
            return;
        
        foreach($this->request as $key => $value){ 
            if(empty($value))
                continue;
            if(is_array($value) && !empty($value)){
                $this->query_str .= $key . '='.urlencode(implode(',',$value)).'&';                 
            }else{
                $this->query_str .= $key . '='.urlencode($value).'&';     
            }
            
        }
        $this->query_str = rtrim($this->query_str, '&');  
        /*echo '<pre>';
        echo $this->query_str;*/
        return $this->query_str;
    }
    
    public function call() {
        $this->prepare();       
        $url = $this->api_url . '?' . $this->query_str;
        $curl = curl_init();
        // Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url,
        CURLOPT_USERAGENT => 'Codular Sample cURL Request'
        ));
        // Send the request & save response to $resp
        $resp = curl_exec($curl);
        // Close request to clear up some resources
        curl_close($curl);

        $results = json_decode($resp);


        /*$response = file_get_contents($this->api_url . '?' . $this->query_str);
        $results = json_decode($response);*/
        
        return $results;
    }
    
   /* public function get_langs(){
        $response = file_get_contents($this->api_url . '/langs');
        return json_decode($response);
    }
    
    public function get_offices(){
        $response = file_get_contents($this->api_url . '/offices');
        return json_decode($response);
    }*/
    
    function getQueryString($request){
        $queryString = '';
        if(!empty($request)){
            foreach($request as $key => $value){
                if($key == 'order' || $key == 'orderby'){
                    continue;
                }
                if(is_array($value)){
                    foreach($value as $k => $v){
                        $queryString .= "$key"."[$k]" . '='. urlencode($v).'&';
                    }
                    continue;
                }
                $queryString .= $key . '='. urlencode($value).'&';
            }
        }

        return rtrim($queryString, '&');
    }
}