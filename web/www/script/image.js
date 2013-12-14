function Image(context, width, height) {

	var ctx = context;

	var imageData = ctx.createImageData(width, height);

	this.width = width;

	this.height = height;

	this.setImageData = function(imageData) {
		this.imageData = imageData;
	}

	this.setRGBPixel = function(index, r, g, b) {
		imageData.data[index + 0] = r;
		imageData.data[index + 1] = g;
		imageData.data[index + 2] = b;
		imageData.data[index + 3] = 255;
	}
	
	this.getRGBPixel = function(x, y) {
		var index = (x + y * this.width) * 4;
		var color = [imageData.data[index + 0],
		             imageData.data[index + 1],
		             imageData.data[index + 2],
		             imageData.data[index + 3]
		];
		return color;
	}

	this.fill = function(r, g, b) {
		var i = 0;
		while (i < this.height) {
			var j = 0;
			while (j < this.width) {
				var index = (j + i * this.width) * 4;
				this.setRGBPixel(index, r, g, b);
				j += 1;
			}
			i += 1;
		}
	}

	this.putImageData = function(x, y) {
		ctx.putImageData(imageData, x, y);
	}
};