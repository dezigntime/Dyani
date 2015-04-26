
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>DYANI Entertainment Model Form</title>
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
</style>

</head>

<body>
    <div id="headerWrapper">
        <div id="headerTop" style="padding-top: 40px;">
            <div style="font-size: 34px;"><h1></h1>DYANI Entertainment Model Form</h1></div>
            <br/><br/><br/><br/>
        </div>
    
    </div><!-- closes headerWrapper -->
    <form name="f" method="post" action="modelformsend.php"  enctype="multipart/form-data">
    <div id="bodyWrapper">
        <div id="body">
            <div id="step1">
                <!-- <a class="kids_link" href="http://scouting.fordmodels.com/kids">* Kids Open Call Saturday March 27th, 2010 Click here for details</a>
                <br/> -->
                <h1 class="step">Step 1</h1>
                
                    <div class="form">
                        <ul class="fields">
                            <li class="height"><label for="">*email</label><input type="text" id="email" name="email" /></li>
                            <li class="height"><label for="">*first name</label><input type="text" id="fname" name="fname" /></li>
                            <li class="height"><label for="">*last name</label><input type="text" id="lname" name="lname" /></li>
                            <li class="height"><label for="">*address</label><input type="text" id="address" name="address" /></li>
                            <li class="height"><label for="">apt/suite</label><input type="text" id="apt" name="apt" /></li>
                            <li class="height"><label for="">*telephone</label><input type="text" id="phone" name="phone" /></li>
<!--                             <li class="height"><label for="">mobile</label><input type="text" id="mobile" name="mobile" /></li> -->
                            <li class="height">
                                <label for="">*country</label>
                                <select id="country" name="country">
                                    <option selected="selected"></option>
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>United Kingdom</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                    <option>American Samoa</option>
                                    
                                    <option>Andorra</option>
                                    <option>Angola</option>
                                    <option>Anguilla</option>
                                    <option>Antigua and Barbuda</option>
                                    <option>Argentina</option>
                                    <option>Armenia</option>
                                    
                                    <option>Aruba</option>
                                    <option>Australia</option>
                                    <option>Austria</option>
                                    <option>Azerbaijan</option>
                                    <option>Bahamas</option>
                                    <option>Bahrain</option>
                                    
                                    <option>Bangladesh</option>
                                    <option>Barbados</option>
                                    <option>Belarus</option>
                                    <option>Belgium</option>
                                    <option>Belize</option>
                        
                                    <option>Benin</option>
                                    <option>Bermuda</option>
                                    <option>Bhutan</option>
                                    <option>Bolivia</option>
                                    <option>Bosnia and Herzegovina</option>
                                    <option>Botswana</option>
                        
                                    <option>Bouvet Island</option>
                                    <option>Brazil</option>
                                    <option>Brunei Darussalam</option>
                                    <option>Bulgaria</option>
                                    <option>Burkina Faso</option>
                                    <option>Burundi</option>
                        
                                    <option>Cambodiaoption>
                                    <option>Cameroon</option>
                                    <option>Canada</option>
                                    <option>Cape Verde</option>
                                    <option>Cayman Islands</option>
                                    <option>Central African Republic</option>
                        
                                    <option>Chad</option>
                                    <option>Chile</option>
                                    <option>China</option>
                                    <option>Colombia</option>
                                    <option>Comoros</option>
                                    <option>Congo</option>
                        
                                    <option>Congo</option>
                                    <option>Cook Islands</option>
                                    <option>Costa Rica</option>
                                    <option>Ivory Coast</option>
                                    <option>Croatia (Hrvatska)</option>
                                    <option>Cuba</option>
                        
                                    <option>Cyprus</option>
                                    <option>Czech Republic</option>
                                    <option>Denmark</option>
                                    <option>Djibouti</option>
                                    <option>Dominica</option>
                                    <option>Dominican Republic</option>
                        
                                    <option>Ecuador</option>
                                    <option>Egypt</option>
                                    <option>El Salvador</option>
                                    <option>Equatorial Guinea</option>
                                    <option>Eritrea</option>
                                    <option>Estonia</option>
                        
                                    <option>Ethiopia</option>
                                    <option>Falkland Islands</option>
                                    <option>Faroe Islands</option>
                                    <option>Fiji</option>
                                    <option>Finland</option>
                                    <option >France</option>
                        
                                    <option>French Guiana</option>
                                    <option>French Polynesia</option>
                                    <option>Gabon</option>
                                    <option>Gambia</option>
                                    <option>Georgia</option>
                                    <option >Germany</option>
                        
                                    <option>Ghana</option>
                                    <option>Gibraltar</option>
                                    <option>Greece</option>
                                    <option>Greenland</option>
                                    <option>Grenada</option>
                                    <option>Guadeloupe</option>
                        
                                    <option>Guam</option>
                                    <option>Guatemala</option>
                                    <option>Guinea</option>
                                    <option>Guinea-Bissau</option>
                                    <option>Guyana</option>
                                    <option>Haiti</option>
                        
                                    <option>Honduras</option>
                                    <option>Hong Kong</option>
                                    <option>Hungary</option>
                                    <option>Iceland</option>
                                    <option>India</option>
                                    <option>Indonesia</option>
                        
                                    <option>Iran</option>
                                    <option>Iraq</option>
                                    <option>Ireland</option>
                                    <option>Israel</option>
                                    <option>Italy</option>
                                    <option>Jamaica</option>
                        
                                    <option>Japan</option>
                                    <option>Jordan</option>
                                    <option>Kazakhstan</option>
                                    <option>Kenya</option>
                                    <option>Kiribati</option>
                                    <option>Korea</option>
                        
                                    <option>Kuwait</option>
                                    <option>Kyrgyzstan</option>
                                    <option>Laos</option>
                                    <option>Latvia</option>
                                    <option>Lebanon</option>
                                    <option>Lesotho</option>
                        
                                    <option>Liberia</option>
                                    <option>Libyan</option>
                                    <option>Liechtenstein</option>
                                    <option>Lithuania</option>
                                    <option>Luxembourg</option>
                                    <option>Macao</option>
                        
                                    <option>Macedonia, </option>
                                    <option>Madagascar</option>
                                    <option>Malawi</option>
                                    <option>Malaysia</option>
                                    <option>Maldives</option>
                                    <option>Mali</option>
                        
                                    <option>Malta</option>
                                    <option>Marshall Islands</option>
                                    <option>Martinique</option>
                                    <option>Mauritania</option>
                                    <option>Mauritius</option>
                                    <option>Mexico</option>
                        
                                    <option>Micronesia</option>
                                    <option>Moldova, Republic of</option>
                                    <option>Monaco</option>
                                    <option>Mongolia</option>
                                    <option>Montserrat</option>
                                    <option>Morocco</option>
                        
                                    <option>Mozambique</option>
                                    <option>Myanmar</option>
                                    <option>Namibia</option>
                                    <option>Nauru</option>
                                    <option>Nepal</option>
                                    <option>Netherlands</option>
                        
                                    <option>Netherlands Antilles</option>
                                    <option>New Caledonia</option>
                                    <option >New Zealand</option>
                                    <option>Nicaragua</option>
                                    <option>Niger</option>
                                    <option>Nigeria</option>
                        
                                    <option>Niue</option>
                                    <option>Norfolk Island</option>
                                    <option>Northern Mariana Islands</option>
                                    <option>Norway</option>
                                    <option>Oman</option>
                                    <option>Pakistan</option>
                        
                                    <option>Palau</option>
                                    <option>Panama</option>
                                    <option>Papua New Guinea</option>
                                    <option>Paraguay</option>
                                    <option>Peru</option>
                                    <option>Philippines</option>
                        
                                    <option>Pitcairn</option>
                                    <option>Poland</option>
                                    <option>Portugal</option>
                                    <option>Puerto Rico</option>
                                    <option>Qatar</option>
                                    <option>R&eacute;union</option>
                        
                                    <option>Romania</option>
                                    <option>Russian Federation</option>
                                    <option>Rwanda</option>
                                    <option>Saint Helena</option>
                                    <option>Saint Kitts and Nevis</option>
                                    <option>Saint Lucia</option>
                        
                                    <option>Saint Pierre</option>
                                    <option>Saint Vincent</option>
                                    <option>Samoa</option>
                                    <option>San Marino</option>
                                    <option>Sao Tome and Principe</option>
                                    <option>Saudi Arabia</option>
                        
                                    <option>Senegal</option>
                                    <option>Seychelles</option>
                                    <option>Sierra Leone</option>
                                    <option>Singapore</option>
                                    <option>Slovakia</option>
                                    <option>Slovenia</option>
                        
                                    <option>Solomon Islands</option>
                                    <option>Somalia</option>
                                    <option>South Africa</option>
                                    <option>Spain</option>
                                    <option>Sri Lanka</option>
                                    <option>Sudan</option>
                        
                                    <option>Suriname</option>
                                    <option>Swaziland</option>
                                    <option>Sweden</option>
                                    <option>Switzerland</option>
                                    <option>Syrian Arab Republic</option>
                                    <option>Taiwan</option>
                        
                                    <option>Tajikistan</option>
                                    <option>Tanzania</option>
                                    <option>Thailand</option>
                                    <option>Togo</option>
                                    <option>Tokelau</option>
                                    <option>Tonga</option>
                        
                                    <option>Trinidad and Tobago</option>
                                    <option>Tunisia</option>
                                    <option>Turkey</option>
                                    <option>Turkmenistan</option>
                                    <option>Turks</option>
                                    <option>Tuvalu</option>
                        
                                    <option>Uganda</option>
                                    <option>Ukraine</option>
                                    <option>United Arab Emirates</option>
                                    <option >United Kingdom</option>
                                    <option >United States</option>
                                    <option>Uruguay</option>
                        
                                    <option>Uzbekistan</option>
                                    <option>Vanuatu</option>
                                    <option>Venezuela</option>
                                    <option>Vietnam</option>
                                    <option>Virgin Islands (British)</option>
                                    <option>Virgin Islands (US)</option>
                        
                                    <option>Wallis</option>
                                    <option>Western Sahara</option>
                                    <option>Yemen</option>
                                    <option>Serbia</option>
                                    <option>Zambia</option>
                                    <option>Zimbabwe</option>
                        
                                    <option>Montenegro</option>
                                </select>
                            </li>
                            <li class="height"><label for="">*zip code</label><input type="text" id="zip" name="zip" style="width:135px;" /></li>
                            <li class="height"><label for="">*city</label><input type="text" id="city" name="city" /></li>
                            <li class="height"><label for="">*state/province</label>
                            <select name="state" class="formTextHolder2" ><option>Select State</option><option>AL</option><option>AK</option><option>AZ</option><option>AR</option><option>CA<option>CO</option><option>CT</option><option>DE</option><option>DC</option><OPTION>FL</option><option>GA</option><option>HI</option><option>ID</option><option>IL</option><option>IN</option><option>IA</option><option>KS</option><option>KY</option><option>LA</option><option>ME</option><option>MD</option><OPTION>MA</option><option>MI</option><option>MN</option><option>MS</option><option>MO</option><option>MT</option><OPTION>NE</option><option>NV</option><option>NH</option><option>NJ</option><option>NM</option><option>NY</option><OPTION>NC</option><option>ND</option><option>OH</option><option>OK</option><option>OR</option><option>PA</option><OPTION>RI</option><option>SC</option><option>SD</option><option>TN</option><option>TX</option><option>UT</option><OPTION>VT</option><option>VA</option><option>WA</option><option>WV</option><option>WI</option><option>WY</option><OPTION>PR-Puerto Rico</option>
                                <option>Canadian Prov</option><option>AB-Alberta</option><option>BC-British Columbia</option><option>MB-Manitoba</option><option>NB-New Brunswick</option><option>NF-Newfoundland</option><option>NT-Northwest Territories</option><option>NU-Nunavut</option><option>NS-Nova Scotia</option><option>ON-Ontario</option><option>PE-Prince Edward Island<option>QC-Quebec<option>SK-Saskatchewan</option><option>YT-Yukon Territories</option><option>NA-INTERNATIONAL</option></SELECT>
                            </li>
                            <li class="height">
                                <label for="">*gender</label>
                                    <input checked type="radio" name="gender" value="female" class="radiobtn" id="fcont" onClick="javascript:female();" />female
                                    <input type="radio" name="gender" value="male" class="radiobtn" id="mcont" onClick="javascript:male();" />male
                            </li>
                            <li class="height">
                                <label for="">*birthday of applicant</label>
                                    <select name="bdmonth" style="width:auto;" onchange="ofAge();" >
                                        <option selected="selected" value="-1" ></option>
                                        <option value="1" >January</option>
                                        <option value="2" >February</option>
                                        <option value="3" >March</option>
                                        <option value="4">April</option>
                            
                                        <option value="5" >May</option>
                                        <option value="6" >June</option>
                                        <option value="7" >July</option>
                                        <option value="8" >August</option>
                                        <option value="9" >September</option>
                                        <option value="10" >October</option>
                            
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                    <select name="bdday" style="width:43px;" onchange="ofAge();" >
                                          <option selected="selected" value="-1" > </option>
                                          <option>1</option>
                                          <option>2</option>
                            
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                          <option>6</option>
                                          <option>7</option>
                                          <option>8</option>
                            
                                          <option>9</option>
                                          <option>10</option>
                                          <option>11</option>
                                          <option>12</option>
                                          <option>13</option>
                                          <option>14</option>
                            
                                          <option>15</option>
                                          <option>16</option>
                                          <option>17</option>
                                          <option>18</option>
                                          <option>19</option>
                                          <option>20</option>
                            
                                          <option>21</option>
                                          <option>22</option>
                                          <option>23</option>
                                          <option>24</option>
                                          <option>25</option>
                                          <option>26</option>
                            
                                          <option>27</option>
                                          <option>28</option>
                                          <option>29</option>
                                          <option>30</option>
                                          <option>31</option>
                                    </select>
                                    <select name="bdyear" style="width:55px;" onchange="ofAge();" >
                                          <option selected="selected" value="-1"  ></option>
                                         <option>2013</option><option>2012</option><option>2011</option><option>2010</option><option>2009</option><option>2008</option><option>2007</option><option>2006</option><option>2005</option><option>2004</option><option>2003</option><option>2002</option><option>2001</option><option>2000</option><option>1999</option><option>1998</option><option>1997</option><option>1996</option><option>1995</option><option>1994</option><option>1993</option><option>1992</option><option>1991</option><option>1990</option><option>1989</option><option>1988</option><option>1987</option><option>1986</option><option>1985</option><option>1984</option><option>1983</option><option>1982</option><option>1981</option><option>1980</option><option>1979</option><option>1978</option><option>1977</option><option>1976</option><option>1975</option><option>1974</option><option>1973</option><option>1972</option><option>1971</option><option>1970</option><option>1969</option><option>1968</option><option>1967</option><option>1966</option><option>1965</option><option>1964</option><option>1963</option><option>1962</option><option>1961</option><option>1960</option><option>1959</option><option>1958</option><option>1957</option><option>1956</option><option>1955</option><option>1954option><option>1953</option><option>1952</option><option>1951</option><option>1950</option><option>1949</option><option>1948</option><option>1947</option><option>1946</option><option>1945</option><option>1944</option><option>1943</option><option>1942</option><option>1941</option>                                    </select>
                            </li>
                           
                            <li id="consenta" style="display:none; "><label for="">*parent/guardian name</label><input type="text" id="parentname" name="parentname" /></li>
                            <li id="consentb" style="display:none; "><label for="">*parent/guardian phone</label><input type="text" id="parentphone" name="parentphone" /></li>
                            <li id="consentc" style="display:none; "><label for="">*parent/guardian email</label><input type="text" id="parentemail" name="parentemail" /></li>


                            
                        </ul><!-- closes step1 form fields -->
                    </div><!-- closes form -->
            </div><!-- closes step1 -->
            <div id="step2">
                <h1 class="step">Step 2</h1>
                    <div class="form">
                        <div class="form">
                        <p>Please complete all the information below.</p>
                            <p class="directions">I was born to be a DYANI Entertainment Model because...</p>
                            <textarea id="about_me" name="question"></textarea>
                        <p>Please submit these measurements for our records. Each category must be filled out for your application to be accepted.</p>
                        
                        <script>
                        
                        var showingMale = false;
var showingMetric = false;

function male(){
    
    if(showingMetric){
        makemalemdress();
        makemalemhips();
        makemalechest();
        makemwaist();
        makemheight();
        makemweight();
        makemshoe();
    
    }else{//use standard functions
        makemalesdress();
        makemaleships();
        makemaleschest();
        makesheight();
        makesweight();
        makesshoe();
        makeswaist();
        
        
    }   
    showingMale = true;
        switchFlash(false);
    
}
function female(){

                                
                                
    if(showingMetric){
        makemheight();
        makemweight();
        makemshoe();
        makemwaist();
        makemdress();
        makemhips();
        makemchest();
    }else{//use standard functions
        makesdress();
        makeships();
        makeschest();
        makesheight();
        makesweight();
        makesshoe();
        makeswaist();
        
        
    }   
    showingMale = false;
    switchFlash(true);
}

                        
                            var mhieghts = new Array(new Array('130','51','0.25'),new Array('131','51','0.5'),new Array('132','52','0'),new Array('133','52','0.25'),new Array('134','52','0.75'),new Array('135','53','0.25'),new Array('136','53','0.5'),new Array('137','54','0'),new Array('138','54','0.25'),new Array('139','54','0.75'),new Array('140','55','0'),new Array('141','55','0.5'),new Array('142','56','0'),new Array('143','56','0.25'),new Array('144','56','0.75'),new Array('145','57','0'),new Array('146','57','0.5'),new Array('147','58','0'),new Array('148','58','0.25'),new Array('149','58','0.75'),new Array('150','59','0'),new Array('151','59','0.5'),new Array('152','59','0.75'),new Array('153','60','0.25'),new Array('154','60','0.5'),new Array('155','61','0'),new Array('156','61','0.5'),new Array('157','61','0.75'),new Array('158','62','0.25'),new Array('159','62','0.5'),new Array('160','63','0'),new Array('161','63','0.5'),new Array('162','63','0.75'),new Array('163','64','0.25'),new Array('164','64','0.5'),new Array('165','65','0'),new Array('166','65','0.25'),new Array('167','65','0.75'),new Array('168','66','0.25'),new Array('169','66','0.5'),new Array('170','67','0'),new Array('171','67','0.25'),new Array('172','67','0.75'),new Array('173','68','0'),new Array('174','68','0.5'),new Array('175','69','0'),new Array('176','69','0.25'),new Array('177','69','0.75'),new Array('178','70','0'),new Array('179','70','0.5'),new Array('180','71','0'),new Array('181','71','0.25'),new Array('182','71','0.75'),new Array('183','72','0'),new Array('184','72','0.5'),new Array('185','72','0.75'),new Array('186','73','0.25'),new Array('187','73','0.5'),new Array('188','74','0'),new Array('189','74','0.5'),new Array('190','74','0.75'));
                            
                            var mweight = new Array(new Array('30','65',''),new Array('31','65','+'),new Array('32','70',''),new Array('33','70','+'),new Array('34','74',''),new Array('35','75','+'),new Array('36','80',''),new Array('37','80','+'),new Array('38','85',''),new Array('39','85','+'),new Array('40','90',''),new Array('41','90',''),new Array('42','90','+'),new Array('43','94',''),new Array('44','95','+'),new Array('45','100',''),new Array('46','100','+'),new Array('47','105',''),new Array('48','105',''),new Array('49','105','+'),new Array('50','110',''),new Array('51','110','+'),new Array('52','114',''),new Array('53','115','+'),new Array('54','120',''),new Array('55','120',''),new Array('56','120','+'),new Array('57','125',''),new Array('58','125','+'),new Array('59','130',''),new Array('60','130','+'),new Array('61','135',''),new Array('62','135','+'),new Array('63','140',''),new Array('64','140',''),new Array('65','140','+'),new Array('66','145',''),new Array('67','145','+'),new Array('68','149',''),new Array('69','150','+'),new Array('70','155',''),new Array('71','155','+'),new Array('72','160',''),new Array('73','160',''),new Array('74','160','+'),new Array('75','165',''),new Array('76','165','+'),new Array('77','169',''),new Array('78','170','+'),new Array('79','175',''),new Array('80','175',''),new Array('81','180',''),new Array('82','180',''),new Array('83','180','+'),new Array('84','185',''),new Array('85','185','+'),new Array('86','189',''),new Array('87','190','+'),new Array('88','195',''),new Array('89','195',''),new Array('90','195','+'),new Array('91','200',''),new Array('92','200','+'),new Array('93','205',''),new Array('94','205','+'),new Array('95','210',''),new Array('96','210','+'),new Array('97','215',''),new Array('98','215',''),new Array('99','215','+'),new Array('100','220',''),new Array('101','220','+'),new Array('102','224',''),new Array('103','225','+'),new Array('104','230',''),new Array('105','230','+'),new Array('106','235',''),new Array('107','235',''),new Array('108','235','+'),new Array('109','240',''),new Array('110','240','+'));
                            
                            var mdress = new Array(new Array('30','0',''),new Array('32','2',''),new Array('34','4',''),new Array('36','6',''),new Array('38','8',''),new Array('40','10',''),new Array('42','12',''),new Array('44','14',''),new Array('46','16',''),new Array('48','18',''));
                            
                            var mchest = new Array(new Array('70','28',''),new Array('72','28',''),new Array('74','29',''),new Array('76','30',''),new Array('78','31',''),new Array('80','31',''),new Array('82','32',''),new Array('84','33',''),new Array('86','34',''),new Array('88','35',''),new Array('90','35',''),new Array('92','36',''),new Array('94','37',''),new Array('96','38',''),new Array('98','39',''),new Array('100','39',''),new Array('102','40',''),new Array('104','41',''),new Array('106','42',''),new Array('108','43',''),new Array('110','43',''),new Array('112','44',''),new Array('114','45',''),new Array('116','46',''),new Array('118','46',''));
                            
                            var mhips = new Array(new Array('76','30','0'),new Array('77','30','0.25'),new Array('78','30','0.75'),new Array('79','31','0'),new Array('80','31','0.5'),new Array('81','32','0'),new Array('82','32','0.25'),new Array('83','32','0.75'),new Array('84','33','0'),new Array('85','33','0.5'),new Array('86','34','0'),new Array('87','34','0.25'),new Array('88','34','0.75'),new Array('89','35','0'),new Array('90','35','0.5'),new Array('91','35','0.75'),new Array('92','36','0.25'),new Array('93','36','0.5'),new Array('94','37','0'),new Array('95','37','0.25'),new Array('96','37','0.75'),new Array('97','38','0.25'),new Array('98','38','0.5'),new Array('99','39','0'),new Array('100','39','0.25'),new Array('101','39','0.75'),new Array('102','40','0.25'),new Array('103','40','0.5'),new Array('104','41','0'),new Array('105','41','0.25'),new Array('106','41','0.75'),new Array('107','42','0.25'),new Array('108','42','0.5'),new Array('109','43','0'),new Array('110','43','0.25'),new Array('111','43','0.75'),new Array('112','44','0'),new Array('113','44','0.5'),new Array('114','45','0'),new Array('115','45','0.25'),new Array('116','45','0.75'),new Array('117','46','0'),new Array('118','46','0.5'),new Array('119','46','0.75'),new Array('120','47','0.25'),new Array('121','47','0.75'),new Array('122','48','0'),new Array('123','48','0.5'),new Array('124','48','0.75'),new Array('125','49','0.25'),new Array('126','49','0.5'),new Array('127','50','0'),new Array('128','50','0.5'),new Array('129','50','0.75'),new Array('130','51','0.25'));
                            
                            
                            var mwaist = new Array(new Array('50','19','0.75'),new Array('51','20','0'),new Array('52','20','0.5'),new Array('53','21','0'),new Array('54','21','0.25'),new Array('55','21','0.75'),new Array('56','22','0'),new Array('57','22','0.5'),new Array('58','22','0.75'),new Array('59','23','0.25'),new Array('60','23','0.5'),new Array('61','24','0'),new Array('62','24','0.5'),new Array('63','24','0.75'),new Array('64','25','0.25'),new Array('65','25','0.5'),new Array('66','26','0'),new Array('67','26','0.5'),new Array('68','26','0.75'),new Array('69','27','0.25'),new Array('70','27','0.5'),new Array('71','28','0'),new Array('72','28','0.25'),new Array('73','28','0.75'),new Array('74','29','0.25'),new Array('75','29','0.5'),new Array('76','30','0'),new Array('77','30','0.25'),new Array('78','30','0.75'),new Array('79','31','0'),new Array('80','31','0.5'),new Array('81','32','0'),new Array('82','32','0.25'),new Array('83','32','0.75'),new Array('84','33','0'),new Array('85','33','0.5'),new Array('86','33','0.75'),new Array('87','34','0.25'),new Array('88','34','0.75'),new Array('89','35','0'),new Array('90','35','0.5'));
                            
                            var mshoe = new Array(new Array('34','4',''),new Array('34.5','4.5',''),new Array('35','5',''),new Array('35.5','5.5',''),new Array('36','6',''),new Array('36.5','6',''),new Array('37','6.5',''),new Array('37.5','7',''),new Array('38','7.5',''),new Array('38.5','8',''),new Array('39','8.5',''),new Array('39.5','8.5',''),new Array('40','9',''),new Array('40.5','9',''),new Array('41','9.5',''),new Array('41.5','9.5',''),new Array('42','10',''),new Array('42.5','10',''),new Array('43','10.5',''),new Array('43.5','11',''),new Array('44','12',''),new Array('44.5','12',''),new Array('45','12.5',''));
                        
                            var inseam = new Array(new Array('13','5',''),new Array('14','5.5',''),new Array('15','6',''),new Array('16','6',''),new Array('17','6.5',''),new Array('18','7',''),new Array('19','7.5',''),new Array('20','8',''),new Array('21','8',''),new Array('22','8.5',''),new Array('23','9',''),new Array('24','9.5',''),new Array('25','10',''),new Array('26','10',''),new Array('27','10.5',''),new Array('28','11',''),new Array('29','11.5',''),new Array('30','12',''),new Array('31','12',''),new Array('32','12.5',''),new Array('33','13',''),new Array('34','13.5',''));
                            
                            
                      var inseam = new Array(new Array('60','23.5',''),new Array('61','24',''),new Array('62','24',''),new Array('63','24.5',''),new Array('64','25',''),new Array('65','25.5',''),new Array('66','26',''),new Array('67','26',''),new Array('68','26.5',''),new Array('69','27',''),new Array('70','27.5',''),new Array('71','28',''),new Array('72','28',''),new Array('73','28.5',''),new Array('74','29',''),new Array('75','29.5',''),new Array('76','29.5',''),new Array('77','30',''),new Array('78','30.5',''),new Array('79','31',''),new Array('80','31.5',''),new Array('81','31.5',''),new Array('82','32',''),new Array('83','32.5',''),new Array('84','33',''),new Array('85','33.5',''),new Array('86','33.5',''),new Array('87','34',''),new Array('88','34.5',''),new Array('89','35',''),new Array('90','35',''),new Array('91','35.5',''),new Array('92','36',''),new Array('93','36.5',''),new Array('94','37',''),new Array('95','37',''),new Array('96','37.5',''),new Array('97','38',''),new Array('98','38.5',''),new Array('99','39',''),new Array('100','39',''),new Array('101','39.5',''),new Array('102','40',''),new Array('103','40.5',''),new Array('104','40.5',''),new Array('105','41',''),new Array('106','41.5',''),new Array('107','42',''),new Array('108','42.5',''),new Array('109','42.5',''),new Array('110','43',''),new Array('111','43.5',''),new Array('112','44',''),new Array('113','44.5',''),new Array('114','44.5',''),new Array('115','45',''),new Array('116','45.5',''),new Array('117','46',''),new Array('118','46.5',''),new Array('119','46.5',''),new Array('120','47',''),new Array('121','47.5',''),new Array('122','48',''),new Array('123','48',''),new Array('124','48.5',''),new Array('125','49',''),new Array('126','49.5',''),new Array('127','50',''),new Array('128','50',''),new Array('129','50.5',''),new Array('130','51',''),new Array('131','51.5',''),new Array('132','52',''),new Array('133','52',''),new Array('134','52.5',''),new Array('135','53',''),new Array('136','53.5',''),new Array('137','53.5',''),new Array('138','54',''),new Array('139','54.5',''),new Array('140','55',''),new Array('141','55.5',''),new Array('142','55.5',''),new Array('143','56',''),new Array('144','56.5',''),new Array('145','57',''),new Array('146','57.5',''),new Array('147','57.5',''),new Array('148','58',''),new Array('149','58.5',''));
                            
                            
                            var sleeve = new Array(new Array('70','28',''),new Array('71','28',''),new Array('72','28',''),new Array('73','29',''),new Array('74','29',''),new Array('75','30',''),new Array('76','30',''),new Array('77','30',''),new Array('78','31',''),new Array('79','31',''),new Array('80','31',''),new Array('81','32',''),new Array('82','32',''),new Array('83','33',''),new Array('84','33',''),new Array('85','33',''),new Array('86','34',''),new Array('87','34',''),new Array('88','35',''),new Array('89','35',''),new Array('90','35',''),new Array('91','36',''),new Array('92','36',''),new Array('93','37',''),new Array('94','37',''),new Array('95','37',''),new Array('96','38',''),new Array('97','38',''),new Array('98','39',''),new Array('99','39',''),new Array('100','39',''),new Array('101','40',''));
                            
                            var cups = new Array(new Array('AA','AA',''),new Array('A','A',''),new Array('A/B','A/B',''),new Array('B','B',''),new Array('B/C','B/C',''),new Array('C','C',''),new Array('C/D','C/D',''),new Array('D','D',''),new Array('DD','DD',''));
                            var shrit = new Array(new Array('33','13',''),new Array('34','13.5',''),new Array('35','13.5',''),new Array('36','14',''),new Array('37','14.5',''),new Array('38','15',''),new Array('39','15.5',''),new Array('40','15.5',''),new Array('41','16',''),new Array('42','16.5',''),new Array('43','17',''),new Array('44','17.5',''));
                            
                            var suit = new Array(new Array('90','36',''),new Array('95','38',''),new Array('100','40',''),new Array('105','42',''),new Array('110','44',''),new Array('115','46',''),new Array('120','48',''),new Array('125','50',''));
                            
                            var heightvalue=0;
                            var waistvalue = 0;
                            var weightvalue = 0;
                            var shoevalue = 0;
                            var sleevevalue = 0;
                            var cupsvalue = 0;
                            var shirt = 0;
                            var inseamvalue = 0;
                            
                            
                            function makemheight(){
                                var sitem = document.getElementById('height');
                                var subitem = document.getElementById('height2');
                                subitem.style.visibility= "hidden";
                                sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                sitem.options[sitem.options.length] = newOpt;
                                for(var i=0; i < mhieghts.length; i++){
                                    
                                    var newOpt = new Option(mhieghts[i][0]+" cm", mhieghts[i][1]);
                                    sitem.options[sitem.options.length] = newOpt;
                                    
                                    if(mhieghts[i][1] == heightvalue){
                                        sitem.selectedIndex = sitem.options.length-1;
                                    }
                                }
                            }
                            
                            function makesheight(){
                                //alert("test: "+heightvalue);
                                var subitem = document.getElementById('height2');
                                subitem.style.visibility= "visible";
                                var sitem = document.getElementById('height');
                                sitem.options.length  =0;
                                  var newOpt = new Option('------', ""); 
                                sitem.options[sitem.options.length] = newOpt;
                                for(var i=0; i < mhieghts.length; i++){
                                    
                                    var inarr = 0;
                                    for(x = 0; x < sitem.options.length; x++){
                                        if(mhieghts[i][1] == sitem.options[x].value){
                                            inarr =1;
                                        }
                                    }
                                    if(inarr ==0 ){
                                        var feet = Math.floor(mhieghts[i][1]/12);
                                        var inches = mhieghts[i][1]- (feet* 12);
                                        var newOpt = new Option(feet +'" '+ inches+"'" , mhieghts[i][1]);
                                        sitem.options[sitem.options.length] = newOpt;
                                    }
                                    
                                    if(mhieghts[i][1] == heightvalue){
                                        //alert("foundvalue: "+ heightvalue);
                                        sitem.selectedIndex = sitem.options.length-1;
                                    }
                                }
                            }
                            
                            function makemhips(){
                            
                                var slitem = document.getElementById('labelhips');
                                slitem.innerHTML = "hips";
                                    
                                    
                                var subitem = document.getElementById('hips2');
                                subitem.style.visibility= "hidden";
                                
                                var sitem = document.getElementById('hips');
                                                                sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                
                                sitem.options[sitem.options.length] = newOpt;
                                for(var i=0; i < mhips.length; i++){
                                    var newOpt = new Option(mhips[i][0]+ " cm", mhips[i][1]);
                                    sitem.options[sitem.options.length] = newOpt;
                                }
                            }
                            function makeships(){
                                    var slitem = document.getElementById('labelhips');
                                    slitem.innerHTML = "hips";
                                    
                                var subitem = document.getElementById('hips2');
                                
                                subitem.style.visibility= "visible";
                                
                                var sitem = document.getElementById('hips');
                    sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                
                                sitem.options[sitem.options.length] = newOpt;
                                for(var i=0; i < mhips.length; i++){
                                var inarr = 0;
                                    for(x = 0; x < sitem.options.length; x++){
                                        if(mhips[i][1] == sitem.options[x].value){
                                            inarr =1;
                                        }
                                    }
                                    if(inarr ==0 ){
                                
                                        var newOpt = new Option(mhips[i][1]+"\"", mhips[i][1]);
                                        sitem.options[sitem.options.length] = newOpt;
                                    }
                                }
                            }
                            function makemalemhips(){
                            
                                var slitem = document.getElementById('labelhips');
                                slitem.innerHTML = "inseam";
                            
                                var subitem = document.getElementById('hips2');
                                subitem.style.visibility= "hidden";
                                
                                var sitem = document.getElementById('hips');
                    sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                
                                sitem.options[sitem.options.length] = newOpt;
                                for(var i=0; i < inseam.length; i++){
                                    var newOpt = new Option(inseam[i][0]+ " cm", inseam[i][1]);
                                    sitem.options[sitem.options.length] = newOpt;
                                }
                            }
                            function makemaleships(){
                            
                                var slitem = document.getElementById('labelhips');
                                    slitem.innerHTML = "inseam";
                                    
                                var subitem = document.getElementById('hips2');
                                subitem.style.visibility= "hidden";
                                
                                var sitem = document.getElementById('hips');
                                sitem.options.length  =0;
                                
                                var newOpt = new Option('------', ""); 
                                
                                sitem.options[sitem.options.length] = newOpt;
                                for(var i=0; i < inseam.length; i++){
                                    var newOpt = new Option(inseam[i][1] +"\"", inseam[i][1]);
                                    if(sitem.options[sitem.options.length-1].value != inseam[i][1] && inseam[i][1] < 50 ){
                                        sitem.options[sitem.options.length] = newOpt;
                                    }
                                }
                            }

                            
                            
                            function makemwaist(){
                                var subitem = document.getElementById('waist2');
                                subitem.style.visibility= "hidden";
                                
                                var sitem = document.getElementById('waist');
                                sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                sitem.options[sitem.options.length] = newOpt;
                                
                                for(var i=0; i < mwaist.length; i++){
                                    var newOpt = new Option(mwaist[i][0]+ " cm", mwaist[i][1]);
                                    sitem.options[sitem.options.length] = newOpt;
                                    
                                    if(mwaist[i][1] == waistvalue){
                                        sitem.selectedIndex = sitem.options.length-1;
                                    }
                                }
                                
                                
                            }
                            function makeswaist(){
                                var subitem = document.getElementById('waist2');
                                subitem.style.visibility= "visible";
                                
                                var sitem = document.getElementById('waist');
                                sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                sitem.options[sitem.options.length] = newOpt;
                                
                                for(var i=0; i < mwaist.length; i++){
                                
                                
                                    var inarr = 0;
                                    for(x = 0; x < sitem.options.length; x++){
                                        if(mwaist[i][1] == sitem.options[x].value){
                                            inarr =1;
                                        }
                                    }
                                    if(inarr ==0 ){

                                        var newOpt = new Option(mwaist[i][1] +"\"", mwaist[i][1]);
                                        sitem.options[sitem.options.length] = newOpt;
                                    }
                                    
                                    if(mwaist[i][1] == waistvalue){
                                        sitem.selectedIndex = sitem.options.length-1;
                                    }
                                }
                            }
                            
                            function makemweight(){
                                var sitem = document.getElementById('weight');
                                sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                sitem.options[sitem.options.length] = newOpt;
                                for(var i=0; i < mweight.length; i++){
                                    var newOpt = new Option(mweight[i][0]+" Kg" , mweight[i][1] ); 
                                    sitem.options[sitem.options.length] = newOpt;
                                    
                                    if(mweight[i][1] == weightvalue){
                                        sitem.selectedIndex = sitem.options.length-1;
                                    }
                                }
                            }
                            function makesweight(){
                                var sitem = document.getElementById('weight');
                                sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                sitem.options[sitem.options.length] = newOpt;
                                for(var i=0; i < mweight.length; i++){
                                    var inarr = 0;
                                    for(x = 0; x < sitem.options.length; x++){
                                        if(mweight[i][1] == sitem.options[x].value){
                                            inarr =1;
                                        }
                                    }
                                    if(inarr ==0 ){
                                        var newOpt = new Option(mweight[i][1] +" lbs", mweight[i][1] ); 
                                        sitem.options[sitem.options.length] = newOpt;
                                    }
                                    
                                    if(mweight[i][1] == weightvalue){
                                        sitem.selectedIndex = sitem.options.length-1;
                                    }
                                    
                                }
                            
                            }
                            
                            function makemshoe(){
                                var sitem = document.getElementById('shoe');
                                sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                sitem.options[sitem.options.length] = newOpt;
                                for(var i=0; i < mshoe.length; i++){
                                    var newOpt = new Option(mshoe[i][0] + " cm", mshoe[i][1] ); 
                                    sitem.options[sitem.options.length] = newOpt;
                                }
                            }
                            
                            function makesshoe(){
                                var sitem = document.getElementById('shoe');
                                sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                sitem.options[sitem.options.length] = newOpt;
                                for(var i=0; i < mshoe.length; i++){
                                
                                
                                    var inarr = 0;
                                    for(x = 0; x < sitem.options.length; x++){
                                        if(mshoe[i][1] == sitem.options[x].value){
                                            inarr =1;
                                        }
                                    }
                                    if(inarr ==0 ){


                                        var newOpt = new Option(mshoe[i][1] + "", mshoe[i][1] ); 
                                        sitem.options[sitem.options.length] = newOpt;
                                    
                                    }
                                }
                            }
                            
                            
                            function makemdress(){

                                var subitem = document.getElementById('sleevelength');
                                subitem.style.visibility= "hidden";
                                //alert("subitem: "+subitem );
                                
                                var sitem = document.getElementById('dress');
                                
                                sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                sitem.options[sitem.options.length] = newOpt;
                                
                                for(var i=0; i < mdress.length; i++){
                                    var newOpt = new Option(mdress[i][0]+" cm" , mdress[i][1] );
                                    sitem.options[sitem.options.length] = newOpt;
                                }
                            
                            }
                            
                            function makemalesdress(){
                                //suit/length
                                var subitem = document.getElementById('sleevelength');
                                subitem.style.visibility= "visible";
                                
                                
                                var slitem = document.getElementById('labeldress');
                                slitem.innerHTML = "suit/length";
                            
                                var sitem = document.getElementById('dress');
                                
                                sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                sitem.options[sitem.options.length] = newOpt;
                                
                                for(var i=0; i < suit.length; i++){
                                    var newOpt = new Option(suit[i][1]+"\"", suit[i][1] );
                                    sitem.options[sitem.options.length] = newOpt;
                                }
                            
                            }
                                function makemalemdress(){
                                //suit/length
                                var subitem = document.getElementById('sleevelength');
                                subitem.style.visibility= "visible";
                                
                                
                                var slitem = document.getElementById('labeldress');
                                slitem.innerHTML = "suit/length";
                            
                                var sitem = document.getElementById('dress');
                                
                                sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                sitem.options[sitem.options.length] = newOpt;
                                
                                for(var i=0; i < suit.length; i++){
                                    var newOpt = new Option(suit[i][0]+ " cm", suit[i][1] );
                                    sitem.options[sitem.options.length] = newOpt;
                                }
                            
                            }
                            
                            function makesdress(){
                                var subitem = document.getElementById('sleevelength');
                                subitem.style.visibility = "hidden";
                                
                                var slitem = document.getElementById('labeldress');
                                slitem.innerHTML = "dress";
                            
                                var sitem = document.getElementById('dress');
                                
                                sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                sitem.options[sitem.options.length] = newOpt;
                                
                                for(var i=0; i < mdress.length; i++){
                                    var newOpt = new Option(mdress[i][1], mdress[i][1] );
                                    sitem.options[sitem.options.length] = newOpt;
                                }
                            
                            }

                            function makemalemchest(){
                                var slitem = document.getElementById('labelchest');
                                slitem.innerHTML = "shirt/sleeve";
                            
                                var subitem = document.getElementById('cup');
                                subitem.style.visibility= "visible";
                                
                                var sitem = document.getElementById('chest');
                                
                                sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                sitem.options[sitem.options.length] = newOpt;
                                
                                for(var i=0; i < mchest.length; i++){
                                    var newOpt = new Option(mchest[i][0] + " cm", mchest[i][1] );
                                    sitem.options[sitem.options.length] = newOpt;
                                }
                                
                                var sitem = document.getElementById('cup');
                                
                                sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                sitem.options[sitem.options.length] = newOpt;
                                
                                for(var i=0; i < sleeve.length; i++){
                                    var newOpt = new Option(sleeve[i][0] + " cm", sleeve[i][1] );
                                    sitem.options[sitem.options.length] = newOpt;
                                }
                            }
                            
                            function makemaleschest(){
                                var slitem = document.getElementById('labelchest');
                                slitem.innerHTML = "shirt/sleeve";
                            
                            
                                var subitem = document.getElementById('cup');
                                subitem.style.visibility= "visible";
                                var sitem = document.getElementById('chest');
                                
                                sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                sitem.options[sitem.options.length] = newOpt;
                                
                                for(var i=0; i < shrit.length; i++){
                                    var inarr = 0;
                                    for(x = 0; x < sitem.options.length; x++){
                                        if(shrit[i][1] == sitem.options[x].value){
                                            inarr =1;
                                        }
                                    }
                                    if(inarr ==0 ){
                                        var newOpt = new Option(shrit[i][1] + "\"", shrit[i][1] );
                                        sitem.options[sitem.options.length] = newOpt;
                                    }
                                }
                                var sitem = document.getElementById('cup');
                                
                                sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                sitem.options[sitem.options.length] = newOpt;
                                
                                for(var i=0; i < sleeve.length; i++){
                                
                                    var inarr = 0;
                                    for(x = 0; x < sitem.options.length; x++){
                                        if(sleeve[i][1] == sitem.options[x].value){
                                            inarr =1;
                                        }
                                    }
                                    if(inarr ==0 ){
                                        var newOpt = new Option(sleeve[i][1] + "\"", sleeve[i][1] );
                                        sitem.options[sitem.options.length] = newOpt;
                                    }
                                }
                            }
                            
                            function makemchest(){
                                var slitem = document.getElementById('labelchest');
                                slitem.innerHTML = "chest/cup";
                                
                                var subitem = document.getElementById('cup');
                                subitem.style.visibility= "visible";
                                
                                var sitem = document.getElementById('chest');
                                
                                sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                sitem.options[sitem.options.length] = newOpt;
                                
                                for(var i=0; i < mchest.length; i++){
                                    var newOpt = new Option(mchest[i][0]+ " cm", mchest[i][1] );
                                    sitem.options[sitem.options.length] = newOpt;
                                }
                                var sitem = document.getElementById('cup');
                                
                                sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                sitem.options[sitem.options.length] = newOpt;
                                
                                for(var i=0; i < cups.length; i++){
                                    var newOpt = new Option(cups[i][0], cups[i][1] );
                                    sitem.options[sitem.options.length] = newOpt;
                                }
                            }
                            
                            function makeschest(){
                                var slitem = document.getElementById('labelchest');
                                slitem.innerHTML = "chest/cup";
                            
                                var subitem = document.getElementById('cup');
                                subitem.style.visibility= "visible";
                                var sitem = document.getElementById('chest');
                                
                                sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                sitem.options[sitem.options.length] = newOpt;
                                
                                for(var i=0; i < mchest.length; i++){
                                    var newOpt = new Option(mchest[i][1] + "\"", mchest[i][1] );
                                    sitem.options[sitem.options.length] = newOpt;
                                }
                                
                                var sitem = document.getElementById('cup');
                                
                                sitem.options.length  =0;
                                var newOpt = new Option('------', ""); 
                                sitem.options[sitem.options.length] = newOpt;
                                
                                for(var i=0; i < cups.length; i++){
                                    var newOpt = new Option(cups[i][1], cups[i][1] );
                                    sitem.options[sitem.options.length] = newOpt;
                                }
                                
                            }
                        
                        
                        
                            function setheight(){
                                var sitem = document.getElementById('height');
                                 heightvalue = sitem.options[sitem.selectedIndex].value;
                                //alert(heightvalue);
                                
                        
                            }
                            function setweight(){
                                var sitem = document.getElementById('weight');
                                weightvalue = sitem.options[sitem.selectedIndex].value;
                                //alert(heightvalue);
                                
                        
                            }
                            function setwaist(){
                                var sitem = document.getElementById('waist');
                                waistvalue = sitem.options[sitem.selectedIndex].value;
                            }
                            function sethips(){
                                var sitem = document.getElementById('hips');
                                hipvalue = sitem.options[sitem.selectedIndex].value;
                            }
                            
                            function setshoe(){
                                var sitem = document.getElementById('shoe');
                                shoevalue = sitem.options[sitem.selectedIndex].value;
                            }
                            function setinseam(){
                                var sitem = document.getElementById('shoe');
                                shoevalue = sitem.options[sitem.selectedIndex].value;
                            }

                            
                            
                            function setmchoice(){
                                var sitem = document.getElementById('metricweight');
                                var sh = sitem.options[sitem.selectedIndex].value;
                                
                                var hitem = document.getElementById('weight');
                                
                                
                                
                                
                                //var h2item = document.getElementById('height2');
                                //var arr = sh.split(',');
                                //alert(sh);
                                for(i=0; i < hitem.options.length; i++){
                                    if(hitem.options[i].value == sh){
                                        hitem.selectedIndex = i;
                                    }
                                }
                                /*for(i=0; i < h2item.options.length; i++){
                                    if(h2item.options[i].value == arr[1]){
                                        h2item.selectedIndex = i;
                                    }
                                }*/
                        
                            }
                        
                            function setMetric(){
                                
                        
                                makemheight();
                                makemweight();
                                makemshoe();
                                makemwaist();
                                
                                if(showingMale){
                                    
                                    makemalemchest();
                                    makemalemdress();
                                    makemalemhips();
                                    
                                }else{
                                
                                    makemchest();
                                    makemdress();
                                    makemhips();

                                }
                                
                                showingMetric = 1;
                                
                            }
                            function setStandard(){
                        
                                makesheight();
                                makesweight();
                                makeswaist();
                                makesshoe();
                                
                                if(showingMale){
                                
                                    makemaleschest();
                                    makemalesdress();
                                    makemaleships();
                                
                                }else{
                                
                                    makeschest();
                                    makesdress();
                                    makeships();

                                }
                                showingMetric = 0;
                            }
                        </script>
                        <div style="font-size:.8em; height:26px;" > unit of measurement  &nbsp; 
                       <input type="radio" name="units" group="u" value="standard" checked  onclick="javascript:setStandard();" /> imperial (in, lbs)  &nbsp; &nbsp; &nbsp;
                        <input type="radio" name="units" group="u" value="metric" onclick="javascript:setMetric();" > metric (cm, kg)  </div>
                        
                        

                        <ul class="fields"  id="femaleSet" >
                            <li class="height">
                                <label for="">*height</label>
                                    <select name="height" id="height" onchange="javascript:setheight();">
                                    <option value="" >-----</option>
                                      
                                    </select>

                                    
                                    <select id="height2" name="height2" >
                                      <option value="" >-----</option>
                                      <option value="0.25" >1/4</option>
                                      <option value="0.5" >1/2</option>
                                      <option value="0.75" >3/4</option>
                                    </select>
                            </li>
                            <script>makesheight(); </script>
                            <li class="height">
                                <label for="">*weight</label>
                                    <select id="weight" name="weight" onchange="javascript:setweight();">
                                      <option value="" >-----</option>
                                      
                                    </select>                                    
                            </li>
                            
                             <script>makesweight(); </script>
                            
                            
                          
                            <li class="height" >
                                <label for="" id="labeldress" >dress</label>
                                    <select id="dress" name="dress">
                                    
                                    </select>
                                    
                                
                                    
                                     <select id="sleevelength" name="length" >
                                    <option value="" >-----</option>
                                      <option>S</option>
                                      <option>R</option>
                                      <option>R/L</option>
                                      <option>L</option>
                                    </select>
                                    
                                    <script>makesdress();</script>  
                            </li>
                            <li class="height">
                                <label for="" id="labelchest" >chest/cup</label>
                                    <select id="chest" name="chest" >
                                                                        </select>
                                    <select id="cup" name="cup">
                                    <option value="" >-----</option>
                                      <option>AA</option>
                                      <option>A</option>
                                      <option>A/B</option>
                                      <option>B</option>
                    
                                      <option>B/C</option>
                                      <option>C</option>
                                      <option>C/D</option>
                                      <option>D</option>
                                      <option>DD</option>
                                    </select>
                            </li>
                            <script>makeschest();</script>
                             <li class="height">
                                <label for="" id="labelhips" >hips</label>
                                    <select id="hips" name="hips" onchange="sethips();" >
                              
                                    </select>
                                    <select name="hips2" id="hips2">
                                    <option value="" >-----</option>
                                      <option value="0.25" >1/4</option>
                                      <option value="0.5" >1/2</option>
                                      <option value="0.75" >3/4</option>
                                    </select>
                                    
                                    <script>makeships();</script>
                            </li>
                            
                            <li class="height">
                                <label for="">waist</label>
                                    <select id="waist" name="waist" onchange="javascript:setwaist();" >
                           
                                    </select>  
                                    <select name="waist2" class="formTextHolder" id="waist2">
                                    <option value="" >-----</option>
                                       <option value="0.25" >1/4</option>
                                      <option value="0.5" >1/2</option>
                                      <option value="0.75" >3/4</option>
                                    </select>
                                    <script>makeswaist();</script>      
                            </li>
                                   <li class="height">
                                <label for="">shoe</label>
                                    <select id="shoe" name="shoe">
                                    </select>        
                            </li>
                            <script>makesshoe();</script>
                            <li class="height">
                                <label for="">eye color</label>
                                    <select id="eyecolor" name="eyecolor">
                                      <option value="" >-----</option>
                                      <option>Blue</option>
                                      <option>Blue - Green</option>
                                      <option>Blue - Grey</option>
                                      <option>Black</option>
                                      <option>Brown</option>
                                      <option>Green</option>
                                      <option>Grey</option>
                                      <option>Hazel</option>
                                      <option>Hazel - Green</option>
                                    </select>          
                             </li>
                            <li class="height">
                                <label for="">hair color</label>
                                    <select id="haircolor" name="haircolor">
                                        <option value="" >-----</option>
                                      <option>Auburn</option>
                                      <option>Blonde</option>
                                      <option>Black</option>
                                      <option>Brown</option>
                                      <option>Grey</option>
                                      <option>Red</option>
                                      <option>Salt &amp; Pepper</option>
                                      <option>Shaved</option>
                                      <option>White</option>
                                      <option>Silver</option>
                                    </select>
                            </li>
                        </ul>
                       
                       
                       
                       
                        
                   </div><!-- closes form for step2-->                  </div>
            </div><!-- closes step2 -->
            <div id="step3">
                <h1 class="step">Step 3</h1>
                    <div class="form floatL">
                        <ul class="photo_upload_directions">
                            <li class="no_list_style"><font color="#ffffff"><h3>Photo Submission</h3></font>
                            Please upload four photos following the examples below.</li>
                          
                            <li class="no_list_style">(Upload limit 600kb, .jpg, .jpeg, .gif formats)</li>
                        </ul>
                        
                         <ul class="photo_upload" style="clear:both;">
                             
                             <li><input name="fileAttach" type="file"></li>
                         <!-- <li>

                        <div align="center"  style="clear:both;" ><span class="thumbnail"><div id="image1_div" >
                            <script type=text/javascript>
                            var fo = new SWFObject("fordupload_newest.swf?userid=puvdgmd9ejvndmk2lgvqkm7gq2&iname=image1&week=150_2013","image1", "144", "186", "7", "#000000");
                            fo.addParam("wmode", "transparent");
                            fo.addParam("swliveconnect", "true");
                            fo.write("image1_div");

                        </script>
                        </div></span></div>
                        </li>
                        
                        <li>
                        <div align="center"><span class="thumbnail"><div id="image2_div"  >
                            <script type=text/javascript>
                            var fo = new SWFObject("fordupload_newest.swf?userid=puvdgmd9ejvndmk2lgvqkm7gq2&iname=image2&week=150_2013", "image2", "144", "186", "7", "#000000");
                            fo.addParam("wmode", "transparent");
                            fo.addParam("swliveconnect", "true");
                            fo.write("image2_div");
                        </script>
                        </div></span></div>
                        </li>
                        
                        <li>
                          <div align="center"><span class="thumbnail"><div id="image3_div"  >
                          <script type=text/javascript>
                                var fo = new SWFObject("fordupload_newest.swf?userid=puvdgmd9ejvndmk2lgvqkm7gq2&iname=image3&week=150_2013", "image3", "144", "186", "7", "#000000");
                                fo.addParam("wmode", "transparent");
                                fo.addParam("swliveconnect", "true");
                                fo.write("image3_div");
                             </script>
                             </div></span></div>
                        </li>
                          <li>
                          <div align="center"><span class="thumbnail"><div id="image4_div"  >
                          <script type=text/javascript>
                                var fo = new SWFObject("fordupload_newest.swf?userid=puvdgmd9ejvndmk2lgvqkm7gq2&iname=image4&week=150_2013", "image4", "144", "186", "7", "#000000");
                                fo.addParam("wmode", "transparent");
                                fo.addParam("swliveconnect", "true");
                                fo.write("image4_div");
                             </script>
                             </div></span></div>
                        </li> -->
                        </ul>
                        <ul class="buttons">
                            <li onMouseDown="javascript:validate(f);" style="cursor:pointer" >
							<button style="margin:10px; width:200px; text-align:center;background-color:rgb(12, 167, 206);cursor:pointer;">Submit</button>	                            
<!--                             <img src="images/submit.jpg" alt="submit" /> -->
                            </li>
                           <!--  <li onclick="javascript:window.open('rules.html','rules','width=600,height=600,scrollbars=yes')" style="cursor:pointer" ><img src="_design/images/rules.jpg" alt="apply process and rules" /></li>
                            <li onclick="javascript:window.open('privacy.html','rules','width=600,height=600,scrollbars=yes')" style="cursor:pointer" ><img src="_design/images/privacy.jpg" alt="privacy policy" /></li> -->
                        </ul>
                    </div><!-- closes form for step3 -->
            </div><!-- closes step3 -->
        <span style="clear:both;"><br /><br /><br /><br /><br /><br /><br /><br /><br /></span>
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
