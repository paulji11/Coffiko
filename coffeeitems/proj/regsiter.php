<html>
<head><title>Registration Form</title>
<style>
 body {   

   margin        : 0;
   padding       : 0;
   display       : grid;
   place-content : center;
   min-height    : 100vh;
}
</style>
</head>
<body background-image :url("D:\Note\sem 4\html\CADLproject\coffeeitems\coffeereg.jpg") >
 <h1>COFFIKOO REGISTERATION</h1>
      <form  method="post" action="register_user.php">
       <table>
        <tr>
         <td>Name :</td> <td><input type="text" name="name"></td><br>
        </tr>
        <tr>
         <td>Email :</td> <td><input type="text" name="email"></td><br>
        </tr>
        <tr>
         <td>Password :</td> <td><input type="password" name="pwd"></td><br>
        </tr>
        <tr>
         <td>Confirm Password :</td> <td><input type="password" name="cpwd"><br>
        </tr>
        <tr>
         <td></td><td><input type="submit" value="Regsiter"></td>
        </tr>
       </table>
      </form>
</body>
</html>