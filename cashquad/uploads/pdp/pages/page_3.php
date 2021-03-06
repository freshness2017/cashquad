<?php include('top.php');
include('php/record_config.php');
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PDP | Planning</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('nav.php'); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Planning</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         <i class="fa fa-arrow-right"></i> Thematic Area <i class="fa fa-arrow-right"></i> Key Intervantion <i class="fa fa-arrow-right"></i> Activity
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-3">
                                    
                                </div>
                                <div class="col-lg-6">
                                    <div class="table-responsive">
                                      <table class="table">
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                             <th>
                                                Activity Code
                                            </th>
                                            <th>
                                                Activity
                                            </th>
                                        </tr>
                                        <tr>
                                            <td><?php echo $aid; ?></td>
                                            <td><?php echo $activity_code; ?></td>
                                            <td><?php echo $activity; ?></td>
                                        </tr>
                                      </table>
                                    </div>
                                </div>
                                 <div class="col-lg-3">
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>



            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Thematic Area : <?php echo $thematic_area; ?> <i class="fa fa-arrow-right"></i> Key Interventions : <?php echo $key_intervention; ?> <i class="fa fa-arrow-right"></i> Activity : <?php echo $activity; ?> <i class="fa fa-arrow-right"></i>  <span style="font-weight: bold;">Add Budget</span>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-2">
                                   <span style="font-weight: bold;">Add Activity</span>
                                </div>
                                <div class="col-lg-10">
                                    <form role="form" method="post" action="">
                                         <p>
                                <?php if ($_SESSION['empty']) {
                                    
                               ?>
                                <div class="alert alert-danger alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <strong><?php echo $_SESSION['empty']; ?></strong> 
                                </div>
                                <?php
                                 }
                                 ?>
                            </p>


                                        <div class="row">
                                          <div class="col-sm-4">
                                            <div class="form-group" style="display: none;">
                                            <label>Record Num</label>
                                            <input class="form-control" type="text" name="record_num" placeholder="Enter Key Intervention" value="<?php echo $record_num; ?>" readonly>
                                           
                                        </div>

                                        <div class="form-group" style="display: none;">
                                            <label>Record Nu</label>
                                            <input class="form-control" type="text" name="record_nu" placeholder="Enter Key Intervention" value="<?php echo $record_nu; ?>" readonly>
                                           
                                        </div>

                                        <div class="form-group" style="display: none;">
                                            <label>Record Nu</label>
                                            <input class="form-control" type="text" name="record_n" placeholder="" value="<?php echo $record_n; ?>" readonly>
                                           
                                        </div>


                                        <div class="form-group">
                                            <label>Budget</label>
                                            <input class="form-control" type="text" name="budget" placeholder="Enter Budget">
                                           
                                        </div>
                                              
                                          </div>
                                          <div class="col-sm-4">
                                             <div class="form-group">
                                            <label>Pax/Unit</label>
                                            <input class="form-control" type="number" name="pu" placeholder="Enter Pax/Unit">
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Number of days</label>
                                            <input class="form-control" type="number" name="no_days" placeholder="Enter Number of days">
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Cost Per Unit </label>
                                            <input class="form-control" type="number" name="cpu" placeholder="Enter Cost Per Unit">
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Freq. per Quarter</label>
                                            <input class="form-control" type="number" name="fpq" placeholder="Enter Freq. per Quarter">
                                           
                                        </div>
                                              
                                          </div>


                                          <div class="col-sm-12">
                                               <button type="submit" name="add_budget" class="btn btn-default">Add Budget</button>
                                       <!--  <button type="reset" class="btn btn-default">Reset Button</button> -->
                                          </div>
                                        </div>
                                        

                                       
                                        
                                       
                                    </form>
                                </div>
                                 
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         <i class="fa fa-arrow-right"></i> Budgets for <?php echo $activity; ?>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-1">
                                    
                                </div>
                                <div class="col-lg-10">
                                    <div class="table-responsive">
                                      <table class="table">
                                        <tr>
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                            Budget Code
                                            </th>
                                            <th>
                                                Budget
                                            </th>
                                            <td>Pax/Unit</td>
                                            <td>No Days</td>
                                            <td>Cost/Unit</td>
                                            <td>Frequency/1/4</td>
                                        </tr>
                                         <?php 

      $sql = "SELECT * FROM budget_tbl WHERE record_n='$record_n' ORDER BY bid DESC ";
      $key_intervention = mysqli_query($conn,$sql);
    if (mysqli_num_rows($key_intervention) > 0) 
         {
            ?>
                <?php
        while($data = mysqli_fetch_array($key_intervention)) {
                    ?>
                                   
                                        <tr class="odd gradeX">
                                        <td><?php echo $data['bid']; ?></td>
                                        <td><?php echo $data['budget_code']; ?></td>
                                        <td><?php echo $data['budget']; ?></td>
                                        <td><?php echo $data['pax_unit']; ?></td>
                                        <td><?php echo $data['number_of_days']; ?></td>
                                        <td><?php echo $data['cost_per_unit']; ?></td>
                                        <td><?php echo $data['frequency_per_quater']; ?></td>
                                       
                                        <td class="center">

                                           <button class="btn btn-danger delete" id="<?php echo $data['bid']  ?>"> <i class="fa  fa-trash-o text-red"></i></button>
                                           
                                        </td>
                                    </tr>
                                   

                                      <?php 
                                            }

                    ?>
<?php
        }
          else
               {
                echo "THERE ARE NO RECORDS";
              }

         
?>
                                      </table>
                                    </div>
                                </div>
                                 <div class="col-lg-1">
                                    
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

 <script type="text/javascript">
$(document).ready(function(){
  
 // Delete  button click event listener
 $('.delete').click(function(){
  var el = this;
  var id = this.id;
   document.body.style.color="black";
 $.confirm({
    title: 'Confirm Action',
    content: 'Are You Sure You Want to Delete This File?',
    type: 'red',
    typeAnimated: true,
    buttons: {
        Yes: {
            text: 'Yes',
            btnClass: 'btn-red',
            action: function(){
                // AJAX Request
            $.ajax({
             url: 'php/delete.php',
             type: 'GET',
             data: { bid: id},
             success: function(response){
                
              // Removing row from HTML Table
              $(el).closest('tr').css('background','tomato');
              $(el).closest('tr').fadeOut(800, function(){ 
               $(this).remove();
              });

             }
            });
            }
        },
        No: function () {
        }
    }
});


 });

});
</script>

</body>

</html>
