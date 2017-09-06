$.fn.extend({
	formTojson: function() {
		$t = $(this);
		var obj = {};
		$.each($($t).serializeArray(), function(i, _obj) {
			obj[_obj.name] = _obj.value;

		});
		return obj;
	}

})