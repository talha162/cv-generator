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



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

	<title>Template 2</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href="template2/resume.css" media="all" />

</head>
<body>

<div id="doc2" class="yui-t7">
	<div id="inner">
	
		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
                <?php
            if ($result->num_rows > 0) {
                $row=$result->fetch_assoc();
            ?>
                <h1 class="name"><?php echo $row['fname'].$row['lname']; ?></h1>
					<h2>Web Designer, Director</h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">
						<!-- <h3><a id="pdf" href="#">Download PDF</a></h3> -->
						<h3><a href="mailto:name@yourdomain.com"><?php echo $row['email']; ?></a></h3>
						<h3><?php echo $row['phoneno']; ?></h3>
                        <?php 
            }
                        ?>
					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Profile</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
                            <?php
if ($result5->num_rows > 0) {
    $summaries = $result5->fetch_assoc();
   echo $summaries['summary'];
   }
                    ?>

							</p>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Skills</h2>
						</div>
						<div class="yui-u">
                        <?php 
if ($result4->num_rows > 0) {
 while($skill = $result4->fetch_assoc()){

 ?>       
								<div class="talent">
                       
									<h2><?php echo $skill['s1'];?></h2>
								</div>
                                <div class="talent">
                       
									<h2><?php echo $skill['s2'];?></h2>
								</div>
                                <div class="talent">
                       
									<h2><?php echo $skill['s3'];?></h2>
								</div>
<?php
 }}
 ?>
						</div>
					</div><!--// .yui-gf -->


					<div class="yui-gf">
	
						<div class="yui-u first">
							<h2>Experience</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">

							<div class="job">
                                  
                <?php
                
                if ($result2->num_rows > 0) {
                 while($experience = $result2->fetch_assoc()){
                             ?>
								<h2><?php echo $experience['companyname']; ?></h2>
								<h3><?php echo $experience['jobtitle']; ?></h3>
								<h4><?php  $date = DateTime::createFromFormat("Y-m-d", $experience['startdate']);echo $date->format("Y");?>
                    - <?php  $date = DateTime::createFromFormat("Y-m-d", $experience['enddate']);echo $date->format("Y");?></h4>
								<p><?php echo $experience['detail']; ?> </p>
							</div>


<?php
                 }
                }
?>
						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
						<div class="yui-u">
                        <?php 
            if ($result3->num_rows > 0) {
                $i=0;
             while ($education = $result3->fetch_assoc()){
                     ?>
							<h2><?php echo $education['sname'];?> , <?php echo $education['edcity'];?></h2>
							<h3><?php echo $education['edegree'];?> in <?php echo $education['fstudy'];?> </h3>
                            <h5><?php  $date = DateTime::createFromFormat("Y-m-d", $education['sddate']);echo $date->format("Y");?>
                    - <?php  $date = DateTime::createFromFormat("Y-m-d", $education['eddate']);echo $date->format("Y");?></h5>
                <?php 
                $i++;
                if($result3->num_rows==$i){
                    break;
                }
                echo "<hr>";
            }
            }

                ?>		
                </div>
					</div><!--// .yui-gf -->


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
        <?php
$result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row1=$result->fetch_assoc()){
            ?>
			<p><?php echo $row1['fname']; ?> <a href="mailto:name@yourdomain.com"><?php echo $row1['email']; ?></a> &mdash; <?php echo $row1['phoneno']; ?></p>
		<?php }} ?>
        </div><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->


</body>
</html>

