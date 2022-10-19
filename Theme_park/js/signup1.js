$(document).ready(function () {

	var fnm = 0, vch = 0, ag = 0, mob = 0, eml = 0, tr = 0;

	$('#fname').blur(function(){
		fullnameverification();
		console.log(fnm);
	});

	function fullnameverification(){
		var fn = $('#fname').val();
		if(fn == "" || fn == null){
			fnm=0;
		$('#fname').css('border-color','red');
		$('#namefb').html("<span style='color:red'>Please enter the Full Name</span>");
		}else{
			fnm=1;
		$('#fname').css('border-color','#CDE4DA');
		$('#namefb').html("");	
		}
	}

	$('.vch').blur(function(){
		voucherverification();
		console.log(vch);
	});

	function voucherverification(){
		var vc = $("input[name=voucher]:checked").val();
		if(vc == "" || vc == null  ){
			vch=0;
		$('.vch').css('border-color','red');
		$('#vchfb').html("<span style='color:red'>Please enter the Voucher Type</span>");
		}else{
			vch=1;
		$('.vch').css('border-color','#CDE4DA');
		$('#vchfb').html("");	
		}
	}

	 $('#age').blur(function(){
		ageverification();
		console.log(ag);
	});

	function supportingcomponentverification(){
		var agn = $('#age').val();
		if(agn == "" || agn == null){
			ag=0;
		$('#age').css('border-color','red');
		$('#agefb').html("<span style='color:red'>Please enter the Age</span>");
		}else{
			ag=1;
		$('#age').css('border-color','#CDE4DA');
		$('#agefb').html("");	
		}
	}
	

	$('#mobilenumber').blur(function(){
		mobilenumberverification();
		console.log(mob);
	});
	function mobilenumberverification(){
		var mb= $('#abstract').val();
		if(mb == "" || mb == null){
			mob=0;
		$('#mobilenumber').css('border-color','red');
		$('#mbnfb').html("<span style='color:red'>Please enter the Mobile Number</span>");
		}else{
            if (cont.length != 10)
            {	
            	mob=0;
               alert('Phone number must be 10 digits.');
               $('#mobilenumber').css('border-color','red');
               $('.mbnfb').html("<span style='color:red'>Enter valid contact-number</span>");
           	}else{
           	   mob=1;
           	   $('#mobilenumber').css('border-color','#CDE4DA');
               $('.mbnfb').html("");
           }
		}
	}


	$('#email').blur(function(){
		emailverification();
		console.log(eml);
	});

	function emailverification(){
		var em= $('#email').val();
		if(em == "" || mb == null){
			eml=0;
		$('#email').css('border-color','red');
		$('#emailfb').html("<span style='color:red'>Please enter the Email</span>");
		}else{
			eml=1;
		$('#email').css('border-color','#CDE4DA');
		$('#emailfb').html("");	
		}
	}

	$('.tch').click(function(){
		transportverification();
		console.log(tr);
	});
 
 	function transportverification(){
 		var tch = $("input[name=technology]:checked").val();

 		if (tch == "" || tch == null) {
 			tr=0;
 			$('.tch').css('border-color','red');
			$('#transportfb').html("<span style='color:red'>Please enter the Transport Type</span>");
 		}else{
 			tr=1;
 		$('.tch').css('border-color','#CDE4DA');
		$('#transportfb').html("");		

		}
	 }

		$('#sign').click(function(){
		fullnameverification();
		voucherverification();
		ageverification();
	    mobilenumberverification();
		emailverification();
		transportverification();
		// console.log("ab="+a+"spc="+sc+"pct="+pc+"tch="+t+"pn="+pnm);
		if(fnm == 0 || vch == 0 || ag == 0 || mob == 0 || eml == 0 || tr = 0){
			event.preventDefault();
			event.stopPropagation();
		}

		});
});

// $(document).ready(function () {

// 		$('#signin').click(function () {
// 		$('.lform').css('display','none');
// 		$('.sform').css('display','block');
// 	});
// 	$('#login').click(function() {
// 		$('.sform').css('display','none');
// 		$('.lform').css('display','block');
// 	});



// 		var n=0;
// 		$('#name').blur(function  () {
// 		nameVerfication();
// 		console.log(n);
// 		});

// 		function nameVerfication () {
// 		var name = $('#name').val();
// 		if (name == "" || name == null) {
// 		n=0;
// 		$('#name').css('border-color','red');
// 		$('#namefb').html("<span style='color:red'>Enter valid name</span>");
// 		}else{
// 		n=1;
// 		$('#name').css('border-color','#CDE4DA');
// 		$('#namefb').html("");
// 		}
// 		}

// 		var c=0;
// 		$('#contact').blur(function  () {
// 		contactVerification();
// 		console.log(c);
// 		});

// 		function contactVerification () {
// 		var cont = $('#contact').val();
// 		if (cont == "" || cont == null) {
// 		c=0;
// 		$('#contact').css('border-color','red');
// 	    $('#contactfb').html("<span style='color:red'>Enter valid contact-number</span>");
// 		} else{
// 		            if (cont.length != 10)
// 		            {
// 		            c=0;
// 		               alert('Phone number must be 10 digits.');
// 		               $('#contact').css('border-color','red');
// 		               $('#contactfb').html("<span style='color:red'>Enter valid contact-number</span>");
// 		            }else{
// 		              c=1;
// 		              $('#contact').css('border-color','#CDE4DA');
// 		               $('#contactfb').html("");
// 		           }
// 		}
// 		}

// 		var e=0;
// 		$('#email').blur(function  () {
// 		emailVerification();
// 		console.log(e);
// 		});

// 		function emailVerification () {
// 		var email = $('#email').val();
// 		if (email == "" || email == null) {
// 		e=0;
// 		$('#email').css('border-color','red');
// 		$('#emailfb').html("<span style='color:red'>Enter valid email id</span>");
// 		} else{
// 		var emailReg = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
// 		if (emailReg.test(email)) {
// 		e = 1;
// 		$('#email').css('border-color','#CDE4DA');
// 		$("#emailfb").html("");
// 		}else{
// 		e = 0;
// 		$('#email').css('border-color','red');
// 		$(".fbem").html("<span style='color:red'>Enter valid Email id</span>");
// 		}
// 		}
// 		}

// 		var u=0;
// 		$('#user').blur(function  () {
// 		usernameVerification();
// 		console.log(u);
// 		});

// 		function usernameVerification () {
// 		var user = $('#user').val();
// 		if (user == "" || user == null) {
// 		u=0;
// 		$('#user').css('border-color','red');
// 		$('#userfb').html("<span style='color:red'>Enter valid username</span>");
// 		} else{
// 		u=1;
// 		$('#user').css('border-color','#CDE4DA');
// 		$('#userfb').html("");
// 		}
// 		}

// 		var p=0;
// 		$('#pass').blur(function  () {
// 		passwordVerification();
// 		console.log(p);
// 		});

// 		function passwordVerification () {
// 		var pass = $('#pass').val();
// 		if (pass == "" || pass == null) {
// 		p=0;
// 		$('#pass').css('border-color','red');
// 		$('#passfb').html("<span style='color:red'>Enter valid password</span>");
// 		} else{
// 		p=1;
// 		$('#pass').css('border-color','#CDE4DA');
// 		$('#passfb').html("");
// 		}
// 		}

// 		$('#sign').click(function  () {
// 		nameVerification();
// 		contactVerification();
// 		emailVerification();
// 		usernameVerification();
// 		passwordVerification();

// 		console.log("name="+n+"cont="+c+"email="+e+"user="+u+"pass="+p);

// 		if (n == 0 || c == 0 || e == 0 || u == 0 || p == 0) {
// 		event.preventDefault();
// 	    event.stopPropagation();
// 		}
// 		});
// });