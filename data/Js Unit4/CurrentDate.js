// JavaScript Document

function getCurrentDayOfWeek()
	{
		var todaysDate = new Date();			//create a new date object with current date
		
		var dayOfWeek = todaysDate.getDay();	//get the value of the day from current date
		
		//Change the dayOfWeek from a 0-6 number to the name of the day
		switch(dayOfWeek) {
			case 0:
				dayOfWeek = "Sunday";
				break;
			case 1:
				dayOfWeek = "Monday";
				break;
			case 2:
				dayOfWeek = "Tuesday";
				break;
			case 3:
				dayOfWeek = "Wednesay";
				break;
			case 4:
				dayOfWeek = "Thursday";
				break;
			case 5:
				dayOfWeek = "Friday";
				break;
			case 6:
				dayOfWeek = "Saturday";
				break;		
			default:
				dayOfWeek = "";
				break;			
		}
		
		return dayOfWeek;	//send result back to where it was called
	}//end of currentDayOfWeek( )