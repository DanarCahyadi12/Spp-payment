<?php
include(dirname(__DIR__) . '../backend/OOP/Class/Profile.class.php');
$massage = new Massage();
$datas = new Data();
$profile = new Profile();
if(isset($_POST["setProfile"])){
    $profile->SetProfile();
}else{
    $profile->IsDefaultProfile();
}
$profile->DeleteImage();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../custom.css" type="text/tailwindcss">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.42.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../custom.css">
    <link rel="stylesheet" href="../asset/fontawsome/css/all.css">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="navbar shadow-lg bg-white">
  <div class="flex-1">
    <a class=" normal-case text-sm ml-5" href="./dashboard.php">Dashboard</a>
    <a class=" normal-case text-sm ml-5" href="./pay-page.php">Mulai bayar</a>
    <a class=" normal-case text-sm ml-5" href="./history.php">Lihat riwayat</a>
    <a class=" normal-case text-sm ml-5" href="./completed.php">Ketuntasan</a>
  </div>
</div>        



    <div class="container p-10 grid grid-cols-[200px_minmax(900px,_1fr)_1fr] gap-10 mt-[2%] ml-[3%]">
        <div class="profile-image relative w-full overflow-hidden"> 
            <img src="<?php echo $datas->GetProfile(); ?>" class="rounded-full w-[200px] h-[195px]"/>
            <?php echo $massage->GetMassage();?>
            <div class="edit w-10 h-10 rounded-full bg-white shadow-xl flex p-3  absolute top-[50%] left-[60%] align-center">
                <form method="post" enctype="multipart/form-data" class="form">
                    <!-- <label for="inp"> <i class="fa-solid fa-pen"></i> </label><input id="inp" type="file" style="visibility:hidden;"> -->
                    <!-- The button to open modal -->
                    <label for="my-modal-5" class="fa-solid fa-pen align-center"></label>
                    
                    <!-- Put this part before </body> tag -->
                    <input type="checkbox" id="my-modal-5" class="modal-toggle" />
                    <div class="modal">
                        <div class="modal-box relative">
                        <label for="my-modal-5" class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                            <div class="modal-action grid grid-cols-1">
                            <div class="modal-action flex justify-center">
                                <input type="file" id="files" name="fileImage" class="input-file">
                                <button for="-" class="btn submit-btn" name="setProfile">Terapkan</button>
                                <button for="-" class="btn delete-btn" name="delete">Hapus profile</but>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="profile-content grid grid-cols-2 gap-5 align-center mt-10">
            <div class="col-1 self-center">
                <div class="name grid grid-cols-1 mb-7">
                    <label for="" class="text-sm ml-2">Nama</label>
                    <input type="text" disabled placeholder=" <?php echo $datas->GetName(); ?> " class="p-2 rounded-md box-border">
                </div>
                <div class="class grid grid-cols-1 mb-7">
                    <label for="" class="text-sm ml-2">Kelas</label>
                    <input type="text" disabled placeholder=" <?php echo $datas->GetKelas(); echo ' ';;echo  $datas->GetJurusan(); ?>" class="p-2 rounded-md box-border">
                </div>
                <div class="comp grid grid-cols-1 mb-7">
                    <label for="" class="text-sm ml-2">Kompetensi</label>
                    <input type="text" disabled placeholder=" <?php echo $datas->GetKompetensi(); ?>" class="p-2 rounded-md box-border">
                </div>
                <div class="logout flex align-center ml-2 mt-5">
                    <a href="../backend/OOP/Class/Logout.php" class="flex">
                        <h3 class="align-center">Logout</h3>
                        <img src="../asset/image/logout.png" alt="" class="ml-[3px]" width="20px">
                    </a>
                </div>
            </div>

            <div class="col-2 self-center">
                <div class="NIS grid grid-cols-1 mb-7">
                    <label for="" class="text-sm ml-2">Nomer Induk Sekolah</label>
                    <input type="text" disabled placeholder="<?php echo $datas->GetNIS(); ?>" class="p-2 rounded-md box-border">
                </div>
                <div class="NISN grid grid-cols-1 mb-7">
                    <label for="" class="text-sm ml-2">Nomer Induk Sekolah Nasional</label>
                    <input type="text" disabled placeholder="<?php echo $datas->GetNISN(); ?>" class="p-2 rounded-md box-border">
                </div>
                <div class="username grid grid-cols-1 mb-7">
                    <label for="" class="text-sm ml-2">Username</label>
                    <input type="text" disabled placeholder="<?php echo $datas->GetUsername(); ?>" class="p-2 rounded-md box-border">
                </div>
            </div>
        </div>
    </div>  

<script src="script.js"></script>
<script src="../config.js"></script>
</body>
</html>