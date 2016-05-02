<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    /**
     * @Route("/lucky/number")
     */
    public function numberAction()
    {
        function curl($url) {
	        $ch = curl_init();  // Initialising cURL
	        curl_setopt($ch, CURLOPT_URL, $url);    // Setting cURL's URL option with the $url variable passed into the function
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); // Setting cURL's option to return the webpage data
	        $data = curl_exec($ch); // Executing the cURL request and assigning the returned data to the $data variable
	        curl_close($ch);    // Closing cURL
	        var_dump($data);
	        return $data;   // Returning the data from the function
    	}

    	$scraped_website = curl("http://www.example.com");  // Executing our curl function to scrape the webpage http://www.example.com and return the results into the $scraped_website variable
    	echo $scraped_website;

    	return new Response('');
    }
}