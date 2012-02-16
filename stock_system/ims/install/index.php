
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="/stock_system/ims/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="/stock_system/ims/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="/stock_system/ims/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="/stock_system/ims/css/main.css" />
	<link rel="stylesheet" type="text/css" href="/stock_system/ims/css/form.css" />

	<script type="text/javascript" src="/stock_system/ims/assets/fcebde54/jquery.js"></script>
<script type="text/javascript" src="/stock_system/ims/assets/fcebde54/jquery.yiiactiveform.js"></script>
<title>Stock Control System - Login</title>
</head>

<body>

<div class="container" id="page">
	
	<img src="/stock_system/ims/images/logo.jpg" alt="ballpop" />	
	<div id="header">
		<div id="logo">Welcome To Stock Control System- Installation </div>
	</div><!-- header -->

	<div class="breadcrumbs">
</div><!-- breadcrumbs -->
	
	<div class="container">
	<div id="content">
		
<p>Please fill out the following form to configure system to your needs:</p>

<div class="form">

<form id="install" action="install.php" method="post">
	<p class="note">Fields with <span class="required">*</span> are required.</p>
	
	<table>
	<tr>
		<td><h4>Company Details</h4>
		<small>This will be appearing on the purchase order send to supplier</small>
		</td>
		<td><h4>Email Configuration</h4>
		<small>This will be used for sending emails</small>
		</td>
	</tr>
	
	
	<tr><td>
		<div class="row">
				<label class="required">Company Name<span class="required">*</span></label>		
				<input name="company_name" id="company_name" type="text" size ='40'/>
		</div>
		<div class="row">
				<label class="required">Company Address<span class="required">*</span></label>		
				<textarea name="company_address" id="company_address" cols="35" rows="5"></textarea>
		</div>		
		<div class="row">
				<label class="required">Telephone<span class="required">*</span></label>		
				<input name="telephone" id="telephone" type="text" size ='40'/>
		</div>
				<div class="row">
				<label class="required">Mobile<span class="required">*</span></label>		
				<input name="mobile" id="mobile" type="text" size ='40'/>
		</div>
				<div class="row">
				<label class="required">Fax<span class="required">*</span></label>		
				<input name="fax" id="fax" type="text" size ='40'/>
		</div>
		<div class="row">
				<label class="required">E-mail<span class="required">*</span></label>		
				<input name="company_email" id="company_email" type="text" size ='40'/>
		</div>
		</td>
		<td>
		
		<div class="row">
				<label class="required">Outgoing Mail (SMTP) Server<span class="required">*</span></label>		
				<input name="company_email" id="company_email" type="text" size ='40'/>
		</div>
		<div class="row">
				<label class="required">User Name<span class="required">*</span></label>		
				<input name="company_email" id="company_email" type="text" size ='40'/>
		</div>
		<div class="row">
				<label class="required">Password<span class="required">*</span></label>		
				<input name="company_email" id="company_email" type="text" size ='40'/>
		</div>
		<div class="row">
				<label class="required">Port<span class="required">*</span></label>		
				<input name="company_email" id="company_email" type="text" size ='40'/>
		</div>
		
		<br><br><br>
		<h4>Upload your company Logo</h4>
		<input type="file" name='logo_url'/> 
		
		
		</td>		
		
		
		</tr></table>
		<div class="row buttons">
		<input type="submit" name="finish" value="Finish" />	</div>

</form></div><!-- form -->
</div><!-- content -->
</div>

	<div id="footer">
		Copyright &copy; 2012 by UK Whitegoods Ltd.<br/>
		All Rights Reserved.<br/>
		System Designed by Sudeep Talati, Kruthika &amp; Team
		
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>