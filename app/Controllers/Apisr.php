<?php

namespace App\Controllers;

use App\Models\NewsModel;

class Apisr extends BaseController
{
	public function reed()
	{
		

// Set connection details
$login = '87714107-7940-485a-b32b-e4f98b58e51a';
$password = '';
$url = 'https://www.reed.co.uk/api/1.0/search?keywords=laravel&location=wolverhampton&distancefromlocation=15';

// Create CURL object with options
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");

// Make CURL call, and convert result to JSON object
$jobs = curl_exec($ch);
$jobs = json_decode($jobs);
curl_close($ch);  

// Display results
foreach($jobs->results as $job) {
	print($job->jobTitle . "<br>");
}	
	}
}