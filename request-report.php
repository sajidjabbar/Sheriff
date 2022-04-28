<!-- CSS Link here -->
<link rel="stylesheet" href="css/request-report.css">
<!-- CSS End Here -->

<!--  Start Here -->
<section class="about-banner-section">
    <?php include 'inc/app.php'; ?>
    <div class="container">
        <div class="about-banner-text">
            <h1>REQUEST REPORT</h1>
        </div>
    </div>
</section>
<section class="about-section-text">
    <div class="container">
        <div class="text-in-about-us">
            <div class="for-request-report">
                <h1>Request Report</h1>
            </div>
            <div class="single-text-para mt-4">
                <p>
                    On this page you are requesting a copy of a report that has already been filed with the Henry County
                    Sheriff’s Office. Victims, Insurance Companies and others can use this site to obtain a copy of a
                    report. Some people, like suspects or those charged with a criminal offense, in a report, may not be
                    able to obtain a copy of the report through this site. You must complete all required information
                    and complete the message section as is outlined in the instructions. Failure to complete this form
                    as instructed may cause your request to be delayed or not completed.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="apply-form-start">
                <div class="for-form-in-center">
                    <form action="">
                        <div class="card-body for-vox-shadow">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">NAME*</label>
                                    <input type="text" class="form-control for-normal-form-input" id="inputEmail4"
                                        placeholder="Julia">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">NAME*</label>
                                    <input type="text" class="form-control for-normal-form-input" id="inputPassword4"
                                        placeholder="Write Last Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Report Number</label>
                                    <input type="text" class="form-control for-normal-form-input" id="inputEmail4"
                                        placeholder="you@example.com">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Report Number</label>
                                    <input type="text" class="form-control  for-normal-form-input" id="inputPassword4"
                                        placeholder="Your Phone Number">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Message</label>
                                    <textarea name="" id="" cols="30" rows="10"
                                        class="form-control for-normal-form-input-textarea for-normal-form-input"></textarea>
                                </div>
                            </div>
                            <div class="form-row form-row-with-select">
                                <div class="form-group col-md-3">
                                    <label for="inputEmail4">Report Number</label>
                                    <select name="" id="" class="form-control  for-normal-form-input">
                                        <option value="Victim">Victim</option>
                                        <option value="Victim">Victim</option>
                                        <option value="Victim">Victim</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="inputPassword4">Report Number</label>
                                    <select name="" id="" class="form-control  for-normal-form-input">
                                        <option value="Victim">Copy Emailed</option>
                                        <option value="Victim">Copy Emailed</option>
                                        <option value="Victim">Victim</option>
                                    </select>
                                </div>
                                <div class="col-md-3"></div>
                                <div class="col-md-3">
                                    <div class="submit-the-form">
                                        <button type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="for-text-in-last">
                <p>
                    The Henry County Sheriff’s Office follows the Record Retention Policies as outline on the Missouri
                    Secretary of States website.
                </p>
                <p>
                    Click on the link to review those retention times:
                    <a href="https://www.sos.mo.gov/archives/localrecs/schedules">https://www.sos.mo.gov/archives/localrecs/schedules</a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End Here -->
<?php include 'inc/footer.php'; ?>