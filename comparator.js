var totals=[];

$.getJSON('data.json', function(data){
	$.each(data, function(key, val){
		$.each(val.prices, function(key, val){
			//console.log(val.supermarket);
			console.log(val.value);
			totals[val.supermarket]=val.value;
		})
		
	})
});

console.log(totals);