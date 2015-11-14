/*var totals;
$.getJSON('data.json', function(data){
	console.log(data);
	$.each(data, function(key, val){
		//console.log(val);
		//var prova = $.parseJSON(val);
		//console.log(prova);
		$.each(val.prices, function(key, val){
			//console.log(key);
			//console.log(val.value);
			totals[key] += parseInt(val.value);
			//console.log(totals);
		})
	})
})

var obj = JSON.parse('data.json');
console.log(obj);
*/

$(document).ready(function(){
	$.getJSON('data.php', function(data){
		$.each(data, function(key, val){
			$('body').next('<h1>'+val.title+'</h1>');
		});
	});
});
