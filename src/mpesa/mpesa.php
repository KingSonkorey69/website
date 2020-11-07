<?php
require '../config.php';

// create a base class that all other classes will extend from
abstract class Mpesa
{
    // this will be the curl object which will handle the request
    private $curl;
    // save the array body from an api to send in the post request
    private $body;
    // save the access token after retrieving it from mpesa
    private $token;

    //These method will be overriden using the api because each api has a diferent array body
    abstract protected function generateBody();

    //create a constructor where we first retrieve the access token befor any execution
    public function __construct()
    {
        $this->curl = curl_init();
        $this->authenticate();
    }

    //this method will be used to retrieve the access token to be used for every request
    private function authenticate()
    {   
        // encode the consumer key and consumer secret as required by mpesa
        $credentials = base64_encode(CONSUMER_KEY . ':' . CONSUMER_SECRET);
        //initialise a curl object
        $this->curl = curl_init();
        /**
         * Set various options 
         * 1: url for accessing the token
         * 2: httpheader with the credentials 
         * 3: set the header as false so as not to return header information in the response object
         * 4: set returntransfer as true to return the response rather than echoing it out
         * 5 determine if curl verifies the authenticity of a certicficate. set to false to avoid ssl errors in some cases
         */
        curl_setopt_array($this->curl, array(
            CURLOPT_URL => ACCESS_TOKEN_URL,
            CURLOPT_HTTPHEADER => array('Authorization: Basic ' . $credentials),
            CURLOPT_HEADER => false,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false
        ));

        //execute the request
        $curl_response = curl_exec($this->curl);
        //parse the response
        $token_object = json_decode($curl_response); 
        //set the token 
        $this->token = $token_object->access_token;
        //close the connection
        curl_close($this->curl);
    }
    //this method will be used by the individual apis to execute the requests
    protected function execute($url)
    {   
        //initialise a new curl object
        $this->curl = curl_init();
        //get the post body for the api 
        $this->body = $this->generateBody();
        //encode the post body
        $data_string = json_encode($this->body);
        curl_setopt_array($this->curl, array(
            CURLOPT_URL => $url,
            CURLOPT_HTTPHEADER => array('Content-Type:application/json', 'Authorization:Bearer ' . $this->token),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $data_string
        ));
        
        //execute the curl object
        $curl_response = curl_exec($this->curl);
        //return the response
        return $curl_response;
    }
}
