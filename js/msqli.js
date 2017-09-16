var sum = 0;
var result = kaina.map(function (x) { 
	return parseInt(x, 10); 
});
for(var i = 0; i < result.length; i++){
	sum += result[i];
}
document.getElementById("total").innerHTML = sum + " EUR";