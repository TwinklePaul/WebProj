var slideIndex = 0;
			
			
			function carousel() 
			{
				var i;
				var slides = document.getElementsByClassName("slide");
				
				for (i = 0; i < slides.length; i++) 
				{
					slides[i].style.display = "none";  
				}
				slideIndex++;
	  
				if (slideIndex > slides.length) {slideIndex = 1} 
  
				slides[slideIndex-1].style.display = "block";  
				setTimeout(carousel, 2000);
			}
			
			carousel();
			
			
			function match()
			{
				var pass1 = document.forms["reg"]["pass1"]; 
				var pass2 = document.forms["reg"]["pass2"]; 
				
				if (pass1.value == pass2.value)
				{
					pass2.style.background='lime';
					pass1.style.background='lime';
				}
				else
				{
					pass2.style.background='red';
					pass1.style.background='red';
				}	
				
			}

			function CheckPassword(inputtxt) 
			{ 
				var decimal=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
				if(inputtxt.value.match(decimal)) 
				{ 
					inputtxt.style.background='lime';
					return true;
				}
				else
				{ 
					inputtxt.style.background='red';
					return false;
				}
			} 

			function validate()								 
			{ 
				var name = document.forms["reg"]["name"];			 
				var email = document.forms["reg"]["email"]; 
				var phone = document.forms["reg"]["phone"]; 
				var password = document.forms["reg"]["pass1"]; 
				var address = document.forms["reg"]["address"]; 

				if (name.value == "")								 
				{ 
					window.alert("Please enter your name."); 
					name.focus(); 
					this.style.background='red';
					return false;
				} 

				if (address.value == "")							 
				{ 
					window.alert("Please enter your address."); 
					name.focus(); 
					this.style.background='red';
					return false; 
				} 
				
				if (email.value == "")								 
				{ 
					window.alert("Please enter a valid e-mail address."); 
					email.focus(); 
					this.style.background='red';
					return false; 
				} 

				if (email.value.indexOf("@", 0) < 0)				 
				{ 
					window.alert("Please enter a valid e-mail address."); 
					email.focus(); 
					this.style.background='red';
					return false; 
				} 

				if (email.value.indexOf(".", 0) < 0)				 
				{ 
					window.alert("Please enter a valid e-mail address."); 
					email.focus(); 
					this.style.background='red';
					return false; 
				} 

				if (phone.value == "")						 
				{ 
					window.alert("Please enter your telephone number."); 
					phone.focus(); 
					this.style.background='red';
					return false; 
				} 

				if (password.value == "")					 
				{ 
					window.alert("Please enter your password"); 
					password.focus(); 
					this.style.background='red';
					return false; 
				}

				return true; 
			}

			function inform()
			{
				alert ("Password length: 8 to 15 characters; must contain at least 1 lowercase letter, 1 uppercase letter, 1 numeric digit, & 1 special character.");
			}

