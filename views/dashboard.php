<?php

// include(dirname(__DIR__) . '../backend/OOP/Class/Data.class.php');
include(dirname(__DIR__) . '../backend/OOP/Class/Profile.class.php');
$datas = new Data();
$profile = new Profile();
$profile->IsDefaultProfile();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../custom.css" type="text/tailwindcss">
    <script src="https://cdn.tailwindcss.com"></script>
    
<link href="https://cdn.jsdelivr.net/npm/daisyui@2.42.1/dist/full.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="navbar shadow-lg">
  <div class="flex-1">
    <a class=" normal-case text-xl ml-5">Welcome <span class="font-bold">"<?php echo $datas->GetName(); ?>"</span></a>
  </div>
  <div class="flex-none">
    <div class="dropdown dropdown-end mr-5">
      <label tabindex="0" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img src="<?php echo $datas->GetProfile(); ?>" />
        </div>
      </label>
      <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
        <li><a class="" href="profile.php">Profile</a></li>
        <li><a href="../backend/OOP/Class/Logout.class.php">Logout</a></li>
      </ul>
    </div>
  </div>
</div>

<div class="container grid grid-cols-2 p-5 mt-10 gap-10">
    <div class="start-pay relative  shadow-lg overflow-hidden rounded-lg row-span-2">
        <div class="image-start">
            <img src="../asset/image/calen1.jpg" alt="" width="600x" class="rounded-lg shadow-lg absolute bottom-px">
        </div>
        <div class="action-start absolute top-[85%] left-10 p-1  border-b-2 border-slate-500 w-48">
            <button><a href="./pay-page.php" class="grid grid-cols-2 ml-2 ">Mulai bayar <img src="../asset/image/arrow-right-solid.svg" alt="" width="13px" class="ml-2 mt-1"></a></button>
        </div>
    </div>

    <div class="not-complete shadow-lg h-40 relative rounded-lg overflow-hidden">
        <div class="image-not ">
            <img src="../asset/image/calen2.jpg" alt="" class="absolute " width="650x">
        </div>
        <div class="action-not absolute left-5 top-5 border-b-2 border-slate-500 ">
            <button><a href="history.php" class="grid grid-cols-2">Riwayat pembayaran  <img src="../asset/image/arrow-right-solid.svg" alt="" width="13px" class="ml-2  mt-1"></a></button>
        </div>
    </div>

    <div class="show-complete shadow-lg h-52 relative overflow-hidden rounded-lg">
        <div class="image-complete  ">
            <img src="../asset/image/calen3.jpg" alt="" class="absolute top-0">
        </div>
        <div class="action-complete absolute left-5 top-5 border-b-2 border-slate-500 ">
        <button><a href="" class="grid grid-cols-2">Lihat ketuntasan <img src="../asset/image/arrow-right-solid.svg" alt="" width="13px" class="ml-2 mt-1"></a></button>
        </div>
    </div>
</div>
<script src="../config.js"></script>
</body>
</html>