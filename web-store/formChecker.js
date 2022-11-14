var check = function() {
	let shortnum = document.getElementById('short').value;
	let	shirtnum = document.getElementById('shirt').value;
	let	hatnum = document.getElementById('hat').value;

    if(shortnum < 0)
        {
            alert("Invalid quantity");
            return false;
        }
    if(shirtnum < 0)
        {
            alert("Invalid quantity");
            return false;
        }
    if(hatnum < 0)
        {
            alert("Invalid quantity");
            return false;
        }
	return true
}
//all input is required in frontend.html so it can't be blank
//username and password are set in email and password types already
//this part is to constraint for negative amount of items input