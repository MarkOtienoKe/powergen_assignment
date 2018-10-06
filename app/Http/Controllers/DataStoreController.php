<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Catalog;

class DataStoreController extends Controller
{
    
    public function loadAndSaveApiData(){

        $apiUrl='http://api.worldbank.org/v2/datacatalog?format=json';

        $dataContent = file_get_contents($apiUrl);

        $data = json_decode($dataContent);

        $totalPages = $data->pages;
        $dataTosave = [];

        for ($page = 1; $page <= $totalPages; $page++) {

          $pageUrl = 'http://api.worldbank.org/v2/datacatalog?page='.$page.'&format=json';

          $theData = $this->getCatalogDataFromApi($pageUrl);

           $filterData = json_decode($theData,true);
           $cataLogData = $filterData['datacatalog'];

           foreach($cataLogData as $inddata){

            $metatypeData = $inddata['metatype'];

            foreach($metatypeData as $indMetatData){

              $dataTosave[$indMetatData['id']] = $indMetatData['value'];
              $dataTosave['created_at'] =date('Y-m-d H:i:s');
              $dataTosave['updated_at'] =date('Y-m-d H:i:s');

            }

           Catalog::insert($dataTosave);

           }

        }

    return 200;
        
    }

    public function getCatalogDataFromApi($url){
        $curl = curl_init();
         curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8",
            "accept-encoding: gzip, deflate",
            "accept-language: en-US,en;q=0.5",
            "cache-control: no-cache",
            "connection: keep-alive",
            "host: api.worldbank.org",
            "postman-token: c57dca67-f9c1-596b-9169-0dabde09d359"
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          return $response;
        }
    }

}
