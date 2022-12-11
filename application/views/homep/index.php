<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <title>Beasiswa</title>
    <link rel="icon" type="<?= base_url();?>image/jpg/png" href="<?= base_url();?>assets/img/logologin.png">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/starter-template/">

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
<link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">
<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: center;
  width: 50%;
  padding: 150px;
  height: 670px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  color: white;
  display: table;
  clear: both;
}
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: blue;
  border: none;
  border-radius: 15px;
  box-shadow: 0 5px #6495 ;
  border-bottom-left-radius: 20px;
}

.button:hover {background-color: blue}

.button:active {
  background-color: #0008;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body>

<div class="row">
  <div class="column" style="background-color:#6495ED;">
        <h1 style="color: white;">User</h1>
    <img style="width: 100px; height: 100px;" src="assets/img/man.png">
    <p style="color: white;">Silahkan Login Sebagai User</p>
    <a class="btn btn-primary" href="<?= base_url();?>loginn">Login</a>
  </div>
  <div class="column" style="background-color:#1E90FF;">
    <h2 style="color: white;">Admin</h2>
    <img style="width: 100px; height: 100px;" src="assets/img/admin.png">
    <p style="color: white;">Silahkan Login Sebagai Admin</p>
   <form class="form-inline my-2 my-lg-0">
      <a class="btn btn-primary" href="<?= base_url();?>login">Login</a>
     
    </form>
  </div>
</div>
    <!-- Back to Top -->

</body>
</html>
