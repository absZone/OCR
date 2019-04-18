<?php require('../scripts/db.php'); ?>
<div class="row">

    <!-- Profile Info and Notifications -->
    <div class="col-md-6 col-sm-8 clearfix">

        <ul class="user-info pull-left pull-none-xsm">

            <!-- Profile Info -->
            <li class="profile-info dropdown">
                <!-- add class "pull-right" if you want to place this from right -->

                <br><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="../assets/images/abslogo.png" alt="" class="img-circle" width="44" />
                    Welcome,&nbsp;
                    <?php if ($_SESSION['type'] == 'student') {
                        $userId = $_SESSION['key'];
                        $query = "select * from student WHERE studentId='$userId'";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row["firstName"]." ".$row["lastName"];
                            }
                        }
                    } else if ($_SESSION['type'] == 'faculty') {
                        $userId = $_SESSION['key'];
                        $query = "select * from faculty WHERE facultyId='$userId'";
                        $result = mysqli_query($con, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo $row["firstName"]." ".$row["lastName"];
                            }
                        }
                    } else {
                        echo 'Admin';
                    }

                    ?>
                </a>
            </li>

        </ul>

    </div>


    <!-- Raw Links -->
    <div class="col-md-6 col-sm-4 clearfix hidden-xs">

        <ul class="list-inline links-list pull-right">

            <li class="sep"></li>

            <li class="sep"></li>

            <li>
                <a href="../scripts/logout.php">
                    Log Out <i class="entypo-logout right"></i>
                </a>
            </li>
        </ul>

    </div>

</div>