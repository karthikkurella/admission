<!DOCTYPE html>

<html>

<head>
  <title>Student Admission Form</title>
  <?php 
  $conn = mysqli_connect("localhost", "root", "", "admission");
  $result=mysqli_query($conn,"SELECT * FROM `school` WHERE `supporting`='10th' ");
  $count=mysqli_num_rows($result);
  $choices10th = array();
  $i=0;
  if($count>0){
    while($row = mysqli_fetch_assoc($result))
    {
        $choices10th[$i] = $row['name'];
        echo $row['name'];
        $i=$i+1;
    }
    }
    $result=mysqli_query($conn,"SELECT * FROM `school` WHERE `supporting`='+1' ");
  $count=mysqli_num_rows($result);
  $choicesplusone = array();
  $i=0;
  if($count>0){
    while($row = mysqli_fetch_assoc($result))
    {
        $choicesplusone[$i] = $row['name'];
        echo $row['name'];
        $i=$i+1;
    }
    }
    $result=mysqli_query($conn,"SELECT * FROM `school` WHERE `supporting`='+2' ");
  $count=mysqli_num_rows($result);
  $choicesplustwo = array();
  $i=0;
  if($count>0){
    while($row = mysqli_fetch_assoc($result))
    {
        $choicesplustwo[$i] = $row['name'];
        echo $row['name'];
        $i=$i+1;
    }
    }
    $result=mysqli_query($conn,"SELECT * FROM `school` WHERE `supporting`='degree' ");
  $count=mysqli_num_rows($result);
  $choicesdegree = array();
  $i=0;
  if($count>0){
    while($row = mysqli_fetch_assoc($result))
    {
        $choicesdegree[$i] = $row['name'];
        echo $row['name'];
        $i=$i+1;
    }
    }
    $result=mysqli_query($conn,"SELECT * FROM `school` WHERE `supporting`='university' ");
  $count=mysqli_num_rows($result);
  $choicesuniversity = array();
  $i=0;
  if($count>0){
    while($row = mysqli_fetch_assoc($result))
    {
        $choicesuniversity[$i] = $row['name'];
        echo $row['name'];
        $i=$i+1;
    }
    }

  ?>
  <script >
    function validate_form() {
    if (document.std.std_name.value == "") {
        alert("Please fill in the column 'Student Name' box.");
        return false;
    }
if (document.std.stdf_name.value == "") {
        alert("Please fill in the column 'Father Name' box.");
        return false;
    }
if (document.std.stdm_name.value == "") {
        alert("Please fill in the column 'Mother Name' box.");
        return false;
    }
if (document.std.std_email_id.value == "") {
        alert("Please fill in the column 'Student Email' box.");
        return false;
    }
if (document.std.father_email_id.value == "") {
        alert("Please fill in the column 'Father Email' box.");
        return false;
    }

if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(document.std.std_email_id.value)) {
        alert("You have entered an invalid email address!");
        return (false);
    }

if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(document.std.father_email_id.value)) {
        alert("You have entered an invalid email address!");
        return (false);
    }


var radios = document.getElementsByName("malefemale");
    var formValid = false;

    var i = 0;
    while (!formValid && i < radios.length) {
    if (radios[i].checked) formValid = true;
    i++;
    }
    if (!formValid) {
alert("Must check gender option!");
    return formValid;
}
alert("sucessfully Submitted");

}

function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode != 46 && charCode > 31 &&
        (charCode < 48 || charCode > 57)) {
        alert("Enter Number");
        return false;
    }
    return true;
}

var choices10th = new Array();
    <?php foreach($choices10th as $key => $val){ ?>
        choices10th.push('<?php echo $val; ?>');
    <?php } ?>
    var choicesplusone = new Array();
    <?php foreach($choicesplusone as $key => $val){ ?>
        choicesplusone.push('<?php echo $val; ?>');
    <?php } ?>
    var choicesplustwo = new Array();
    <?php foreach($choicesplustwo as $key => $val){ ?>
        choicesplustwo.push('<?php echo $val; ?>');
    <?php } ?>
    var choicesdegree = new Array();
    <?php foreach($choicesdegree as $key => $val){ ?>
        choicesdegree.push('<?php echo $val; ?>');
    <?php } ?>
    var choicesuniversity = new Array();
    <?php foreach($choicesuniversity as $key => $val){ ?>
        choicesuniversity.push('<?php echo $val; ?>');
    <?php } ?>

function setOptions(matchWith){
var choices = [];
var sel = document.getElementById('list1');
var tmp = '';
sel.options.length = 0;
switch (matchWith) {  

    case '10th' : choices = choices10th.slice(0); break;
case '+1' : choices = choicesplusone.slice(0); break;
case '+2' : choices = choicesplustwo.slice(0); break;
case 'degree' : choices = choicesdegree.slice(0); break;
case 'university' : choices = choicesuniversity.slice(0); break;
case 'ALL' : choices = [].concat(choices10th,choicesplusone,choicesplustwo,choicesdegree,choicesuniversity); break; choices = [].concat('<?php $choices10th ?>','<?php $choicesplusone ?>','<?php $choicestplustwo ?>','<?php $choicesdegree ?>','<?php $choicesuniversity ?>'); break;

}
console.log("Hiii");
for (i=0; i<choices.length; i++) {

tmp = choices[i];
sel.options[sel.options.length] = new Option(tmp,tmp,false,false);
}
if (document.getElementById('9thCheck').checked) {
document.getElementById('9th').style.visibility = 'visible';
document.getElementById('10th').style.visibility = 'hidden';
document.getElementById('+1').style.visibility = 'hidden';
document.getElementById('+2').style.visibility = 'hidden';
document.getElementById('degree').style.visibility = 'hidden';
}
if (document.getElementById('10Check').checked) {
document.getElementById('9th').style.visibility = 'hidden';
document.getElementById('10th').style.visibility = 'visible';
document.getElementById('+1').style.visibility = 'hidden';
document.getElementById('+2').style.visibility = 'hidden';
document.getElementById('degree').style.visibility = 'hidden';
}
if (document.getElementById('+1Check').checked) {
document.getElementById('9th').style.visibility = 'hidden';
document.getElementById('10th').style.visibility = 'visible';
document.getElementById('+1').style.visibility = 'visible';
document.getElementById('+2').style.visibility = 'hidden';
document.getElementById('degree').style.visibility = 'hidden';
}
if (document.getElementById('+2Check').checked) {
document.getElementById('9th').style.visibility = 'hidden';
document.getElementById('10th').style.visibility = 'visible';
document.getElementById('+1').style.visibility = 'hidden';
document.getElementById('+2').style.visibility = 'visible';
document.getElementById('degree').style.visibility = 'hidden';
}
if (document.getElementById('degreeCheck').checked) {
document.getElementById('9th').style.visibility = 'hidden';
document.getElementById('10th').style.visibility = 'visible';
document.getElementById('+1').style.visibility = 'hidden';
document.getElementById('+2').style.visibility = 'visible';
document.getElementById('degree').style.visibility = 'visible';
}

}

window.onload = function () { setOptions('ALL'); };
  </script>
  <link rel="stylesheet" href="a.css">

</head>

<body bgcolor="#FFFFFF">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <h1 align="right" style="color:white"><b>Admission Form</b></h1>

  <form name="std" action="form.php" onsubmit="return validate_form();" method="post">


    <table align="top" width=40% width="100%" cellspacing="2" cellpadding="2">
      <tr>
        <td colspan="2" align="center" bgcolor="white"><b>Student Admission Form</b></td>

      </tr>
      <tr>
        <td align="left" valign="top" width="41%" bgcolor="#FFFFFF">Student Name<span style="color:red">*</span></td>

        <td width="57%"><input type="text" pattern="[A-Za-z]{3,}" value="" name="std_name" size="24"></td>
      </tr>
      <tr>
        <td align="left" valign="top" width="41%" bgcolor="#FFFFFF">Father Name<span style="color:red">*</span></td>

        <td width="57%"><input type="text" pattern="[A-Za-z]{3,}" value="" name="stdf_name" size="24"></td>
      </tr>
      <tr>
        <td align="left" valign="top" width="41%" bgcolor="#FFFFFF">Mother Name<span style="color:red">*</span></td>

        <td width="57%"><input type="text" pattern="[A-Za-z]{3,}" value="" name="stdm_name" size="24"></td>
      </tr>
      <tr>
        <td align="left" valign="top" width="41%" bgcolor="#FFFFFF">Your Contact Number</td>
        <td width="57%">
          <input type="text" pattern="[7-9]{1}[0-9]{9}" value="" onkeypress="return isNumberKey(event)" name="stdconnum" size="24"></td>
      </tr>
      <tr>
        <td align="left" valign="top" width="41%" bgcolor="#FFFFFF">Father Contact Number</td>
        <td width="57%">
          <input type="text" pattern="[7-9]{1}[0-9]{9}" value="" onkeypress="return isNumberKey(event)" name="fconnum" size="24"></td>
      </tr>
      <tr>
        <td align="left" valign="top" width="41%" bgcolor="#FFFFFF">Mother Contact Number</td>
        <td width="57%">
          <input type="text" pattern="[7-9]{1}[0-9]{9}" value="" onkeypress="return isNumberKey(event)" name="mconnum" size="24"></td>
      </tr>
      <tr>
        <td align="left" valign="top" width="41%" bgcolor="#FFFFFF">Gender</td>
        <td width="57%">
          <label for="s1">Male</label>
          <input type="radio" id="1" name="malefemale" value="1" size="10">
          <label for="s2">Female</label>
          <input type="radio" id="1" name="malefemale" size="10"></td>
      </tr>
      <tr>
        <td align="left" valign="top" width="41%" bgcolor="#FFFFFF">Applying for</td>
        <td width="57%">
          <label><input type="radio" name="radiogrp" value="ALL" onclick="setOptions('ALL')" checked>ALL<label>
              <label><input type="radio" name="radiogrp" id="9thCheck" value="10th" onclick="setOptions('10th')">10th<label>
                  <label><input type="radio" name="radiogrp" id="10Check" value="+1" onclick="setOptions('+1')">+1<label>
                      <label><input type="radio" name="radiogrp" id="+1Check" value="+2" onclick="setOptions('+2')">+2<label>
                          <label><input type="radio" name="radiogrp" id="+2Check" value="degree" onclick="setOptions('degree')">degree<label>
                              <label><input type="radio" name="radiogrp" id="degreeCheck" value="university" onclick="setOptions('university')">university<label>

      </tr>
      <br />
      <tr>
        <td align="left" valign="top" width="41%" bgcolor="#FFFFFF">Schools & University</td>
        <td width="57%">
          <select name="list1" id="list1"></select></td>
      </tr>
      <tr>
        <td align="left" valign="top" width="41%" bgcolor="#FFFFFF" required>CGPA <span> *</span></td>
        <td width="57%">
          <input id="9th" pattern="[0-9]+(\.[0-9]{1,2})?%?" type="text" placeholder="9th cgpa" value="" onkeypress="return isNumberKey(event)" name="stdconnum9" size="24">
          <input id="10th" pattern="[0-9]+(\.[0-9]{1,2})?%?" type="text" placeholder="10th cgpa" value="" onkeypress="return isNumberKey(event)" name="stdconnum10" size="24">
          <input id="+1" pattern="[0-9]+(\.[0-9]{1,2})?%?" type="text" placeholder="+1 cgpa" value="" onkeypress="return isNumberKey(event)" name="stdconnum11" size="24">
          <input id="+2" pattern="[0-9]+(\.[0-9]{1,2})?%?" type="text" placeholder="+2 cgpa" value="" onkeypress="return isNumberKey(event)" name="stdconnum12" size="24">
          <input id="degree" pattern="[0-9]+(\.[0-9]{1,2})?%?" type="text" placeholder="degree cgpa" value="" onkeypress="return isNumberKey(event)" name="stdconnumd" size="24">
        </td>

      </tr>

      <tr>
        <td align="left" valign="top" width="41%" bgcolor="#FFFFFF">Student Email<span>*</span></td>
        <td width="57%">
          <input type="text" value="" name="std_email_id" size="24"></td>
      </tr>
      <tr>
        <td align="left" valign="top" width="41%" bgcolor="#FFFFFF">Father Email<span>*</span></td>
        <td width="57%">
          <input type="text" value="" name="father_email_id" size="24"></td>
      </tr>

      <tr>
        <td colspan="2">
          <p align="center">
            <input type="submit" value="  Submit" name="B4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="reset" value="  Reset All   " name="B5">
        </td>
      </tr>

    </table>
  </form>
</body>

</html>
