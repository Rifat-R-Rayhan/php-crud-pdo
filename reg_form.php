<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Student
                            <a href="index.php" class="btn btn-danger float-end">HOME</a>
                        </h3>
                    </div>

                    <div class="card-body">
                        <form action="std_list.php" method="post">
                            <div class="mb-3">
                                <label>Full Name:</label>
                                <input type="text" name="fullname" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Email:</label>
                                <input type="email" name="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Phone:</label>
                                <input type="number" name="phone" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Course:</label>
                                <input type="text" name="course" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="add_student-btn" class="btn btn-primary">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>