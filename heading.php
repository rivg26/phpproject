<?php
    require_once 'includes/functions.inc.php';
    require_once 'includes/dbh.inc.php';
    $conn = OpenCon();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $text = getResult($conn,$id);
        $firstName = $text['fname'];
        $middleName = $text['mname'];
        $lastName = $text['lname'];
        $suffix = $text['suffix'];
        $dob = $text['birthday'];
        $gender = $text['gender'];
        $nationality = $text['nationality'];
        $civilstatus = $text['civil_status'];
        $department = $text['department'];
        $designation = $text['designation'];
        $deptStatus = $text['dept_status'];
        $empStatus = $text['emp_status'];
        $paydate = $text['paydate'];
        $empNumber = $text['emp_number'];
        $contactNumber = $text['contact_number'];
        $email = $text['email'];
        $socialMedia = $text['social_media'];
        $socialMediaID = $text['social_media_id'];
        $address1 = $text['address1'];
        $address2 = $text['address2'];
        $city = $text['city'];
        $state = $text['states'];
        $country = $text['country'];
        $zipCode = $text['zip'];
        $picPath = $text['picpath'];
    }
    else{
        $firstName = null;
        $middleName = null;
        $lastName = null;
        $suffix = null;
        $dob = null;
        $gender = null;
        $nationality = null;
        $civilstatus = null;
        $department = null;
        $designation = null;
        $deptStatus = null;
        $empStatus = null;
        $paydate = null;
        $empNumber = null;
        $contactNumber = null;
        $email = null;
        $socialMedia = null;
        $socialMediaID = null;
        $address1 = null;
        $address2 = null;
        $city = null;
        $state = null;
        $country = null;
        $zipCode = null;
        $picPath = null;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/erp1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Application Form<Center></Center></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <div class="container bg-white rounded shadow mt-4 p-5">
        <p class="headone">Personal Information</p>
        <div class="row">

            <div class="col-md-4 xs-12">
            <form action="includes/upload.inc.php" method = "post" id="pic-upload" class="a-form" enctype="multipart/form-data">
                <div class="row" id ="pic-box" >
                <img src="pictures/noimage.jpg" class ="imageclass" alt="" id ="imagesrc">
                </div>
                <div class="row mt-3 w-75 ms-5">
                    <input type="file" class="form-control border-0 uploadfile"  id="inputGroupFile02" name="uploadfile">
                </div>
            </form>
            </div>

            <div class="col-md-8 xs-12">

            <form action="includes/send.inc.php" method = "post">
                <div class="row">
                    <div class="col-md-3 sm-12">
                        <label for="formGroupExampleInput">First Name</label>
                        <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name = "firstname" value="<?= $firstName ?>" >
                    </div>
                    <div class="col-md-3 sm-12">
                        <label for="formGroupExampleInput">Middle Name</label>
                        <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name = "middlename"  value="<?= $middleName ?>" >
                    </div>
                    <div class="col-md-3 sm-12">
                        <label for="formGroupExampleInput">Last Name</label>
                        <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name = "lastname"  value="<?= $lastName ?>" >
                    </div>
                    <div class="col-md-3 sm-12">
                        <label for="formGroupExampleInput">Suffix</label>
                        <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name = "suffix"  value="<?= $suffix ?>">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-3 sm-12">
                        <label for="formGroupExampleInput">Date of Birth</label>
                        <input type="date" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name = "dob"  value="<?= $dob ?>" >
                    </div>
                    <div class="col-md-3 sm-12">
                        <label for="formGroupExampleInput">Gender</label>
                        <select class="form-select" aria-label="Default select example" name = "gender" id ="gender"  value="<?= $gender ?>">
                            <option selected>Select One</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                          </select>
                    </div>
                    <div class="col-md-3 sm-12">
                        <label for="formGroupExampleInput">Nationality</label>
                        <select class="form-select" aria-label="Default select example" id = "nationality" name = "nationality"  value="<?= $nationality ?>">
                            <option value="">-- select one --</option>
                            <option value="Afghan">Afghan</option>
                            <option value="Albanian">Albanian</option>
                            <option value="Algerian">Algerian</option>
                            <option value="American">American</option>
                            <option value="Andorran">Andorran</option>
                            <option value="Angolan">Angolan</option>
                            <option value="Antiguans">Antiguans</option>
                            <option value="Argentinean">Argentinean</option>
                            <option value="Armenian">Armenian</option>
                            <option value="Australian">Australian</option>
                            <option value="Austrian">Austrian</option>
                            <option value="Azerbaijani">Azerbaijani</option>
                            <option value="Bahamian">Bahamian</option>
                            <option value="Bahraini">Bahraini</option>
                            <option value="Bangladeshi">Bangladeshi</option>
                            <option value="Barbadian">Barbadian</option>
                            <option value="Barbudans">Barbudans</option>
                            <option value="Batswana">Batswana</option>
                            <option value="Belarusian">Belarusian</option>
                            <option value="Belgian">Belgian</option>
                            <option value="Belizean">Belizean</option>
                            <option value="Beninese">Beninese</option>
                            <option value="Bhutanese">Bhutanese</option>
                            <option value="Bolivian">Bolivian</option>
                            <option value="Bosnian">Bosnian</option>
                            <option value="Brazilian">Brazilian</option>
                            <option value="British">British</option>
                            <option value="Bruneian">Bruneian</option>
                            <option value="Bulgarian">Bulgarian</option>
                            <option value="Burkinabe">Burkinabe</option>
                            <option value="Burmese">Burmese</option>
                            <option value="Burundian">Burundian</option>
                            <option value="Cambodian">Cambodian</option>
                            <option value="Cameroonian">Cameroonian</option>
                            <option value="Canadian">Canadian</option>
                            <option value="Cape verdean">Cape Verdean</option>
                            <option value="Central african">Central African</option>
                            <option value="Chadian">Chadian</option>
                            <option value="Chilean">Chilean</option>
                            <option value="Chinese">Chinese</option>
                            <option value="Colombian">Colombian</option>
                            <option value="Comoran">Comoran</option>
                            <option value="Congolese">Congolese</option>
                            <option value="Costa rican">Costa Rican</option>
                            <option value="Croatian">Croatian</option>
                            <option value="Cuban">Cuban</option>
                            <option value="Cypriot">Cypriot</option>
                            <option value="Czech">Czech</option>
                            <option value="Danish">Danish</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominican">Dominican</option>
                            <option value="Dutch">Dutch</option>
                            <option value="East timorese">East Timorese</option>
                            <option value="Ecuadorean">Ecuadorean</option>
                            <option value="Egyptian">Egyptian</option>
                            <option value="Emirian">Emirian</option>
                            <option value="Equatorial guinean">Equatorial Guinean</option>
                            <option value="Eritrean">Eritrean</option>
                            <option value="Estonian">Estonian</option>
                            <option value="Ethiopian">Ethiopian</option>
                            <option value="Fijian">Fijian</option>
                            <option value="Filipino" selected>Filipino</option>
                            <option value="Finnish">Finnish</option>
                            <option value="French">French</option>
                            <option value="Gabonese">Gabonese</option>
                            <option value="Gambian">Gambian</option>
                            <option value="Georgian">Georgian</option>
                            <option value="German">German</option>
                            <option value="Ghanaian">Ghanaian</option>
                            <option value="Greek">Greek</option>
                            <option value="Grenadian">Grenadian</option>
                            <option value="Guatemalan">Guatemalan</option>
                            <option value="Guinea-Bissauan">Guinea-Bissauan</option>
                            <option value="Guinean">Guinean</option>
                            <option value="Guyanese">Guyanese</option>
                            <option value="Haitian">Haitian</option>
                            <option value="Herzegovinian">Herzegovinian</option>
                            <option value="Honduran">Honduran</option>
                            <option value="Hungarian">Hungarian</option>
                            <option value="Icelander">Icelander</option>
                            <option value="Indian">Indian</option>
                            <option value="Indonesian">Indonesian</option>
                            <option value="Iranian">Iranian</option>
                            <option value="Iraqi">Iraqi</option>
                            <option value="Irish">Irish</option>
                            <option value="Israeli">Israeli</option>
                            <option value="Italian">Italian</option>
                            <option value="Ivorian">Ivorian</option>
                            <option value="Jamaican">Jamaican</option>
                            <option value="Japanese">Japanese</option>
                            <option value="Jordanian">Jordanian</option>
                            <option value="Kazakhstani">Kazakhstani</option>
                            <option value="Kenyan">Kenyan</option>
                            <option value="Kittian and Nevisian">Kittian and Nevisian</option>
                            <option value="Kuwaiti">Kuwaiti</option>
                            <option value="Kyrgyz">Kyrgyz</option>
                            <option value="Laotian">Laotian</option>
                            <option value="Latvian">Latvian</option>
                            <option value="Lebanese">Lebanese</option>
                            <option value="Liberian">Liberian</option>
                            <option value="Libyan">Libyan</option>
                            <option value="Liechtensteiner">Liechtensteiner</option>
                            <option value="Lithuanian">Lithuanian</option>
                            <option value="Luxembourger">Luxembourger</option>
                            <option value="Macedonian">Macedonian</option>
                            <option value="Malagasy">Malagasy</option>
                            <option value="Malawian">Malawian</option>
                            <option value="Malaysian">Malaysian</option>
                            <option value="Maldivan">Maldivan</option>
                            <option value="Malian">Malian</option>
                            <option value="Maltese">Maltese</option>
                            <option value="Marshallese">Marshallese</option>
                            <option value="Mauritanian">Mauritanian</option>
                            <option value="Mauritian">Mauritian</option>
                            <option value="Mexican">Mexican</option>
                            <option value="Micronesian">Micronesian</option>
                            <option value="Moldovan">Moldovan</option>
                            <option value="Monacan">Monacan</option>
                            <option value="Mongolian">Mongolian</option>
                            <option value="Moroccan">Moroccan</option>
                            <option value="Mosotho">Mosotho</option>
                            <option value="Motswana">Motswana</option>
                            <option value="Mozambican">Mozambican</option>
                            <option value="Namibian">Namibian</option>
                            <option value="Nauruan">Nauruan</option>
                            <option value="Nepalese">Nepalese</option>
                            <option value="New zealander">New Zealander</option>
                            <option value="Ni-Vanuatu">Ni-Vanuatu</option>
                            <option value="Nicaraguan">Nicaraguan</option>
                            <option value="Nigerien">Nigerien</option>
                            <option value="North Korean">North Korean</option>
                            <option value="Northern Irish">Northern Irish</option>
                            <option value="Norwegian">Norwegian</option>
                            <option value="Omani">Omani</option>
                            <option value="Pakistani">Pakistani</option>
                            <option value="Palauan">Palauan</option>
                            <option value="Panamanian">Panamanian</option>
                            <option value="Papua New Guinean">Papua New Guinean</option>
                            <option value="Paraguayan">Paraguayan</option>
                            <option value="Peruvian">Peruvian</option>
                            <option value="Polish">Polish</option>
                            <option value="Portuguese">Portuguese</option>
                            <option value="Qatari">Qatari</option>
                            <option value="Romanian">Romanian</option>
                            <option value="Russian">Russian</option>
                            <option value="Rwandan">Rwandan</option>
                            <option value="Saint Lucian">Saint Lucian</option>
                            <option value="Salvadoran">Salvadoran</option>
                            <option value="Samoan">Samoan</option>
                            <option value="San Marinese">San Marinese</option>
                            <option value="Sao Tomean">Sao Tomean</option>
                            <option value="Saudi">Saudi</option>
                            <option value="Scottish">Scottish</option>
                            <option value="Senegalese">Senegalese</option>
                            <option value="Serbian">Serbian</option>
                            <option value="Seychellois">Seychellois</option>
                            <option value="Sierra Leonean">Sierra Leonean</option>
                            <option value="Singaporean">Singaporean</option>
                            <option value="Slovakian">Slovakian</option>
                            <option value="Slovenian">Slovenian</option>
                            <option value="Solomon Islander">Solomon Islander</option>
                            <option value="Somali">Somali</option>
                            <option value="South African">South African</option>
                            <option value="South Korean">South Korean</option>
                            <option value="Spanish">Spanish</option>
                            <option value="Sri Lankan">Sri Lankan</option>
                            <option value="Sudanese">Sudanese</option>
                            <option value="Surinamer">Surinamer</option>
                            <option value="Swazi">Swazi</option>
                            <option value="Swedish">Swedish</option>
                            <option value="Swiss">Swiss</option>
                            <option value="Syrian">Syrian</option>
                            <option value="Taiwanese">Taiwanese</option>
                            <option value="Tajik">Tajik</option>
                            <option value="Tanzanian">Tanzanian</option>
                            <option value="Thai">Thai</option>
                            <option value="Togolese">Togolese</option>
                            <option value="Tongan">Tongan</option>
                            <option value="Trinidadian or Tobagonian">Trinidadian or Tobagonian</option>
                            <option value="Tunisian">Tunisian</option>
                            <option value="Turkish">Turkish</option>
                            <option value="Tuvaluan">Tuvaluan</option>
                            <option value="Ugandan">Ugandan</option>
                            <option value="Ukrainian">Ukrainian</option>
                            <option value="Uruguayan">Uruguayan</option>
                            <option value="Uzbekistani">Uzbekistani</option>
                            <option value="Venezuelan">Venezuelan</option>
                            <option value="Vietnamese">Vietnamese</option>
                            <option value="Welsh">Welsh</option>
                            <option value="Yemenite">Yemenite</option>
                            <option value="Zambian">Zambian</option>
                            <option value="Zimbabwean">Zimbabwean</option>
                          </select>
                    </div>
                    <div class="col-md-3 sm-12">
                        <label for="formGroupExampleInput">Civil Status</label>
                        <select class="form-select" aria-label="Default select example" id = "civilstatus" name = "civilstatus"  value="<?= $civilstatus ?>">
                            <option value = "" selected>Select</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="seperated">Seperated</option>
                            <option value="widow">Widow</option>
                          </select>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4 sm-12">
                        <label for="formGroupExampleInput">Department</label>
                        <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name = "department"  value="<?= $department ?>" >
                    </div>
                    <div class="col-md-4 sm-12">
                        <label for="formGroupExampleInput">Designation</label>
                        <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name = "designation"  value="<?= $designation ?>">
                    </div>
                    <div class="col-md-4 sm-12">
                        <label for="formGroupExampleInput">Qualified Dept Status</label>
                        <select class="form-select" aria-label="Default select example" id ="deptstatus" name = "deptstatus"  value="<?= $deptStatus ?>">
                            <option value=""selected>Select</option>
                            <option value="S or ME">S or ME</option>
                            <option value="S1 or ME1">S1 or ME1</option>
                            <option value="S2 or ME2">S2 or ME2</option>
                            <option value="S3 or ME3">S3 or ME3</option>
                            <option value="S4 or ME4">S4 or ME4</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4 sm-12">
                        <label for="formGroupExampleInput">Employee Status</label>
                        <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name = "empstatus"  value="<?= $empStatus ?>" >
                    </div>
                    <div class="col-md-4 sm-12">
                        <label for="formGroupExampleInput">Paydate</label>
                        <input type="date" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name = "paydate"  value="<?= $paydate ?>">
                    </div>
                    <div class="col-md-4 sm-12">
                        <label for="formGroupExampleInput">Employee Number</label>
                        <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name = "empnumber"  value="<?= $empNumber ?>" >
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container bg-white rounded shadow mt-4 p-5">
        <p class="headtwo">Contact Information</p>
        <div class="row mt-5">
            <div class="col-md-6 sm-12">
                <label for="formGroupExampleInput">Contact No</label>
                <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name = "contactnumber"  value="<?= $contactNumber ?>" >
            </div>
            <div class="col-md-6 sm-12">
                <label for="formGroupExampleInput">Email</label>
                <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name = "email"  value="<?= $email ?>" >
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6 sm-12" >
                <label for="formGroupExampleInput">Other (Social Media)</label>
                <select class="form-select" aria-label="Default select example" name = "socialmedia"  id ="socialmedia" value="<?= $socialMedia ?>">
                    <option value=''>-- select one --</option>
                    <option value="facebook_messenger">Facebook Messenger</option>
                    <option value="whatsapp_messenger">WhatsApp Messenger</option>
                    <option value="wechat">WeChat</option>
                    <option value="telegram">Telegram</option>
                    <option value="snapchat">Snapchat</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="col-md-6 sm-12">
                <label for="formGroupExampleInput">Social Media Account ID/No.</label>
                <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name = "socialmediaid"  value="<?= $socialMediaID ?>" >
            </div>
        </div>
    </div>

    <div class="container bg-white rounded shadow mt-4 p-5">
        <p class="headthree">Address</p>
        <div class="row mt-5">
            <div class="col-12 sm-12">
                <label for="formGroupExampleInput">Address Line 1</label>
                <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name = "address1"  value="<?= $address1 ?>" >
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 sm-12">
                <label for="formGroupExampleInput">Address Line 2</label>
                <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name = "address2"  value="<?= $address2 ?>" >
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6 sm-12">
                <label for="formGroupExampleInput">City/Municipality</label>
                <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name = "city"  value="<?= $city ?>" >
            </div>
            <div class="col-6 sm-12">
                <label for="formGroupExampleInput">State/Province</label>
                <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name = "state"  value="<?= $state ?>">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6 sm-12">
                <label for="formGroupExampleInput">Country</label>
                <select class="form-select" aria-label="Default select example" name = "country" id ="country" value="<?= $country ?>">
                <option value=''>-- select one --</option>
                <option value="Afganistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bonaire">Bonaire</option>
                <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                <option value="Brunei">Brunei</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Canary Islands">Canary Islands</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Channel Islands">Channel Islands</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos Island">Cocos Island</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote DIvoire">Cote DIvoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curaco">Curacao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="East Timor">East Timor</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands">Falkland Islands</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Ter">French Southern Ter</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Great Britain">Great Britain</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guinea">Guinea</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Hawaii">Hawaii</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="Indonesia">Indonesia</option>
                <option value="India">India</option>
                <option value="Iran">Iran</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea North">Korea North</option>
                <option value="Korea Sout">Korea South</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Laos">Laos</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macau">Macau</option>
                <option value="Macedonia">Macedonia</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Malawi">Malawi</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Midway Islands">Midway Islands</option>
                <option value="Moldova">Moldova</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Nambia">Nambia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherland Antilles">Netherland Antilles</option>
                <option value="Netherlands">Netherlands (Holland, Europe)</option>
                <option value="Nevis">Nevis</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau Island">Palau Island</option>
                <option value="Palestine">Palestine</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option selected value="Phillipines">Philippines</option>
                <option value="Pitcairn Island">Pitcairn Island</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Republic of Montenegro">Republic of Montenegro</option>
                <option value="Republic of Serbia">Republic of Serbia</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russia">Russia</option>
                <option value="Rwanda">Rwanda</option>
                <option value="St Barthelemy">St Barthelemy</option>
                <option value="St Eustatius">St Eustatius</option>
                <option value="St Helena">St Helena</option>
                <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                <option value="St Lucia">St Lucia</option>
                <option value="St Maarten">St Maarten</option>
                <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                <option value="Saipan">Saipan</option>
                <option value="Samoa">Samoa</option>
                <option value="Samoa American">Samoa American</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syria">Syria</option>
                <option value="Tahiti">Tahiti</option>
                <option value="Taiwan">Taiwan</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania">Tanzania</option>
                <option value="Thailand">Thailand</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Erimates">United Arab Emirates</option>
                <option value="United States of America">United States of America</option>
                <option value="Uraguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Vatican City State">Vatican City State</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Vietnam">Vietnam</option>
                <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                <option value="Wake Island">Wake Island</option>
                <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                <option value="Yemen">Yemen</option>
                <option value="Zaire">Zaire</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
                </select>
            </div>
            <div class="col-4 sm-12">
                <label for="formGroupExampleInput">Zip Code</label>
                <input type="text" class="form-control bg-white rounded shadow-sm" id="formGroupExampleInput" placeholder="" name = "zipcode"  value="<?= $zipCode ?>" >
            </div>
        </div>
        <div class="row">
            <div class="col-12 sm-12 my-5">
                <label for="formGroupExampleInput">Picture Path</label>
                <input type="text" class="form-control bg-white rounded shadow-sm picpath" id="formGroupExampleInput" placeholder="" name = "picpath"  value="<?= $picPath ?>"readonly>
            </div>
        </div>
    </div>