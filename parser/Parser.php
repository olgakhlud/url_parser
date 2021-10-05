<?php


class Parser
{
    public function get_host($url) {
        $host = parse_url($url, 'host');
        return $host;
    }
}