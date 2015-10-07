<?php include 'head.php';?>

<script type="text/javascript" language="javascript">
function validateNum(evt) {								//only letters can be entered into the phone number box
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
var emailCheck = document.forms["myForm"]["from"].value; 		//checks email syntax
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

	
var subCheck =	document.forms["myForm"]["subject"].value;			//checks to see if the subject field is filled in
if (subCheck == "null" || subCheck == "")
	{
	alert("Please fill in the subject field")
	return false;
	}	
	
var messageCheck = 	document.forms["myForm"]["message"].value;			//checks to see if the message has been written
if (messageCheck == "null" || messageCheck == "")
	{
	alert("Please write your message.\nIn the message field")
	return false;
	}	
	
    if (
    myForm.checkbox.checked == false) 		//makes sure that the check box is checked 
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
			<h2>General enquiry</h2>
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
	{
				?><table>
					<form name='myForm' onsubmit='return validateForm();' method='post' action="<?php echo $_SERVER["PHP_SELF"];?>">
					<tr>
						<td>From (Your email address):</td>
						<td><input type="email" name="from" placeholder="someone@email.com"></td>
					</tr>
					<tr>
						<td>Your Phone Number:</td>
						<td><input type="text" name="phoneNum" placeholder="045551234" onkeypress='validateNum(event)'></td>
					<tr>
						<td>Subject:</td>
						<td><input type="text" name="subject" maxlength="25" placeholder="Subject"></td>
					</tr>
					<tr>
						<td>Message:</td>
						<td><textarea rows="10" cols="40" name="message" maxlength="70"></textarea></td>
					<tr>
						<td><input type='checkbox' name='checkbox' value='Yes'>I understand that my details will be<br /> recorded and may be stored for future use.<br></td>
					</tr>
					<tr>
						<td><input type='submit' name='submit'></td>
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
				$subject = $_POST["subject"];
				$message = $_POST["message"];
				// message lines should not exceed 70 characters (PHP rule), so wrap it
				$message = wordwrap($message, 70);
				
				$combinedMessage = "$message \nPhone number: $phoneNum";
				
				// send mail
				mail("kanewardle.soo7@gmail.com", $subject, $combinedMessage, "From: $from\n");
				echo "<font color='green'>***Thank you for sending us enquiry***</font>";
			}
		}
	}
?>


		</main>
		
	</div>	
</body>		