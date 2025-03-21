<?php 
include('dbconn.php');
session_start();
$userid=$_SESSION['userid'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BusReserversion.lk</title>
    <link href="bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
    <header class="p-3 text-bg-dark">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
  
          <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
            <li><a href="busdetails.php" class="nav-link px-2 text-white">Booking</a></li>
          </ul>
  
          <div class="text-end">
            <a type="button" href="logout.php" class="btn btn-outline-light me-2">LogOut</a>
            </div>
        </div>
      </div>
    </header>
    <!--Main-->
    <div class="container mt-5">
        <div class="container mb-2">
            <div class="text-center text-success fs-2">
                My Booking Details
            </div>
        </div>
        <div class="row ps-0 ms-0" style="width:100%">
            <?php
           $select_rows = mysqli_query($conn, "SELECT * FROM `bus_booking` where U_ID='$userid'") or die('select_rows query failed: ' . mysqli_error($conn));
            $data1 = mysqli_fetch_assoc($select_rows);
            $Bus_ID = $data1['B_ID'];
            $query = "SELECT * FROM bus_details WHERE ID IN (SELECT B_ID FROM bus_booking WHERE U_ID='$userid')";

            $result = mysqli_query($conn, $query);
            ?>
            <?php
            if (mysqli_num_rows($result) > 0) {
                $sn = 1;

                while ($data = mysqli_fetch_assoc($result)) {
                    $booking_id = $data['ID'];
                    $booking_data_query = mysqli_query($conn, "SELECT No_of_Seats, Reservation_Date FROM bus_booking WHERE ID = '$booking_id'") or die('booking_data_query failed: ' . mysqli_error($conn));
$booking_data = mysqli_fetch_assoc($booking_data_query);
            ?>

                    <div class="mt-3 ms-2 ps-0 pe-0" style="width:22%">

                        <div class="card" style="width:100%">

                            <form action="" method="post">

                                <img class="card-img-top" src="<?php echo $data['Image']; ?>" alt="Card image" style="width:100%">

                                <div class="card-body pt-1 pb-1 bg-white">

                                    <div class="row" >

                                        <div class="col pe-0 ps-0 bg-white">
                                            <input type="hidden" name="booking_id" value="<?php echo $data['ID']; ?>">
                                            <p class="mt-1 card-text small text-center bg-white fw-bolder" name="route"><?php echo $data['Rout']; ?></p>

                                        </div>

                                    </div>

                                    <div class="row mt-1 pe-0 ps-0 text-center" style="height: 30px;">

                                        <div class="col pe-0 ps-0 bg-white" style="font-size:14px;"><span class="badge bg-primary"><?php echo $data['Start']; ?></span></div>

                                        <div class="col pe-0 ps-0 bg-white" style="font-size:14px;"><span class="badge bg-danger"><?php echo $data['End']; ?></span></div>

                                    </div>

                                    <div class="row pe-0 ps-0" style="height: 22px;">

                                        <input type="hidden" name="booking_price" value="<?php echo $data['Price']; ?>">

                                        <div class="col bg-white pe-0 ps-1 float-start text-dark" style="font-size:18px;" name="product_price"><strong class="bg-white">Rs.<?php echo $data['Price']; ?></strong></div>
                                        <?php
                                        if ($data['Price'] > 0) {
                                            $rs = 'Rs.';
                                            $price = $rs . ' ' . $data['Price'];
                                        } else {
                                            $price = "";
                                        }
                                        ?>
                                        <div class="col bg-white"></div>

                                    </div>
									<?php $booking_data = mysqli_query($conn, "SELECT * FROM bus_booking WHERE ID = '$booking_id'") or die('query failed'); ?>
									<?php $booking_data = mysqli_query($conn, "SELECT No_of_Seats, Reservation_Date FROM bus_booking WHERE ID = '$booking_id'") or die('query failed'); ?>
									<?php if (!$booking_data) {
    die('Query failed: ' . mysqli_error($conn));
}?>
									<?php $booking_data = mysqli_query($conn, "SELECT No_of_Seats, Reservation_Date FROM bus_booking WHERE ID = '$booking_id'") or die('query failed');

if (!$booking_data) {
    die('Query failed: ' . mysqli_error($conn));
}

$booking_data = mysqli_fetch_assoc($booking_data);?>
                                    <div class="row mt-2 bg-white">

                                        <div class="text-center bg-white">
                                            <p class="card-text small text-center bg-white fw-bolder">Reservation Date:
    <?php echo date('d-m-Y', strtotime($booking_data['Reservation_Date'])); ?>
</p>
<p class="card-text small text-center bg-white fw-bolder">Seats Reserved:
    <?php echo isset($booking_data['No_of_Seats']) ? $booking_data['No_of_Seats'] : 'N/A'; ?>
</p>
                                        </div>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

            <?php
                    $sn++;
                }
            } else {
            ?>

                <tr>

                    <td colspan="8">

                        <div class="alert alert-warning text-center">

                            <strong class="bg-transparent">No Bus Available!!!</strong>

                        </div>

                    </td>

                </tr>

            <?php
            }
            ?>

        </div>
    </div>
    
    <div class="container">
      <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
          <li class="nav-item"><a href="index.php" class="nav-link px-2 text-body-secondary">Home</a></li>
          <li class="nav-item"><a href="busdetails.php" class="nav-link px-2 text-body-secondary">Booking</a></li>
        </ul>
        <p class="text-center text-body-secondary">&copy; 2023 BusReserversion.lk</p>
      </footer>
    </div>
    <script src="bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>