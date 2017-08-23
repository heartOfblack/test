function formTojson(data) {
				var jarr = data.split('&');
				var Json = {};
				for(i in jarr) {
					var cur = jarr[i].split('=');
					Json[cur[0]] = cur[1];
				}
				return Json;
			}