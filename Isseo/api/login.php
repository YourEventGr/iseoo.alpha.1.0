<?php
include_once('config.php');
$username = $_POST['username'];
$password = $_POST['password'];

if($username=="" || $password==""){
  echo '
  <script>
      alert("Please insert username or password");
      window.location="../";
  </script>
  ';
}else{
// membuat URL GET request ke sistem A
$url1 = $base_url."service-login.php?username=".$username."&password=".$password;
$url2 = str_replace(" ", "%20", $url1);
$url = file_get_contents($url2);
$get_json = json_decode($url);

if ($get_json->result == "TRUE"){
    session_start();
    $_SESSION['login_user']= "TRUE";
    $_SESSION['username'] = $get_json->username;
    if($get_json->status == "member"){
    ?>
    <script>
        alert("Welcome");
        window.location="../index.php";
    </script>
    <?php
  }else if($get_json->status == "admin"){
  ?>
  <script>
      alert("Welcome");
      window.location="http://localhost/iseo/production/";
  </script>
  <?php
}
}
else if ($get_json->result == "FALSE") {
?>
    <script>
        alert("<?= $get_json->msgDefault;?>");
        window.location="../login.php";
    </script>
    <?php
}
}
?>
