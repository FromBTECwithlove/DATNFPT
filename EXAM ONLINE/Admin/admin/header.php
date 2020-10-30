 <header class="main-header">
  <a href="../admin" class="logo">
    <span class="logo-mini">Dashboard</span>
    <span class="logo-lg">DASHBOARD</span>
  </a>
  <nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?php
            include '../db_config/connection.php';
            $sql = "SELECT * FROM tinhtv_admin where username='$myusername'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0)
            {
              while($row = $result->fetch_assoc())
              {
                $avatar = $row['img_dd'];
                $gender = $row['gender'];
                $Depart = $row['department'];
                $name = $row['fullname'];
                echo '<img src="../'.$avatar.'" class="user-image" alt="'.$current_user.'" title="'.$current_user.'"/>';
              }
            }
            $conn->close();
            ?>
            <span class="hidden-xs">
              <?php
              echo"$current_user";
              echo"$name";
              ?>
            </span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header">
             <?php
             include '../db_config/connection.php';

             $sql = "SELECT * FROM tinhtv_admin where username='$myusername'";
             $result = $conn->query($sql);

             if ($result->num_rows > 0)
             {
              while($row = $result->fetch_assoc())
              {
                $avatar = $row['img_dd'];
                $gender = $row['gender'];
                $Name=$row['fullname'];
                $Depart=$row['department'];
                $DoB=$row['DoB'];
                echo '<img src="../'.$row['img_dd'].'" class="user-image" alt="'.$current_user.'" title="'.$current_user.'"/>';
              }
            }
            $conn->close();
            ?>
            <p>
              <?php
              echo"$Name";
              echo "<small>$Depart</small>";
              echo "<small>$DoB</small><br>";
              ?>
            </p>
          </li>
          <li class="user-footer">
            <div class="pull-left">
              <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <a href="logout.php" class="btn btn-default btn-flat">Sign Out</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
</header>



