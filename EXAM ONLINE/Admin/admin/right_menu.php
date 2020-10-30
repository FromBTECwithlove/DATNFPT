<ul class="sidebar-menu">
  <li class="treeview">
    <a href="#">
      <i class="fa fa-user"></i>
      <span>STUDENT</span>
    </a>
    <ul class="treeview-menu">
      <li><a href="new_student.php"><i class="fa fa-user-plus"></i> ADD NEW A STUDENT</a></li>
      <li><a onclick="return confirm('Are you sure to delete all of student information?');" href="delete_results.php"><i class="fa fa-user-times"></i> DELETE LIST OF STUDENT</a></li>
      <li><a href="ipts.php"><i class="fa fa-upload"></i> ADD STUDENT FROM A FILE</a></li>
      <li><a href="students.php"><i class="fa fa-users"></i> MANAGE STUDENT</a></li>
      <li><a onclick="return send_mail('Do you want to send mail to student?');" href="guisbd.php"><i class="fas fa-envelope"></i> SEND MAIL TO STUDENT</a></li>
    </ul>
  </li>
  <li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-file-excel-o"></i>
        <span>EXAM</span>
      </a>
      <ul class="treeview-menu">
       <li><a href="ipdt.php"><i class="fa fa-upload"></i>ADD NEW EXAM FROM FILE</a></li>
       <li><a href="nhch.php"><i class="fa fa-upload"></i>MANAGE EXAM</a></li>
     </ul>
   </li>
   <li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-clone"></i>
        <span>FUNCTION</span>
      </a>
      <ul class="treeview-menu">
        <li><a href="dangthi.php"><i class="fa fa-circle-o-notch"></i>FUNCTION</a></li>
        <li><a href="results.php"><i class="fa fa-check"></i>FUNCTION</a></li>
        <li><a href="resultspass.php"><i class="fa fa-graduation-cap"></i>FUNCTION</a></li>
        <li><a href="resultsfail.php"><i class="fa fa-user-secret"></i>FUNCTION</a></li>
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-bar-chart"></i>
        <span>FUNCTION</span>
      </a>
      <ul class="treeview-menu">
       <li><a onclick="return confirm('Bạn muốn xuất kết quả thi nộp trung tâm đúng không?');" href="xuatkqt.php"><i class="fa fa-cloud-download"></i>FUNCTION</a></li>
     </ul>
   </li>
 </ul>