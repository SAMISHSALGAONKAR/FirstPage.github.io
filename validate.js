function validate()
{

    var firstname=document.getElementById("fn");
    
    var surname=document.getElementById("sn");
    
    var gender=document.getElementsByName("Gender");

    var checkBox=document.getElementById("cbox");

    var drop=document.getElementById("dropDown");

    var t=drop.options[drop.selectedIndex].value;

    var email=document.getElementById("em").value;

    var phone=document.getElementById("pn").value;

    var passWord=document.getElementById("pw").value;

    var bd=document.getElementById("birthday").value;
	
// //UserName Validation
//     if(firstname.value=="")
//     {
//         alert("Please enter Firstname!!");
//         return false;
//     }
//     if(firstname.value.length<3){
//         alert("Minimum length of Name should be 3");
//         return false;
//     }
//     if(surname.value=="")
//     {
//         alert("Please enter Surname!!");
//         return false;
//     }
//     if(surname.value.length<4){
//         alert("Minimum length of Name should be 4");
//         return false;
//     }
// //END UserName Validation    

// //Email Address Validation
//     var x=/([a-zA-Z0-9\.-]+)@([a-zA-Z0-9]+).([a-z]{2,10})(.[a-z]{2,10})?/;

//     if(email==""){
//         alert("Email Address cannot be empty!!");
//         return false;
//     }
//     else if(x.test(email)==false)
//     {
//         alert("Please Enter Valid Email Address!!");
//         return false;
//     }
// //END Email Address Validation

// //Mobile Number Validation    
// var phoneNo = /^[789]{1}[0-9]{9}$/;
// if(phone==""){
//     alert("Please Enter Mobile Number!!");
//     return false;
// }
// if(phoneNo.test(phone)==false)
// {
//     alert("Enter valid 10 digit number");
//     return false;
// }
// //END Mobile Number Validation
    


// //Gender Validation
//     var c=false,gender_selected='';
//     for(var i=0;i<gender.length;i++)
//     {
//         if(gender[i].checked==true){
//             c=true;
//             gender_selected=gender[i].value;
//         }
        
//     }
//     if(!c){
//             alert("Please select gender!!");
//             return false;
//         }
//END Gender Validation

//Select Country Validation
if(t==NaN){
    alert("Please select Country!!!")
    return false;
}
//END Select Country Validation

//Birthdate Validation

if(bd=="")
{
    alert("Please select Birthdate!!");
    return false;
}
//END Birthdate Validation


//Passwrod Validation
if(passWord=="")
{
    alert("Please Enter Password!!");
    return false;
}
else if(passWord.length<6)
{
    alert("Minimum length of Password should be 6");
    return false;
}

 var re = /[0-9]/;
      if(re.test(passWord)==false) {
        alert("Error: password must contain at least one number (0-9)!");
        return false;
      }
	 
	  var re = /[a-z]/;
      if(re.test(passWord)==false) {
        alert("Error: password must contain at least one lowercase letter (a-z)!");
        return false;
      }
     var re = /[A-Z]/;
      if(re.test(passWord)==false) {
        alert("Error: password must contain at least one uppercase letter (A-Z)!");
        return false;
      }
	  
//END Passwrod Validation

//CheckBox Validation
    if(checkBox.checked==false){
    alert('Please select Checkbox!!');
    return false;
}
//END CheckBox Validation  


alert("First Name:"+firstname.value+"\n"+"SurName:"+surname.value+"\n"+"Email:"+email+"\n"+"Mobile:"+phone+"\n"+"Gender:"+gender_selected+"\n"+"Country:"+t+"\n"+"Birthdate:"+bd+"\n"+"Password:"+passWord+"\n");
}
