<?php
session_start();
require '../../database/config.db.php';

$sliderHeading = $_POST['slider_heading'];
$sliderDesc = $_POST['slider_desc'];
$sliderBtn = $_POST['slider_button'];
$sliderBtnLink = $_POST['slider_btnlink'];

$_SESSION['slider_head'] = $sliderHeading;
$_SESSION['slider_des'] = $sliderDesc;
$_SESSION['slider_btn'] = $sliderBtn;
$_SESSION['slider_link'] = $sliderBtnLink;

$sliderIcon = $_FILES['slider_icon'];
$sliderIconName = $_FILES['slider_icon']['name'];
$sliderIconTemp = $_FILES['slider_icon']['tmp_name'];
$sliderIconSize = $_FILES['slider_icon']['size'];
$sliderIconError = $_FILES['slider_icon']['error'];

$sliderBgImg = $_FILES['slider_bg'];
$sliderBgImgName = $_FILES['slider_bg']['name'];
$sliderBgImgTemp = $_FILES['slider_bg']['tmp_name'];
$sliderBgImgSize = $_FILES['slider_bg']['size'];
$sliderBgImgError = $_FILES['slider_bg']['error'];

if(!isset($_POST['add_slider'])){
    $_SESSION['notset'] = "SUBMIT IS NOT SET";
    header('Location: ../add-slider.php');
}else{
    if(empty($sliderHeading) || empty($sliderDesc) || empty($sliderBtn) || empty($sliderBtnLink)){
        $_SESSION['empty'] = "Inputed Fields Are Empty";
        header('Location: ../add-slider.php?fields=empty');
        exit();
       }
       else{
        $sliderIconExt = explode('.', $sliderIconName);
        $actualSliderIconExt = strtolower(end($sliderIconExt));
        $allowedIconExt = 'png';

        $sliderBgExt = explode('.', $sliderBgImgName);
        $actualBgImgExt = strtolower(end($sliderBgExt));  
        $allowedBgImgExt = array('jpg', 'jpeg', 'gif', 'png');

        if($actualSliderIconExt == $allowedIconExt){
            if($sliderIconSize < 100000){
                if($sliderIconError == 0){

                    if(in_array($actualBgImgExt, $allowedBgImgExt)){
                        if($sliderBgImgSize < 300000){
                            if($sliderBgImgError == 0){

                                $insertSlider = "INSERT INTO sliders (slider_heading, slider_desc, slider_button, slider_btn_link, slider_ico_img, slider_bg_img, slider_status) VALUES ('$sliderHeading', '$sliderDesc', '$sliderBtn', '$sliderBtnLink', '', '', 0)";
                                $insertedSlider = mysqli_query($connect, $insertSlider);

                                $lastId = mysqli_insert_id($connect);
                                $newSliderIconName = 'sl_icon-'.$lastId.".".$actualSliderIconExt;
                                $destinationIcon = '../uploads/images/sliders/icons/'.$newSliderIconName;
                                move_uploaded_file($sliderIconTemp, $destinationIcon);

                                $updateIcon = "UPDATE sliders SET slider_ico_img='$newSliderIconName' WHERE slider_id='$lastId'";
                                $updatingIcon = mysqli_query($connect, $updateIcon);

                                $newSliderBgName = 'slider_bg-'.$lastId.'.'.$actualBgImgExt;
                                $destinationSliderBg = '../uploads/images/sliders/backgrounds/'.$newSliderBgName;
                                move_uploaded_file($sliderBgImgTemp, $destinationSliderBg);
            
                                $updateBg = "UPDATE sliders SET slider_bg_img='$newSliderBgName' WHERE slider_id='$lastId'";
                                $updatingBg = mysqli_query($connect, $updateBg);

                                $_SESSION['slider_icon'] = 'Slider Uploaded Successfully';
                                header('location: ../sliders.php?slider=uploaded');
                                exit();
                            }else{
                                $_SESSION['slider_icon'] = 'Error Occoured During Upload. Please Try Again';
                                header('location: ../add-slider.php?upload=failed');
                                exit();
                            }
                        }else{
                            $_SESSION['slider_icon'] = 'Slider Background Image Size Is Too Large. Max File Size 300KB';
                            header('location: ../add-slider.php?sliderbg_size=large');
                            exit();
                        }
                    }else{
                        $_SESSION['slider_icon'] = 'Slider Background Image Format Invalid. Try JPG, JPEG, GIF Format';
                        header('location: ../add-slider.php?sliderbg_format=invalid');
                        exit();
                    }
                }else{
                    $_SESSION['slicon_err'] = 'Error Occoured During Upload. Please Try Again';
                    header('location: ../add-slider.php?upload=failed');
                    exit();
                }
            }else{
                $_SESSION['slicon_size'] = 'Slider Icon Size Is Too Large. Max File Size 100KB';
                header('location: ../add-slider.php?icon_size=large');
                exit();
            }
        }else{
            $_SESSION['slicon_format'] = 'Slider Icon Format Invalid. Only PNG and GIF Allowed';
            header('location: ../add-slider.php?icon_format=invalid');
            exit();
        }

        
        
    }
}


?>
