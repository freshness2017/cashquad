<?php require 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="robots" content="index, follow" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=7">
  <title>Withdrawal requests</title>
        <link rel="shortcut icon" href="../favicon.ico" />
        
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="../css/bulma.css">
        <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/core.css">
        <!--Libraries-->
        <link rel="stylesheet" href="../assets/fonts/cryptofont/css/cryptofont.min.css">
        <link rel="stylesheet" href="../assets/js/modalvideo/modal-video.min.css">
        <link rel="stylesheet" href="../assets/js/aos/aos.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css"/>
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/custom.js"></script>
</head>

<body>
        <div class="pageloader is-theme"></div>
        <div class="infraloader is-active"></div> 


<section class="hero is-fullheight has-big-dark-gradient"> 
  <header class="hero">
    <div class="hero-head">
<!-- HEADER NAV -->
<?php
include 'header.php';
?>
<!-- HEADER NAV -->
    </div>
  </header>

  <div class="wrapper">
    <div class="columns">
      <aside style="padding-top:20px" class="column is-2 aside section is-medium is-dark">
<!-- MENU NAV -->
<?php
include 'menudetails_left.php';
?>
<!-- MENU NAV -->
      </aside>

      <main class="column main">

<!-- BREADCRUMB GOES HERE -->

        <div class="level">
          <div class="level-left">
            <div class="level-item">
<h2 class="title is-light is-semibold has-text-centered is-spaced has-space-up">Withdrawal requests</h2>
            </div>
          </div>
          <div class="level-right">
            <div class="level-item">
<!-- ............... -->
            </div>
          </div>
        </div>

<div class="has-padding-right">
<?php
require '../database/dbconfig.php';
$sqlwith=mysqli_query($con,"SELECT * FROM tbl_transaction WHERE id>0 AND transaction_type='2' AND transaction_status='1' ORDER BY id ASC");
if (mysqli_num_rows($sqlwith)>0) {
?>
<table class="table is-bordered is-stripped is-fullwidth">
  <thead>
    <th>TRANSACTION ID</th>
    <th>AMOUNT</th>
    <th>EMAIL</th>
    <th>BTC INFO</th>
    <th>ACTION</th>
  </thead>
  <tbody>
<?php
while ($rowwith=$sqlwith->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $rowwith['id']; ?></td>
    <td><?php echo $rowwith['transaction_amount']; ?></td>
    <td>
      <?php
      $user=$rowwith['user_id'];
      $id=$rowwith['id'];
$sqluser=mysqli_query($con,"SELECT * FROM tbl_users WHERE id='$user'");
while ($rowuser=$sqluser->fetch_assoc()) {
$email=$rowuser['email'];
$bitcoin_detail=$rowuser['bitcoin_detail'];
echo $email;
}
      ?>
    </td>
    <td>
      <?php echo $bitcoin_detail; ?>
    </td>
    <td>
      <a class="button is-success" href="process_withdrawal.php?id=<?php echo $id; ?>&status=2">PROCESS</a>&nbsp;&nbsp;
      <a class="button is-danger" href="process_withdrawal.php?id=<?php echo $id; ?>&status=3">CANCEL</a>
    </td>
  </tr>
  <?php
}
?>
  </tbody>
</table>
<?php
}else{
?>
<article class="message is-warning">
  <div class="message-body">
No withdrawal requests
  </div>
</article>
<?php
}
?>  
</div>

      </main>
    </div>
  </div>

<!-- graph -->
</div>

        <!-- Core js -->
        <script src="../assets/js/app.js"></script>
        <!--script src="assets/js/particlesjs/particles.min.js"></script-->
        <script src="../assets/js/aos/aos.js"></script>
        
        
        <script src="../assets/js/timer.js"></script>
        <script src="../assets/js/timeline.js"></script>
        <script src="../assets/js/roadmap.js"></script>
        <script src="../assets/js/main.js" defer="defer"></script>   

</body>
</html>