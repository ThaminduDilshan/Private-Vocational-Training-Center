<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VTI-Log In</title>
    <!---script files---->
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/log-in.js" type="text/javascript"></script>


    <!--css styles-->
    <link rel="stylesheet" href="css/styles_header.css">
    <link rel="stylesheet" href="css/styles_log-in.css">
    <link rel="stylesheet" href="css/styles_footer.css">

</head>
<body>

    <!--Including header file-->
    <?php include_once("inc/header.php"); ?>

    <!--navigation panel-->
    <nav class="navigate">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="courses.php">Courses</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="log-in.php" class="selected">Log In</a></li>
        </ul>
    </nav>

    <!--log in area-->
    <div id="login_base">

        <!--left panel (staff login)-->
        <div id="staff_login">
          <h2 class="panel_heading">Staff Log in</h2>
          <form action="stflogin_actionpage.php">

            <div class="image_container">
              <img src="img/login/login_staff.jfif" alt="Avatar" class="login_photo">
            </div>

            <div class="form_container">
              <label for="username">Username</label>
              <input type="text" placeholder="Enter Username" name="username" required>
              <label for="password">Password</label>
              <input type="password" placeholder="Enter Password" name="password" required>
              <label class="remember">
                <input type="checkbox" name="remember">
                Remember me
              </label>
              <button type="submit"  name="submit">Login</button>
            </div>

          </form>
        </div>

        <!--right panel (student login)-->
        <div id="student_login">
            <h2 class="panel_heading">Student Log in</h2>
            <form action="inc/validate.php" method="POST">

              <div class="image_container">
                <img src="img/login/login_student.jfif" alt="Avatar" class="login_photo">
              </div>

              <div class="form_container">
                <label for="username">Username</label>
                <input type="text" placeholder="Enter Username" name="username" required>
                <label for="password">Password</label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <label class="remember">
                  <input type="checkbox" name="remember">
                  Remember me
                </label>
                <button type="submit" name="submit">Login</button>
              </div>

            </form>
        </div>

    </div>

    <!--Include footer file-->
    <?php include_once("inc/footer.php"); ?>

</body>
</html>
