function check()
{
	var i1 = document.getElementById("i1").value;
	var i2 = document.getElementById("i2").value;
	var i3 = document.getElementById("i3").value;
	var email = document.getElementById("user");
	var pwd = document.getElementById("pwd");
	var shipping = document.getElementsByName("shipping");
	var bool = true;

	if(i1 < 0 || i2 < 0 || i3 < 0)
	{
		alert("Items need to have at least a value of 0!");
		bool = false;
	}

	if(!(pwd && pwd.value))
	{
		alert("Passwords must have a value!");
		bool = false;
	}

	for(var i = 0; i < shipping.length; i++)
	{
		if(shipping[i].checked)
		{
			break;
		}
		else if(i == shipping.length - 1)
		{
			alert("Must choose a shipping option!");
			bool = false;
		}
	}

	if(!(/^[a-zA-Z0-9.!#$%&'*+/=?^_{|}~-]+@[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*$/.test(email.value)))
	{
		alert("Not a valid email!");
		bool = false;
	}
	
	if(bool == true)
	{
		alert("Form submitted");
	}
	return bool;
}