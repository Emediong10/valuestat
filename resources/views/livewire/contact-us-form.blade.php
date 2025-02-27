<div class="card bg-white shadow-lg border-0">
    <div class="card-body p-5">
        <div class="form-widget" data-loader="button" data-alert-type="inline">

            <div class="form-result"></div>

            <form class="row mb-0" id="landing-enquiry" action="include/form.php" method="post" enctype="multipart/form-data">
                <div class="form-process"></div>
                <div class="col-12 form-group mb-4">
                    <label>Name:</label>
                    <input type="text" name="landing-enquiry-name" id="landing-enquiry-name" class="form-control form-control-lg required" value="" placeholder="John Doe">
                </div>
                <div class="col-12 form-group mb-4">
                    <label>Email:</label>
                    <input type="email" name="landing-enquiry-email" id="landing-enquiry-email" class="form-control form-control-lg required" value="" placeholder="user@company.com">
                </div>
                <div class="col-12 form-group mb-4">
                    <label>Phone:</label><br>
                    <div class="input-group input-group-lg">
                        <input type="text" name="landing-enquiry-phone" id="landing-enquiry-phone" class="form-control form-control-lg required" value="" placeholder="02-232-2424">
                    </div>
                </div>
                <div class="col-12 form-group mb-4">
                    <label>Message:</label>
                    <textarea name="landing-enquiry-additional-requirements" id="landing-enquiry-additional-requirements" class="form-control form-control-lg" cols="30" rows="5" placeholder="Please let us know how we can help you..."></textarea>
                </div>
                <div class="col-12 d-none">
                    <input type="text" id="landing-enquiry-botcheck" name="landing-enquiry-botcheck" value="" />
                </div>
                <div class="col-12">
                    <button type="submit" name="landing-enquiry-submit" class="btn w-100 text-white bg-color rounded-3 py-3 fw-semibold text-uppercase mt-2">Contact Us</button>
                </div>

                <input type="hidden" name="prefix" value="landing-enquiry-">
            </form>
        </div>
    </div>
</div>
