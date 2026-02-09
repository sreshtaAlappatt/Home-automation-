<html>
<head>
<head>
</head>

<style>
body{
	background-image:url("back1.jpg");
        width:100%;
        height:100%;
        background-position:center;
        background-size:cover;
        background-repeat:
        no-repeat;
        
}

button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 12px 30px;
    text-decoration: none;
    font-size: 20px;
    margin: 8px 2px;
    cursor: pointer;
    border:2px solid white;
}
div {
   
   background-color:aliceblue;
    
   
    
}

table{
	border:4px solid black;
	
	}
h1{
	background-color:grey;
}

</style>
<h1><b><center><font color="white" size="8">WELCOME TO HOME AUTOMATION</font></center></b></h1>
<form  method="POST" action="a.php">
<table align="center" border="4px"  width="350" height="350" bgcolor=white>

<tr><<td bgcolor="aliceblue"><b>DEVICE1</b></td><td><input type="radio" name="DEVICE1" value="on">ON <input type="radio" name="DEVICE1" value="off" checked="checked">OFF</td></tr>
<br>
<tr><td bgcolor="cornsilk"><b>DEVICE2</b></td><td><input type="radio" name="DEVICE2" value="on">ON <input type="radio" name="DEVICE2" value="off" checked="checked">OFF</td></tr>
<br>
<tr><td bgcolor="azure"><b>DEVICE3</b></td><td><input type="radio" name="DEVICE3" value="on">ON <input type="radio" name="DEVICE3" value="off" checked="checked">OFF</td></tr>
<br>
<tr><td bgcolor="beige"><b>DEVICE4</b></td><td><input type="radio" name="DEVICE4" value="on">ON <input type="radio" name="DEVICE4" value="off" checked="checked">OFF</td></tr>
<br>

</table>
<center><button type="submit">Submit</button></center>
</form

</body>

</html>