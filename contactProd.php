<?php include 'head.php';?>

<script type="text/javascript" language="javascript">
function validateNum(evt) {				//only letters can be entered into the phone number box
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}


function validateForm()
{
var emailCheck = document.forms["myForm"]["from"].value;		//checks email syntax
var atpos=emailCheck.indexOf("@");
var dotpos=emailCheck.lastIndexOf(".");
if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= emailCheck.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }

var emailFilledCheck = document.forms["myForm"]["from"].value;		//checks email is filled in
if (numCheck == "null" || numCheck == "")
	{
	alert("Please fill in the from field")
	return false;
	}

var numCheck = document.forms["myForm"]["phoneNum"].value;		//checks numbers are in acceptable range and filled in
if (numCheck == "null" || numCheck == "" || numCheck > 0299999999 || numCheck < 030000000)
	{
	alert("Not a valid phone number\nMake sure that the phone number is the correct length")
	return false;
	}

var dropCheck = document.forms["myForm"]["dropDown"].value;		//ensures that an actual product is selected
if (dropCheck == "null" || dropCheck == "" || dropCheck == "Select")
	{
	alert("Please select a product")
	return false;
	}
	
	
	//makes sure that a radio button is selected
if((document.myForm.radioBTN[0].checked==false)&&(document.myForm.radioBTN[1].checked==false)&&(document.myForm.radioBTN[2].checked==false)&&(document.myForm.radioBTN[3].checked==false)&&(document.myForm.radioBTN[4].checked==false))
	{
	alert('You must select an aproximate quantity');
	return false
	}	
	

	
var messageCheck = 	document.forms["myForm"]["message"].value;	//checks to see if the message has been written
if (messageCheck == "null" || messageCheck == "")
	{
	alert("Please write your message.\nIn the message field")
	return false;
	}	
	

	

if (myForm.checkbox.checked == false) //makes sure that the check box is checked 
    {
        alert ('You must acknowledge to our terms before your message can be sent');
        return false;
    }
		
}
</script>
 
</head>

<body>
	<div id = "wrapper">

<?php include 'header.php';?>
		
		<main>
			<h2>Product enquiry</h2>
<?php
	function spamcheck($field)
	{
		// Sanitize e-mail address
		$field=filter_var($field, FILTER_SANITIZE_EMAIL);
		
		// Validate e-mail address
		if(filter_var($field, FILTER_VALIDATE_EMAIL))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	if (!isset($_POST["submit"]))		// display form if user has not clicked submit
	{ ?>
				<table>
					<form name="myForm" onsubmit="return validateForm();" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					<tr>
						<td>From (Your email address):</td>
						<td><input type="email" name="from" placeholder="someone@email.com"></td>
					</tr>
					<tr>
						<td>Your Phone Number:</td>
						<td><input type="text" name="phoneNum" placeholder="045551234" onkeypress='validateNum(event)'></td>
					<tr>
						<td>Product:</td>
						<td>
							<select name="dropDown">
								<option value="" selected="selected">Select</option>
								<?php			
// Collects data from "product" table 
 $data = mysql_query("SELECT * FROM product") 
 or die(mysql_error()); 
 
while($info = mysql_fetch_array( $data )) 
{
Print "<option value='" .$info['name'] . "'>" .$info['name'] . "</option>";
} 
?>

							</select>
						</td>
					</tr>
					<tr>
						<td>Approximate amount of product in units (1Kg, 100g, dozen, unit etc.):</td>
						<td>
							<input type="radio" name="radioBTN" id="1" value="1" />1
							<input type="radio" name="radioBTN" id="10" value="10" />10
							<input type="radio" name="radioBTN" id="50" value="50" />50
							<input type="radio" name="radioBTN" id="100" value="100" />100
							<input type="radio" name="radioBTN" id="150+" value="150+" />150+
						</td>
					<tr>
					<tr>
						<td>Message:</td>
						<td><textarea rows="10" cols="40" name="message" maxlength="70"></textarea></td>
					<tr>
						<td><input type="checkbox" name="checkbox" value="Yes">I understand that my details will be<br /> recorded and may be stored for future use.<br></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit"></td>
					</tr>
				</table>
			</form>
<?php
	}
	else

		// the user has submitted the form
	{
		// Check if the "from" input field is filled out
		if (isset($_POST["from"]))
		{
			// Check if "from" email address is valid
			$mailcheck = spamcheck($_POST["from"]);
			if ($mailcheck==FALSE)
			{
				echo "<font color='red'>***Invalid input, please try again.***</font>";
			}
			else
			{
				$from = $_POST["from"]; // sender
				$phoneNum = $_POST["phoneNum"];
				$dropDown = $_POST["dropDown"];
				$radioBTN = $_POST["radioBTN"];
				$message = $_POST["message"];
				// message lines should not exceed 70 characters (PHP rule), so wrap it
				$message = wordwrap($message, 70);
				
				$subject = "$dropDown ($radioBTN)";
				$combinedMessage = "$message \nPhone number: $phoneNum";
				
				// send mail
				mail("kanewardle.soo7@gmail.com",$subject, $combinedMessage, "From: $from\n");
				echo "<font color='green'>***Thank you for sending us enquiry***</font>";
			}
		}
	}
?>

 
 			

				

		</main>
		
	</div>	
</body>		