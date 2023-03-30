<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Upload Image File</title>
  </head>
  <style>
    .title {
  display: flex;
  align-items: center;
}

.title img {
  margin-right: 10px;
}
label {
  display: inline-block;
  width: 120px;
  text-align: right;
  margin-right: 40px;
  font-size: 20px;
}

input[type="text"]{
  display: inline-block;
  width: 200px;
  height: 20px;
}
input[type="radio"]{
  display: inline-block;
  width: 10px;
  align-items: baseline;
  font-size: 20px;

}
.buttons{
  text-align: center;
}

.buttons input[type="reset"], .buttons input[type="submit"] {
  margin-left: 10px;
  font-size: 15px;
  background-color: rgb(43, 39, 116);
  color: #fff;
  padding: 10px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-right: 5px;
}
  </style>
  <body>
  <div class="title">
        <img src="four.jpg" alt="" height="50px" width="50px">
        <h1 style="color: red;">Employee Registration Form</h1>
      </div>
      <form class="" action="connection1.php" method="post" autocomplete="off" enctype="multipart/form-data">
        <input type="radio" name="title" value="Mr">Mr.     
        <input type="radio" name="title" value="Mrs">Mrs.
        <input type="radio" name="title" value="Ms">Ms <br>          
        <label> First Name </label>
        <input type="text" name="firstname" placeholder="First Name"> <br>    
        <label> Last Name</label>              
        <input type="text" name="lastname" placeholder="Last Name"> <br>    
        <label> MailAddress1</label>      
        <input type="text" name="address1"> <br>     
        <label> MailAddress2</label>          
        <input type="text" name="address2"> <br> 
        <label> City</label>            
        <input type="text" name="city" style="align-content:center;"> <br>     
        <label> State </label>           
        <select name="state" style="display: inline-block; width: 150px; height: 20px;">           
            <option value="Baringo">Baringo</option>       
            <option value="Dandora">Dandora</option>        
            <option value="Nairobi">Nairobi</option>         
            <option value="Kiambu">Kiambu</option>       
            <option value="Turkana">Turkana</option>        
        </select><br>        
        <label> Zip </label> 
        <input type="text" name="zip"> <br>   
        <label> Upload Photo </label>                     
        <input type="file" name="photo" id = "image" accept=".jpg, .jpeg, .png" value="Browse"> <br> <br>
        <div class="buttons">
            <input type="reset" name="reset" value="Reset">
            <input type="submit" name="submit" value="Submit">
        </div>   
        </form>  
        <hr>
  </body>
</html>
