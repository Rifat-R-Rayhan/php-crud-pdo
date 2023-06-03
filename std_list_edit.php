<?php session_start();
    include('db_conn.php');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit & Update Student's Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Student's Information
                            <a href="index.php" class="btn btn-danger float-end">HOME</a>
                        </h3>
                    </div>

                    <div class="card-body">
                        <?php
                            if(isset($_GET['id']))
                            {
                                $student_id = $_GET['id'];

                                $query = "SELECT * FROM students WHERE id=:stud_id LIMIT 1";
                                $statement = $conn->prepare($query);
                                $data = [':stud_id' => $student_id];
                                $statement->execute($data);

                                $result = $statement->fetch(PDO::FETCH_OBJ); //PDO::FETCH_ASSOC
                            }
                        ?>



                        <form action="std_list.php" method="post">
                            <input type="hidden" name="student_id" value="<?=$result->id; ?>">
                            <div class="mb-3">
                                <label>Full Name:</label>
                                <input type="text" name="fullname" value="<?=$result->fullname; ?>" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Email:</label>
                                <input type="email" name="email" value="<?=$result->email; ?>" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Phone:</label>
                                <input type="number" name="phone" value="<?=$result->phone; ?>" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label>Course:</label>
                                <input type="text" name="course" value="<?=$result->course; ?>" class="form-control">
                            </div>

                            <div class="mb-3">
                                <button type="submit" name="update_student-btn" class="btn btn-primary">Update</button>
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