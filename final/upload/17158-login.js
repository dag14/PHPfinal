function check(){
var x=document.login.uname.value;
var y=document.login.pname.value;


if(x=="")
{
  window.alert("user name can not be empty");
}
else if(!/^[a-zA-z]*$/g.test(x)){
    window.alert("please type only alphabetic letters");
}
else if(y==""){
  window.alert("password can not be empty");
}
else if(y.length<4){
  window.alert("invalid password length");
}

}
