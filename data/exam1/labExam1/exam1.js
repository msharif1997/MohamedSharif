        // These functions i change the html background to these colors that the user can change through the radio buttons 
		function Blue(){
			document.body.style.backgroundColor = "blue";
		}

			function lightblue(){
			document.body.style.backgroundColor = "#ADD8E6";
		}

			function darkblue(){
			document.body.style.backgroundColor = "DarkBlue ";
		}
	

	
			/*function enlargeImage(x) {
			   x.style.height = "64px";
			   x.style.width = "64px";
			}
			
			function originalSizeImage(x) {
			   x.style.height = "32px";
			   x.style.width = "32px";
			} */
	

	
		//this script will run when the user clicks on the sign button and gets there name and 
		//stores it to the customerName variable and replaces the Please in to there user name.	
		function signIn(){
			customerName = prompt("Please Enter your Name");
			// var upperCaseName = customerName.toUpperCase;
			document.getElementById("name").innerHTML = customerName.toUpperCase();
		}




		// customer name display script
		document.getElementById("name").innerHTML = customerName;

	
                // This function gets the current date
			  function getCurrentDate()
			{
				var todaysDate = new Date();	//create a date object with the current date
				
				return todaysDate.getDate();	//get the date from the current date
			}//end of getCurrentDate( )
			
			
			// Starting from here i format the date months and time to fit my format
			var d = new Date();
			var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
			var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
			var time = ["NaN","1st","2nd","3rd","4th","5th","6th","7th","8th","9th","10th",
			"11th","12th","13th","14th","15th","16th","17th","18th","19th","20th",
			"21st","22nd","23rd","24th","25th","26th","27th","28th","29th","30th","31st"];
			var n = d.getFullYear();
			document.getElementById("date").innerHTML = days[d.getDay()] + ", " + months[d.getMonth()] + " " + time[getCurrentDate()] + ", " + n + ".";
			
            months[d.getMonth()];
            
            document.getElementById("year").innerHTML = d.getFullYear();
			