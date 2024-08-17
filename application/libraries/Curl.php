<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curl {

    private $ci;
    private $ch;

    public function __construct() {
        $this->ci = &get_instance();
        $this->ch = curl_init();
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, false);
    }

    public function __destruct() {
        curl_close($this->ch);
    }

    public function simple_get($url, $params = array()) {
        if (!empty($params)) {
            $url = $url . '?' . http_build_query($params);
        }
        curl_setopt($this->ch, CURLOPT_URL, $url);
        curl_setopt($this->ch, CURLOPT_HTTPGET, true);
        return curl_exec($this->ch);
    }

    public function simple_post($url, $data = array()) {
        curl_setopt($this->ch, CURLOPT_URL, $url);
        curl_setopt($this->ch, CURLOPT_POST, true);
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $data);
        return curl_exec($this->ch);
    }

    public function simple_put($url, $data = array()) {
        curl_setopt($this->ch, CURLOPT_URL, $url);
        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $data);
        return curl_exec($this->ch);
    }

    public function simple_delete($url) {
        curl_setopt($this->ch, CURLOPT_URL, $url);
        curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
        return curl_exec($this->ch);
    }

    public function set_option($option, $value) {
        curl_setopt($this->ch, $option, $value);
    }

    public function get_info() {
        return curl_getinfo($this->ch);
    }
}
