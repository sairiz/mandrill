<?php namespace Sairiz\Mandrill;

class Mandrill extends \Mandrill {

    public function __construct($apiKey) {

        parent::__construct($apiKey);
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    }

    public function templates()
    {
        return $this->templates;
    }

    public function exports()
    {
        return $this->exports;
    }

    public function users()
    {
        return $this->users;
    }

    public function rejects()
    {
        return $this->rejects;
    }

    public function inbound()
    {
        return $this->inbound;
    }

    public function tags()
    {
        return $this->tags;
    }    
    
    public function messages()
    {
        return $this->messages;
    }        

    public function whitelist()
    {
        return $this->whitelist;
    }

    public function ips()
    {
        return $this->ips;
    }

    public function internal()
    {
        return $this->internal;
    }

    public function subaccounts()
    {
        return $this->subaccounts;
    }    
    
    public function urls()
    {
        return $this->urls;
    } 
    
    public function webhooks()
    {
        return $this->urls;
    }

    public function senders()
    {
        return $this->senders;
    }    
    
    public function metadata()
    {
        return $this->metadata;
    } 
}