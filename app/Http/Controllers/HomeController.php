<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }


    public function countryCode()
    {
        $code = '';
        $countryData = [];
        // $jsonUrl = 'http://ipinfo.io/'.$_SERVER['REMOTE_ADDR'];
        $jsonUrl = 'http://ipinfo.io/82.211.151.49';

        $json = @file_get_contents($jsonUrl);

        $detailsId = json_decode($json);
        if($json === FALSE || isset($detailsId->bogon)){
            $countryData['main'][] = '';
            $countryData['country'][]='';
        }else{
            /*$geoJson = @file_get_contents('https://restcountries.eu/rest/v1/capital/'.$detailsId->city);*/
            $geoJson = @file_get_contents('https://restcountries.eu/rest/v2/all?fields=alpha2Code;callingCodes;name;');
            if($geoJson === false){
                $code = '';
            }else{
                $geolocation = json_decode($geoJson);
                foreach ($geolocation as $key => $value) {
                    if($value->alpha2Code == $detailsId->country){
                        $countryData['main'][] = strtolower($value->alpha2Code);
                        $countryData['main'][] = $value->callingCodes[0];
                        $countryData['main']['flag'] = strtolower($value->alpha2Code);
                        $countryData['main'][] = $value->name;
                    }else{
                        $countryData[$value->name][] = strtolower($value->alpha2Code);
                        $countryData[$value->name][] = $value->callingCodes[0]; 
                    }
                    

                }
            }
        }
        return $countryData;
    }

}
