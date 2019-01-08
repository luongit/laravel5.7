tinymce.PluginManager.add("lna_file", function (e) {
	var n = window.parent;
	window.addEventListener('message', function(event) {
	  var lna_parh = e.settings.external_lna_file_path.toLowerCase()+'?field_id='+event.data.field_id;
	  var ajax_url = event.source.$.ajaxSettings.url.toLowerCase();
      if(ajax_url == lna_parh && event.data.sender == "lna_file_sender"){
	      n.postMessage({field_id:event.data.field_id,url:event.data.url}, "*");
	      tinymce.activeEditor.windowManager.close();
      }

    });

	function t(fid, i, type, w) {
		// var i = s.document.getElementById(t);
		console.log(fid);
		console.log(i);
		console.log(type);
		console.log(w);
		n.postMessage(fid, "*");
		var r = window.innerWidth - 30,
			g = window.innerHeight - 60;
		if (r > 1800 && (r = 1800), g > 1200 && (g = 1200), r > 600) {
			var d = (r - 20) % 138;
			r = r - d + 10
		}

		var o = "Lna Flemanager";
		"undefined" != typeof e.settings.lna_file_title 
		&& e.settings.lna_file_title 
		&& (o = e.settings.lna_file_title);
		var _file_url = e.settings.external_lna_file_path+'?field_id='+fid;

		var ttt = tinymce.activeEditor.windowManager.open({
			title: o,
			file: _file_url,
			width: r,
			height: g,
			resizable: 1,
			maximizable: 1,
			inline: 1
		});
	}

	return tinymce.activeEditor.settings.file_browser_callback = t;
});
