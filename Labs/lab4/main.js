$("document").ready(function(){
	var srcArr=[];
	$("#city").keyup(function(){
		$.ajax({
			url:'cityresponse.php',
			type:'GET',
			data:{
				cityget:$('#city').val()
			},
			success:function(response){
				response = JSON.parse(response)
				exists = true
				for(var i in response){
					for(var j in srcArr){
						if(response[i].city+","+response[i].region== srcArr[j]){
							exists = false;
						}
					}
					if(exists){
						srcArr.push(response[i].city+","+response[i].region);
					}
				}
			}
		});
	});
	$('#city').autocomplete({source:srcArr});
});	