<?php namespace AliPub;

class AliPub
{
    protected static $service_url = 'http://save.ali.pub/get-url.php';

    public static function reduce($url)
    {
        $client = new HttpClient();
        $req_str = "url=".urlencode($url)."&search-button=OK";
        $result = $client->post(self::$service_url, $req_str);
        $info = curl_getinfo($client->ch);
        if (array_key_exists('redirect_url', $info)) {
            $d = parse_url($info['redirect_url']);
            $t = explode('hash=', $d['query']);
            if (array_key_exists('1', $t)) {
                return 'http://ali.pub/'.$t[1];
            }
        }
        return false;
    }
}