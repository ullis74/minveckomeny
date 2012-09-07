onload=function(){
var regSubmit= document.getElementById("click");
    
	regSubmit.onclick=validateForm;

}

function validateForm()
{

var x=document.forms["regForm"]["firstname"].value;
    x=document.forms["regForm"]["lastname"].value;
    x=document.forms["regForm"]["email"].value;
    x=document.forms["regForm"]["password"].value;
    x=document.forms["regForm"]["confirmPassword"].value;
    x=document.forms["regForm"]["username"].value;
        if (x==null || x=="")
{
        alert ("fyll i fält");
    return false;
}

    x=document.forms["regForm"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
        if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
{
        alert ("Ogiltig emailadress");
    return false;
}


    x=document.forms["regForm"]["password"].value;
var y=document.forms["regForm"]["confirmPassword"].value;

        if (y !== x)
{
            alert ("Inte samma lösenord, försök igen");
            return false;
}

      
 return true;
}











