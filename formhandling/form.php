<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title></title>
  </head>
  <body>


  <form name="myForm" action="action.php" method="post">

   <!-- TextField -->
   <p><input type="text" name="name" placeholder="Username"></p>

   <!-- PasswordField -->
   <p><input type="password" name="password" placeholder="password" ></p>

  <!-- Radio -->
   <p>
     <input type="radio" name="gender" value="male" checked> Male
     <input type="radio" name="gender" value="female"> Female
     <input type="radio" name="gender" value="others"> Others
  </p>



<!--Single Check Box-->
<p>
 <input type="checkbox" name="agree" value="yes">Agree

</p>



<!-- Multi CheckBox -->
<p>
  <input type="checkbox" name="cars[]" value="volvo" checked> Volvo
  <input type="checkbox" name="cars[]" value="toyota"> Toyota
  <input type="checkbox" name="cars[]" value="nano"> Nano
</p>



<!-- Dropdown-->
   <p>
     <select name="course" >
     <option value="" selected>--select--</option>
     <option value="html">HTML</option>
     <option value="css">CSS</option>
     <option value="js">JS</option>
     <option value="php">PHP</option>
   </select>
  </p>



  <!-- Multiple Dropdown-->
     <p>
       <select name="multicourse[]" multiple>
       <option value="" selected>--select--</option>
       <option value="html">HTML</option>
       <option value="css">CSS</option>
       <option value="js">JS</option>
       <option value="php">PHP</option>
     </select>
    </p>





<!-- TextArea -->
   <p>
     <textarea name="feedback" rows="8" cols="80" placeholder="Feedaback"></textarea>
   </p>

   <p><input type="submit"  value="Log In"></p>


  </form>



  </body>
</html>
