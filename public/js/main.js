$(function() {

	var contentLoad = function(e){
			//prevents the default click action
			e.preventDefault();

			// //the href of this nav a
			var url = $(this).attr('href');
			History.pushState(null,null,url);

			// var spinner = new Spinner().spin();
			// $('.main.group').append(spinner.el);
			//
			// //making a get request
			// $.get(url, function(data){
			// 	//class names of the main content div / window
			// 	$('.main.group').empty().append(data);
			// });
		};

	//history plugin for changing the url without refreshing the page
	History.Adapter.bind(window,'statechange',function(){
		var state = History.getState();

		//spinner loader
		var spinner = new Spinner().spin();
		$('.main.group').append(spinner.el);

		// console.log(state);

		$.get(state.url, function(data){

		$('.main.group').empty().append(data);

		});
	});

	//event handler
	$('nav a').on('click', contentLoad);
	$('.main.group').on('click', '.pagination a', contentLoad);

	$('[data-field]').on('click', function(){

	//creating jeditable functionality on users/id page
	var url = window.location.href;
	var options = {
		submitdata:{
			_method:"PUT",
			_token:$("#token").text(),
			field: $(this).attr("data-field")
		},
		submit: "OK"
	};
	$(this).editable(url,options);

	});

});
