//尽可能保持文件名和类名一致

var checkClass = function() {
	//this.arr = ['a', 'b', 'c', 'd']; //查询的内容

	this.check = function(str,arr) {
		return arr.filter(this.filterArr, str).length; //返回长度

	};
	this.filterArr = function(el, index) {
		return el == this;
	}
}