<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WpsController extends Controller
{
    public function customerList(Request $request)
	{
        // $apiKey = "OoDa0bWMQ/LW614JRNnbFl+bgPN1ZuinTdJE8I3yM8SGTbkjH9iC+IxEUSwjDly3";
        // $url = 'https://uisp-dev.ruralwisp.ca/crm/api/v1.0/clients';

		// $ch = curl_init();
		// curl_setopt($ch, CURLOPT_URL, $url);
		// curl_setopt($ch, CURLOPT_POST, 0);
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		// 	'X-Auth-App-Key: ' . $apiKey
		// 	));

		// $response = curl_exec ($ch);
		// $err = curl_error($ch);  //if you need
		// curl_close ($ch);
		// return $response;

		$response = callcurl('clients','GET');
		return $response;
    }
}
