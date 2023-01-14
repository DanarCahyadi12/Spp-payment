<?php
include("insert.php");
$Administrator = new Person();
$Administrator->PassData();
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Adding</title>
    <link href="css/form.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.42.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../custom.css">
    <link rel="stylesheet" href="../asset/fontawsome/css/all.css">
</head>

<body class="zf-backgroundBg">
    <!-- Change or deletion of the name attributes in the input tag will lead to empty values on record submission-->
    <div class="zf-templateWidth">
        <form
        action=''
        name='form' method='POST'
        accept-charset='UTF-8' enctype='multipart/form-data' id='form'><input type="hidden" name="zf_referrer_name"
        value=""><!-- To Track referrals , place the referrer name within the " " in the above hidden input field -->
        <input type="hidden" name="zf_redirect_url"
        value=""><!-- To redirect to a specific page after record submission , place the respective url within the " " in the above hidden input field -->
        <input type="hidden" name="zc_gad"
        value=""><!-- If GCLID is enabled in Zoho CRM Integration, click details of AdWords Ads will be pushed to Zoho CRM -->
        <div class="zf-templateWrapper"><!---------template Header Starts Here---------->
        <ul class="zf-tempHeadBdr">
            <li class="zf-tempHeadContBdr">
                <h2 class="zf-frmTitle"><em>Input data siswa</em></h2>
                <p class="zf-frmDesc"></p>
                <div class="zf-clearBoth"></div>
            </li>
        </ul><!---------template Header Ends Here---------->
        <!---------template Container Starts Here---------->
        <div class="zf-subContWrap zf-topAlign">
                    <h1 class="text-xl text-center font-bold mb-5"> <?php echo $Administrator->GetMassage(); ?></h1>
                    <ul>
                        <!---------Name Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-name zf-namemedium"><label class="zf-labelName">
                                Full Name
                                <em class="zf-important">*</em>
                            </label>
                            <div class="zf-tempContDiv zf-twoType">
                                <div class="zf-nameWrapper">
                                    <span> <input type="text" maxlength="255" name="fullname" fieldType=7
                                            placeholder="" />
                                    </span>
                                    </span> </span>
                                    </span> </span>
                                    <div class="zf-clearBoth"></div>
                                </div>
                                <p id="Name_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li><!---------Name Ends Here---------->
                        <!---------Number Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
                                NIS
                                <em class="zf-important">*</em>
                            </label>
                            <div class="zf-tempContDiv">
                                <span> <input type="number" name="NIS" checktype="c2" value="" maxlength="18"
                                        placeholder="" /></span>
                                <p id="Number_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li><!---------Number Ends Here---------->
                        <!---------Dropdown Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
                                Kelas
                                <em class="zf-important">*</em>
                            </label>
                            <div class="zf-tempContDiv">
                                <select class="zf-form-sBox" name="class" checktype="c1">
                                    <option selected="true" value="-Select-">-Select-</option>
                                    <option name="class" value="X">X</option>
                                    <option name="class" value="XI">XI</option>
                                    <option name="class" value="XII">XII</option>
                                </select>
                                <p id="Dropdown_error" class="zf-errorMessage" style="display:none;">Invalid  value</p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li><!---------Dropdown Ends Here---------->
                        <!---------Dropdown Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
                                Jurusan
                                <em class="zf-important">*</em>
                            </label>
                            <div class="zf-tempContDiv">
                                <select class="zf-form-sBox" name="jurusan" checktype="c1">
                                    <option selected="true" value="-Select-">-Select-</option>
                                    <option name="jurusan" value="BKP 1">BKP 1</option>
                                    <option name="jurusan" value="BKP 2">BKP 2</option>
                                    <option name="jurusan" value="DPIB 1">DPIB 1</option>
                                    <option name="jurusan" value="DPIB 2">DPIB 2</option>
                                    <option name="jurusan" value="RPL 1">RPL 1</option>
                                    <option name="jurusan" value="RPL 2">RPL 2</option>
                                    <option name="jurusan" value="RPL 3">RPL 3</option>
                                    <option name="jurusan" value="MM 1">MM 1</option>
                                    <option name="jurusan" value="MM 2">MM 2</option>
                                    <option name="jurusan" value="MM 3">MM 3</option>
                                    <option name="jurusan" value="TKJ 1">TKJ 1</option>
                                    <option name="jurusan" value="TKJ 2">TKJ 2</option>
                                    <option name="jurusan" value="TKJ 3">TKJ 3</option>
                                    <option name="jurusan" value="TAV">TAV</option>
                                    <option name="jurusan" value="TITL">TITL</option>
                                    <option name="jurusan" value="TPTU">TPTU</option>
                                    <option name="jurusan" value="TBSM 1">TBSM 1</option>
                                    <option name="jurusan" value="TBSM 2">TBSM 2</option>
                                    <option name="jurusan" value="TBSM 3">TBSM 3</option>
                                    <option name="jurusan" value="TKRO 1">TKRO 1</option>
                                    <option name="jurusan" value="TKRO 2">TKRO 2</option>
                                    <option name="jurusan" value="PM">PM</option>
                                </select>
                                <p id="Dropdown_error" class="zf-errorMessage" style="display:none;">Invalid  value</p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li><!---------Dropdown Ends Here---------->
                        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
                                Kompetensi Keahlian
                                <em class="zf-important">*</em>
                            </label>
                            <div class="zf-tempContDiv">
                                <select class="zf-form-sBox" name="kompetensi" checktype="c1">
                                    <option selected="true" value="-Select-">-Select-</option>
                                    <option name="kompetensi" value="Bisnis Kontruksi dan Properti">Bisnis Kontruksi dan Properti</option>
                                    <option name="kompetensi" value="Desain Pemodelan dan Indormasi Bangunan">Desain Pemodelan dan Indormasi Bangunan</option>
                                    <option name="kompetensi" value="Rekasa Perangkat Lunak">Rekasa Perangkat Lunak</option>
                                    <option name="kompetensi" value="Multimedia">Multimedia</option>
                                    <option name="kompetensi" value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                                    <option name="kompetensi" value="Teknik Audio Video">Teknik Audio Video</option>
                                    <option name="kompetensi" value="Teknik Instalasi Tenaga Listrik">Teknik Instalasi Tenaga Listrik</option>
                                    <option name="kompetensi" value="Teknik Pendingin Tata Udara">Teknik Pendingin Tata Udara</option>
                                    <option name="kompetensi" value="Tekknik Bisnis Sepeda Motor">Tekknik Bisnis Sepeda Motor</option>
                                    <option name="kompetensi" value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
                                    <option name="kompetensi" value="Teknik Pemesinan">Teknik Pemesinan</option>
                                </select>
                                <p id="Dropdown_error" class="zf-errorMessage" style="display:none;">Invalid  value</p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li><!---------Dropdown Ends Here---------->
                        <!---------Single Line Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
                                NISN
                            </label>
                            <div class="zf-tempContDiv">
                                <span> <input type="number" name="NISN" checktype="c1" value="" maxlength="255"
                                        fieldType=1 placeholder="" /></span>
                                <p id="SingleLine_error" class="zf-errorMessage" style="display:none;">Invalid value</p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li><!---------Single Line Ends Here---------->
                        <!---------Single Line Starts Here---------->
                        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
                                Username
                                <em class="zf-important">*</em>
                            </label>
                            <div class="zf-tempContDiv">
                                <span> <input type="text" name="username" checktype="c1" value="" maxlength="255"
                                        fieldType=1 placeholder="" /></span>
                                <p id="SingleLine1_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li><!---------Single Line Ends Here---------->
                        <li class="zf-tempFrmWrapper zf-small"><label class="zf-labelName">
                                Password
                                <em class="zf-important">*</em>
                            </label>
                            <div class="zf-tempContDiv">
                                <span> <input type="text" name="password" checktype="c1" value="" maxlength="255"
                                        fieldType=1 placeholder="" /></span>
                                <p id="SingleLine1_error" class="zf-errorMessage" style="display:none;">Invalid value
                                </p>
                            </div>
                            <div class="zf-clearBoth"></div>
                        </li><!---------Single Line Ends Here---------->
                    </ul>
                </div><!---------template Container Starts Here---------->
                <ul>
                    
                    <li class="zf-fmFooter"><button class="zf-submitColor" name="submit">Submit</button></li>
                </ul>
            </div><!-- 'zf-templateWrapper' ends -->
        </form>
    </div><!-- 'zf-templateWidth' ends -->
    <!-- <script type="text/javascript">var zf_DateRegex = new RegExp("^(([0][1-9])|([1-2][0-9])|([3][0-1]))[-](Jan|Feb|Mar|Apr|May|Jun|Jul|Aug|Sep|Oct|Nov|Dec|JAN|FEB|MAR|APR|MAY|JUN|JUL|AUG|SEP|OCT|NOV|DEC)[-](?:(?:19|20)[0-9]{2})$");
        var zf_MandArray = ["Name_First", "Name_Last", "Number", "Dropdown", "PhoneNumber_countrycode", "Radio", "Radio1", "SingleLine1", "Radio2", "SingleLine2", "SingleLine3", "Radio3"];
        var zf_FieldArray = ["Name_First", "Name_Last", "Number", "Dropdown", "PhoneNumber_countrycode", "Radio", "SingleLine", "Radio1", "SingleLine1", "Radio2", "SingleLine2", "SingleLine3", "Radio3", "SingleLine4"];
        var isSalesIQIntegrationEnabled = false;
        var salesIQFieldsArray = [];</script> -->
</body>

</html>