<?php
if(!$this->session->userdata('UserID')){
			?>
		 	<script> 
		 		alert("please try again after logging in..") 
		 		self.close();
				location.href = '<?=base_url()?>';
		 	</script>
		 	<?php
		}
?>
<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Ran Online</title>
	<link rel="Stylesheet" type="text/css" href="<?=base_url()?>Styles/Popup.css" media="all">
	<link rel="Stylesheet" type="text/css" href="<?=base_url()?>Styles/ItemShop.css" media="all">
	<script type="text/javascript" src="<?=base_url()?>Scripts/Common.js"></script>
</head>
<body>
    <form method="post" onsubmit="return fnSubmit(this)">
    <input type="hidden" id="hdnPrice" name="Price">
    <input type="hidden" id="hdnPaymentNum" name="PaymentNum" value="253435"> <!--SET RANDOM VALUE-->
    <section class="recharge">
	    <div class="wrapper">
		    <h1><div style="color:white; margin-top:5px;">TopUp</div></h1>
		    <div class="container">
            <h2>
    			Account Status : <?=(($this->Internal_model->CheckCharOnline($this->session->userdata('UserID')) == 0) ? "<b style='color:red'>Offline</b>":"<b style='color:green'>Online</b>")?>
    		</h2>
            <table class="payment-Info">
    			<caption>Account information</caption>
    		<tbody>
    			<tr>
    			    <th style="font-size:10px;">CODE</th>
    				<td>
    				<input type="text" id="txtCode" name="txtCode">
    				</td>
    			</tr>    

                <tr>
    			    <th style="font-size:10px;">PIN</th>
    				<td>
    				<input type="text" id="txtPin" name="txtPin">
    				</td>
    			</tr>    
            </tbody>
            <table/>
             <footer>
				<input type="image" src="<?=base_url()?>Images/ItemShopNew/progress_btn.gif" alt="Progress"
    						style="vertical-align:middle;">
    					<img src="<?=base_url()?>Images/ItemShopNew/cancel_btn.gif" class="pointer"
    						onclick="self.close();" alt="Cancel">
			</footer>
			</div>
	    </div>
    </section>
    </form>
    
    <script type="text/javascript" src="<?=base_url()?>Scripts/jquery-1.5.1.js"></script>
    
</body>
</html>
