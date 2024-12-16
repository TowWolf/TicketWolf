<!-- index.php -->
<?php
// Include shared components
include '../includes/header.php';
?>

<div class="main-container">

    <h1>This is the Ticket Form Page</h1>
    <div class="form-container">
        <h2>Vehicle Information Form</h2>
        <!-- 
        This will be a ticket form:
            It takes in a user's inputs and files

            Fields Requirements:
            - First Name: Required field; must be provided by the user.
            - Last Name: Required field; must be provided by the user.
            - VIN (Vehicle Identification Number): Required field; this is a unique 17-character code used to identify the vehicle.
            - Driver's License Number: Optional; the driver's license number of the vehicle owner.
            - License Plate Number: Optional; the license plate number associated with the vehicle.
            - Phone Number: Optional; contact number for communication purposes.
            - Email: Not Required field; used for correspondence.


            Yes or No Questions
            - Are you the vehicle owner?: Required; 
             - Is the vehicle registered in New York?: Required; specifies the registration state.


            For the below if they say yes show a way to upload files.
            - Have Registration?: Required; indicates whether the vehicle has a valid registration.
            - Have Insurance?: Required; indicates whether the vehicle is insured.
            - Have Title?: Required; determines whether the vehicle has a title document.
            - Have Vehicle Owner's Driver's License?: Required; clarifies if the owner's license is available


            - Additional Files section:
                Any photos or files pertaining to vehicle attach them now

            - Make Signature for Captcha 


            After they submit:
                User is sent to a thank you page
                The input data will be sent first to the backend database
                    Files will be saved as Blob to MYSQL db       //BLOB (Binary Large Object) data type.
                Then the input data will send an email/phoneText to both the user and an admin
        -->





        <form action="#" method="post">
            <div class="form-group">
                <label for="email">Email <span class="required">*</span></label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="first-name">Vehicle Owner's First Name <span class="required">*</span></label>
                <input type="text" id="first-name" name="first_name" required>
            </div>

            <div class="form-group">
                <label for="last-name">Vehicle Owner's Last Name <span class="required">*</span></label>
                <input type="text" id="last-name" name="last_name" required>
            </div>

            <div class="form-group">
                <label for="vin">VIN <span class="required">*</span></label>
                <input type="text" id="vin" name="vin" required>
            </div>

            <div class="form-group">
                <label for="drivers-license">Driver's License Number</label>
                <input type="text" id="drivers-license" name="drivers_license">
            </div>

            <div class="form-group">
                <label for="license-plate">License Plate Number</label>
                <input type="text" id="license-plate" name="license_plate">
            </div>

            <div class="form-group">
                <label for="phone">Phone Number <span class="optional">(Optional)</span></label>
                <input type="tel" id="phone" name="phone">
            </div>

            <div class="form-group">
                <label>Are you the vehicle owner? <span class="required">*</span></label>
                <input type="radio" id="owner-yes" name="vehicle_owner" value="yes" required>
                <label for="owner-yes" class="checkbox-label">Yes</label>
                <input type="radio" id="owner-no" name="vehicle_owner" value="no" required>
                <label for="owner-no" class="checkbox-label">No</label>
            </div>

            <div class="form-group">
                <label>Have Registration? <span class="required">*</span></label>
                <input type="radio" id="registration-yes" name="have_registration" value="yes" required>
                <label for="registration-yes" class="checkbox-label">Yes</label>
                <input type="radio" id="registration-no" name="have_registration" value="no" required>
                <label for="registration-no" class="checkbox-label">No</label>
            </div>

            <div class="form-group">
                <label>Is the vehicle registered in New York? <span class="required">*</span></label>
                <input type="radio" id="ny-yes" name="registered_in_ny" value="yes" required>
                <label for="ny-yes" class="checkbox-label">Yes</label>
                <input type="radio" id="ny-no" name="registered_in_ny" value="no" required>
                <label for="ny-no" class="checkbox-label">No</label>
            </div>

            <div class="form-group">
                <label>Have Insurance? <span class="required">*</span></label>
                <input type="radio" id="insurance-yes" name="have_insurance" value="yes" required>
                <label for="insurance-yes" class="checkbox-label">Yes</label>
                <input type="radio" id="insurance-no" name="have_insurance" value="no" required>
                <label for="insurance-no" class="checkbox-label">No</label>
            </div>

            <div class="form-group">
                <label>Have Title? <span class="required">*</span></label>
                <input type="radio" id="title-yes" name="have_title" value="yes" required>
                <label for="title-yes" class="checkbox-label">Yes</label>
                <input type="radio" id="title-no" name="have_title" value="no" required>
                <label for="title-no" class="checkbox-label">No</label>
            </div>

            <div class="form-group">
                <label>Have Vehicle Owner's Driver's License? <span class="required">*</span></label>
                <input type="radio" id="owner-license-yes" name="have_owner_license" value="yes" required>
                <label for="owner-license-yes" class="checkbox-label">Yes</label>
                <input type="radio" id="owner-license-no" name="have_owner_license" value="no" required>
                <label for="owner-license-no" class="checkbox-label">No</label>
            </div>

            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>

</div>




<?php
include '../includes/footer.php';
?>