<?php
session_start();
require '../../database/config.db.php';

$sliderId = $_POST['sld_id'];
$sliderHead = $_POST['sld_heading'];
$sliderDes = $_POST['sld_desc'];
$sliderBtn = $_POST['sld_button'];
$sliderBtnLink = $_POST['sld_btnlink'];

$sliderIc = $_FILES['sld_ic_update'];
$sliderIcName = $_FILES['sld_ic_update']['name'];
$sliderIcTmpName = $_FILES['sld_ic_update']['tmp_name'];
$sliderIcSize = $_FILES['sld_ic_update']['size'];
$sliderIcError = $_FILES['sld_ic_update']['error'];

$sliderBg = $_FILES['sld_bg_update'];
$sliderBgName = $_FILES['sld_bg_update']['name'];
$sliderBgTmpName = $_FILES['sld_bg_update']['tmp_name'];
$sliderBgSize = $_FILES['sld_bg_update']['size'];
$sliderBgError = $_FILES['sld_bg_update']['error'];

if(!isset($_POST['update_slider'])){
    $_SESSION['suberror'] = "Submission Invalid";
    header('location: ../sliders.php');
}else{
    if(empty($sliderHead) || empty($sliderDes) || empty($sliderBtn) || empty($sliderBtnLink)){
        $_SESSION['fieldempty'] = "Some Input Fields Are Empty";
        header('location: ../sliders.php');

    }
        else if(!empty($sliderIcName)){
            $selectPrevIcon = "SELECT * FROM sliders WHERE slider_id='$sliderId'";
            $selectPrevIconResult = mysqli_query($connect, $selectPrevIcon);
            $assocIC = mysqli_fetch_assoc($selectPrevIconResult);
            $PrevIconLOC = '../uploads/images/sliders/icons/'.$assocIC['slider_ico_img'];
            unlink($PrevIconLOC);

            $sliderIconExt = explode('.', $sliderIcName);
            $actualSliderIconExt = strtolower(end($sliderIconExt));
            $allowedIconExt = 'png';

            if($actualSliderIconExt == $allowedIconExt){
                if($sliderIcSize < 100000){
                    if($sliderIcError == 0){
                        $newSliderIconName = 'sl_icon-'.$sliderId.'.'.$actualSliderIconExt;
                        $sliderIconLOC = '../uploads/images/sliders/icons/'.$newSliderIconName;
                        move_uploaded_file($sliderIcTmpName, $sliderIconLOC);

                        $updateIcon = "UPDATE sliders SET slider_heading='$sliderHead', slider_desc='$sliderDes', slider_button='$sliderBtn', slider_btn_link='$sliderBtnLink', slider_ico_img='$newSliderIconName' WHERE slider_id='$sliderId'";
                        $updateIconResult = mysqli_query($connect, $updateIcon);

                        if(!empty($sliderBgName)){
                            $selectPrevBg = "SELECT * FROM sliders WHERE slider_id='$sliderId'";
                            $selectPrevBgResult = mysqli_query($connect, $selectPrevBg);
                            $assocBG= mysqli_fetch_assoc($selectPrevBgResult);
                            $PrevBGLOC = '../uploads/images/sliders/backgrounds/'.$assocBG['slider_bg_img'];
                            unlink($PrevBGLOC);
                
                            $sliderBgImgExt = explode('.', $sliderBgName);
                            $actualSliderBgImgExt = strtolower(end($sliderBgImgExt));
                            $allowedBgImgExt = array('jpg','jpeg','gif');
                
                            if(in_array($actualSliderBgImgExt, $allowedBgImgExt)){
                                if($sliderBgSize < 300000){
                                    if($sliderBgError == 0){
                                        $newSliderBgImgName = 'slider_bg-'.$sliderId.'.'.$actualSliderBgImgExt;
                                        $SliderBgImgLOC = '../uploads/images/sliders/backgrounds/'.$newSliderBgImgName;
                                        move_uploaded_file($sliderBgTmpName, $SliderBgImgLOC);
                
                                        $updateBgImg = "UPDATE sliders SET slider_heading='$sliderHead', slider_desc='$sliderDes', slider_button='$sliderBtn', slider_btn_link='$sliderBtnLink', slider_bg_img='$newSliderBgImgName' WHERE slider_id='$sliderId'";
                                        $updateBgImgResult = mysqli_query($connect, $updateBgImg);
                

                                    }else{
                                        $_SESSION['bg_error'] = "Error Occured During Upload.";
                                        header('location: ../sliders.php');
                                    }
                                }else{
                                    $_SESSION['bg_size'] = "Slider Icon Size Is Too Large.";
                                    header('location: ../sliders.php');
                                }
                            }else{
                                $_SESSION['bg_format'] = "Slider Icon Format Invalid. JPG, JPEG and GIF Are Allowed";
                                header('location: ../sliders.php');
                            }
                        }

                        $_SESSION['updated'] = "Slider Has Been Updated.";
                        header('location: ../sliders.php');



                    }else{
                        $_SESSION['iconerror'] = "Error Occured During Upload.";
                        header('location: ../sliders.php');
                    }
                }else{
                    $_SESSION['iconsize'] = "Slider Icon Size Is Too Large.";
                    header('location: ../sliders.php');
                }
            }else{
                $_SESSION['iconformat'] = "Slider Icon Format Invalid. Try PNG";
                header('location: ../sliders.php');
            }
        }

        else if(!empty($sliderBgName)){
            $selectPrevBg = "SELECT * FROM sliders WHERE slider_id='$sliderId'";
            $selectPrevBgResult = mysqli_query($connect, $selectPrevBg);
            $assocBG= mysqli_fetch_assoc($selectPrevBgResult);
            $PrevBGLOC = '../uploads/images/sliders/backgrounds/'.$assocBG['slider_bg_img'];
            unlink($PrevBGLOC);

            $sliderBgImgExt = explode('.', $sliderBgName);
            $actualSliderBgImgExt = strtolower(end($sliderBgImgExt));
            $allowedBgImgExt = array('jpg','jpeg','gif');

            if(in_array($actualSliderBgImgExt, $allowedBgImgExt)){
                if($sliderBgSize < 300000){
                    if($sliderBgError == 0){
                        $newSliderBgImgName = 'slider_bg-'.$sliderId.'.'.$actualSliderBgImgExt;
                        $SliderBgImgLOC = '../uploads/images/sliders/backgrounds/'.$newSliderBgImgName;
                        move_uploaded_file($sliderBgTmpName, $SliderBgImgLOC);

                        $updateBgImg = "UPDATE sliders SET slider_heading='$sliderHead', slider_desc='$sliderDes', slider_button='$sliderBtn', slider_btn_link='$sliderBtnLink', slider_bg_img='$newSliderBgImgName' WHERE slider_id='$sliderId'";
                        $updateBgImgResult = mysqli_query($connect, $updateBgImg);

                        $_SESSION['updated'] = "Slider Has Been Updated.";
                        header('location: ../sliders.php');
                    }else{
                        $_SESSION['bg_error'] = "Error Occured During Upload.";
                        header('location: ../sliders.php');
                    }
                }else{
                    $_SESSION['bg_size'] = "Slider Icon Size Is Too Large.";
                    header('location: ../sliders.php');
                }
            }else{
                $_SESSION['bg_format'] = "Slider Icon Format Invalid. JPG, JPEG and GIF Are Allowed";
                header('location: ../sliders.php');
            }
        }

        else{
            $updateSliderContent = "UPDATE sliders SET slider_heading='$sliderHead', slider_desc='$sliderDes', slider_button='$sliderBtn', slider_btn_link='$sliderBtnLink', slider_bg_img='$newSliderBgImgName' WHERE slider_id='$sliderId'";
            $updateSliderContentResult = mysqli_query($connect, $updateSliderContent);

            $_SESSION['updated'] = "Slider Has Been Updated.";
            header('location: ../sliders.php');
        }
        
    }

?>
