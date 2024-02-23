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
                                    <th>#ID</th>
                                    <th>#Full Name</th>
                                    <th>#Email</th>
                                    <th>#Phone Number</th>
                                    <th>#Gender</th>
                                    <th>#Designation</th>
                                    <th>#Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Doe</td>
                                    <td>john@example.com</td>
                                    <td>1234567890</td>
                                    <td>Male</td>
                                    <td>CEO</td>
                                    <td>
                                        <a href="javascript:void(0)" class="btn btn-warning">Edit</a>
                                        <a href="javascript:void(0)" class="btn btn-danger">Delete</a>
                                        <a href="javascript:void(0)" class="btn btn-info">View</a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>

</body>

</html>