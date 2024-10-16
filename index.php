<?php
include("header.php");

?>


  <main id="main">
       <!-- ======= Notice staert======= -->
 <div class="switch3">
    <input type="checkbox"  class="switch3-checkbox" id="myonoffswitch3" checked>
    <label class="switch3-label">
        <span class="switch3-inner">
            <span class="switch3-active">
                <marquee class="scroll-text">
                    <a style="color: white;" href="https://joinairforce.baf.mil.bd/image/43" target="_blank">*** ৮৮ বাফা কোর্সের বিজ্ঞপ্তি দেখতে এখানে ক্লিক করুন। ***</a>  <span class="glyphicon glyphicon-forward"></span>

                    <a href="#" class="ff-bn text-white" style="margin-left:50px;">        *** WEAR MASK, STAY SAFE ***      </a> <span class="glyphicon glyphicon-forward"></span>
                </marquee>
                <span class="switch3-switch">NOTICE</span>
            </span>
            <span class="switch3-inactive"><span class="switch3-switch">SHOW </span></span>
        </span>
    </label>
</div>
 <!-- ======= Notice end ======= -->
 
    <!-- ======= About Section ======= -->
    <section id="about" class="about" >


    <div class="container" id="aboutCoas">
    
      <div class="card border-warning mb-3">

          <div class="row no-gutters">
           
            <div class="col-md-9 col-lg-9 pt-lg-0">
            
			   <div class="card-header text-uppercase fs-2 fw-bolder">Chief of Air Staff</div>
			   <div class="card-body">
					<h5 class="card-title fs-3">Air Chief Marshal Shaikh Abdul Hannan, BUP, nswc, fawc, psc, GD(P)</h5>
					<p class="card-text">Air Chief Marshal Shaikh Abdul Hannan, BUP, nswc, fawc, psc, GD(P) assumed the command of Bangladesh Air Force (BAF) on 12 June 
                  2021. He hails from Bagerhat, and was born in a respectable Muslim family on 01 August 1963. He is the youngest son of Mr Sheikh Azharul Islam and
                   Mrs Nazlee Islam. The Air Chief Marshal was commissioned as a General Duties Pilot of BAF in 1984.<br>

                  He is a Qualified Flying Instructor. The Air Chief Marshal holds the highest-flying category ‘A’ along with Proficiency Wing and served as the Chief Examiner of 
                  Helicopter Examiner Board (HEB) of MI-17/171. An alumnus of prestigious Defence Services Command and Staff College (DSCSC), Mirpur, Air Chief Marshal Shaikh Abdul
                  Hannan also graduated from Pakistan Air Force Air War College, Karachi, Pakistan in 1999 and received MDS and MSS degrees respectively. He completed his National
                  Security and War Course (nswc) from National Defence University (NDU), Islamabad in 2014, and was adjudged the ‘Top Graduate’ and received M Sc in National 
                  Security and War Studies.</p>
				  <a href="coas.php" class="btn btn-primary">Read More...</a>
				</div>
            </div>
             <div class="col-sm-12 col-md-3 col-lg-3">
                <img src="assets/img/coas.png" class="card-img float-right" alt="..."  >
              </div>
          </div>
          
      </div>

    </div>

    </section><!-- End About Section -->
 
 
    <!-- ======= applications Section ======= -->
    <section id="applications" class="applications">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <p>Applications Software</p>
        </div>

        <div class="row" data-aos="fade-left">
            <?php require_once('admin/conn.php');
            $selectQuery = "SELECT * FROM application_soft ORDER BY id ASC";
            $result = $conn->query($selectQuery);
            while($single = $result->fetch_assoc()) {
            ?>
          <div class="col-lg-6 col-md-6 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="<?php echo $single['delay'];?>">
            <i class="<?php echo $single['icon'];?>" style="color:<?php echo $single['color'];?>"></i>
              <h3><a href="<?php echo $single['url'];?>" target="_blank"><?php echo $single['short_name'];?></a></h3>
            </div>
          </div>
        <?php }?>

        </div>

      </div>
    </section><!-- End applications Section -->

  

    

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/dish.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>BAF Satellite Communication</h3>
            <p class="fst-italic">
              Satellite operation refers to the management, control, and maintenance of satellites in orbit. It 
              includes tasks such as launching satellites into space, tracking and communicating with satellites, 
              adjusting their orbits, and ensuring their functionalities are working properly. The goal of satellite 
              operation is to ensure that the satellites can perform their intended missions effectively and efficiently.
            </p>
            <ul>
               <li><i class="bi bi-round"></i> The process of sending and receiving data via satellite communication involves the following steps:</li>
              <li><i class="bi bi-check"></i> Transmitting Antenna: Data to be transmitted is fed into the transmitting antenna.</li>
              <li><i class="bi bi-check"></i> Encoding: The data is then encoded into a radio frequency (RF) signal.</li>
              <li><i class="bi bi-check"></i> Uplink to Satellite: The RF signal is transmitted from the ground station to the satellite via the uplink frequency.</li>
              <li><i class="bi bi-check"></i> Satellite Reception: The satellite receives the RF signal and amplifies it.</li>
              <li><i class="bi bi-check"></i> Downlink from Satellite: The satellite then transmits the signal back to the ground via the downlink frequency.</li>
              <li><i class="bi bi-check"></i>Receiving Antenna: The signal is received by the receiving antenna on the ground.</li>
              <li><i class="bi bi-check"></i>Decoding: The RF signal is decoded back into the original data.</li>
              <li><i class="bi bi-check"></i>Data Processing: The received data is then processed and sent to its intended recipient.</li>
            </ul>
            <p>
            BAF Satellite Communication is maintained by BAF Communication Unit which connect all bases and Units uninterreptly
            </p>
          </div>
        </div>
      </div>
    </section><!-- End Details Section -->

    


   

    <!-- ======= publications Section ======= -->
    <section id="publications" class="publications">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>publications</h2>
          <p>Check our publications</p>
        </div>

        <div class="row" data-aos="fade-left">

          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>BAF publication</h3>
              <ul>
                <li><a href="#" target="_blank"> Eagle</a></li>
                <li> <a href="#">  Bimansena</a></li>
                <li><a href="#" target="_blank"> Congo Chronicles</a></li>
                <li class=""><a href="#"> Blue Angel</a></li>
                <li class=""><a href="#"> CSTIe-Journal</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
              <h3>Announcements</h3>
              
              <ul>
                <li><a href="" target="_blank"> Wear Mask! Stay Safe!</a></li>
                <li><a href="" target="_blank"> Caution About BAF Recruitment</a></li>
                <li><a href="http://airpassage.baf.org/passenger/download" target="_blank">Latest airpassage Menifest Download</a></li>
                <li><a href="http://baf.org/booksearch/" target="_blank">Book Search</a></li>
                
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <h3>important Links</h3>
              
              <ul>
                <li><a href="http://192.35.65.215/mchq/home.php" target="_blank"> Maint Control</a></li>
                <li><a href="http://bro.baf.org/" target="_blank">URO/BRO</a></li>
                <li><a href="http://sis.baf.org/" target="_blank">Air HQ Quest Application</a></li>
                <li><a href="http://f793.baf.org/" target="_blank">Vehicle Requisition Form(F-793)</a></li>
                <li><a href="http://baf.org/accts_sub/" target="_blank">Pay Slip(Airman/MODC/Civilian)</a></li>
                <li><a href="http://commu.baf.org/telreq" target="_blank">Tel Request Form</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="400">
              <span class="advanced">Important</span>
              <h3>Important Software</h3>
              
              <ul>
                <li><a href="http://baf.org/coas_appointment/" target="_blank"> COAS Appointments</a></li>
                <li><a href="http://192.35.65.215/coas/index.php" target="_blank">Air HQ Info Panel</a></li>
                <li><a href="http://192.35.65.215/operation/" target="_blank">Ops Branch Info System</a></li>
                <li><a href="http://baf.org/afo/All/mainpage.html" target="_blank">AFO AFI AFM & JSI Archive</a></li>
                <li><a href="http://192.35.65.215/plans/" target="_blank">Plans Info Sys</a></li>
                <li><a href="http://192.35.65.215/pdo/" target="_blank">PDO Archive</a></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End publications Section -->
   
    
  </main><!-- End #main -->

 <?php
 include("footer.php");
 ?>