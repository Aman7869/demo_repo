				$(document).ready(function(){
				$.validator.addMethod("StrongPassword",function(value){
					return /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/.test(value);
				},"Please enter Strong password");
				$("#form1").validate({
					rules:{
						myName:{
							required : true,
							minlength:3
						},
						email:{
							required:true,
							email:true
						},
						pass:{
							required:true,
							StrongPassword:true
						},
						cpass:{
							required:true,
							equalTo:"#pass" //id
						},
						dob:{
							required:true,
						},
						
					
						gender:{
							required:true,
						}
					},
					// another code
					highlight:function(element){
						$(element).addClass("c1");
						// $(element).removeClass("c2");
					},
					unhighlight:function(element){
						$(element).removeClass("c1");
					},
				
					// messages code
					messages:{
						myName:{
							required:"Name is mandantory"
							// minlength:"3 chactor dalo"
						},
						email:{
							required:"Email is mandantory",
							email:"Invalid email"
						},
						pass:{
							required:"Password is mandantory",
							StrongePassword:"Please enter strong password"
						},
						cpass:{
							required:" Confirm password is mandantory",
							equalTo:"Please enter the same password"
						},
						dob:{
							required:"Date-of-Birth is mandantory"
						}
					}
				});
			});