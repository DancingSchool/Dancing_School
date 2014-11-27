
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
				var checked;
				if(mID.length<=0 ||isNaN(mID)){
				    setError(document.getElementById("maleID"));
				    validated=false;
				    }
							
				else{
				    setCorrect(document.getElementById("maleID"));
				    }
				    
				if(fID.length<=0 ||isNaN(fID)){
				    setError(document.getElementById("femaleID"));
				    validated=false;
				    }
							
				else{
				    setCorrect(document.getElementById("femaleID"));
				    }
					
				for(var i =0; i<document.couple.checkB.length; i++){

					if(document.couple.checkB[i].checked){
						
						checked++;
					}
					
				}
				
				if(checked<3){
				    setError(document.getElementById("danceType"));
				    validated=false;
				    }
							
				else{
				    setCorrect(document.getElementById("danceType"));
				    }
				
				return validated;
				
				
				
			    };
			    
			    				    
				function checkControl(check){
						var total =0;
						
						for(var i =0; i<document.couple.checkB.length; i++){
							
							if(document.couple.checkB[i].checked){
	
								total = total+1;
							}
						
						if(total>3){
							
							document.couple.checkB[check].checked=false;
							return false;
						}	
					}
				}
			    
		    function revealChoice(value){
				    if(value=="ballroom"){
					    
					    document.getElementById("latin").innerHTML ="<h5><input type='checkbox' onclick ='checkControl(0)' name='checkB' value='waltz'> Waltz&nbsp; <input type='checkbox' onclick ='checkControl(1)' name='checkB' value='foxtrot'> Foxtrot &nbsp; <input type='checkbox' onclick ='checkControl(2)' name='checkB' value='quickstep'> Quick Step &nbsp;<input type='checkbox' onclick ='checkControl(3)' name='checkB' value='tango'> Tango </h5>";
					    
				    }
				    
				    else if(value=="latin"){
					    
					    document.getElementById("latin").innerHTML ="<h5><input type='checkbox' onclick ='checkControl(0)' name='checkB' value='chacha'> ChaCha&nbsp; <input type='checkbox' onclick ='checkControl(1)'name='checkB' value='rumba'> Rumba&nbsp; <input type='checkbox' onclick ='checkControl(2)' name='checkB' value='samba'> Samba &nbsp;<input type='checkbox' onclick ='checkControl(3)' name='checkB' value='jive '> Jive &nbsp; <input type='checkbox' onclick ='checkControl(4)' name='checkB' value='pasodoble'> Paso Doble </h5>";

				    }
				    
				    else{
					    
					    document.getElementById("latin").innerHTML= "";
				    }
				    
			    }
			    
