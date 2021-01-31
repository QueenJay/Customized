<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Fira+Sans" rel="stylesheet">
    <title>Home Page</title>
    <style>
        html,body { 
            height: 100%;
            }
        body{
            margin:0px;
        }
        .container{
            font-family: Arial, Helvetica, sans-serif;
            font-size:0.8rem;
            margin:0px;
        }
        .header{
            display:grid;
            grid-template-columns: 85% 15%;
        }
        .left{

        }
        .main{
            display:grid;
            grid-template-columns: 16% 84%;
        }
        #switchschool{
            display:grid;
            grid-template-columns: 80% 20%;
            border-radius:2px;
        }
        #whiteButton:hover{
            background:green;
            color:white!important;
        }

    </style>
</head>
<body>
<!-- #404040 side font color -->
    <div class="container">
        <hr width="100%" style="border: 2px solid #0056d6; padding:0px; margin:0px;"> 
        <div class="header"  style="height: 8vh; margin:0px;"> 
        
            <div class="left" style="background: #FFFFFF;padding:0px;">
                <img src="https://basiccloudmanager.edves.net/general/CloudPassport/demo/logo/1.jpg" alt="Edves Academy" width="50" height="50" style="float:left;padding-left:8%;padding-top:0.25%;padding-bottom:0.25%;padding-right:4%">
                <img src="menu.PNG" alt="menu" width="38" height="38" style="float:left; padding-top:0.5%;padding-right:3%"> 
                <span style="color:#404040;font-size: 1.7rem;font-weight:bold;display:inline-block; padding-top:1%;">Edves Academy</span>
                <span style="float:right; padding-top:1%;padding-right:5%;margin:0;"><img src="videoImage.PNG" alt="menu" width="40" height="40"> </span>
            </div>
            <div class="right" style="background: rgb(234, 234, 234) !important;"> 
                <h4  style="float:left; padding-left:10px; padding-top:0px;margin-bottom:0px;"> Hi, Blessing! </h4>
                <img style="float:right; padding-right:15px; margin-top:10px; margin-bottom:0px;";  src="https://basiccloudmanager.edves.net/general/CloudPassport/demo/staff/1111_1.jpg" alt="profile pic" width="40" height="40">
            </div>

        </div>


        <div class="main"  style="background: rgb(229, 229, 229) !important; height: 90vh; "> 

            <!-- menu side  -->
            <div id="menu" style="font-weight:bold;padding:5%;margin-top:9%;margin-right:5%;background:#FFFFFF;border-radius:0px 10px 10px 0px;height:82vh;overflow:hidden;color:#404040;font-size: 0.9rem;">
            <label width="100%"style="display:grid;grid-template-columns:25% 75%; margin-bottom:5px; grid-column-gap: 0.7em;" onclick="getClicker('id1')">
                <img src="dashboard.PNG" height="20px" alt="" width="20px" style="justify-self:right;">
                <span style="display:inline-block;justify-self:left;">Dashboard</span>
            </label>
                <br/>
           
            <label id="id2" width="100%"style="display:grid;grid-template-columns:18% 82%; grid-column-gap: 0.7em;" onclick="getClicker('id2')">
                <img src="register_students.PNG" height="20px" alt="" width="20px" style="justify-self:right;">
                <span style="display:inline-block;justify-self:left;">Register Student</span>
            </label>
                <br/>
            <label width="100%"style="display:grid;grid-template-columns:18% 82%; grid-column-gap: 0.7em;" onclick="getClicker('id3')">
                <img src="viewStudent.PNG" height="20px" alt="" width="20px" style="justify-self:right;">
                <span style="display:inline-block;justify-self:left;">View Student</span>
            </label>
                <br/>
            <label width="100%"style="display:grid;grid-template-columns:18% 82%; grid-column-gap: 0.7em;" onclick="getClicker('id4')">
                <img src="viewUsers.PNG" height="20px" width="20px" alt="" style="justify-self:right;">
                <span style="display:inline-block;justify-self:left;">View Users</span>
            </label> <br/>
            <label width="100%"style="display:grid;grid-template-columns:18% 82%; grid-column-gap: 0.7em;" onclick="getClicker('id5')">
                <img src="result.PNG" height="20px" width="20px" alt="" style="justify-self:right;">
                <span style="display:inline-block;justify-self:left;">Load Scores</span>
            </label>
            </div>

            <!-- main page -->
            <div id="SIDE" style="margin-top:2%;margin-left:1%;margin-right:3%;">
                <div id="switchschool">
                    <div style="background:#0056d6;height: 6vh;margin-right:1%;border-radius:4px; color:white;">
                        <span style="display:inline-block;float:left;font-weight:bold;padding-left:5%;padding-top:1.5%;">DASHBOARD</span>
                        <!-- <img src="icon.PNG" alt="" style="float:right; padding-top:0.5%;padding-right:3%">  -->
                        <span style="display:inline-block;float:right; padding-top:1.5%;padding-right:3%;margin:0px">
                        <select style="font-weight:bold;color:white;background:#0056d6;border:0px;outline:0px;width:150px; ">
                        <option value="">Switch School</option></span>
                            <option value="sec">Edves Academy-Secondary</option>
                            <option value="pry">Edves Academy-Primary</option>
                        </select>
                        
                    </div>
                    <div style="background:green;height: 6vh; margin-left:1%;border-radius:4px; color:white;">
                        <span style="display:inline-block;padding-top:6%;padding-left:5%;">Expires in 220 day(s) [2021-08-31]</span>
                    </div>
                </div>

                <div class=buttons style="margin-top:20px; ">
                    <button type="submit" style="padding:6px;background:green;border:0px;color:white;font-size:1.1rem; width:10%;">Users</button>
                    <button type="submit" id="whiteButton" style="padding:6px;border:0px;color:Grey;font-size:1.1rem; width:10%; margin-left:20px; border: 1px solid green;">Staff</button>
                    <button type="submit" style="padding:6px;background:green;border:0px;color:white;font-size:1.1rem; width:10%; margin-left:20px;">Student</button>
                </div>

                <div class="last" style="background:white; margin-top:20px; width:100%; height:60vh">
                

                </div>

                
            </div>


            
        </div>

    </div>
  
 <script>

    function getClicker(clicked){
        if(clicked === 'id2'){
            window.location.href = "studentRegister.php";
        }else if(clicked === "id3"){
            window.location.href = "viewStudents.php";
        }else if(clicked === "id4"){
            window.location.href = "viewUsers.php";
        }else if(clicked === "id5"){
            window.location.href = "loadScore.php";
        }else{
            window.location.href = "homepage.php";
        }
    }

 
</script>
   

</body>


</html>
