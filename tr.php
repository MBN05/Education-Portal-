<html>
<title>
ConnecED
</title>
<style>
body{ background-image:url("bg1.jpg");
      background-repeat:no-repeat;
      background-attachment: fixed;
      background-size: 100% 100%;
      font-size:30px;
      line-height:1.8;
}
.box{ width:700px;
      border: 10px solid black;
      padding:50px;
      margin-left:auto;
      margin-right:auto;
      margin-top:30px;
      text-align:center;
}
.abc{ font-size:20px;
      border:none;
      background:none;
      border-bottom: 5px solid black;}
.ab{ text-align:center;
     padding:30px 30px;
     font-size:30px;
     background:none;
     border:none;
     cursor:pointer;
 }
.ab:hover{ box-shadow: 5px 10px 15px gray;}
.error{ color:red;
        font-size:25px;
        display: inline-block;
}
.l{ font-size:30px;}
td{ padding:10px;
    padding-right:20px;}
</style>
<script>
function valid()
{ var a,b,c,d,e,i,flag;
  a=f.Na.value;
  b=f.Mo.value;
  c=f.Em.value;
  d=f.Pa.value;
  e=f.CP.value;
  flag=true;
for(i=0;i<a.length;i++)
if (a.charCodeAt(i)<97 || a.charCodeAt(i)>122){
if(a.charCodeAt(i)<65 || a.charCodeAt(i)>90)
{ document.getElementById("ep").innerHTML="**Enter valid name";
  flag=false;
}
}
for(i=0;i<b.length;i++)
if(b.charCodeAt(i)<48 ||b.charCodeAt(i)>57)
 { document.getElementById("mn").innerHTML="**Enter valid number";
  flag=false;
 }
if(b.length!=10){
document.getElementById("mn").innerHTML="**Enter a valid 10-digit mobile number";
flag=false;
}
if(d!==e){
document.getElementById("pw").innerHTML="**Check Password";
flag=false;
}
if(d.length<8) {
document.getElementById("pw").innerHTML="**Enter Strong Password";
}
return flag;
}
</script>
<body>
<div class="box">
<table class="k">
<form name="f" onsubmit="return valid()" method="post" action="test.php">
<tr><td><label class="l">Name:</td><td><input name="Na" class="abc" required></td></label></tr>
<tr><td></td><td><b><span id="ep" class="error"></span></b></td></tr>
<tr><td><label class="l">Education:</label></td>
<td><select class="abc" name="choice">
<option>Primary</option>
<option>Secondary</option>
<option>Senior Secondary</option>
</select></td></tr>
<tr><td><label class="l">Mobile number:</td><td><input name="Mo" class="abc" required></td></label></tr>
<tr><td></td><td><b><span id="mn" class="error"></span></b></td></tr>
<tr><td><label class="l">Email:</td><td><input type="email" name="Em" class="abc" required></td></label></tr>
<tr><td><label class="l">Password:</td><td><input type="password" name="Pa" class="abc" placeholder="At least 8 characters" required></td></label></tr>
<tr><td><label class="l">Confirm Password:</td><td><input type="password" name="CP" class="abc" placeholder="At least 8 characters" required></td></label></tr>
<tr><td></td><td><b><span id="pw" class="error"></span></b></td></tr>
<tr><td></td><td><input type="Submit" value="Submit" class="ab"></td></tr>
</form>
</table>
</div>
</body>
</html>