<?php

namespace Parser;

class Parser
{
    public function get_host($url) {
        $host = parse_url($url,  PHP_URL_HOST);
        return $host;
    }
}