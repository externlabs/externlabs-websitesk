<?php $title = 'Contact Us - Extern Labs | Best Web & Software Development';?>
<?php $description = 'Schedule a free call with Extern Labs Experts; discuss your project, goals, and requirements, and our experts will set you up within a call.';?>
<?php $keywords = 'Extern Labs';?>
<?php $script_name = "Extern Labs Inc";?>
<?php $script_image="https://externlabs.com/images/app-mntc-support.png" ?>
<?php $script_url = "https://externlabs.com/contact.php";?>
<!-- Header Section  -->
<?php include('layout/header.php') ?>
<div id="content" class="site-content">
    
    <div class="page-header flex-middle inner-page" style="background-image:url(./images/contact-us.jpg);">
        <div class="container">
            <div class="inner">
                <h1 class="page-title">Contact Us</h1>
                <p class="text-white">Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days. We will be happy to answer your questions.</p>              
            </div>
        </div>
    </div>
    <div class="mt-60"> </div>
    <section>
        <div class="container">
            <div class="row"> 
                <div class="col-md-4 col-12">
                    <div class="add-box"> 
                        <h3> USA </h3>
                        <p> <i class="flaticon-phone-1"></i> <a href="mailto:info@externlabs.com"> info@externlabs.com </a> </p>
                        <p> <i class="flaticon-envelope"></i> <a href="tel:+1-760-478-9698"> +1-760-478-9698 </a> </p>
                        <p> <i class="flaticon-world-globe"></i> <span> 1309 Coffeen Avenue Ste 1300 Sheridan, Wyaming 82801 </span> </p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="add-box"> 
                        <h3> UAE </h3>
                        <p> <i class="flaticon-phone-1"></i> <a href="mailto:info@externlabs.com"> info@externlabs.com </a> </p>
                        <p> <i class="flaticon-envelope"></i> <a href="tel:+971 526110048"> +971 526110048 </a> </p>
                        <p> <i class="flaticon-world-globe"></i> <span> United Arab Emirates, Port Saeed Road, Deira, Dubai, 111306 </span> </p>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="add-box"> 
                        <h3> INDIA </h3>
                        <p> <i class="flaticon-phone-1"></i> <a href="mailto:info@externlabs.com"> info@externlabs.com </a> </p>
                        <p> <i class="flaticon-envelope"></i> <a href="tel:+91-8005697216"> +91-8005697216 </a> </p>
                        <p> <i class="flaticon-world-globe"></i> <span> 522 - 525, Fifth floor, JTM Mall, Jagatpura, Jaipur, Rajasthan 302017 </span> </p>
                    </div>
                </div>               
                <div class="col-md-12 col-12">
                    <div class="form-box">
                        <h3> Ready to Get Started? </h3>
                        <p> Your email address will not be published. Required fields are marked * </p>
                        <form action="contactSendEmail.php" method="post">                         
                            <input type="text" name="text" class="form-control mb-3" placeholder="Your Name*">
                            <input type="email" name="email" class="form-control mb-3" placeholder="Your Email*">
                            <input type="text" name="mobile" class="form-control mb-3" placeholder="Your Phone*">
                            <textarea placeholder="Whats your Project all about" name="message" class="mb-3" rows="15" cols="15" > </textarea>
                            <input type="submit"  name="" class="octf-btn">    
                            <?php
                                    session_start();
                                    if(isset($_SESSION["send1"]))
                                    {
                                    if($_SESSION["send1"]=="done"){
                                        echo "<p class='thanks-text'>Thank you for sharing your information. Our experts will get back as soon as possible.</p>";
                                        $_SESSION["send1"]=false;
                                    }
                                    if($_SESSION["send1"]=="error"){
                                        echo "<p class='error-text'>Something went wrong! Try Again</p>";
                                        $_SESSION["send1"]=false;
                                    }
                                }
                                ?>                                              
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="badge-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center badge badge-tab d-flex d-lg-block justify-content-center align-items-center flex-wrap">
                    <a href="https://www.crunchbase.com/organ/extern-labs" target="blank"><img src="images/chruchbase.svg" alt=" Extern Labs"></a>
                    <a href="https://www.goodfirms.co/company/extern-labs" target="blank"><img src="./images/goodfirms.png" alt=" Extern Labs"></a>
                    <a href="//www.dmca.com/Protection/Status.aspx?ID=a7af5f39-4c45-4a8a-bd76-d572be5f7476" title="DMCA.com Protection Status" class="dmca-badge" target="blank"> <img src ="images/dmca.png" alt=" Extern Labs" /></a>
                    <a href="https://www.upwork.com/ag/externlabs/" target="blank"><img src="./images/upwork.png" alt=" Extern Labs"></a>
                    <a href="https://www.glassdoor.co.in/Overview/Working-at-Extern-Labs-EI_IE3283915.11,22.htm" target="blank"><img src="./images/glassdoor.png" alt=" Extern Labs"></a>
                </div>
            </div>
        </div>
    </section>
    
</div>
<!-- Footer Section -->
<?php include('layout/footer.php') ?>