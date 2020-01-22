<?php 

// PHP code to find the number of days 
// between two given dates 

// Function to find the difference 
// between two dates. 
function dateDiffInDays($date1, $date2) 
{ 
	// Calulating the difference in timestamps 
	$diff = strtotime($date2) - strtotime($date1); 
	
	// 1 day = 24 hours 
	// 24 * 60 * 60 = 86400 seconds 
	return abs(round($diff / 86400)); 
} 

// Start date 
$date1 = "2018-09-10"; 

// End date 
$date2 = "2018-09-31"; 

// Function call to find date difference 
$dateDiff = dateDiffInDays($date1, $date2); 

// Display the result 
printf("Difference between two dates: "
. $dateDiff . " Days "); 
?> 