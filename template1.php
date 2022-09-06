<?php
include 'config.php';
$sql = "SELECT * FROM personal_info ORDER BY pi_id DESC LIMIT 1;";
$sql2 = "SELECT * FROM experience ORDER BY eid LIMIT 3;";
$sql3 = "SELECT * FROM education ORDER BY eid DESC LIMIT 3;";
$sql4 = "SELECT * FROM skill ORDER BY sid DESC LIMIT 1;";
$sql5 = "SELECT * FROM summaries ORDER BY sid DESC LIMIT 1;";
$sql6 = "SELECT * FROM project ORDER BY projectid DESC LIMIT 3;";

$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);
$result4 = $conn->query($sql4);
$result5 = $conn->query($sql5);
$result6 = $conn->query($sql6);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Resume/CV Template </title>
    
    <!-- Meta -->
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico">  
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS-->
	<script defer src="template1/assets/fontawesome/js/all.min.js"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="template1/assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="template1/assets/css/orbit-1.css">
   
</head> 

<body>
    <div class="wrapper mt-lg-5">
        <div class="sidebar-wrapper">
            <div class="profile-container">
            <?php
            if ($result->num_rows > 0) {
                $row=$result->fetch_assoc();
            ?>
                <img class="profile" src="assets/images/profile.png" alt="" />
                <h1 class="name"><?php echo $row['fname']." ".$row['lname']; ?></h1>
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa-solid fa-envelope"></i><a href="mailto: yourname@email.com"><?php echo $row['email']; ?></a></li>
                    <li class="phone"><i class="fa-solid fa-phone"></i><a href="tel:0123 456 789"><?php echo $row['phoneno']; ?></a></li>
                    <li class="website"><i class="fa-solid fa-globe"></i><a href="<?php echo $row['website']; ?>" target="_blank"><?php echo $row['website']; ?></a></li>
                    <li class="linkedin"><i class="fa-brands fa-linkedin-in"></i><a href="<?php echo $row['linkedin']; ?>" target="_blank"><?php echo $row['linkedin']; ?></a></li>
                    <li class="github"><i class="fa-brands fa-github"></i><a href="<?php echo $row['github']; ?>" target="_blank"><?php echo $row['github']; ?></a></li>
                    <li class="twitter"><i class="fa-brands fa-twitter"></i><a href="<?php echo $row['twiter']; ?>" target="_blank"><?php echo $row['twiter']; ?></a></li>
                </ul>
            </div><!--//contact-container-->
            <?php
            
        }
            ?>
            
            <div class="education-container container-block">
                <h2 class="container-block-title">Education</h2>
            <?php 
            
   if ($result3->num_rows > 0) {
    while ($education = $result3->fetch_assoc()){
            ?>
                <div class="item">
                    <h4 class="degree"><?php echo $education['edegree'];?> in <?php echo $education['fstudy'];?></h4>
                    <h5 class="meta"><?php echo $education['sname'];?></h5>
	                    <div class="time"><?php  $date = DateTime::createFromFormat("Y-m-d", $education['sddate']);echo $date->format("Y");?>
                    - <?php  $date = DateTime::createFromFormat("Y-m-d", $education['eddate']);echo $date->format("Y");?></div>
                </div><!--//item-->
            <?php 
    }
}
            ?>
            
            </div><!--//education-container-->
            
            <!-- <div class="languages-container container-block">
                <h2 class="container-block-title">Languages</h2>
                <ul class="list-unstyled interests-list">
                    <li>English <span class="lang-desc">(Native)</span></li>
                    <li>French <span class="lang-desc">(Professional)</span></li>
                    <li>Spanish <span class="lang-desc">(Professional)</span></li>
                </ul>
            </div> -->
            <!--//interests-->
            
            <!-- <div class="interests-container container-block">
                <h2 class="container-block-title">Interests</h2>
                <ul class="list-unstyled interests-list">
                    <li>Climbing</li>
                    <li>Snowboarding</li>
                    <li>Cooking</li>
                </ul>
            </div>//interests -->
            
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">
            
            <section class="section summary-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fa-solid fa-user"></i></span>Career Profile</h2>
                <div class="summary">
                    <?php
if ($result5->num_rows > 0) {
    $summaries = $result5->fetch_assoc();
   echo $summaries['summary'];
   }
                    ?>
                    <p></p>
                </div><!--//summary-->
            </section><!--//section-->
            
            <section class="section experiences-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fa-solid fa-briefcase"></i></span>Experiences</h2>
                
                <?php
                
   if ($result2->num_rows > 0) {
    while($experience = $result2->fetch_assoc()){
                ?>
                <div class="item">
                    <div class="meta">
                        <div class="upper-row">
                            <h3 class="job-title"><?php echo $experience['jobtitle']; ?></h3>
                            <div class="time"><?php  $date = DateTime::createFromFormat("Y-m-d", $experience['startdate']);echo $date->format("Y");?>
                    - <?php  $date = DateTime::createFromFormat("Y-m-d", $experience['enddate']);echo $date->format("Y");?></div>
                        </div><!--//upper-row-->
                        <div class="company"><?php echo $experience['companyname']; ?></div>
                    </div><!--//meta-->
                    <div class="details">
                        <p><?php echo $experience['detail']; ?><p>
                    </div><!--//details-->
                </div><!--//item-->
                <?php 
                }
             } 
              ?>
            </section><!--//section-->
            
            <section class="section projects-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fa-solid fa-archive"></i></span>Projects</h2>
                <div class="intro">
                    <p>You can list your side projects or open source libraries in this section. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et ligula in nunc bibendum fringilla a eu lectus.</p>
                </div><!--//intro-->
                <?php            
if ($result6->num_rows > 0) {
   while( $projects = $result6->fetch_assoc())
   {
                ?>
                <div class="item">
                    <span class="project-title mt-3"><a href="#"><?php echo $projects['projecttitle'];  ?>
                    </a></span> - <span class="project-tagline"><?php echo $projects['projectdetail'];  ?> </span>
                    <?php
                    }
                }
                ?>
            </section><!--//section-->
            
            <section class="skills-section section">
                <h2 class="section-title"><span class="icon-holder"><i class="fa-solid fa-rocket"></i></span>Skills &amp; Proficiency</h2>
                <div class="skillset"> 
                    <?php 
if ($result4->num_rows > 0) {
 while($skill = $result4->fetch_assoc()){

 ?>       
                    <div class="item">
                        <h3 class="level-title"><?php echo $skill['s1'];?></h3>
                        <div class="progress level-bar">
						    <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
						</div>                               
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title"><?php echo $skill['s2'];?></h3>
                        <div class="progress level-bar">
						    <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 79%" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100"></div>
						</div>                               
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title"><?php echo $skill['s3'];?></h3>
                        <div class="progress level-bar">
						    <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
						</div>                               
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title"><?php echo $skill['s4'];?></h3>
                        <div class="progress level-bar">
						    <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 59%" aria-valuenow="59" aria-valuemin="0" aria-valuemax="100"></div>
						</div>                               
                    </div><!--//item-->
                    
                    <div class="item">
                        <h3 class="level-title"><?php echo $skill['s5'];?></h3>
                        <div class="progress level-bar">
						    <div class="progress-bar theme-progress-bar" role="progressbar" style="width: 49%" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100"></div>
						</div>                               
                    </div><!--//item-->
                    <?php
 }
}
                    ?>
                </div>  
            </section><!--//skills-section-->
            
        </div><!--//main-body-->
    </div>
 
    <footer class="footer">
        <div class="text-center">
            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Made with <i class="fa-solid fa-heart"></i> by <a href="" target="_blank">Talha</a> for Graduates</small>
        </div><!--//container-->
    </footer><!--//footer-->
        
</body>
</html> 


