<?php

include "backend/OOP/Class/Login.class.php";
$login = new Login();
$massage = new Massage();
$login->login();

?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./custom.css" type="text/tailwindcss">
  <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.42.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../custom.css">
    <link rel="stylesheet" href="asset/fontawsome/css/all.css">
</head>
<body class="">
    <div class="container w-96 m-auto p-5 shadow-xl rounded-lg mt-24">
        <div class="content">
            <img src="https://belajar.smkn1denpasar.sch.id/pluginfile.php/1/core_admin/logocompact/300x300/1669979543/logo-lms.png" alt="" width="140px" class="m-auto mb-5">
            <h1 class="text-center font-semibold text-3xl mb-10">Sign In</h1>
          </div>
          <form action="" method="post" class="w-52 m-auto mb-10" >
            <input type="text" class="user w-full p-1 m-auto border-solid border-b-2 border-gray-400 focus:outline-none" placeholder="username" name="user">
            <div class="wrapper flex">
              <input type="password" class="password active w-full p-1 mt-5 m-auto border-solid border-b-2 border-gray-400 focus:outline-none" placeholder="password" name="pass">
              <i class="see-password fa-solid fa-eye-slash mt-[38px]"></i>
            </div>
            <button name="submit" type="submit" class="btn btn-active btn-primary mt-5 bg-primary">Login</button>
        </form>
      <p class="text-center text-red text-sm"><?php echo $massage->GetMassage(); ?></p>
    </div>

  <script src="./config.js"></script>
  <script src="index.js"></script>
</body>
</html>