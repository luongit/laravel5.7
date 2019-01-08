! function (e) {
	"use strict";

	var field_id = getUrlParameter('field_id');
	
	$(document).on('click','.select-file-item',function(e){
		e.preventDefault();
		var n = window.parent;
		var img_url = $(this).data('href');
		n.postMessage({sender:"lna_file_sender",field_id:field_id,url:img_url}, "*");
		
	});

	function getUrlParameter(sParam) {
	    var sPageURL = window.location.search.substring(1),
	        sURLVariables = sPageURL.split('&'),
	        sParameterName,
	        i;

	    for (i = 0; i < sURLVariables.length; i++) {
	        sParameterName = sURLVariables[i].split('=');

	        if (sParameterName[0] === sParam) {
	            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
	        }
	    }
	};

}(window);