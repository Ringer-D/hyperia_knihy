<?php

class BookStore
{
    protected $url;
    protected $sslVerifypeer;
    protected $returnTransfer;
    protected $httpGet;
    

    /**
     * BookStore constructor
     * @param string $url
     * @param bool $sslVerifypeer
     * @param bool $returnTransfer
     * @param bool $httpGet
     */

     public function __construct($url, $sslVerifypeer, $returnTransfer, $httpGet)
     {
        $this->url = $url;
        $this->sslVerifypeer = $sslVerifypeer;
        $this->returnTransfer = $returnTransfer;
        $this->httpGet = $httpGet;
     }

     /**
      * getBook Function
      * @param string $bookName
      * @return array
      */
     public function getBook($bookName)
     {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->url.$bookName);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, $this->sslVerifypeer);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, $this->returnTransfer);
        curl_setopt($curl, CURLOPT_HTTPGET, $this->httpGet);

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response, true);
     }
}