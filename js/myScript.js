
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