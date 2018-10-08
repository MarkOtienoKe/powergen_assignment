Introduction

I have used Laravel php framework to make a simple system that gets the world bank open data and saves the data into a Postgres database. I have presented the data stored in the database in a UI using jquery datatable.

The code structure may appear to have several files and folders. Most of them are laravel built in.

Main Tools and Library used

1. Laravel php framework
2. Postgres Database
3. Yajra datatabe


Main Clases

1. Catalog.php
2.DataStoreController.php
3.HandleDataQueriesController.php

UI files

1. public/css *
2. public/js *
3. resources/views/data-view.blade.php

Main Routes
1. / main route. It directs to the UI
2. /api/data - Fetches world bank data from api and saves to the database
3. /get/world/bank/data - queries saved data and serves the Ui with data


Deployment guidelines

1. Clone the repository
2. Install composer and other larevel php framework requirements
3. Setup your database. Run php artisan migrate command to populate database tables
4. Navivigate to the cloned repository and run php artisan serve command
5. 

