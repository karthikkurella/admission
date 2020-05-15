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

var choices10th = ['Atkinson Sr.Sec.School','N.St.Mathew’s Public School ','Veeramachaneni Paddayya Siddhartha Public School'];
var choicesplusone = ['Narayana','Srichaithanya','Krishnachaithanya'];
var choicesplustwo = ['Srichaithanya','Krishnachaithanya','Narayana'];
var choicesdegree = ['RAOs','Jagans','Sathyam'];
var choicesuniversity = ['KL university','Vignan university','Sri venkateswara university'];

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
case 'ALL' : choices = [].concat(choices10th,choicesplusone,choicesplustwo,choicesdegree,choicesuniversity); break;


}
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



//-->
case '10th' : choices = <?php json_encode($choices10th) ?>.slice(0); break;
case '+1' : choices = <?php json_encode($choicesplusone) ?>.slice(0); break;
case '+2' : choices = <?php json_encode($choicestplustwo) ?>.slice(0); break;
case 'degree' : choices = <?php json_encode($choicesdegree) ?>.slice(0); break;
case 'university' : choices = <?php json_encode($choicesuniversity) ?>.slice(0); break;
case 'ALL' : choices = [].concat(<?php json_encode($choices10th) ?>,<?php json_encode($choicesplusone) ?>,<?php json_encode($choicestplustwo) ?>,<?php json_encode($choicesdegree) ?>,<?php json_encode($choicesuniversity) ?>); break;

case '10th' : choices = '<?php $choices10th ?>'.slice(0); break;
case '+1' : choices = '<?php $choicesplusone ?>'.slice(0); break;
case '+2' : choices = '<?php $choicestplustwo ?>'.slice(0); break;
case 'degree' : choices = '<?php $choicesdegree ?>'.slice(0); break;
case 'university' : choices = '<?php $choicesuniversity ?>'.slice(0); break;
case 'ALL' : choices = [].concat('<?php $choices10th ?>','<?php $choicesplusone ?>','<?php $choicestplustwo ?>','<?php $choicesdegree ?>','<?php $choicesuniversity ?>'); break;

case '10th' : choices = <?php $choices10th ?>.slice(0); break;
case '+1' : choices = <?php $choicesplusone ?>.slice(0); break;
case '+2' : choices = <?php $choicestplustwo ?>.slice(0); break;
case 'degree' : choices = <?php $choicesdegree ?>.slice(0); break;
case 'university' : choices = <?php $choicesuniversity ?>.slice(0); break;
case 'ALL' : choices = [].concat(<?php $choices10th ?>,<?php $choicesplusone ?>,<?php $choicestplustwo ?>,<?php $choicesdegree ?>,<?php $choicesuniversity ?>); break;

var choicesplusone = '<?php $choicesplusone ?>';
var choicesplustwo = '<?php $choicesplustwo ?>';
var choicesdegree = '<?php $choicesdegree ?>';
var choicesuniversity = '<?php $choicesuniversity ?>';