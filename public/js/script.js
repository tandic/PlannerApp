

$('#prijava').click(function(){

	$('#pr').show();
	$('#re').hide();
	$('#1option').addClass("active");
	$('#2option').removeClass("active");
});


$('#registracija').click(function(){

	$('#re').show();
	$('#pr').hide();
	$('#2option').addClass("active");
	$('#1option').removeClass("active");
});

$('#option1').change(function(){

	$('#pr').show();
	$('#re').hide();
});

$('#option2').change(function(){

	$('#re').show();
	$('#pr').hide();
});

function myF() {
   var password = document.getElementById("password");
   var password_confirmation = document.getElementById("password_confirmation");
   var passHelp = document.getElementById("passHelp");


   if(password.value.length<6)
   {
   		passHelp.innerHTML="Prekratka lozinka!";
   		document.getElementById("sub").style.marginTop = "5px";
   		return false;
   }else if(password.value!=password_confirmation.value){
   		passHelp.innerHTML="Lozinke se ne poklapaju!";
   		document.getElementById("sub").style.marginTop = "5px";
   		return false;
   }
}
