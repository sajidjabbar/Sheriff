<!-- CSS Link here -->
<link rel="stylesheet" href="css/contactus.css">
<!-- CSS End Here -->

<!--  Start Here -->
<section class="contact-banner-section">
    <?php include 'inc/app.php'; ?>
    <div class="container">
        <div class="contact-banner-text">
            <h1>Contact us</h1>
        </div>
    </div>
</section>
<section class="crime-report-section">
    <div class="container">
        <div class="crime-report-start">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-9">
                    <div class="report-crime-heading">
                        <h3>Report a Crime</h3>
                        <p>If you are having an Emergency call 911</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-7">
                    <div class="crime-report-with-form">
                        <div class="for-crrime-form">
                            <form>
                                <div class="for-single-input">
                                    <label for="">NAME*</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="for-single-input">
                                    <label for="">E-MAIL*</label>
                                    <input type="text" name="" id="">
                                </div>
                                <div class="for-single-input">
                                    <label for="">MESSAGE*</label>
                                    <textarea name="" id=""></textarea>
                                </div>
                                <div class="attach-submit-btn mt-4">
                                    <label for="upload">
                                        <span class="btn"><img src="img/paperclip.png" alt=""> &nbsp;&nbsp;&nbsp;
                                            Attachments</span>
                                        <input type="file" name="" hidden id="upload">
                                    </label>
                                    <button type="submit" class="crime-submit-btn btn">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="number-and-email">
                        <div class="for-call-in-contact">
                            <a href="tel: 660-885-7300">
                                <span class="the-phone-icon"><i class="fa fa-phone"></i></span>
                                <span class="phone-number">PH : 660-885-7300</span>    
                            </a>
                            <a href="">
                                <span class="the-phone-icon"><i class="fa fa-phone" style="visibility: hidden;"></i></span>
                                <span class="phone-number">FAX : 660-885-3173 </span>    
                            </a>
                            <a href="">
                                <span class="the-phone-icon"><i class="fa fa-phone" style="visibility: hidden;"></i></span>
                                <span class="phone-number">FAX : 660-885-4279</span>    
                            </a>
                            <a href="" class="mt-5">
                                <span class="the-phone-icon"><i class="fa fa-map-marker"></i></span>
                                <span class="phone-number">200 North Main St. <br> <span class="ml-4 px-1"> Clinton, Mo 64735</span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.963793630813!2d67.0676923148793!3d24.865086151196067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e987bf7b24d%3A0xbb1256e1c355bf69!2sPFL%20Education%20Pvt.%20Ltd!5e0!3m2!1sen!2s!4v1650354938194!5m2!1sen!2s"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<!-- End Here -->
<?php include 'inc/footer.php'; ?>