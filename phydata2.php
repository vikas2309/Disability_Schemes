<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Physical Disability</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h4>Search by Disabilty/Scheme/Criteria/Type of benefit</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">

                            <form action="" method="GET">
                                <div class="input-group mb-3">

                                    <h1><center><a href="phydata.php" class = "btn btn-primary">Search</a></center></h1>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Disability_Type</th>
                            <th>Scheme_Name</th>
                            <th>Disability_Benefits_Criteria</th>
                            <th>Type_of_Benefits </th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $con = mysqli_connect("localhost","root","","login_sample_db");
                        $query = "SELECT Disability_Type,Scheme_Name,Disability_Benefits_Criteria,Type_of_Benefits FROM schemes ";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            foreach($query_run as $items)
                            {
                                ?>
                                <tr>
                                    <td><?= $items['Disability_Type']; ?></td>
                                    <td><?= $items['Scheme_Name']; ?></td>
                                    <td><?= $items['Disability_Benefits_Criteria']; ?></td>
                                    <td><?= $items['Type_of_Benefits']; ?></td>
                                </tr>
                                <?php
                            }
                        }
                        else
                        {
                            ?>
                            <tr>
                                <td colspan="4">Not Found</td>
                            </tr>
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<p align=right>This info is collected from various sources and internet<br>https://www.swavlambancard.gov.in/schemes</p>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
