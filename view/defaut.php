<!DOCTYPE html>
<html>
<head lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>Online Store</title>
<link rel="stylesheet" href="./Online Store_files/pure-min.css">
<link rel="stylesheet" type="text/css" href="./Online Store_files/global.css">
</head>
<body>
<div class="wrapper">
    <header class="pure-g" id="user_identification">
      <div class="pure-u-18-24">
        <span><a href="./Online Store_files/Online Store.html">Login</a> or
        <a href="index.php?ctrl=user&action=create">Create an Account</a></span>
      </div>
    </header>
  <div class="pure-u-22-24" id="nav_wrapper">
    <nav class="pure-menu pure-menu-horizontal">
      <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="index.php" class="pure-menu-link">Home</a></li>
      </ul>
    </nav>
  </div>
    <?php
        if(isset($page)){
            require("./view/".$page.".php");
        }
    ?>
    <footer  class="pure-menu pure-menu-horizontal">
      <ul class="pure-menu-list">
        <li class="pure-menu-item"><a href="index.php" class="pure-menu-link">Message :</a></li>
      </ul>
    </footer>
  </div>
</div>
</body>
</html>