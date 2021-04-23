<div class="error"></div>
<div class="success"></div>
<link href="otp_style.css" type="text/css" rel="stylesheet" />
<form id="frm-mobile-verification">
	<div class="form-row">
		<label>OTP is sent to Your Mobile Number</label>		
	</div>

	<div class="form-row">
		<input type="number"  id="mobileOtp" class="form-input" placeholder="Enter the OTP">		
	</div>

	<div class="row">
		<input id="verify" type="button" class="btnVerify" value="Verify" onClick="verifyOTP();">		
	</div>
	<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="verification.js"></script>

</form>
