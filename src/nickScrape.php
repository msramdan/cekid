<?php
namespace andipedia;
class NickScrape
{
    const API_URL = "https://api.tokogame.com/core/v1/orders/validate-order";
    
    public function getMobileLegendsNickname($gameID, $zoneID)
    {
        $payload       = '{"productId":"60f39f1e70a6874c6a151e4e","questionnaireAnswers":[{"questionnaire":{"code":"userid","inputType":"STRING","translations":[{"language":"ID","question":"Masukkan User ID","description":"User ID","choices":[]}]},"answer":"'.$gameID.'"},{"questionnaire":{"code":"zoneid","inputType":"STRING","translations":[{"language":"ID","question":"(Zone ID)","description":"Zone ID","choices":[]}]},"answer":"'.$zoneID.'"}]}';
        $checkUsername = $this->Request(self::API_URL, $payload);
        $json          = json_decode($checkUsername, true);
        if ($json['message'] === 'SUCCESS') {
            return $json['data']['username'];
        } else {
            return $json['message'];
        }
    }
    
    public function getFreeFireNickname($gameID)
    {
        $payload       = '{"productId":"623e9ae09a0d716c06f7e9ec","questionnaireAnswers":[{"questionnaire":{"code":"userid","inputType":"STRING","translations":[{"language":"ID","question":"Masukkan User ID","description":"User ID","choices":[]}]},"answer":"'.$gameID.'"}]}';
        $checkUsername = $this->Request(self::API_URL, $payload);
        $json          = json_decode($checkUsername, true);
        if ($json['message'] === 'SUCCESS') {
            return $json['data']['username'];
        } else {
            return $json['message'];
        }
    }
    
    public function getHiggsDominoNickname($gameID)
    {
        $payload       = '{"productId":"629561908e083b60171ee8b6","questionnaireAnswers":[{"questionnaire":{"code":"userid","inputType":"STRING","translations":[{"language":"ID","question":"Masukkan User ID","description":"User ID","choices":[]}]},"answer":"'.$gameID.'"}]}';
        $checkUsername = $this->Request(self::API_URL, $payload);
        $json          = json_decode($checkUsername, true);
        if ($json['message'] === 'SUCCESS') {
            return $json['data']['username'];
        } else {
            return $json['message'];
        }
    }
    
    public function getApexLegendsNickname($gameID)
    {
        $payload       = '{"productId":"6288929aaf05b32c50324376","questionnaireAnswers":[{"questionnaire":{"code":"userid","inputType":"STRING","translations":[{"language":"ID","question":"Masukkan User ID","description":"User ID","choices":[]}]},"answer":"'.$gameID.'"}]}';
        $checkUsername = $this->Request(self::API_URL, $payload);
        $json          = json_decode($checkUsername, true);
        if ($json['message'] === 'SUCCESS') {
            return $json['data']['username'];
        } else {
            return $json['message'];
        }
    }
    
    public function getValorantNickname($gameID)
    {
        $payload       = '{"productId":"62d3e7c9aafc31b46e4574ab","questionnaireAnswers":[{"questionnaire":{"code":"userid","inputType":"STRING","translations":[{"language":"ID","question":"Masukkan Riot ID","description":"Riot ID","choices":[]}]},"answer":"'/$gameID.'"}]}';
        $checkUsername = $this->Request(self::API_URL, $payload);
        $json          = json_decode($checkUsername, true);
        if ($json['message'] === 'SUCCESS') {
            return $json['data']['username'];
        } else {
            return $json['message'];
        }
    }
    
    public function getGenshinImpactNickname($gameID, $server)
    {
        $payload       = '{"productId":"623e9ae09a0d716c06f7e9ed","questionnaireAnswers":[{"questionnaire":{"code":"userid","inputType":"STRING","translations":[{"language":"ID","question":"User ID","description":null,"choices":[]}]},"answer":"'.$gameID.'"},{"questionnaire":{"code":"zoneid","inputType":"LIST","translations":[{"language":"ID","question":"Pilih Server","description":null,"choices":[{"name":"Asia","value":"os_asia"},{"name":"America","value":"os_usa"},{"name":"Europe","value":"os_euro"},{"name":"TW, HK, MO","value":"os_cht"}]}]},"answer":"os_'.strtolower($server).'"}]}';
        $checkUsername = $this->Request(self::API_URL, $payload);
        $json          = json_decode($checkUsername, true);
        if ($json['message'] === 'SUCCESS') {
            return $json['data']['username'];
        } else {
            return $json['message'];
        }
    }

    public function getLeagueOfLegendWC($gameID)
    {
        $payload       = '{"productId":"623e9ae09a0d716c06f7e9f0","questionnaireAnswers":[{"questionnaire":{"code":"userid","inputType":"STRING","translations":[{"language":"ID","question":"Masukkan Riot ID","description":"Riot ID","choices":[]}]},"answer":"'.$gameID.'"}]}';
        $checkUsername = $this->Request(self::API_URL, $payload);
        $json          = json_decode($checkUsername, true);
        if ($json['message'] === 'SUCCESS') {
            return $json['data']['username'];
        } else {
            return $json['message'];
        }
    }

    protected function Request($url, $post = false)
    {
        $ch = curl_init();
        
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_RETURNTRANSFER => true
        ));
        
        if ($post) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        }
        
        $headers = array(
            'Host: api.tokogame.com',
            'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36',
            'content-type: application/json',
            'x-request-id: 39159d22-c996-4f4b-9a83-937ef3cb1a64',
            'x-secret-id: d03304ebb2f2001f8b4e78bd86f691ab4537e67e9bab6b00e4b2dd3609e198c6'
        );
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}
