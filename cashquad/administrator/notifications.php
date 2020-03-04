<?php require 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="robots" content="index, follow" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=7">
  <title>Notifications</title>
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
<h2 class="title is-light is-semibold has-text-centered is-spaced has-space-up">Dashbooard notifications</h2>
            </div>
          </div>
          <div class="level-right">
            <div class="level-item">
<!-- ............... -->
            </div>
          </div>
        </div>

<div class="has-padding-left">
 <form method="post" action="submit_notifications.php">
 <h1 class="title is-4 is-light">Type message and send</h1>
  <textarea onkeyup="textAreaAdjust(this)" class="textarea" name="message" placeholder="Message" required></textarea><br> 
  <button type="submit" class="button is-primary">SEND</button>
 </form> 
 <div class="divider"></div>
<?php
require '../database/dbconfig.php';
$sqlreminders=mysqli_query($con,"SELECT * FROM tbl_notifications WHERE id>0 ORDER BY id desc");
if (mysqli_num_rows($sqlreminders)>0) {
?>
 <article class="message is-info">
  <div class="message-body">
<table class="table is-bordered is-stripped is-fullwidth is-bordered">
<thead>
<i class="fa fa-bell"></i> Reminders<br><br>
</thead> 
<tbody>
  <?php
while ($rowrem=$sqlreminders->fetch_assoc()) {
$message=$rowrem['message'];
$id=$rowrem['id'];
?>
<tr>
  <td>* <?php echo $message; ?></td>
  <td><a class="button is-warning" href="delete_notifications.php?id=<?php echo $id; ?>">DELETE</a></td>
</tr>
<?php
}
  ?>
</tbody> 
</table>
</div>
</article>
<?php
}else{
?>
 <article class="message is-info">
  <div class="message-body">
 <i class="fa fa-bell"></i> No new reminders
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
    <script type="text/javascript">
    function textAreaAdjust(o) {
  o.style.height = "1px";
  o.style.height = (10+o.scrollHeight)+"px";
}
</script> 

</body>
</html>