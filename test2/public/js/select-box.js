


// Kiểm soat lựa chọn tuyến bay 
function Select_Route(obj)
{
	var options = obj.children; 
	for (var i = 0; i < options.length; i++){
		if (options[i].selected)
		{
			if( options[i].value == 1)
			{
						document.getElementById('place_from').disabled = false;
						document.getElementById('place_to').disabled = false;
						document.getElementById('opt_domestic').disabled = false;
						document.getElementById('opt_domestic1').disabled = false;
						document.getElementById('opt_international').disabled = true;
						document.getElementById('opt_international1').disabled = true;
						document.getElementById('place_from_op').disabled = true;
						document.getElementById('place_to_op').disabled = true;
			}
			else if(options[i].value == 2)
			{
						document.getElementById('place_to').disabled = false;
						document.getElementById('place_from').disabled = false;
						document.getElementById('opt_domestic').disabled = true;
						document.getElementById('opt_domestic1').disabled = true;
						document.getElementById('opt_international').disabled = false;
						document.getElementById('opt_international1').disabled = false;
						document.getElementById('place_from_op').disabled = true;
						document.getElementById('place_to_op').disabled = true;
			}
			else 
			{
				document.getElementById('place_to').disabled = true;
				document.getElementById('place_from').disabled = true;
				document.getElementById('place_from_op').disabled = false;
				document.getElementById('place_to_op').disabled = false;
			}
		}
	}
}

function select_type_return()
{
	document.getElementById('type_return_date').disabled = false;
}


function select_type_oneway()
{
	document.getElementById('type_return_date').disabled = true;
}


function Select_Methodpay(obj)
{
	var options = obj.children; 
	for (var i = 0; i < options.length; i++){
		if (options[i].selected)
		{
			if( options[i].value == 'credit_card' )
			{
				document.getElementById('number_credit_card').disabled = false;
				document.getElementById('name_credit_card').disabled = false;
				document.getElementById('ccv_code').disabled = false;
			}
			
			else 
			{
				document.getElementById('number_credit_card').disabled = true;
				document.getElementById('name_credit_card').disabled = true;
				document.getElementById('ccv_code').disabled = true;
			}
		}
	}
}