var ExtraQuestionsController = function(model, view) {
	
	view.volgendeButton.click(function(){
		$('#extraQuestions .list-group-item').each(function() {
			var qs = $(this).attr('id');
			var order = $("#extraQuestions .list-group-item").index(this)+1;
			
			var val = $(this).find('input:checked').val();
	
			console.log("Value of measure " + qs + " is " + val);
			
			model.setExtraQuestion(qs, order, val);
		});
		model.extraQuestionsDone();
		
	});
	
 }