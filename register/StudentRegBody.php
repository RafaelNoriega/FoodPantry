 <div class="container-fluid">
	<br>

<div class="row">
	    <div class="col-lg-6 padding">
	       <a href = "../"> <img class="img-responsive" src="../img/logo-sm.jpg"></a>
		<h1 class="text-primary">CSUB Food Pantry New User</h1><hr><br>
	    </div>
	</div>

	<div class="row">
	    <div class="col-md-8 col-sm-10 col-xs-12 padding border" id="regForm">

<?php
if(isset($_SESSION['err'])){
    echo'<hr style="border-top: 1px solid #E64545;" >
	<small class = "form-text text muted" id = "errorT">'.$_SESSION['err'].' </small>
	<hr style="border-top: 1px solid #E64545;">';}
?>
		<!-- General Controls -->
		<form class="g-brd-around g-brd-gray-light-v4 g-pa-30 g-mb-30" method="POST">

		    <div class="form-group g-mb-25">
				<label for="name"> Name</label>
		    <div class="form-inline">
			<label class="sr-only" for="fname">First Name</label>
			<input class="form-control rounded-0 form-control-md mr-sm-3 mb-3 mb-lg-0" type="text" value='<?php if(isset($sentfirstname)){echo $sentfirstname;} ?>' placeholder="First Name" name="fname">

			<label class="sr-only" for="lname">Last Name</label>
			<div class="input-group mr-sm-3 mb-3 mb-lg-0">
			    <input class="form-control rounded-0 form-control-md" type="text" placeholder="Last Name" value='<?php if(isset($sentlastname)){echo $sentlastname;} ?>' name="lname">
			</div>
		    </div>
		</div>
		    <br>
		    <!--  -->

		    <div class="form-group g-mb-25">
			<label for="email">Email address</label>
			<input class="form-control rounded-0 form-control-md" aria-describedby="emailHelp" type="email" placeholder="Enter email" value='<?php if(isset($sentemail)){echo $sentemail;}?>'name="email">
			<small class="form-text text-muted" >We'll never share your email with anyone else.</small>
		    </div>
		    <br>

		    <div class="form-group g-mb-25">
			<label for="runnerid">Runner ID</label>
			<input class="form-control rounded-0 form-control-md" aria-describedby="emailHelp" type="text" placeholder="Runner ID" value='<?php if(isset($sentrid)){echo $sentrid;} ?>' name="runnerid">
		    </div>
		    <br>

		     <div class="form-group g-mb-25">
			<label for="role">I am: </label>
			<select class="form-control rounded-0" id="role" name="role">
			    <option value="Student">Student</option>
			    <option value="Staff">Staff</option>
			    <option value="Faculty">Faculty</option>
			</select>
		    </div>
		    <br>

		    <div class="form-group g-mb-25">
			<label for="major">Major: </label>
			<select class="form-control rounded-0" id="major" name="major">
			    <option value="None">None/Undecided</option>
			    <option value="Accounting">Accounting</option>
			    <option value="Agricultural Business">Agricultural Business</option>
			    <option value="Anthropology">Anthropology</option>
			    <option value="Art">Art</option>
			    <option value="Biology">Biology</option>
			    <option value="Business Administration">Business Administration</option>
			    <option value="Chemistry">Chemistry</option>
			    <option value="Child, Adolescent, and Family Studies">Child, Adolescent, and Family Studies</option>
			    <option value="Communication">Communication</option>
			    <option value="Computer Engineering">Computer Engineering</option>
			    <option value="Computer Science">Computer Science</option>
			    <option value="Criminal Justice">Criminal Justice</option>
			    <option value="Economics">Economics</option>
			    <option value="Electrical Engineering">Electrical Engineering</option>
			    <option value="English">English</option>
			    <option value="Engineering Sciences">Engineering Sciences</option>
			    <option value="Enviromental Resource Management">Enviromental Resource Management</option>
			    <option value="Finance">Finance</option>
			    <option value="Geology">Geology</option>
			    <option value="History">History</option>
			    <option value="Human Biological Studies">Human Biological Studies</option>
			    <option value="Human Resource Management">Human Resource Management</option>
			    <option value="Interdisciplinary Studies">Interdisciplinary Studies</option>
			    <option value="Kinesiology">Kinesiology</option>
			    <option value="Liberal Studies">Liberal Studies</option>
			    <option value="Management">Management</option>
			    <option value="Marketing">Marketing</option>
			    <option value="Mathematics">Mathematics</option>
			    <option value="Music">Music</option>
			    <option value="Natural Science">Natural Science</option>
			    <option value="Nursing">Nursing</option>
			    <option value="Philosophy">Philosophy</option>
			    <option value="Physics">Physics</option>
			    <option value="Political Science">Political Science</option>
			    <option value="Pre-Engineering">Pre-Engineering</option>
			    <option value="Pre-Med">Pre-Med</option>
			    <option value="Psychology">Psychology</option>
			    <option value="Public Policy and Administration">Public Policy and Administration</option>
			    <option value="Religous Studies">Religous Studies</option>
			    <option value="Small Business Management">Small Business Management</option>
			    <option value="Sociology">Sociology</option>
			    <option value="Spanish">Spanish</option>
			    <option value="Supply Chain Logistics">Supply Chain Logistics</option>
			    <option value="Theatre">Theatre</option>
			</select>
		    </div>
		    <br>

		    <div class="form-group g-mb-25">
			<label for="phone">Phone Number</label>
			<input class="form-control rounded-0 form-control-md" type="tel" placeholder="661-123-4567" value='<?php if(isset($sentphone)){echo $sentphone;} ?>'name="phone">
			<small class="form-text text-muted" id="emailHelp">Example 661-123-4567!</small>
		    </div>
		    <br>

		    <hr>
		    <fieldset class="form-group g-mb-25">
			<legend class="g-font-size-default">Q1. Is hunger currently affecting your academic performance at CSUB?</legend>
			<div class="form-check">
			    <label class="form-check-label">
				<input name="q1" class="form-check-input mr-1" type="radio"  value="true"<?php if($_POST['q1']=="true"){echo "selected=selected";} ?>'> Yes
			    </label>
			</div>
			<div class="form-check">
			    <label class="form-check-label">
				<input name="q1" class="form-check-input mr-1"  type="radio" value="false" <?php if($_POST['q1']=="false"){echo "selected=selected";} ?>'>No</label>
			</div>
		    </fieldset>
		    <br>
		    <hr>
		    <fieldset class="form-group g-mb-25">
			<legend class="g-font-size-default">Q2. How often have you had limited or uncertain access to nutritious and safe foods because of a lack of money and other resources?</legend>
			<div class="form-check">
			    <label class="form-check-label" for="q2">
				<input name="q2" class="form-check-input mr-1" type="radio" value="0">Never
			    </label>
			</div>
			<div class="form-check">
			    <label class="form-check-label" for="q2">
				<input name="q2" class="form-check-input mr-1" type="radio" value="1-3">1-3 Months
			    </label>
			</div>
			<div class="form-check">
			    <label class="form-check-label">
				<input name="q2" class="form-check-input mr-1"  type="radio" value="3-6">3-6 Months</label>
			</div>
			<div class="form-check">
			    <label class="form-check-label">
				<input name="q2" class="form-check-input mr-1"  type="radio" value="6-9">6-9 Months</label>
			</div>
			<div class="form-check">
			    <label class="form-check-label">
				<input name="q2" class="form-check-input mr-1"  type="radio" value="9-12">9-12 Months</label>
			</div>

		    </fieldset>
		    <br>
		    <hr>
		    <fieldset class="form-group g-mb-25">
			<legend class="g-font-size-default">Q3. Do you live on campus?</legend>
			<div class="form-check">
			    <label class="form-check-label">
				<input name="q3" class="form-check-input mr-1" type="radio"  value="true"> Yes
			    </label>
			</div>
			<div class="form-check">
			    <label class="form-check-label">
				<input name="q3" class="form-check-input mr-1"  type="radio" value="false">No</label>
			</div>
		    </fieldset>
		    <br>
		    <hr>
		    <fieldset class="form-group g-mb-25">
			<legend class="g-font-size-default">Q4. How often do you anticipate using the CSUB Food Pantry?</legend>

			<div class="form-check">
			    <label class="form-check-label">
				<input name="q4" class="form-check-input mr-1" type="radio" value="week">Once a Week
			    </label>
			</div>
			<div class="form-check">
			    <label class="form-check-label">
				<input name="q4" class="form-check-input mr-1"  type="radio" value="month">Once a Month</label>
			</div>
			<div class="form-check">
			    <label class="form-check-label">
				<input name="q4" class="form-check-input mr-1"  type="radio" value="semester">Once a Semester</label>
			</div>

		    </fieldset>
		    <br>
		    <hr>

		    <fieldset class="form-group g-mb-25">
			<legend class="g-font-size-default">Q5. I would like to receive further information for:</legend>
			<div class="form-check">
			    <label class="form-check-label g-mb-20">
				<input class="form-check-input mr-1" type="checkbox" name="q5">CalFresh
			    </label>
			</div>
			<div class="form-check">
			    <label class="form-check-label g-mb-20">
				<input class="form-check-input mr-1" type="checkbox" name="q5">Legal Services
			    </label>
			</div>
			<div class="form-check">
			    <label class="form-check-label g-mb-20">
				<input class="form-check-input mr-1" type="checkbox" name="q5">Emergency Housing Resources
			    </label>
			</div>
			<div class="form-check">
			    <label class="form-check-label g-mb-20">
				<input class="form-check-input mr-1" type="checkbox" name="q5">Other
			    </label>
			</div>

		    </fieldset>
		    <br>
		    <hr>

		    <fieldset class="form-group g-mb-25">
			<legend class="g-font-size-default">Q6. How did you find out about the CSUB Food Pantry? </legend>

			<div class="form-check">
			    <label class="form-check-label">
				<input name="q6" class="form-check-input mr-1" type="radio" value="social">Social Media
			    </label>
			</div>
			<div class="form-check">
			    <label class="form-check-label">
				<input name="q6" class="form-check-input mr-1"  type="radio" value="newspaper">Student Newspaper</label>
			</div>
			<div class="form-check">
			    <label class="form-check-label">
				<input name="q6" class="form-check-input mr-1"  type="radio" value="wom">Word of Mouth</label>
			</div>
			<div class="form-check">
			    <label class="form-check-label">
				<input name="q6" class="form-check-input mr-1"  type="radio" value="email">School-wide Email</label>
			</div>
			<div class="form-check">
			    <label class="form-check-label">
				<input name="q6" class="form-check-input mr-1"  type="radio" value="fliers">Fliers</label>
			</div>
			<div class="form-check">
			    <label class="form-check-label">
				<input name="q6" class="form-check-input mr-1"  type="radio" value="visit">Just a random visit!</label>
			</div>

		    </fieldset>
  <hr>
	<div class="row" >
		    <p>The CSUB Food Pantry provides food and other basic necessities (e.g. hygiene products, references to social services, etc.) to all California State University, Bakersfield students, faculty, and staff. We aim to provide nutritious, culturally appropriate foods on campus, all free of charge.
		    <br>
		    <br>
		    BY COMPLETING THIS FORM, I AGREE TO: <br>
		    - Not abuse the services of the CSUB Food Pantry <br>
		    - Only take the items that I reasonably expect to use.</p>
		</div>
<hr>
  <div class="submit-middle-0">
  <button class="btn btn-lg u-btn-primary rounded-0" type="submit" name="submit"  id="submit">   Sign Me Up!   </button>
       </div>
		</form>
	    </div>
	</div>
	<br>
