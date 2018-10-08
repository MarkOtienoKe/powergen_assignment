<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\Catalog;

class HandleDataQueriesController extends Controller
{
    public function getAllCatalogData(){
         try {
            $allCatalogData = Catalog::all();

           return Datatables::of($allCatalogData)
            ->make(true);
        } catch (Exception $e) {
            \Log::error('Exception while fetching all catalog data', [$e]);

            return null;
        }
    }
}
