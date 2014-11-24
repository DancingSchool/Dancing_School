
			function setError(elm){
			    elm.setAttribute("style","color:red");
			    };
						
			function setCorrect(elm){
			    elm.setAttribute("style","color:black");
			    };
			
			function validateForm(form){
				var firstName=form.firstName.value.trim();
				var lastName=form.lastName.value.trim();
				var email=form.Email.value.trim();
				var index=email.indexOf("@");
				var validated =true;
							
				if(firstName.length<=0){
				    setError(document.getElementById("firstName"));
				    validated=false;
				    }
							
				else{
				    setCorrect(document.getElementById("firstName"));
				    }
				    
				    
				if(lastName.length<=0){
				    setError(document.getElementById("lastName"));
				    validated=false;
				    }
							
				else{
				    setCorrect(document.getElementById("lastName"));
				    }
			       
				if(isNaN(firstName)){
				    setCorrect(document.getElementById("firstName"));
				}
				
				else{
				    setError(document.getElementById("firstName"));
				    validated=false;
				    }
				    
				if(isNaN(lastName)){
				    setCorrect(document.getElementById("lastName"));
				}
				
				else{
				    setError(document.getElementById("lastName"));
				    validated=false;
				    }
				
				if(email.length<=0){
				    setError(document.getElementById("Email"));
				    validated=false;
				    }
				else{
				    setCorrect(document.getElementById("Email"));
				    }
					
				if(index==-1){
				    setError(document.getElementById("Email"));
				    validated=false;
				    }
				else{
				    setCorrect(document.getElementById("Email"));
				    }
					
				if(!document.getElementById("male").checked && !document.getElementById("female").checked){
				    setError(document.getElementById("gender"));
				    validated=false;
				    }
				else{
				    setCorrect(document.getElementById("gender"));
				    }

					
				return validated;
				
				
			    };
			    
			    
			    function validatePayment(form){
				var stID=form.stID.value.trim();
				var amount =form.amount.value.trim();
				var validated =true;
		
				if(stID.length<=0){
				    setError(document.getElementById("stID"));
				    validated=false;
				    }
							
				else{
				    setCorrect(document.getElementById("stID"));
				    }
				    
				if(amount.length<=0 || isNaN(amount)){
				    setError(document.getElementById("amount"));
				    validated=false;
				    }
							
				else{
				    setCorrect(document.getElementById("amount"));
				    }
					
					
				return validated;
				
				
			    };
			    
			    function validateCouple(form){
				var mID=form.maleID.value.trim();
				var fID =form.femaleID.value.trim();
				var validated =true;
		
				if(mID.length<=0){
				    setError(document.getElementById("maleID"));
				    validated=false;
				    }
							
				else{
				    setCorrect(document.getElementById("maleID"));
				    }
				    
				if(fID.length<=0){
				    setError(document.getElementById("femaleID"));
				    validated=false;
				    }
							
				else{
				    setCorrect(document.getElementById("femaleID"));
				    }
					
				return validated;
				
				
			    };
