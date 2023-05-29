
function check(){
    var x=document.reg.fname.value;
    var y=document.reg.lname.value;
    var z=document.reg.pname.value;
    var p=document.reg.cpname.value;
    var l=document.reg.email.value;
    var k=document.reg.sex.value;
    var n=document.reg.Diabetic.value;
    var o=document.reg.vegan.value;
    var q=document.reg.weight_loss.value;
  //  var m=document.reg.fname.value;
    if(x=="")
    {
      window.alert("first name can not be empty");
    }
    else if(!/^[a-zA-z]*$/g.test(x)){
        window.alert("please type only alphabetic letters");
    }
    else if(y==""){
      window.alert("last name can not be empty");
    }
   else if(!/^[a-zA-z]*$/g.test(y)){
      window.alert("please type only alphabetic letter ");
      }
   else if(z==""){
      window.alert("password can not be empty");
    }
    else if(z.length<4){
      window.alert("invalid password length");
    }

    else if(p==""){
      window.alert("confirm your password");
    }
    else if(z!=p){
      window.alert("password not match correctly");
    }
    else if(l==""){
      window.alert("email can not be empty");
    }
    else if(k==""){
      window.alert("please choose your gender");
    }
    else if(n==""){
      window.alert("please choose your condition");
    }
    else if(o==""){
      window.alert("please choose your type");
    }
    else if(q==""){
      window.alert("please choose about your weight");
    }
}
