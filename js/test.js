
$(function(){

var usererror = true ,

	mailerror = true , 

	telerror = true,

	messagesrror = true;

//prevent default

$(".s").on("submit",function(e){

if(usererror === true || mailerror === true || messagesrror === true || telerror === true){

e.preventDefault();

$(".username").blur();

$(".mail").blur();

$(".phone").blur();

$(".mess").blur();

}

});


//first input

$(".username").on("blur",function(){

	if( $(this).val().length <= 3 ){

	$(this).css("border","1px solid red");
	$(".z1").fadeIn(200);
	$(".y1").fadeIn(200);

	usererror = true;

	}

	else{

	$(this).css("border","1px solid green");
	$(".z1").fadeOut(200);
	$(".y1").fadeOut(200);

	usererror = false;

	}

});
 
//delete

$(".y1").on("click",function(){

	$(".username").val("");	

});

$(".y2").on("click",function(){

	$(".mail").val("");	

});

$(".y3").on("click",function(){

	$(".phone").val("");	

});

$(".y4").on("click",function(){

	$(".mess").val("");	

});

//second input

$(".mail").on("blur",function(){

	if( $(this).val() == "" ){

	$(this).css("border","1px solid red");
	$(".z2").fadeIn(200);
	$(".y2").fadeIn(200);

	mailerror = true;

	}

	else{

	$(this).css("border","1px solid green");
	$(".z2").fadeOut(200);
	$(".y2").fadeOut(200);

	mailerror = false;

	}

});

//third input

$(".phone").on("blur",function(){

	if( $(this).val().length < 11 || $(this).val().length > 11){

	$(this).css("border","1px solid red");
	$(".z3").fadeIn(200);
	$(".y3").fadeIn(200);

	telerror = true;

	}

	else{

	$(this).css("border","1px solid green");
	$(".z3").fadeOut(200);
	$(".y3").fadeOut(200);

	telerror = false;

	}

});

//fourth input

$(".mess").on("blur",function(){

	if( $(this).val().length < 10){

	$(this).css("border","1px solid red");
	$(".z4").fadeIn(200);
	$(".y4").fadeIn(200);

	messagesrror = true;

	}

	else{

	$(this).css("border","1px solid green");
	$(".z4").fadeOut(200);
	$(".y4").fadeOut(200);

	messagesrror = false;

	}

});

$(".b").on("click",function(e){

e.preventDefault();

    $(".username").val("");	

	$(".mail").val("");	

	$(".phone").val("");	

	$(".mess").val("");	

	$(".v1").fadeOut(1000);

});

});
