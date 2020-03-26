<?php
    session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Using single SQL</title>
<style>


#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  
  width: 50%;
  border:3px solid black;
}

#customers td, #customers th {
 
  padding: 5px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th{
  padding-top: 12px;
  width: 40%;
  padding-bottom: 12px;
  padding-left: 13px;
  text-align: left;
  
  color: black;
 
}
.button {
  background-color: #007acc;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  }



</style>
</head>
<body >
<table class="table table-bordered" id="customers" border="0" align="center"  width="100%">
    

<tr>
              <td colspan="11" style="font-size:30px;color:black" bgcolor="#007acc" align="center">
               <b>Patient Details</b></td></tr>
<tr>
<th>register_id</th>
<th>pfname</th>
<th>plname</th>
<th>email</th>
<th>gender</th>
<th style="margin :10px">Data</th>
<th >AllergyName</th>
<th>Symptoms</th>
<th>Medication</th>  
<th>Frequency</th>
<th>message</th>    



</tr>
<?php
 $aaa = $_SESSION['student_id'];
mysql_connect("localhost","root");
mysql_select_db("ssip");
$res=mysql_query("SELECT allergy.* , patientreg.* FROM allergy, patientreg WHERE reg_id='$aaa' and allergy.reg_id=patientreg.reg_id   ");

while($row=mysql_fetch_array($res))
{
 ?>
    <tr>
    <td><p><?php echo $row['reg_id']; ?></p></td>
    <td><p><?php echo $row['pfname']; ?></p></td>
    <td><p><?php echo $row['plname']; ?></p></td>
    <td><p><?php echo $row['email']; ?></p></td>
    <td><p><?php echo $row['gender']; ?></p></td>
    <td><p><?php echo $row['Adate']; ?></p></td>
    <td><p><?php echo $row['AllergyName']; ?></p></td>
    <td><p><?php echo $row['Symptoms']; ?></p></td>
    <td><p><?php echo $row['Medication']; ?></p></td>
    <td><p><?php echo $row['Frequency']; ?></p></td>
    <td><p><?php echo $row['message']; ?></p></td>
    
    </tr>
    <?php
}
?>
</table>
</body>
</html>