<?php
include(dirname(__DIR__ ). '../Controller/Profile.controller.php');
$nassage = new Massage();
$session= new Session();
class Profile extends ProfileController{

    private function GetDetailFile(){                                                                   
        $fname = $_FILES['fileImage']['name'];
        $fsize =$_FILES['fileImage']['size'];
        $ftmp =$_FILES['fileImage']['tmp_name'];
        $ftype=$_FILES['fileImage']['type'];
        $fFPath = $_FILES['fileImage']['full_path'];
        $pathInfo = pathinfo($fname);
        $ext = $pathInfo['extension'];
        $name = $pathInfo['filename'];
        $files = array( "fname" => $fname,"fsize" => $fsize, "ftmp" => $ftmp,"ftype" => $ftype,"fFPath" => $fFPath,"fileExt" => $ext,"name" => $name);
        return $files;
    }
    public function SetProfile(){
        global $massage;
        if (isset($_POST['setProfile'])) {
            $file = $this->GetDetailFile();
            if ($file["fname"] !== NULL || !empty($file['fname'])) {
                if ($this->CheckingExt($file["fileExt"])) {
                    $this->SettingProfile($file["fname"], $file['fsize'], $file['ftmp'], $file['ftype'], $file['fFPath'],$file["fileExt"]);
                } else {
                    $massage->SetMassage("Format gambar harus JPG,PNG,JPEG");
                }
            } else {
                $massage->SetMassage("Anda tidak memilih foto apapun");
            }
        }
    }

    private function CheckingExt($ext){
        $exts = array("jpg", "png", "jpeg");
        return in_array($ext, $exts) ? true : false;
    }
    
    public function IsDefaultProfile(){
        global $session;
        $dir = "../backend/Database/image";
        $ext = array("jpg", "png", "jpeg");
        foreach($ext as $inExt){
            if(file_exists($dir."/".$this->GetFileName().".$inExt")){
                $session->SetSessionProfile($dir."/".$this->GetFileName() . ".$inExt");
                break;
            }else{
                $session->SetSessionProfile("../asset/image/user.png");
                
            }
        }
        
    }
    
    public function DeleteImage(){
        if(isset($_POST['delete'])){
            $this->DeletingImage();
        }
    }

}

?>