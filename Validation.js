<h2>Registration Form</h1>
			<form name='registration' onSubmit="return formValidation()";>
			<ul>
			<li><label for="username">Name:</label></li>
			<li><input type="text" name="username" size="50" /></li>
			<li><label for="email">Email:</label></li>
			<li><input type="text" name="email" size="50" /></li>
			<li><label for="passid">Password:</label></li>
			<li><input type="password" name="passid" size="12" /></li>
			<li><label for="country">Country:</label></li>
			<li><select name="country">
			<option selected="" value="Default">(Please select a country)</option>
			<option value="AF">Australia</option>
			<option value="AL">Canada</option>
			<option value="DZ">India</option>
			<option value="AS">Russia</option>
			<option value="AD">USA</option>
			</select></li>
			<li><label id="gender">Gender:</label></li>
			<li><input type="radio" name="msex" value="Male" /><span>Male</span></li>
			<li><input type="radio" name="fsex" value="Female" /><span>Female</span></li>
			<li><label for="desc">About:</label></li>
			<li><textarea name="desc" id="desc"></textarea></li>
			<li><input type="submit" name="submit" value="Submit" /></li>
			</ul>
			</form>
			
		<script>
			function formValidation()
		{
var passid = document.registration.passid;
var uname = document.registration.username;
var ucountry = document.registration.country;
var uemail = document.registration.email;
var umsex = document.registration.msex;
var ufsex = document.registration.fsex; 

if(passid_validation(passid,7,12))
{
if(allLetter(uname))
{ 
if(countryselect(ucountry))
{
if(ValidateEmail(uemail))
{
if(validsex(umsex,ufsex))
{ 
} 
}
}
}
}
return false;
}
 

function passid_validation(passid,mx,my)
{
var passid_len = passid.value.length;
if (passid_len == 0 ||passid_len >= my || passid_len < mx)
{
alert("Password should not be empty / length be between "+mx+" to "+my);
passid.focus();
return false;
}
return true;
}
function allLetter(uname)
{ 
var letters = /^[A-Za-z]+$/;
if(uname.value.match(letters))
{
return true;
}
else
{
alert('Username must have alphabet characters only');
uname.focus();
return false;
}
}

function countryselect(ucountry)
{
if(ucountry.value == "Default")
{
alert('Select your country from the list');
ucountry.focus();
return false;
}
else
{
return true;
}
}

function ValidateEmail(uemail)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(uemail.value.match(mailformat))
{
return true;
}
else
{
alert("You have entered an invalid email address!");
uemail.focus();
return false;
}
} function validsex(umsex,ufsex)
{
x=0;

if(umsex.checked) 
{
x++;
} if(ufsex.checked)
{
x++; 
}
if(x==0)
{
alert('Select Male/Female');
umsex.focus();
return false;
}
else
{
alert('Form Succesfully Submitted');
window.location.reload()
return true;
}
}
		</script>