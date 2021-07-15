<?php

namespace App\Http\Controllers\Tourist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TouristController extends Controller
{
    public function index()
    {
        echo "hello";
    }
    /**
     * Display home page
    */
    public function home(Request $request)
    {
        return view('tourist/home');
    }

    public function weather($cityId)
    {
        $weather = $this->getWeather($cityId);
        $cityName = config('cities.'.$cityId);
        $venues = $this->getCityDetails($cityName);

        $data = [
            'temp' => $weather,
            'venues' => $venues->response->venues,
            'weather' => $weather->weather[0]->main,
        ];

        return view('tourist/weather', $data);
    }

    /**
     * get weather details
    */
    public function getWeather($cityId)
    {
        $apiKey = "3e2a95961ae476f86982b0297726c931";
        $apiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

        $ch = curl_init();

        return $this->curlEvent($apiUrl);
    }

    public function getCityDetails($cityName)
    {
        $clientId = 'ZQLDGJOC4RIJRS0G2ISW4M2HVJPNIZ2XPQR4AF05CSURQFS3';
        $clientSecret = 'VNLTXMTPYLFNGE0QPZSNDSTS3TDFXNLCYATCFWRQQQ24MCJT';
        $version = date('Ymd');
        $apiUrl = 'https://api.foursquare.com/v2/venues/search?near='.$cityName.'&limit=5&categoryId=4deefb944765f83613cdba6e&client_id='.$clientId.'&client_secret='.$clientSecret.'&v='.$version;

        return $this->curlEvent($apiUrl);
    }

     public function getVenueDetails($venueId)
    {
        $clientId = 'ZQLDGJOC4RIJRS0G2ISW4M2HVJPNIZ2XPQR4AF05CSURQFS3';
        $clientSecret = 'VNLTXMTPYLFNGE0QPZSNDSTS3TDFXNLCYATCFWRQQQ24MCJT';
        $version = date('Ymd');
        $apiUrl = 'https://api.foursquare.com/v2/venues/'.$venueId.'/photos?client_id='.$clientId.'&client_secret='.$clientSecret.'&v='.$version;

        $response = $this->curlEvent($apiUrl);
        dd($response);

        $imgUrl = $response->response->photos->items[0]->prefix.'240x240'.$response->response->photos->items[0]->suffix;
        return $imgUrl;
    }

    private function curlEvent($apiUrl){
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);

        curl_close($ch);
        $data = json_decode($response);
        $currentTime = time();

        return $data;
    }
}
