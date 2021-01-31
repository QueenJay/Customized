<?php 
    include('connection.class.php');
    session_start();
     $connect = new DBconnector('root','','myschoolportal','localhost');

//---Users/Staffs---
    // $title = "";
    // $staffid="";
    // $firstname="";
    // $lastname="";
    // $email="";
    // $mobileNum="";
    // $password="";
    // $gender="";
    // $isStaff="";

//---Students---
    $AdmissionNumber="";
    $firstname="";
    $lastname="";
    $DOB="";
    $termOfEntry="";
    $sessionOfEntry="";
    $classOfEntry="";
    $gender="";
    $parentName="";
    $contactAddress="";
    $phoneNum="";

    
//---LoadScores---
    $sclass="";
    $adNum="";
    $subject="";
    $exam=0;
    $test=0;
    $homework=0;



    // if(isset($_POST['save'])){
    //     $title = $_POST['titleSelect'];
    //     $gender = $_POST['gender'];
    //     $isStaff = $_POST['staffStatus'];
    //     $staffid = $_POST['staffId'];
    //     $firstname = $_POST['Fname'];
    //     $lastname = $_POST['Lname'];
    //     $email = $_POST['Email'];
    //     $mobileNum = $_POST['MNum'];
    //     $password = $_POST['Pass'];
    //     $count=0;
        
    //     $test="SELECT * FROM users";
    //     $query=$connect->display($test);
    //     while ($row = $query->fetch(PDO::FETCH_ASSOC)) { 
    //             if($row['staffid']==$staffid){
    //                 $count += 1 ;
    //             }
    //     }

    //    if($count>0){
    //        echo 'StaffID already exist' ;
    //    }
    //    else{
    //     $sql="INSERT INTO users(title,staffid,firstname,lastname,email,mobileNum,password,gender,isStaff)VALUES(:title,:staffid,:firstname,:lastname,:email,:mobileNum,:password,:gender,:isStaff)";
    //     $array = array("title"=>$title ,"staffid"=>$staffid ,"firstname"=>$firstname ,"lastname"=>$lastname,"email"=>$email,"mobileNum"=>$mobileNum,"password"=>$password, "gender"=>$gender,"isStaff"=>$isStaff );
    //     $connect->insert($sql,$array);
    //     header("Location: staffLogin.php");
    //     //echo " success";
            
    //     }
    // }   else{

    //     //header("Location: staffLogin.php?uploadsuccess");
    //     echo "  I'm here now!!" ;

    // }

    // if (isset($_GET['del'])) {
    //     $id = $_GET['del'];
    //     $sql="DELETE FROM users WHERE id=:id" ;
    //     $connect->delete($id,$sql);
    //     // header('location: index2.php');
    // }

    

    if(isset($_POST['save'])){
        $adminNum = $_POST['adminNum'];
        $stuLName = $_POST['studentlname'];
        $stuFName = $_POST['studentfname'];
        $stuDOB = $_POST['studentDob'];
        $stuClass = $_POST['sClass'];
        $stuTerm = $_POST['sTerm'];
        $stuSession = $_POST['session'];
        $stuGender = $_POST['studentGender'];
        $stuPName = $_POST['pname'];
        $stuPAdd = $_POST['padd'];
        $stuPNum = $_POST['pnum'];
       
       $count=0;

       $test="SELECT * FROM students";
       $query=$connect->display($test);
       while ($row = $query->fetch(PDO::FETCH_ASSOC)) { 
            if($row['admissionNum']==$adminNum){
                $count += 1 ;
            }
       }

       if($count>0){
           echo 'Admission Number already exist' ;
       }
       else{
        
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $stuPass = substr(str_shuffle($permitted_chars), 0, 6);
        $sql="INSERT INTO students(admissionNum,firstName,lastName,dob,classOfEntry,termOfEntry,sessionOfEntry,gender,parentName,contactAdd,phoneNum,password)VALUES(:ab,:bc,:cd,:de,:ef,:fg,:gh,:hi,:ij,:jk,:kl,:lm)";
        $array = array("ab"=>$adminNum ,"bc"=>$stuFName ,"cd"=>$stuLName ,"de"=>$stuDOB,"ef"=>$stuClass,"fg"=>$stuTerm,"gh"=>$stuSession, "hi"=>$stuGender,"ij"=>$stuPName,"jk"=>$stuPAdd,"kl"=>$stuPNum,"lm"=>$stuPass);
        $connect->insert($sql,$array);
        header("Location: studentLogin.php");
        
        //echo " success";
       }
            
    }else{

        //header("Location: staffLogin.php?uploadsuccess");
        // echo "  I'm here now!!" ;
    }




    if(isset($_POST['savescore'])){
        $sclass = $_POST['selectClass'];
        $adNum = $_POST['admissionNum'];
        $subject = $_POST['subject'];
        $exam = $_POST['exam'];
        $test = $_POST['test'];
        $homework = $_POST['homeWork'];
       $count=0;

       $tester="SELECT * FROM studentscores WHERE admissionNumber='$adNum'";
       $query=$connect->display($tester);
       while ($row = $query->fetch(PDO::FETCH_ASSOC)) { 
            if($row['subjects']==$subject){
                $count += 1 ;
            }
       }

       if($count>0){
           echo "<script> alert('Subject scores already loaded for selected student')</script> ";
           
        //    header("Location: loadScore.php");
       }
       else{
        
	
        $sql="INSERT INTO studentscores(classs,admissionNumber,subjects,examScore,testScore,homework)VALUES(:ab,:bc,:cd,:de,:ef,:fg)";
        $array = array("ab"=>$sclass ,"bc"=>$adNum ,"cd"=>$subject ,"de"=>$exam,"ef"=>$test,"fg"=>$homework);
        $connect->insert($sql,$array);
        
        header("Location: loadScore.php");
        echo "<script> alert('Subject scores already loaded for selected student')</script> ";
        //echo " success";
       }
            
    }else{

        // echo "  I'm here now!!" ;
    }



    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        $sql="DELETE FROM users WHERE id=:id" ;
        $connect->delete($id,$sql);
        header('location: viewUsers.php');
    }
    if (isset($_GET['deli'])) {
        $id = $_GET['deli'];
        $sql="DELETE FROM students WHERE id=:id" ;
        $connect->delete($id,$sql);
        header('location: viewStudents.php');
    }
?>