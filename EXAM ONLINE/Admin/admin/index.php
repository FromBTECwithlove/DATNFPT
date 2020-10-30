<?php
include 'check_login.php';
include 'count_records.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin page</title>
  <meta http-equiv="refresh" content="30">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="../plugins/morris/morris.css">
  <link rel="stylesheet" href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="../plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="icon" href="../dist/img/icon.png">
  <link href="../css/main.css" rel="stylesheet" />
  <script src="js/extention/choices.js"></script>
  <script>
    const choices = new Choices('[data-trigger]',
    {
      searchEnabled: false,
      itemSelectText: '',
    });

  </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
   <?php include('header.php');?>
   <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <?php
        include ('right_menu.php');
        ?>
      </section>
    </aside>

    <div class="content-wrapper">
      <section class="content-header">
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i><b>Home page</b></a></li>
          <li class="active">OVerview</li>
        </ol>
      </section>
      <div class="row" style="border: solid 1px; max-height: 150px; margin:25px 10px 10px 10px;">
        <section class="content" style="">
          <div class="s003">
            <form>
              <div class="inner-form">
                <div class="input-field first-wrap">
                  <div class="input-select">
                    <select data-trigger="" style="width: 100%; height: auto; padding: 10px; margin-top: 10px" name="choices-single-defaul">
                      <option placeholder="">Title</option>
                      <option>New Arrivals</option>
                      <option>Sale</option>
                      <option>Ladies</option>
                      <option>Men</option>
                      <option>Clothing</option>
                      <option>Footwear</option>
                      <option>Accessories</option>
                    </select>
                  </div>
                </div>
                <div class="input-field second-wrap">
                  <input id="search" type="text" placeholder="Enter Keywords?" />
                </div>
                <div class="input-field third-wrap">
                  <button type="submit" class="btn-search"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </section>
      </div>
      <div class="row">
        <section class="col-lg-9"  style="margin-top: 50px; margin-left: 15px; ">
          <div class="box box-info">
            <div class="box-header">
              <i class="fa fa-users"></i>
              <h3 class="box-title">Manage Exam</h3>
            </div>
            <div class="box-body">
              <table class="table">
                <tbody>
                  <tr>
                    <th>EXAM ID</th>
                    <th>TITLE</th>
                    <th>START DATE</th>
                    <th>START TIME</th>
                    <th>DURATION</th>
                    <th>NO. QUESTION</th>
                    <th>FACULTY</th>
                    <th colspan="3">ACTION</th>
                  </tr>
                  <?php
                  include '../db_config/connection.php';
                  error_reporting(0);
                  $page =$_GET['page'];
                  if ($page=="" || $page=="1")
                  {
                    $page1=0;
                  }
                  else
                  {
                    $page1=($page*4)-4;
                  }
                  $sql = "SELECT * FROM exam ORDER BY exam_id DESC LIMIT $page1,4";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0)
                  {
                    while($row = $result->fetch_assoc())
                    {
                      echo "<tr><td>" . $row["exam_id"]. "</td><td>" . $row["title"]. "</td><td>" . $row["start_date"]. "</td><td>". $row['start_time']. "</td><td>". $row['duration']."</td>";
                    }
                  } else {
                    print '<div class="callout callout-success">
                    List of empty exams.!
                    <h4>
                    </div>';
                  }
                  $conn->close();
                  ?>
                  <td><a href="QUESTION">ADD</a></td>
                  <td><a href="FACULTY">ASSIGN</a></td>
                  <td><a href="assign_student.php?exam_id=<?php echo $row['exam_id']; ?>"><i class="fas fa-user-plus"></i></a></td>
                  <td><a href="edit_exam.php?exam_id=<?php echo $row['exam_id']; ?>"><i class="far fa-edit"></i></a></td>
                  <td><a href="view_exam.php?exam_id=<?php echo $row['exam_id']; ?>"><i class="fas fa-eye"></i></a></td>
                  <?php echo "</tr>" ?>
                </tbody>
              </table>
              <ul class="pagination">
                <?php
                include '../db_config/connection.php';
                $sql = "SELECT * FROM exam ORDER BY exam_id DESC";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                  print '<tr><td colspan="10">';
                  $ragents=mysqli_num_rows($result);
                  $a = $ragents/4;
                  $a = ceil($a);
                  for ($b=1;$b<=$a;$b++)
                  {
                    ?> <li class="paginate_button"><a href="index.php?page=<?php echo $b; ?>" ><?php echo $b. " "; ?></a></li><?php
                  }
                }
                $conn->close();
                ?>
              </ul>
            </div>
          </div>
        </section>
      </div>
    </div>
    <footer class="main-footer">
      <?php
      include 'footer.php';
      ?>
    </footer>
    <div class="control-sidebar-bg"></div>

    <script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>

    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="../plugins/morris/morris.min.js"></script>
    <script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../plugins/knob/jquery.knob.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="../plugins/fastclick/fastclick.js"></script>
    <script src="../dist/js/app.min.js"></script>
    <script src="../dist/js/pages/dashboard.js"></script>
    <script src="../dist/js/demo.js"></script>
    <script src="../dist/js/bieudo.js"></script>
    <script src="../bootstrap/js/jquery.flot.js"></script>
    <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
    <script src="../bootstrap/js/jquery.flot.resize.js"></script>
    <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
    <script src="../bootstrap/js/jquery.flot.pie.js"></script>
    <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->

  </body>
  </html>
