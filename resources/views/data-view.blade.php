<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/datatables.min.css') }}">
<link rel="stylesheet" href="{{ URL::asset('css/custom-datatables.css') }}">
        
    </head>
    <body>
        <div class="">
            <div class="">
                <div class="col-md-12">
                    
                    <div>
                        <h3 class="text-center">The World Bank Data</h3>
                    </div>
                    <div class="col-md-12">
                        <div class="table-responsive">
                                <table id="world-bank-data-table" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Acronym</th>
                                        <th>Description</th>
                                        <th>Url</th>
                                        <th>Type</th>
                                        <th>Language Supported</th>
                                        <th>Periodicity</th>
                                        <th>Economy Coverage</th>
                                        <th>Granularity</th>
                                        <th>Number of Economies</th>
                                        <th>Topics</th>
                                        <th>Update Frequency</th>
                                        <th>Update Schedule</th>
                                        <th>Last Revision Date</th>
                                        <th>Contact Details</th>
                                        <th>Access Options</th>
                                        <th>Bulk Download</th>
                                        <th>Cite</th>
                                        <th>Detail Page Url</th>
                                        <th>Popularity</th>
                                        <th>Coverage</th>
                                        <th>Api</th>
                                        <th>Api Access Url</th>
                                        <th>Api source Id</th>
                                        <th>Mobile App</th>
                                        <th>Topics</th>
                                        <th>Data Notes</th>
                                        <th>List of Countries Admins</th>
                                        <th>Source Url</th>
                                        <th>Api Location</th>
                                    </tr>
                                    </thead>

                                    <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Acronym</th>
                                        <th>Description</th>
                                        <th>Url</th>
                                        <th>Type</th>
                                        <th>Language Supported</th>
                                        <th>Periodicity</th>
                                        <th>Economy Coverage</th>
                                        <th>Granularity</th>
                                        <th>Number of Economies</th>
                                        <th>Topics</th>
                                        <th>Update Frequency</th>
                                        <th>Update Schedule</th>
                                        <th>Last Revision Date</th>
                                        <th>Contact Details</th>
                                        <th>Access Options</th>
                                        <th>Bulk Download</th>
                                        <th>Cite</th>
                                        <th>Detail Page Url</th>
                                        <th>Popularity</th>
                                        <th>Coverage</th>
                                        <th>Api</th>
                                        <th>Api Access Url</th>
                                        <th>Api source Id</th>
                                        <th>Mobile App</th>
                                        <th>Topics</th>
                                        <th>Data Notes</th>
                                        <th>List of Countries Admins</th>
                                        <th>Source Url</th>
                                        <th>Api Location</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ URL::asset('js/jquery-2.2.3.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('js/datatables.min.js') }}"></script>
        <script src="{{ URL::asset('js/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('js/buttons.server-side.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function () {
            $('#world-bank-data-table').DataTable({
              dom: '<\'row table-controls\'<\'col-sm-4 col-md-3 page-length\'l><\'col-sm-6 col-md-6 search\'f><\'col-sm-6 col-md-3 text-right\'B>><\'row\'<\'col-md-12\'rt>><\'row space-up-10\'<\'col-md-6\'i><\'col-md-6\'p>>',
              buttons: [
                'print',
              {
                extend: 'csvHtml5'
              },
                {
                extend: 'excelHtml5'
              },
              ],
              processing: true,
              serverSide: true,
              ajax: '/get/world/bank/data',
              columns: [
                {data: 'name'},
                {data: 'acronym'},
                {data: 'description'},
                {data: 'url'},
                {data: 'type'},
                {data: 'languagesupported'},
                {data: 'periodicity'},
                {data: 'economycoverage'},
                {data: 'granularity'},
                {data: 'numberofeconomies'},
                {data: 'topics'},
                {data: 'updatefrequency'},
                {data: 'updateschedule'},
                {data: 'lastrevisiondate'},
                {data: 'contactdetails'},
                {data: 'accessoption'},
                {data: 'bulkdownload'},
                {data: 'cite'},
                {data: 'detailpageurl'},
                {data: 'popularity'},
                {data: 'coverage'},
                {data: 'api'},
                {data: 'apiaccessurl'},
                {data: 'apisourceid'},
                {data: 'mobileapp'},
                {data: 'topics'},
                {data: 'datanotes'},
                {data: 'listofcountriesregionssubnationaladmins'},
                {data: 'sourceurl'},
                {data: 'apilocation'},
              ]
              // columnDefs: [
              //   {
              //     render: function (data, type, row) {
              //       return '<div><button type="button" onclick="getCustomerDetails(' + row.customer_id + ',\'' + row.customer_name + '\',\'' + row.customer_email + '\',\'' + row.customer_mobile_no + '\',\'' + row.location + '\',\'' + row.customer_id_no + '\')" class="btn btn-primary" data-toggle="modal" data-target="#editCustomerModal">Edit </button></div>'

              //     },
              //     targets: 7
              //   },
              //   {
              //     render: function (data, type, row) {
              //       return '<div><a class="btn btn-warning" href="/view/customer/measurements/' + row.customer_id + '">Measurements</a></div>'
              //     },
              //     targets: 8
              //   },
              //   {
              //     render: function (data, type, row) {
              //       return '<div><button class="btn btn-danger" onclick="changeStatus(' + row.customer_id + ')">Deactivate</button></div>'
              //     },
              //     targets: 9
              //   }
              // ]
            })
        });
        </script>
    </body>
</html>

        