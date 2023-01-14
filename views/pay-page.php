<?php 

include(dirname(__DIR__) . '../backend/OOP/View/payment.view.php');
$profile = new Profile();
$profile->IsDefaultProfile();
$pay->PayMonth();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start pay</title>
    <link rel="stylesheet" href="../custom.css" type="text/tailwindcss">
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
          <img src="<?php echo $profile->GetProfile();?>" />
        </div>
      </label>
      <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
        <li><a class="" href="profile.php">Profile</a></li>
        <li><a href="../backend/OOP/Class/Logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</div>


<div class="contaier m-auto w-11/12 mt-36">
    <ul class="menu bg-white w-56 rounded-lg shadow-lg m-auto w-9/12 p-5 ">
        <div class="head mb-5 mt-3">
            <h1 class="ml-3 font-bold text-2xl">Bulan</h1>
        </div>
        <div class="content grid grid-cols-2">
            <div class="Month grid gap-2">
                <?php $display->DisplayNotCompletedMonth();
                  $display->DisplayCurrentMonth();
                ?>
                
            </div>
            <div class="operation m-auto grid gap-2">
                <?php $display->DisplayButtonPayment();
                  $display->CurrentMonthButton();?>
            </div>
        </div>
    </ul>
  </div>
  
  
  <div class="modal" id="confirm">
    <div class="modal-box">
      <h3 class="font-bold text-lg mb-5">Detail pembayaran</h3>
      <?php echo $massage->GetMassage(); ?>
    <table class="table">
      <form action="" method="post">
        <tbody class="text-left">
          <tr>
        <th>Nama :</th>
        <td> <?php echo $datas->GetName();?></td>
      </tr>
      <tr>
        <th>NIS :</th>
        <td><?php echo $datas->GetNIS();?></td>
      </tr>
      <tr>
        <th>Kelas :</th>
        <td><?php echo $datas->GetKelas()."/".$datas->GetJurusan();?></td>
      </tr>
      <tr>
        <th>Kompetensi :</th>
        <td><?php echo $datas->GetKompetensi();?></td>
      </tr>
      <tr>
        <th>Bulan :</th>
        <td><?php echo $display->GetMonthToPay(); ?></td>
      </tr>
      <tr>
        <th>Total :</th>
        <td>Rp.200,00</td>
      </tr>
    </tbody>
  </table>
  <div class="modal-action">
    <!-- <button class="btn text-white bg-black" name="submit" type="submit">KONFIRMASI</button> -->
    <?php  $display->SetConfirmButtonModal(); ?>
    <a href="/WEB SPP/views/pay-page.php" class="btn " >BATAL</a>
  </div>
</form>
  </div>
</div>

  
<!-- <script src="../config.js"></script> -->
</body>
</html>