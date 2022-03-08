<?php 
/**
 * 
 * 
 */
/*
Widget Name: OpenWeather
Plugin URI: https://openweathermap.org/guide
Description: This is a widget that will give basic info on the weather of the city
            of the user with the help of the OpenWeather API.
            You need to register in order to get an API key. 
Author: Xael_Baseth
Version: 0.1
Author URI: https://github.com/XaelBaseth
*/

//API KEY - don't show
$api_key = '5ed0bd420a7545baa7db65fbba125ba9';

/*
GET THE COORDINATES FROM THE CITY NAME
LATITUDE AND LONGITUDE
WITH THE GEOCODING API
*/
$city_name = 'Harfleur';
$geo_api_url = "http://api.openweathermap.org/geo/1.0/direct?q={$city_name}&limit=1&appid={$api_key}";

$location_data = json_decode(file_get_contents($geo_api_url), true);

$latitude = $location_data['0']['lat'];
$longitude = $location_data['0']['lon'];

/*
GET THE WEATHER DATA FROM THE CITY NAME
TEMPERATURE, MAIN, DESCRIPTION
WITH THE GEOCODING API
*/
$weather_api_url = "http://api.openweathermap.org/data/2.5/weather?lat={$latitude}&lon={$longitude}&units=metric&appid={$api_key}";

$weather_data = json_decode(file_get_contents($weather_api_url), true);

$temperature = $weather_data['main']['temp'];
$main = $weather_data['weather']['0']['main'];
$description = $weather_data['weather']['0']['description'];

?>
