<script language="JavaScript" src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js" type="text/javascript"></script>
<script language="JavaScript" src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css" />



    <div class="container">
        <div class="row">
            <h2 class="text-center">Bootstrap styling for Responsive Datatable (Server Side)</h2>
        </div>

        <div class="row">

            <div class="col-md-12">

                <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Middlename</th>
                            <th>Lastname</th>
                            <th>College</th>
                            <th>Program</th>
                            <th>Major</th>
                            <th>Year</th>
                            <th>Active</th>
                            <th>Status</th>
                            <th>Date Evaluated</th>
                            <th>email</th>
                            <th>Password</th>
                        </tr>
                    </thead>

                </table>

            </div>
        </div>
    </div>
    
    <script>
        

  var table = $('#example').DataTable( {
//        "processing": true,
//        "serverSide": true,
        "paging": true,
        "ajax": {
            "url": "<?php echo site_url('/student')?>",
            "type": "GET",
            "dataType": "json",
            "contentType": 'application/json; charset=utf-8',
        },
        "columns": [
            { "data": "id" },
            { "data": "fname" },
            { "data": "mname" },
            { "data": "lname" },
            { "data": "college" },
            { "data": "program" },
            { "data": "major" },
            { "data": "year" },
            { "data": "Active" },
            { "data": "status" },
            { "data": "date_evaluated" },
            { "data": "email" },
            { "data": "password" }
        ]
    } );
//autoreff
setInterval( function () {
    table.ajax.reload();
}, 30000 );
        
    </script>
