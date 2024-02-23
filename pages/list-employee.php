<!DOCTYPE html>
<html lang="en">

<head>
    <title>List Employee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-10">
                <h2>List Employee</h2>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p>List Employees</p>
                    </div>
                    <div class="panel-body">
                        <table class="table" id="tbl-employee">
                            <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>john@example.com</td>
                                </tr>
                                <tr>
                                    <td>Mary</td>
                                    <td>Moe</td>
                                    <td>mary@example.com</td>
                                </tr>
                                <tr>
                                    <td>July</td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <script>
        jQuery(function () {
            new DataTable('#tbl-employee');
        });
    </script>
</body>

</html>