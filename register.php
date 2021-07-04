<html>
    
<head>
    <title>Registration</title>
    <link href="https//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style type="text/css">

body {
  background: #C5E1A5;
}
form {
  width: 60%;
  margin: 60px auto;
  background: #efefef;
  padding: 60px 120px 80px 120px;
  text-align: center;
  -webkit-box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
  box-shadow: 2px 2px 3px rgba(0,0,0,0.1);
}
label {
  display: block;       
  position: relative;
  margin: 40px 0px;
}
.label-txt {
  position: absolute;
  top: -1.6em;
  padding: 10px;
  font-family: sans-serif;
  font-size: .8em;
  letter-spacing: 1px;
  color: rgb(120,120,120);
  transition: ease .3s;
}
.input {
  width: 100%;
  padding: 10px;
  background: transparent;
  border: none;
  outline: none;
}

.line-box {
  position: relative;
  width: 100%;
  height: 2px;
  background: #BCBCBC;
}

.line {
  position: absolute;
  width: 0%;
  height: 2px;
  top: 0px;
  left: 50%;
  transform: translateX(-50%);
  background: #8BC34A;
  transition: ease .6s;
}

.input:focus + .line-box .line {
  width: 100%;
}

.label-active {
  top: -3em;
}

button {
  display: inline-block;
  padding: 12px 24px;
  background: rgb(220,220,220);
  font-weight: bold;
  color: rgb(120,120,120);
  border: none;
  outline: none;
  border-radius: 3px;
  cursor: pointer;
  transition: ease .3s;
}

button:hover {
  background: #8BC34A;
  color: #ffffff;
}
</style>
</head>
<body>
 
<script type="text/javascript">
   function checkForm(form)
  {
    if(form.email1.value == "") {
      alert("Error: Email cannot be blank!");
      form.email1.focus();
      return false;
    }
    if(form.name1.value == "") {
      alert("Error: Name cannot be blank!");
      form.username.focus();
      return false;
    }
    if(form.CONTACT.value.length < 10  && sform.CONTACT.value.length > 10) {
        alert("Error: It should contain only 10 numbers ");
        form.pass1.focus();
        return false;
      }
    re = /^\w+$/;
    if(!re.test(form.name1.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }

    if(form.pass1.value != "" && form.pass1.value == form.pass2.value) {
      if(form.pass1.value.length < 6) {
        alert("Error: Password must contain at least six characters!");
        form.pass1.focus();
        return false;
      }
      if(form.pass1.value == form.name1.value) {
        alert("Error: Password must be different from Username!");
        form.pass1.focus();
        return false;
      }
      
      re = /[0-9]/;
      if(!re.test(form.pass1.value)) {
        alert("Error: password must contain at least one number (0-9)!");
        form.pass1.focus();
        return false;
      }
      re = /[a-z]/;
      if(!re.test(form.pass1.value)) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        form.pass1.focus();
        return false;
      }
      re = /[0-9]/;
      if(!re.test(form.CONTACT.value)) {
        alert("Error: Contact must contain only numbers");
        form.pass1.focus();
        return false;
      }

      

      re = /[A-Z]/;
      if(!re.test(form.pass1.value)) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        form.pass1.focus();
        return false;
      }
    } else {
      alert("Error: Please check if you have entered correct password in confirm password");
      form.pass1.focus();
      return false;
    }
    alert("YOUR FORM IS SUCCESSFULLY SUBMITTED")
    
  }

  
</script>
<br>
   <h1 align="center" >REGISTRATION FORM</h1>

    <form action="db/insert.php"
     method="post" enctype="multipart/form.data" onsubmit="return checkForm(this)" name="form">
    <label>
    <p class="label-txt">ENTER YOUR NAME</p><br>
   
    <input type="text" class="input" name="name1" >
    <div class="line-box">
      <div class="line"></div>
    </div>  
  <label>
    <p class="label-txt">ENTER YOUR EMAIL</p><br>
    
    <input type="EMAIL" class="input" name="email1">
    <div class="line-box">      
      <div class="line"></div>
    </div>
  </label>
  <label>
    <p class="label-txt">ENTER YOUR CONTACT</p><br>
   
    <input type="text" class="input" name="contact" >
    <div class="line-box">
      <div class="line"></div>
    </div>
  
  </label>
  <label>
    <p class="label-txt">ENTER YOUR ADDRESS</p><br>
   
    <input type="text" class="input" name="address" >
    <div class="line-box">
      <div class="line"></div>
    </div>
  <label>
    <p class="label-txt">ENTER YOUR PASSWORD</p><br>   
    
    <input type="PASSWORD" class="input" name="pass1">
    <div class="line-box">
      <div class="line"></div>
    </div>

  </label>

  <label>
    <p class="label-txt">CONFIRM PASSWORD </p><br>
    <input type="PASSWORD" class="input" name="pass2">
    <div class="line-box">
      <div class="line"></div>
    </div>
  </label>
  

  
  <button type="submit">submit</button>

</form>
</body>
</html>




