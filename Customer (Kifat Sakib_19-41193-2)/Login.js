function validateForm() 
  {
    
    var email = document.forms["myForm"]["email"].value;
    if (email==null || email=="") 
    {
      alert("email must be filled out");
      return false;
    }

    var password = document.forms["myForm"]["password"].value;
    if (password==null || password=="") 
    {
      alert("Password must be filled out");
      return false;
    }
  } 