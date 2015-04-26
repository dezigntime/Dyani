
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>DYANI Entertainment Recording Artist Form</title>
<link href="css/modelform.css" rel="stylesheet" type="text/css" />

<script language="javascript" src="js/swfobject.js" ></script>
<script language="javascript" >

function validate(form){

    dbnames = new Array('email','fname','lname','address','phone','zip','city');
    alertnames = new Array('email','first name','last name','address','phone','zip code','city');
    complete = 1;
    //alert(dbnames.length +" , "+ dbnames[1]);
    for(i=0; i< dbnames.length ;i++){
        //alert(dbnames[i] +": ");
        //if(form[dbnames[i]]){
        if(form[dbnames[i]].value == ""){
            alert("Please fill in the "+ alertnames[i]+" field");
            form[dbnames[i]].focus();
            return false;
        }
        //}
    }
    
    
    
    
        dbnames = new Array('height','weight','bdday','bdmonth','bdyear','state');
    alertnames = new Array('height','weight','bdday','bdmonth','bdyear','state');
    for(i=0; i< dbnames.length ;i++){
        if(form[dbnames[i]].selectedIndex == 0){
            alert("Please Select in the "+ alertnames[i]+" field");
            form[dbnames[i]].focus();
            return false;
        }
    }
    
    //alert(form['gender'][0].checked);
    if(!form['gender'][0].checked && !form['gender'][1].checked){
      alert("Please Select a gender");
      return false;


    }
    
    
    //if under 18
    //,'parentname','parentphone');
    //,'parent/guardian name','parent/guardian phone');
        var myDate=new Date()
    myDate.setFullYear(form['bdyear'].options[form['bdyear'].selectedIndex].text,
    (form['bdmonth'].options[form['bdmonth'].selectedIndex].value-1),
    form['bdday'].options[form['bdday'].selectedIndex].text);
    //alert(myDate.toString());
    var today = new Date();
    var yearsago = new Date();
    yearsago.setFullYear(today.getFullYear()-18,today.getMonth(),today.getDate());
    //alert(yearsago.toString());
    //alert(form['bdyear'].options[form['bdyear'].selectedIndex].text );
    if(myDate > yearsago){
    //alert('hi');
        // if(form['parentname'].value == ""){
            // alert("Please enter your parent/guardian's name");
            // return false;
        // }
        // if(form['parentphone'].value == ""){
            // alert("Please enter your parent/guardian's phone");
            // return false;
        // }
        // if(form['parentemail'].value == ""){
            // alert("Please enter your parent/guardian's email");
            // return false;
        // }       
    }
    
    
    
    
    

    if(form['email'].value != ""){
        if(form['email'].value.match("@")){
        
        }else{
         alert("Please enter a valid email address");
         return false;
        }               
    }else{
    alert("Please enter a valid email address");
    return false;
    }
    
    //alert(form['privacy'].length);
    
    // if(!form['agree'].checked){
        // alert("please indicate your acceptance of the terms and conditions");
        // return false;
    // }
    
    //if(!form['community'].checked){
    //  alert("please indicate your acceptance of the terms and conditions");
    //  return false;
    //}
    
    form.submit();
    return true;
}

/*
function ofAge(){
    var month = document.f['bdmonth'].options[document.f['bdmonth'].selectedIndex].text;
    var day = document.f['bdday'].options[document.f['bdday'].selectedIndex].text;
    var year = document.f['bdyear'].options[document.f['bdyear'].selectedIndex].text;
    if(month == -1 || day == -1 || year == -1){
        return;
    }
    
        //alert(yearsago.toString());
    //alert(form['bdyear'].options[form['bdyear'].selectedIndex].text );
    //if(myDate > yearsago){
    //alert("hi");
    
    if ((((month >= 2 && day > 9) ||  month >= 2) && year >= 1991) || year > 1991 ){
        document.getElementById('consenta').style.display = 'block';
        //document.getElementById('textfield11').style.display = 'block';
        document.getElementById('consentb').style.display = 'block';
        //document.getElementById('textfield12').style.display = 'block';
        document.getElementById('consentc').style.display = 'block';
        //document.getElementById('textfield13').style.display = 'block';
        //alert("trying to show");
    }else{
        document.getElementById('consenta').style.display = 'none';
        //document.getElementById('textfield11').style.display = 'none';
        document.getElementById('consentb').style.display = 'none';
        //document.getElementById('textfield12').style.display = 'none';
        document.getElementById('consentc').style.display = 'none';
        //document.getElementById('textfield13').style.display = 'none';
    }
}*/

function ofAge(){
    var month = document.f['bdmonth'].options[document.f['bdmonth'].selectedIndex].value;
    var day = document.f['bdday'].options[document.f['bdday'].selectedIndex].text;
    var year = document.f['bdyear'].options[document.f['bdyear'].selectedIndex].text;
    if(month == -1 || day == -1 || year == -1){
        return;
    }
    
    var myDate=new Date()
    myDate.setFullYear(year,
    (month-1),
    day);
    //alert(myDate.toString());
    var today = new Date();
    var yearsago = new Date();
    yearsago.setFullYear(today.getFullYear()-18,today.getMonth(),today.getDate());
    //alert(yearsago.toString());
    //alert(form['bdyear'].options[form['bdyear'].selectedIndex].text );
    if(myDate > yearsago){
        document.getElementById('consenta').style.display = 'block';
        //document.getElementById('textfield11').style.display = 'block';
        document.getElementById('consentb').style.display = 'block';
        //document.getElementById('textfield12').style.display = 'block';
        document.getElementById('consentc').style.display = 'block';
        //document.getElementById('textfield13').style.display = 'block';
        //alert("trying to show");
    }else{
        document.getElementById('consenta').style.display = 'none';
        //document.getElementById('textfield11').style.display = 'none';
        document.getElementById('consentb').style.display = 'none';
        //document.getElementById('textfield12').style.display = 'none';
        document.getElementById('consentc').style.display = 'none';
        //document.getElementById('textfield13').style.display = 'none';
    }
}

function countrysel(item){
//var item = document.getElementById('country');
    if(item.selectedIndex == 1){
        var sitem = document.getElementById('statetext');
        sitem.style.display = "none";
        var sitem = document.getElementById('statesel1');
        sitem.style.display = "block";
        var sitem = document.getElementById('statesel2');
        sitem.style.display = "none";
        
    }
    if(item.selectedIndex == 2){
        var sitem = document.getElementById('statetext');
        sitem.style.display = "none";
        var sitem = document.getElementById('statesel1');
        sitem.style.display = "none";
        var sitem = document.getElementById('statesel2');
        sitem.style.display = "block";
        
    }
    if(item.selectedIndex > 2){
        var sitem = document.getElementById('statetext');
        sitem.style.display = "block";
        var sitem = document.getElementById('statesel1');
        sitem.style.display = "none";
        var sitem = document.getElementById('statesel2');
        sitem.style.display = "none";
        
    }

}

function setstate(dd){
    var sitem = document.getElementById('state');
    sitem.value = dd.options[dd.selectedIndex].text;

}

function switchFlash(girl){

var sitem = document.getElementById('image1');
sitem.GC(girl);

sitem = document.getElementById('image2');
sitem.GC(girl);
sitem = document.getElementById('image3');
sitem.GC(girl);
sitem = document.getElementById('image4');
sitem.GC(girl);
}
</script>
<style type="text/css" media="screen">
    .kids_link{
        color:#ee0044!important;font-size:14px;display:block;float:left;margin:0 0 10px 0;width:100%;text-transform:uppercase;text-align:center;
    }
    
    ul.fields li label {float:left; width:340px; text-align:right; margin:0 10px 0 0; padding:6px 0 0 0; color:#999999;
    clear:both;
    }
    
    ul.fields li {
margin: 11px 0px;
}
</style>

</head>

<body>
    <div id="headerWrapper">
        <div id="headerTop" style="padding-top: 40px;">
            <div style="font-size: 34px;"><h1></h1>DYANI Entertainment Recording Artist Form</h1></div>
            <br/><br/><br/><br/>
        </div>
    
    </div><!-- closes headerWrapper -->
    <form name="f" method="post" action="recordingartistformsend.php"  enctype="multipart/form-data">
    <div id="bodyWrapper">
        <div id="body">
            <div id="step1">
                <!-- <a class="kids_link" href="http://scouting.fordmodels.com/kids">* Kids Open Call Saturday March 27th, 2010 Click here for details</a>
                <br/> -->
                <h1 class="step"></h1>
                
                    <div class="form">
                        <ul class="fields">
                            
                            <li class="height"><label for="">*Artist Name</label><input type="text" id="artistname" name="artistname" /></li>
                            <li class="height"><label for="">What is your music genre?</label><input type="text" id="musicgenre" name="musicgenre" /></li>
                            
                            <li class="height"><label for="">Direct link to sample your music (No Myspace / iTunes)</label><input type="text" id="theremusiclink" name="theremusiclink" /></li>
                            <li class="height"><label for="">If the band is on ReverbNation please provide link.</label><input type="text" id="reverbnationlink" name="reverbnationlink" /></li>
                            
                            <li class="height"><label for="">What is your role in the band?</label><input type="text" id="roleinband" name="roleinband" /></li>
                            
                            
                            <li class="" style="margin:10px 0px;height:110px;">
                             <p class="directions" style="font-size:14px;">Additional info you want to share about the band.</p>
                             <textarea style="width:500px;margin-left:50px;" id="additionalinforoleinband" name="additionalinforoleinband"></textarea>   
                            </li>
                            
                            
                              <li class="height"><label for="">Your name</label><input type="text" id="roleinband" name="roleinband" /></li>
                            
                            
                            <li class="height"><label for="">*email</label><input type="text" id="email" name="email" /></li>
                            
                            
                            
                            
                            <ul class="buttons">
                            <li onMouseDown="javascript:validate(f);" style="cursor:pointer" >
							<button style="margin:10px; width:200px; text-align:center;background-color:rgb(12, 167, 206);cursor:pointer;">Submit</button>	                            
                            </li>
                        </ul>
                            
                            
                            
                            
                        </ul><!-- closes step1 form fields -->
                    </div><!-- closes form -->
            </div><!-- closes step1 -->
            

        <span style="clear:both;"><br /></span>
        </div><!-- closes bodyWrapper -->
    </div><!-- closes bodyWrapper -->
    </form>
    <div id="footer">
        <p>Copyright &copy; 2013 DYANI Entertainment, LLC</p>
        
    </div><!-- closes footer -->




</body>
</html>




<!-- <html>
<head>
<title>Dyani Model Form</title>
</head>
<body>
<form action="modelformsend.php" method="post" name="form1" enctype="multipart/form-data">
<table width="343" border="1">
<tr>
<td>To</td>
<td><input name="txtTo" type="text" id="txtTo"></td>
</tr>
<tr>
<td>Subject</td>
<td><input name="txtSubject" type="text" id="txtSubject"></td>
</tr>
<tr>
<td>Description</td>
<td><textarea name="txtDescription" cols="30" rows="4" id="txtDescription"></textarea></td>
</tr>
<tr>
<td>Form Name</td>
<td><input name="txtFormName" type="text"></td>
</tr>
<tr>
<tr>
<td>Form Email</td>
<td><input name="txtFormEmail" type="text"></td>
</tr>
<tr>
<td>Attachment</td>
<td><input name="fileAttach" type="file"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Send"></td>
</tr>
</table>
</form>
</body>
</html> -->
