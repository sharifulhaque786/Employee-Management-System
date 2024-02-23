<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add Employee</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>

    <div class="container">
        <div class="row">
            <div class="class-sm-8">
                <h2>Add Employee</h2>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form action="">
                            <div class="form-group">
                                <div class="mb-3 mt-3">
                                    <label for="name" class="form-label">Name:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter name"
                                        name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3 mt-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email"
                                        name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3 mt-3">
                                    <label for="phone" class="form-label">Phone:</label>
                                    <input type="phone" class="form-control" id="phone" placeholder="Enter phone"
                                        name="phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="mb-3" mt-3>
                                    <label for="gender" class="form-label">Gender:</label>
                                    <select id="gender" name="gender" class="form-control">
                                        <option>Select Option</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="mb-3 mt-3">
                                    <label for="designation" class="form-label">Designation:</label>
                                    <input type="designation" class="form-control" id="designation"
                                        placeholder="Enter designation" name="designation">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>