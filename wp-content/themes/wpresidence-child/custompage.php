<?php
/*
Template Name: Custom Page Cashless
*/
?>

<!DOCTYPE html>
<html>
<head>
	<?php get_header();
	?>

   	<!--    <link rel="stylesheet" type="text/css" href="styles.css"> -->
<!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
<!-- JavaScript Bundle with Popper -->
<!-- <script
  src="https://code.jquery.com/jquery-migrate-3.3.2.min.js"
  integrity="sha256-Ap4KLoCf1rXb52q+i3p0k2vjBsmownyBTE1EqlRiMwA="
  crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->

<script>
	
	jQuery(document).ready(function(){
		console.log(jQuery.fn.tooltip.Constructor.VERSION);
	})
</script>
<style>
	.fade{
		opacity: 100;
	}
	.modal-backdrop.show{
		opacity: 0;
		z-index: -100000000000000000000000;
	}
	body{
		background-color: white;
	}
	button:not(:hover){
		background-color: transparent !important;
	}
.card-background{
	background-color: #CEF2FE;

}
#card-header{
	color: rgb(9,39,85);
	font-weight: 600;
	padding-top: 20px;
}
#card-inner-padding{
	/*padding: 25px;*/
	border-radius: 20px;
}

#card-radius-border{
	border-radius: 20px;
}

#spanPaymentCenters{
	display: inline-block;
	vertical-align: bottom; 
	color: rgb(9,39,85);
	margin-bottom: 10px;

}

.dragonpayImage{
	width: 250px; 
	margin-top: 10px;
}

.paymentCenterFontColor{
	color: rgb(9,39,85);
}




</style>
</head>
<body>


	<?php //echo bloginfo('stylesheet_directory');?>
	<div class="container-fluid"></div>
	<section class="bodysection">
		<div class="container">
			<div class="row">
				<div style="margin-top: 60px;"></div>
				<div class="col-sm-12">

						<h2 class="lh-sm fs-1" style="color: #092845;"><b>Cashless payments</b> made <br>
						easier with Golden Haven.</h2>

				</div>
			</div>
			<div style="padding-bottom: 20px;"></div>
			<div class="row">
				<div class="col-sm-12">
					<p class="lh-sm fs-6" style="color: #092845">Contactless Payments are more convenient and more secure.<br>
					Pay your monthly dues with just a tap of your fingertips.</p>
				</div>
			</div>
		</div>
		<br>
<div class="container-fluid">
<div class="row row-col-5">

<div class="col">

	<div class="card" id="card-radius-border">
		<div class="card-body card-background" id="card-inner-padding" style="padding-bottom: 120px;">
			<div class="card-title">
				<h1 id="card-header">Card Payments</h1>
			</div>
			<p class="card-text fs-5">Pay via <br> VISA/Mastercard <br> (PesoPay)</p>
			<br>
			<a href="https://online-payments.goldenhaven.com.ph/payment.php" style="background-color: transparent;" rel="nofollow">
			<img src="<?php echo bloginfo('stylesheet_directory');?>/img/VISA.png" alt="visa" class="img-fluid">
			</a>
			<br>
			<br>
			<a href="https://online-payments.goldenhaven.com.ph/payment.php" style="background-color: transparent;" rel="nofollow">
			<img src="<?php echo bloginfo('stylesheet_directory');?>/img/Mastercard.png" alt="Mastercard" class="img-fluid">
			</a>
		</div>
	</div>

</div>
		<br>
<div class="col">

	<div class="card" id="card-radius-border">
		<div class="card-body card-background" id="card-inner-padding" style="padding-bottom: 150px;">
			<div class="card-title">
				<h1 id="card-header">Mobile Wallets</h1>
			</div>
			<p class="card-text fs-5">Pay via GCash,<br> PayMaya, AllEasy</p>
			<br>
			&nbsp;
			<a href="" data-bs-target="#GCashModal" data-bs-toggle="modal">
			<img src="<?php echo bloginfo('stylesheet_directory');?>/img/GCash.png" alt="GCash" class="img-fluid" >
		</a>
			&nbsp;
			<a href="" data-bs-toggle="modal" data-bs-target="#paymayamodal">
			<img src="https://www.goldenhaven.com.ph/wp-content/uploads/2022/07/maya-logo.png" alt="Paymaya" class="img-fluid">
		</a>
			&nbsp;
			<a href="" data-bs-toggle="modal" data-bs-target="#alleasymodal">
			<img src="<?php echo bloginfo('stylesheet_directory');?>/img/AllEasy.png" alt="AllEasy" class="img-fluid">
		</a>
		</div>
	</div>

</div>
		<br>
<div class="col">

	<div class="card" id="card-radius-border">
		<div class="card-body card-background" id="card-inner-padding" style="padding-bottom: 65px;">
			<div class="card-title">
				<h1 id="card-header">Bills Payments</h1>
			</div>
			<p class="card-text fs-5">Online Banking, <br> Mobile Banking, <br> Over-the-counter</p>
			<div style="height: 10px;"></div>
<div class="row">
<div class="col-sm-6">
	<a href="" data-bs-toggle="modal" data-bs-target="#rcbcModal">
	<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/RCBC.png" alt="RCBC" class="img-fluid mt-2">
</a>
</div>

<div class="col-sm-6">
	<a href="" data-bs-toggle="modal" data-bs-target="#bdoModal">
	<img  src="<?php echo bloginfo('stylesheet_directory');?>/imgs/BDO.png" alt="BDO" class="img-fluid mt-2">
</a>
	</div>
</div>
<!-- 			<img src="./imgs/rcbc-bdo.png" class="img-fluid mt-3"> -->
			<img src="<?php echo bloginfo('stylesheet_directory');?>/img/Allbank.png" class="img-fluid" alt="Allbank">
			<a href="" data-bs-toggle="modal" data-bs-target="#ubModal"><img src="<?php echo bloginfo('stylesheet_directory');?>/img/Unionbank.png" alt="Unionbank" class="img-fluid "></a>
			<a href="" data-bs-toggle="modal" data-bs-target="#mbModal"><img src="<?php echo bloginfo('stylesheet_directory');?>/img/Metrobank.png"  alt="Metrobank" class="img-fluid "></a>
			<a href=""  data-bs-toggle="modal" data-bs-target="#sbModal"><img src="<?php echo bloginfo('stylesheet_directory');?>/img/sb.png" alt="Securitybank" class="img-fluid"></a>
		</div>
	</div>

</div>











		<br>
<div class="col">

	<div class="card" id="card-radius-border">
		<div class="card-body card-background" id="card-inner-padding" style="padding-bottom: 65%;">
			<div class="card-title">
				<h1 id="card-header">Auto-Debit Arrangement</h1>
			</div>
			<p class="card-text fs-5">Pay throught ADA via BDO and EastWest Bank</p>
			<br>
			<img src="<?php echo bloginfo('stylesheet_directory');?>/img/bdo.png" alt="BDO" class="img-fluid" style="margin-top: 45%; margin-bottom: 21%;">
			<img src="<?php echo bloginfo('stylesheet_directory');?>/img/EastWest.jpg" alt="Eastwest" class="img-fluid">
		</div>
	</div>

</div>



<div class="col">

	<div class="card" id="card-radius-border">
		<div class="card-body card-background" id="card-inner-padding" style="padding-bottom: 25%;">
			<div class="card-title">
				<h1 id="card-header">Scan To Pay (P2M)</h1>
			</div>
			<p class="card-text fs-5">Cashless transaction is the new trend. All you need is a QR Code and your Mobile Phone. Its Fast, Convenient and Secure.</p>
			<br>
			<a href="https://online-payments.goldenhaven.com.ph/p2m/" rel="nofollow">
			<img src="<?php echo bloginfo('stylesheet_directory');?>/img/Allbank.png" alt="Allbank" style="width: 250px" class="img-fluid">
			</a>
			<center>
				<a href="https://online-payments.goldenhaven.com.ph/p2m/" rel="nofollow"><img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/CB.PNG" alt="ChinaBank" style="width: 250px" class="img-fluid"></a></center>
			<br>
			<center>
				<a href="https://online-payments.goldenhaven.com.ph/p2m/" rel="nofollow"><img src="<?php echo bloginfo('stylesheet_directory');?>/img/Unionbank.png" alt="Union Bank" style="width: 250px" class="img-fluid"></a></center>
			<br>
			<br>

			<div class="row">
			<div class="col-md-6">
			<a href="https://online-payments.goldenhaven.com.ph/p2m/" rel="nofollow"><img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/AUB.png" alt="AUB" class="img-fluid"></a>
		</div>
		<div class="col-md-6">
			<a href="https://online-payments.goldenhaven.com.ph/p2m/" rel="nofollow"><img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/RCBC.png" alt="RCBC" class="img-fluid"></a>
		</div>
			</div>

		</div>
	</div>

</div>

</div>
</div>


<br>=

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12  card-background" id="card-inner-padding">
			
				<div class="row">
					<div class="col-sm-11 offset-sm-1">

						<p class="fs-2 fw-bold" id="spanPaymentCenters">Payment Centers Powered by</p><a href="https://online-payments.goldenhaven.com.ph/dragonpay/" rel="nofollow"><img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/dragonpay-logo.png"alt="Dragonpay"class="img-fluid dragonpayImage"></a> 
					</div>
				</div>
<!-------------------------- OVER THE COUNTER --------------->
				<div class="row">
						<div class="col-sm-10 offset-sm-1 py-4">
							<fieldset class="border p-3 border-primary">
								<legend class="w-auto mx-3 px-3 float-none fw-bold paymentCenterFontColor" style="display: inline-block;">Currently Supported Over-the-Counter Banks: </legend>
								<div class="row">
									<div class="col-md-2 offset-md-1">
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/AUB.png" alt="aub" class="img-fluid">
									</div>
									<div class="col-md-2">
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/BPI.png" alt="bpi" class="img-fluid">
									</div>
									<div class="col-md-2">
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/UCPB.png" alt="ucpb" class="img-fluid">
									</div>
									<div class="col-md-2">
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/PNB.png" alt="pnb" class="img-fluid">
									</div>
									<div class="col-md-2">
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/Unionbank.png" alt="ub" class="img-fluid">
									</div>
								</div>
<br>
								<div class="row">
									<div class="col-md-2 offset-md-1">
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/Landbank.png" alt="landbank" class="img-fluid">
									</div>
									<div class="col-md-2">
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/ChinaBank.png" alt="chinabank" class="img-fluid">
									</div>
									<div class="col-md-2">
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/BDO NetworkBank.png" alt="bdo network" class="img-fluid">
									</div>
									<div class="col-md-2">
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/RCBC.png" alt="rcbc" class="img-fluid">
									</div>
									<div class="col-md-2">
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/SB.png" alt="securitybank" class="img-fluid">
									</div>
								</div>
<br>
								<div class="row">
									<div class="col-md-2 offset-md-2">
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/MetroBank.png" alt="metrobank" class="img-fluid">
									</div>
									<div class="col-md-2">
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/Robinsons.png" alt="robinsonsbank" class="img-fluid">
									</div>
									<br>
									<br>
									<div class="col-md-2">
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/BDO.png" alt="bdo" class="img-fluid">
									</div>
									<div class="col-md-2">
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/EastWest.png" alt="eastwest" class="img-fluid">
									</div>
								</div>
 							</fieldset>
						</div>
				</div>
<!------------------------------------- SUPPORTED ATM BASED BANK PAYMENTS ------------------>
								<div class="row">
						<div class="col-sm-10 offset-sm-1 py-4">
							<fieldset class="border p-3 border-primary">
								<legend class="w-auto mx-3 px-3 float-none fw-bold paymentCenterFontColor" style="display: inline-block;">Currently Supported ATM-Based Bank Payments: </legend>
								<div class="row" >
									<div class="col-md-2 offset-md-2">
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/BDO.png" alt="bdo" class="img-fluid">
									</div>
									<div class="col-md-2">
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/ChinaBank.png" alt="chinabank" class="img-fluid">
									</div>
									<div class="col-md-2">
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/PNB.png" alt="pnb" class="img-fluid">
									</div>
									<div class="col-md-2">
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/RCBC.png" alt="rcbc" class="img-fluid">
									</div>
								</div>
<br>
								<div class="row">
									<div class="col-md-2 offset-md-3" >
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/SB.png" alt="securitybank" class="img-fluid">
									</div>
									<div class="col-md-2">
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/UCPB.png" alt="ucpb" class="img-fluid">
									</div>
									<div class="col-md-2">
										<img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/Unionbank.png" alt="unionbank" class="img-fluid">
								</div>
 							</fieldset>
						</div>
				</div>


		</div>
	</div>
</div>
</section>



<div style="margin-bottom: 40px;"></div>

<!-----------MODAL SECTION----------------------------->
<div class="modal fade" id="rcbcModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">RCBC</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<center><img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/RCBC.png"  alt="rcbc" class="img-fluid" style="width: 45%"></center>
<p class="fs-3">Please enroll/select Golden Haven Memorial Park as biller.</p>

<p class="fs-3">Required enrollment details include:</p>

<p class="fs-3 lh-sm">•Company/Biller Name: Golden Haven Memorial Park

•Subscriber Number: (Client Code e.g. EZE0123456)

•Subscriber Name: (Client Name)</p>
<br>
&nbsp;
<center>
<a href="https://www.rcbconlinebanking.com/" class="btn btn-primary"><b>Click Here</b> </a>
</center>

      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="bdoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">BDO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<center><img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/BDO.png" alt="bdo" class="img-fluid" style="width: 45%"></center>
<p class="fs-3">Please enroll/select Golden Haven Memorial Park as biller.</p>

<p class="fs-3">Required enrollment details include:</p>

<p class="fs-3 lh-sm">•Company/Biller Name: Golden Haven Memorial Park

•Subscriber Number: (Client Code e.g. EZE0123456)

•Subscriber Name: (Client Name)</p>
<br>
&nbsp;
<center>
<a href="https://online.bdo.com.ph/" class="btn btn-primary"><b>Click Here</b> </a>
</center>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ubModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">UnionBank</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<center><img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/Unionbank.png" alt="unionbank" class="img-fluid" style="width: 45%"></center>
<p class="fs-3">Please enroll/select Golden Haven Memorial Park as biller.</p>

<p class="fs-3">Required enrollment details include:</p>

<p class="fs-3 lh-sm">
•Company/Biller Name: Golden Haven Memorial Park

•Subscriber Number: (Client Code e.g. EZE0123456)

•Subscriber Name: (Client Name)</p>
<br>
&nbsp;
<center>
<a href="https://online.unionbankph.com/online-banking/login#!/login" class="btn btn-primary"><b>Click Here</b> </a>
</center>

      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="mbModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Metrobank</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<center><img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/MetroBank.png" alt="metrobank" class="img-fluid" style="width: 45%"></center>
<p class="fs-3">Please enroll/select Golden Haven Memorial Park as biller.</p>

<p class="fs-3">Required enrollment details include:</p>
<p class="fs-3 lh-sm">
•Company/Biller Name: Golden Haven Memorial Park

•Subscriber Number: (Client Code e.g. EZE0123456)

•Subscriber Name: (Client Name)</p>
<br>
&nbsp;
<center>
<a href="https://personal.metrobankdirect.com/RetailInternetPortal/" class="btn btn-primary"><b>Click Here</b> </a>
</center>

      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="sbModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Security Bank</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<center><img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/SB.png" alt="securitybank" class="img-fluid" style="width: 45%"></center>
<p class="fs-3">Please enroll/select Golden Haven Memorial Park as biller.</p>

<p class="fs-3">Required enrollment details include:</p>

<p class="fs-3 lh-sm">•Company/Biller Name: Golden Haven Memorial Park

•Subscriber Number: (Client Code e.g. EZE0123456)

•Subscriber Name: (Client Name)</p>
<br>
&nbsp;
<center>
<a href="https://securitybankonline.securitybank.com/login/" class="btn btn-primary"><b>Click Here</b> </a>
</center>

      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="GCashModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GCash</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<center><img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/GCAsh.png" alt="gcash" class="img-fluid" style="width: 45%"></center>
      	<p class="fs-3">•Open GCash Application and select "Pay Bills"</p>
      	<p class="fs-3">•Select others in the billers section</p>
      	<p class="fs-3">•Choose "Golden Haven"</p>
      	<p class="fs-3">•Fill in required field</p>
      	<p class="text-break fs-3">•For inquiries, email us at <a href="mailto:creditandcollection@goldenhaven.com.ph">creditandcollection@goldenhaven.com.ph</a></p>

      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="paymayamodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PayMaya</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<center><img src="https://www.goldenhaven.com.ph/wp-content/uploads/2022/07/maya-logo.png" alt="paymaya" class="img-fluid" style="width: 45%"></center>
      	<p class="fs-3">•Open Maya app</p>
      	<p class="fs-3">•Select Bills</p>
      	<p class="fs-3">•Select Memorial</p>
      	<p class="fs-3">•Select Golden Haven Memorial Park Inc.</p>
      	<p class="fs-3">•Complete the Pay Bills Details</p>
      	<p class="text-break fs-3">•Send us a screenshot of your transaction at <a href="mailto:creditandcollection@goldenhaven.com.ph">creditandcollection@goldenhaven.com.ph</a></p>
      </div>
    </div>
  </div>
</div>




<div class="container">
<div class="modal fade" id="alleasymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">AllEasy</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      	<center><img src="<?php echo bloginfo('stylesheet_directory');?>/imgs/AllEasy.png" alt="alleasy" class="img-fluid" style="width: 45%"></center>
      	<p class="fs-3">•Login to your AllEasy, and select "Pay Bills"</p>
      	<p class="fs-3">•Type "Golden Haven" in the Search Tab</p>
      	<p class="fs-3">•Fill in the required details <br>
      		-Reference Code (Sample: BAU001111) <br>
      		-Amount <br>
      		-Client Name
      	</p> 
      	<p class="fs-3">•Confirm Transaction and you're done!</p>
      </div>
    </div>
  </div>
</div>
</div>

<!----------------END OF MODAL SECTION----------------------------------->





<?php get_footer();?>

</body>
</html>