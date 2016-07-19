// Method created to show small date selector
$(document).ready(function(e) {
	
    var currentDate = $( "#datepicker" ).datepicker( "getDate" );	
	
	$(function() {
    	$('#datepicker').datepicker({ 
			   showButtonPanel: true
			 , onClose: function( selectedDate ) {
        $( "#datepicker" ).datepicker( "option", "minDate", selectedDate );
		//$( "#datepicker" ).formatDate('yy-mm-dd', dateTypeVar); //Not working dont know where to put
       		}
		});
 	});
	
});