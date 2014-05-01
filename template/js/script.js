function plus(){
	for (var i = 1; i < n; i++) {
		arr[i] = document.getElementById('title'+i).value;
	}
	for (var i = 1; i < n; i++) {
		arrcheck[i] = document.getElementById('check' + i).value;
	}

	document.getElementById('divf').innerHTML+='<p id="'+n+'">'+n+' <input type="text" name="check'+n+'" size="1" id="check'+n+'" value="0" onclick="check('+n+')"> <input type="text" name="title'+n+'" size="70" id="title'+n+'" value=""> <input type="button" onclick="minus('+n+')" value="-"></p>'
	n++
	document.dim.action='../engine/addpiece.php?id='+itemid+'&n='+n

	for (var i = 1; i < n-1; i++) {
		document.getElementById('title' + i).value = arr[i];
	}
	for (var i = 1; i < n-1; i++) {
		document.getElementById('check' + i).value = arrcheck[i];
	}
}
function minus(myIndex){
	for (var i = 1; i < n; i++) {
		arr[i] = document.getElementById('title'+i).value;
	}
	for (var i = 1; i < n; i++) {
		arrcheck[i] = document.getElementById('check' + i).value;
	}
	arr.splice(myIndex,1);
	arrcheck.splice(myIndex,1);
	n--
	var el = document.getElementById(n);
	el.parentNode.removeChild(el);

	//n--
	document.dim.action='../engine/addpiece.php?id='+itemid+'&n='+n

	for (var i = 1; i < n; i++) {
		document.getElementById('title' + i).value = arr[i];
	}
	for (var i = 1; i < n; i++) {
		document.getElementById('check' + i).value = arrcheck[i];
	}
}
function check(checkIndex) {
	var k = document.getElementById('check' + checkIndex).value;
	if (k == 1) {
		document.getElementById('check' + checkIndex).value = 0;
	} 
	else {
		document.getElementById('check' + checkIndex).value = 1;
	}
}