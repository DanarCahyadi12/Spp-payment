<?php
include(dirname(__DIR__) . "../Class/Data.class.php");
include(dirname(__DIR__) . "../Class/Massage.class.php");
include(dirname(__DIR__) . "../Class/Session.class.php");                               
$session = new Session();       
$massage = new Massage();
class ProfileController extends Data{

public function GetFileName(){ #Function for making  folder name for user
    $id  = $this->GetIdStudent();
    return "$id";
}   

public function SettingProfile($fname,$fsize,$ftmp,$ftype,$fpath,$ext){
            global $massage,$session;
            $exten = array("jpg", "png", "jpeg");
            foreach($exten as $exts){
            if(file_exists(($this->GetFileProfile($this->GetFileName().".$exts")))){ #if folder exits 
                $this->DeletePrevImg();
                $dir = "../backend/Database/image";
                move_uploaded_file($ftmp,"$dir/$fname");#move image to a director
                $fileName = $this->GetFileName();
                rename("$dir/$fname", "$dir/$fileName.$ext");
                $session->SetSessionProfile("$dir/$fileName.$ext");#Set session profile image
                $massage->SetMassage("Foto berhasil diganti");
                $dir = "../backend/Database/image";
                $fileName = $this->GetFileName();
                $this->SetPrevImage($dir."/".$fileName.".$ext");
                break;
                }
            else if(!file_exists($this->GetFileProfile($this->GetFileName().".$exts"))){ #If folder user doesnt not exits ,,then make folder for user and move file image to folder
                $dir = "../backend/Database/image";
                move_uploaded_file($ftmp,"$dir/$fname");#move image to a director
                $fileName = $this->GetFileName();
                rename("$dir/$fname", "$dir/$fileName.$ext");
                $session->SetSessionProfile("$dir/$fileName.$ext");#Set session profile image
                $massage->SetMassage("Foto berhasil diganti");
                $fileName = $this->GetFileName();
                $this->SetPrevImage($dir."/".$fileName.".$ext");
                break;
            }
        }

            
}

public function GetFileProfile($path){
        return "../backend/Database/image/$path";
}

public function DeletePrevImg(){
        $prevImg = $this->GetPrevImage();
        unlink("$prevImg");
        
    }

    public function DeletingImage(){
        global $session;
            if(file_exists($this->GetProfile())){
                unlink($this->GetProfile());
                $session->SetSessionProfile("../asset/image/user.png");
            }else{
                global $massage;
                $massage->SetMassage("Anda tidak bisa menghapus pofile ini");
            }
    }
}


?>                     