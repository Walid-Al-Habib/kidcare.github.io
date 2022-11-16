<?php session_start(); ?>
<?php include "header.php"; ?>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KID CARE</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <center><h4> Find Daycares Around You </h4></center>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Enter location or Daycare name">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
        <?php 
        include "dbhinc.php";

                                    if(isset($_GET['search']))
                                    {  
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM daycare WHERE concat (name,address,region) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                          
                                                    
                                                <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  position: left;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  text-align: left;
  padding: 20px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
                                <table id="customers" bgcolor="lightblue">
                                <tr>
                                    <th>Daycare Name</th>
                                    <th>Class</th>
                                    <th>Curriculum</th>
                                    <th>Phone</th>
                                    <th>Region</th>
                                    <th>Monthly Fee</th>
                                    <th>Admission Fee</th>
                                   
                                    <th>Address</th>
                                    <th>View in Gmap</th>
                                
                                </tr>
                            <tbody>
                                                <tr>
                                                    <td><?= $items['name']; ?></td>
                                                    <td><?= $items['class']; ?></td>
                                                    <td><?= $items['curriculum']; ?></td>
                                                    <td><?= $items['phone']; ?></td>
                                                    <td><?= $items['region']; ?></td>
                                                    <td><?= $items['monthfee']; ?></td>
                                                    <td><?= $items['admissionfee']; ?></td>
                                               
                                                    <td><?= $items['address']; ?></td>
                                                    <td><?= $items['addressinmap']; ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>

                                                <script>alert("No result found")</script>
                                                
                                            <?php
                                        }
                                    }
                                ?>
                                </tbody>
                        </table>
                
        </section>