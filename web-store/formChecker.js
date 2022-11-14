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