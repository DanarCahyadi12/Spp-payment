<?php 

include(dirname(__DIR__) . '../backend/OOP/view/complete.view.php');
$profile = new Profile();
$profile->IsDefaultProfile();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.42.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../custom.css">
    <link rel="stylesheet" href="../asset/fontawsome/css/all.css">
</head>
<body>
<div class="navbar shadow-lg bg-white">
  <div class="flex-1">
    <a class=" normal-case text-sm ml-5" href="./dashboard.php">Dashboard</a>
    <a class=" normal-case text-sm ml-5" href="./pay-page.php">Mulai bayar</a>
    <a class=" normal-case text-sm ml-5" href="./history.php">Lihat riwayat</a>
    <a class=" normal-case text-sm ml-5" href="./completed.php">Ketuntasan</a>
  </div>
  <div class="flex-none">
    <div class="dropdown dropdown-end mr-5">
      <label tabindex="0" class="btn btn-ghost btn-circle avatar">
        <div class="w-10 rounded-full">
          <img src="<?php echo $profile->GetProfile();?> " />
        </div>
      </label>
      <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
        <li><a class="" href="profile.php">Profile</a></li>
        <li><a href="../backend/OOP/Class/Logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="overflow-x-auto  ">
  <table class="table w-3/5 m-auto mt-20 rounded-lg shadow-lg">
    <!-- head -->
    <thead>
      <tr>
        <th></th>
        <th>Bulan</th>
        <th>Tuntas</th>
      </tr>
    </thead>
    <tbody>
    <?php $complete->GetCompleteOrNotMonth(); ?>
    </tbody>
  </table>
</div>
  
<script src="../config.js"></script>
</body>
</html>