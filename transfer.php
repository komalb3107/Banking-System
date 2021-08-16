<?php
    include 'config.php';    # including config
    if(isset($_POST['submit']))
    {
        $from = $_GET['Account_no'];
        $to = $_POST['to'];
        $amount = $_POST['amount'];

        $sql = "SELECT * from customer where Account_no=$from";
        $query = mysqli_query($conn,$sql);
        $sql1 = mysqli_fetch_array($query); 
        
        $sql = "SELECT * from customer where Account_no=$to";
        $query = mysqli_query($conn,$sql);
        $sql2 = mysqli_fetch_array($query);
 
        if (($amount<0) || ($amount == 0) )
        {
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("","Invalid Value for amount of money to be transferred","error");';
            echo '}, 100);</script>';
        }

        else if($amount > $sql1['Balance']) 
        {
            echo '<script type="text/javascript">';
            echo 'setTimeout(function () { swal("","Insufficent Balance Please Check Your Balance","error");';
            echo '}, 100);</script>';
        }

        else 
        {
                // deducting transferring amount from sender's account    
                $newBalance = $sql1['Balance'] - $amount;
                $sql = "UPDATE customer set Balance=$newBalance where Account_no=$from";
                mysqli_query($conn,$sql);

                // adding transferred money to receiver's account
                $newBalance = $sql2['Balance'] + $amount;
                $sql = "UPDATE customer set Balance=$newBalance where Account_no=$to";
                mysqli_query($conn,$sql);
                    
                $sender = $sql1['Name'];
                $receiver = $sql2['Name'];
                $sql = "INSERT INTO transfer_history(`sender`, `receiver`, `amount`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query)
                {
                    echo '<script>
                        setTimeout(function () {
                            swal({
                                title: "Success!",
                                text: "Transfer Successful",
                                type: "success",
                            }, function () {
                                window.location.href = "customer.php";
                            });
                        }, 100);
                    </script>';
        }

                $newBalance= 0;
                $amount =0;
            }   
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/A.animate.css+flaticon.css+tiny-slider.css+glightbox.min.css+aos.css+datepicker.min.css+style.css,Mcc.z2wXGN8Aor.css.pagespeed.cf.rkzq6iDOYd.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <title>Basic Banking System</title>
         
        <style type="text/css">  
            #back {
                background:url('img/img60.jpg') center center/cover no-repeat ;
                height:100vh;
            }     
            .py-2 {
                font-weight: bolder;
                font-size: 15;
                text-align:center;
            }
            #head{
                text-align:center;
                opacity: 1;
                background-color:white;
            }
            #data{
                background-color:white;
                opacity: 0.6;
                color:black;
                text-align:center;
                font-weight:600;
            }
            #data:hover {
                background-color:white;
                color: black;
                opacity: 1;
            }
            h2{
                color:white;
            }
            button {
                border: none;
                background: #00FFFF;
                margin-top:-10px;
                border-radius: 15px;
                padding: 10px ;
                width: 150px;
                font-size: 15px;
                font-weight:600;
                transition-duration: 0.4s;
                cursor: pointer;
                text-decoration: none;
            }
            .button:hover {
                background: #06d2d2;
                opacity: 1
            }
            .text{
                color:white;
                font-size:20px;
            }
        </style>
    </head>

    <body id="back">
    <nav class=" navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid d-flex">
            <a class="navbar-brand" href="#">Bank of Intern</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" collapse navbar-collapse  justify-content-end " id="navbarSupportedContent">
                <ul class=" navbar-nav mb-2 mb-lg-0 ">
                    <li class="nav-item ">
                        <a class="nav-link active px-2" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active px-2" href="transfer_history.php">Transfer History</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active px-2" href="customer.php">Our Customers</a>
                    </li>
                </ul>
                <form class="d-flex">
                </form>
            </div>
        </div>
    </nav>
        <div class="container">
            <br>
            <br>
            <br>
            <h2 class="text-center pt-2" style="font-family: emoji;" ><b>CUSTOMER DETAILS</b>
            </h2>
            <?php
                include 'config.php';
                $sid=$_GET['Account_no'];
                $sql = "SELECT * FROM  customer where Account_no=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
                <form method="post" name="tcredit" class="tabletext"><br>
                    <div>
                        <table class="table table-striped table-condensed table-bordered">
                        <thead class="theading">
                                <tr id="head">
                                    <th class="text-center py-2">Account_no</th>
                                    <th class="text-center py-2">Name</th>
                                    <th class="text-center py-2">Phone</th>
                                    <th class="text-center py-2">Balance</th>
                                </tr>
                            </thead>
                            <tr id="data">
                                <td >
                                    <?php echo $rows['Account_no'] ?>
                                </td>
                                <td >
                                    <?php echo $rows['Name'] ?>
                                </td>
                                <td >
                                    <?php echo $rows['Phone_no'] ?>
                                </td>
                                <td >
                                    <?php echo $rows['Balance'] ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <br><br><br>
                    <h2 class="text-center" style="font-family: emoji;"><b>TRANSFER MONEY</b></h2>
                    <label  class="text">Transfer to:</label>
                    <select name="to" class="form-control" required>
                <option value="" disabled selected>Select Customer To Transfer</option>
                <?php
                include 'config.php';
                $sid = $_GET['Account_no'];
                $sql = "SELECT * FROM customer where Account_no!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)                          # If none selected
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['Account_no'];?>">

                    Account Number:
                    <?php echo $rows['Account_no'] ;?>&nbsp;&nbsp;Name:
                    <?php echo $rows['Name'] ;?>&nbsp;&nbsp; Balance: Rs.
                    <?php echo $rows['Balance'] ;?>

                </option>
                <?php 
                } 
            ?>
                <div>
            </select>
                    <br>
                    <br>
                    <label class="text">Amount:</label>
                    <input type="number" class="form-control" name="amount" placeholder="Enter Amount to be transferred" required>
                    <br><br>
                    <div class="text-center">
                        <button class="button" name="submit" type="submit" id="myBtn">Transfer Money</button>
                    </div>
                </form>
        </div>
        <div><br></div>

        </div>
        <!-- /.container -->

        <!-- JavaScript -->
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js " integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj " crossorigin="anonymous "></script>
    </body>

    </html>
</html>