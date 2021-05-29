<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration Form</title>
        <style>
      body {background: lightblue;} 
      </style>

    </head>
   <body>
  <h1 align="center">Registration Form</h1>
    <form action="signup.php" method="POST">
        <table align= "center">
            <tr>
                <td>First Name</td>
                <td><input type="text" name="txt1"/></br></td>
            </tr>
            
             <tr>
                <td>Last Name</td>
                <td><input type="text" name="txt2"/></br></td>
            </tr>
            
             <tr>
                <td>D-O-B</td>
                <td><input type="date" name="txt3"/></br></td>
            </tr>
            
            <tr>
                <td>Email</td>
                <td><input type="email" name="txt4"/></br></td>
            </tr>
            
            <tr>
                <td>Password</td>
                <td><input type="password" name="txt5"/></br></td>
            </tr>
            
            <tr>
                <td>Mobile-No.</td>
                <td><input type="number" name="txt6"/></br></td>
            </tr>
            
            <tr>
                <td>Address</td>
                <td><textarea rows="2" cols="5" name="txt7"/></textarea></br></td>
            </tr>
            
            <tr>
                <td>Gender</td>
                <td>
                   Male<input type="radio" name="txt8" value="Male"/>
                   Female<input type="radio" name="txt8" value="Female"/>
                   Other<input type="radio" name="txt8" value="Other"/>
                </td>
            </tr>
            
            <tr>
                <td>
                    <input type="submit" value="Register"/>
                    <input type="reset" value="Reset"/>
                </td>
            </tr>
             
    </form>
</body>
</html>
