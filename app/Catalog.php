<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $fillable = ['name','acronym','description','url','type','languagesupported','periodicity','economycoverage','granularity','numberofeconomies','updatefrequency','updateschedule','lastrevisiondate','contactdetails','accessoption','bulkdownload','cite','detailpageurl','popularity','coverage','api','apiaccessurl','apisourceid','mobileapp','topics','created_at','updated_at','datanotes','listofcountriesregionssubnationaladmins','sourceurl','apilocation'];
}
