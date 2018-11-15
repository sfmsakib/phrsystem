<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link href="<?php echo ROOT_PATH; ?>assets/css/signup.css" rel="stylesheet"/>
</head>
<body>
<div class="containers">
  <div class="row">
    <div class="col-lg-6">
        <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
            <fieldset>
                <h4>Basic Information</h4>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="dr_name" class="form-control" placeholder="Full Name"/>
                </div>
                <div class="form-group">
                    <label>Specialization</label>
                    <select  class="custom-select" required class="form-control input.select" name="specialization" placeholder="Specialization"  >
                    <option  value="" disabled selected hidden>Select your specialization </option>

                    <option value="Allergy & Immunology">Allergy &amp; Immunology</option>
                    <option value="Anesthesia">Anesthesia</option>
                    <option value="Cardiology">Cardiology</option>
                    <option value="Colorectal Surgery">Colorectal Surgery</option>
                    <option value="Dentistry">Dentistry</option>
                    <option value="Dermatology">Dermatology</option>
                    <option value="Endocrinology">Endocrinology</option>
                    <option value="ENT">ENT</option>
                    <option value="Gastroenterology">Gastroenterology</option>
                    <option value="General Physician">General Physician</option>
                    <option value="General Surgery">General Surgery</option>
                    <option value="Gynaecologic Oncology">Gynaecologic Oncology</option>
                    <option value="Gynaecology and Obstetrics">Gynaecology and Obstetrics</option>
                    <option value="Haematology">Haematology</option>
                    <option value="Hepatology">Hepatology</option>
                    <option value="Infectious Diseases">Infectious Diseases</option>
                    <option value="Infertility">Infertility</option>
                    <option value="Medicine">Medicine</option>
                    <option value="Neonatology">Neonatology</option>
                    <option value="Nephrology">Nephrology</option>
                    <option value="Neuromedicine">Neuromedicine</option>
                    <option value="Neurosurgery">Neurosurgery</option>
                    <option value="Nutritionist">Nutritionist</option>
                    <option value="Oncology">Oncology</option>
                    <option value="Ophthalmology">Ophthalmology</option>
                    <option value="Orthopaedics">Orthopaedics</option>
                    <option value="Other Speciality">Other Speciality</option>
                    <option value="Paediatric Surgery">Paediatric Surgery</option>
                    <option value="Paediatrics">Paediatrics</option>
                    <option value="Pain Management">Pain Management</option>
                    <option value="Physical Medicine">Physical Medicine</option>
                    <option value="Physiotherapy">Physiotherapy</option>
                    <option value="Plastic Surgery, Reconstruction or Cosmetic Surgery">Plastic Surgery, Reconstruction or Cosmetic Surgery</option>
                    <option value="Psychiatry">Psychiatry</option>
                    <option value="Respiratory Medicine">Respiratory Medicine</option>
                    <option value="Rheumatology">Rheumatology</option>
                    <option value="Sex Specialist">Sex Specialist</option>
                    <option value="Speech and Language Therapy">Speech and Language Therapy</option>
                    <option value="Thoracic Surgery">Thoracic Surgery</option>
                    <option value="Urology">Urology</option>
                    <option value="Vascular Surgery">Vascular Surgery</option>
                    </select>
                </div>
                    <label>Gender</label>
                    <div class="row">
                    <div class="col-3 text-center">
                    <input type="radio" name="gender" value="male"> Male</div>
                    <div class="col-3">
                    <input type="radio" name="gender" value="female"> Female</div>
                    </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" class="form-control" placeholder="e.g. Mirpur,Dhaka-126"></textarea>
                </div>
                <div class="wizard-buttons">
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>
            <fieldset>
                <h4>Education Qualification</h4>
                <div class="form-group">
                    <label>Degree</label>
                    <input type="text" name="degree" class="form-control" placeholder="Degree"/>
                </div>
                <div class="form-group">
                    <label>Institute</label>
                    <input type="text" name="institute" class="form-control" placeholder="Institute Name"/>
                </div>
                <div class="form-group">
                    <label>Year of completion</label>
                    <input type="text" name="year_completion" class="form-control" placeholder="Year of completion"/>
                </div>
                <div class="form-group">
                    <label>Year of Experience</label>
                    <input type="text" name="year_experience" class="form-control" placeholder="Year of Experience"/>
                </div>
                <div class="form-group">
                    <label>BMDC Reg No.</label>
                    <input type="text" name="bmdc_reg" class="form-control" placeholder="BMDC Reg No."/>
                </div>

                <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>  
            <fieldset>
                    <h4>Details of Clinic</h4>
                    <div class="form-group">
                        <label>Clinic Name</label>
                        <input type="text" name="clinic_name" class="form-control" placeholder="Clinic Name"/>
                    </div>
                   <div class="form-group">
                        <label>City</label>
                        <input type="text" name="clinic_city" class="form-control" placeholder="Clinic City"/>
                    </div>
                    <div class="form-group">
                        <label>Clinic Address</label>
                        <textarea name="clinic_address" class="form-control" placeholder="Clinic Address"></textarea>
                    </div>
                 <div class="wizard-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <input type="submit" name="save" class="btn btn-primary btn-submit" value="Submit"  >
                </div>
            </fieldset>
        </form>
    </div>
    <div class="col-lg-6">
        <div class="containers">
<p> Create your doctors profile. Fill up legal information. We will verify your information.</p>
    </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo ROOT_PATH; ?>assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo ROOT_PATH; ?>assets/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo ROOT_PATH; ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo ROOT_PATH; ?>assets/js/signup.js"></script>
</body>
</html>
 