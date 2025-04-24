<?php 
namespace App\Services; 
use GuzzleHttp\Client; 
use GuzzleHttp\Exception\RequestException; 
class MovieApiService 
{ 
protected $client; 
protected $apiKey;
public function __construct() 
{ 
    $this->client = new Client(); 
    $this->apiKey = env('RAPIDAPI_KEY'); // Ambil API key dari file .env 
} 

// Fungsi untuk mendapatkan semua tim 
public function getMovies() 
{ 
    try { 
        $response = $this->client->request('GET', 'https://imdb-top-100-movies.p.rapidapi.com/series/', [ 
            'headers' => [ 
                'x-rapidapi-key' => $this->apiKey 
            ], 
            'verify' => false  // Menonaktifkan verifikasi SSL 
        ]); 
        // return json_decode($response->getBody()>getContents(), true); 
        $data = json_decode($response->getBody()->getContents(), true); 
        return $data; 
    } catch (RequestException $e) { 
        return ['error' => $e->getMessage()]; 
    } 
} 
} 