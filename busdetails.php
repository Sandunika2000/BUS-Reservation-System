<?php 
include('dbconn.php');
session_start();

if(isset($_POST['busbooking'])){
  $userid = $_SESSION['userid'];
  if(!isset($userid)){
      header('location:signin.php');
   };

   if(isset($_GET['logout'])){
      unset($userid);
      session_destroy();
      header('location:signin.php');
   };

  date_default_timezone_set("Asia/Colombo");
  $date = date('Y-m-d H:i:s P');
  $B_ID = $_POST['booking_id'];
  $reservation_date = $_POST['reservation_date'];
  $no_of_seats = $_POST['no_of_seats'];
  

  if(isset($userid) && isset($reservation_date) && $no_of_seats > 0 && !empty($reservation_date)){
    $insert_product = mysqli_query($conn, "INSERT INTO `bus_booking`(B_ID,U_ID, Date, Reservation_Date, No_Of_Seats) VALUES('$B_ID','$userid', '$date', '$reservation_date', '$no_of_seats')");
    $message[] = 'Bus Booking succesfully';
	echo "Bus Booked Succesful";
 };
    

}

if(!empty($_SESSION['userid'])){
  $userid=$_SESSION['userid'];
  $select_rows = mysqli_query($conn, "SELECT * FROM `bus_booking` where U_ID='$userid'") or die('query failed');
  $row_count = mysqli_num_rows($select_rows);
};
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
            <a type="button" href="bookingdetails.php" class="btn btn-outline-light me-2">Booked Details <span class="badge text-bg-secondary"><?php echo $row_count ?></span></a>
            <a type="button" href="logout.php" class="btn btn-primary">LogOut</a>
          </div>
        </div>
      </div>
    </header>
    <!--Main-->
<div class="container mt-5">
    <div class="container mb-2">
        <div class="text-center text-success fs-2">
        Bus Details
        </div>
        
    </div>
<div class="row ps-0 ms-0" style="width:100%">
<?php

$query = "SELECT * FROM bus_details";

$result = mysqli_query($conn, $query);
?>
<?php

if (mysqli_num_rows($result) > 0) {

  $sn=1;

  while($data = mysqli_fetch_assoc($result)) {

 ?>

  <div class="mt-3 ms-2 ps-0 pe-0" style="width:22%">

  <div class="card" style="width:100%">

  <form action="" method="post">

    <img class="card-img-top" src="<?php echo $data['Image']; ?>" alt="Card image" style="width:100%">

    <div class="card-body pt-1 pb-1 bg-white">
    <div class="row">
        <div class="col pe-0 ps-0 bg-white">
            <input type="hidden" name="booking_id" value="<?php echo $data['ID']; ?>">
			<p class="mt-1 card-text small text-center bg-white fw-bolder" name="busid"><?php echo $data['ID']; ?></p>
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
        <div class="col bg-white"></div>
    </div>
    <div class="row mt-2 bg-white">
        <div class="col-12">
            <label for="reservation_date" class="form-label">Reservation Date:</label>
            <input type="date" class="form-control" id="reservation_date" name="reservation_date" >
        </div>
        <div class="col-12 mt-2">
            <label for="no_of_seats" class="form-label">Number of Seats:</label>
            <input type="number" class="form-control" id="no_of_seats" name="no_of_seats" min="1" required>
        </div>
        <div class="text-center bg-white">
            <button type="submit" name="busbooking" class="btn border-2 btn-white text-primary border border-primary btn-sm pt-0 rounded-5" style="height:30px;width: 90%;font-size:14px;"><strong class="bg-transparent">Booking Now</strong></button> 
        </div>
    </div>
</div>

     </div>

     </form>

  </div>

 <?php

  $sn++;}} else { ?>

    <tr>

     <td colspan="8">

     <div class="alert alert-warning text-center">

    <strong class="bg-transparent">No Bus Available!!!</strong>

  </div>

        </td>

    </tr>

 <?php } ?>

 </div>
</div>
    <!--End Main-->
    
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