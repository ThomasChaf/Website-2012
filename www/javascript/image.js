/**
 *  @file   image js
 *
 *	@class	Image
 *  @brief  Use to manipulate pixel from a html canvas
 *
 *  @author Thomas Chafiol <thomaschaf@gmail.com>
 *  @date   26 / 11 / 2013
 */
function MImage(context, width, height) {
	var self = this;

	self.init = function (context, width, height) {
		self.context = context;
		self.width = width;
		self.height = height;
		self.imageData = self.context.createImageData(width, height);
	};

	self.setImageData = function(imageData) {
		self.imageData = imageData;
	};

	self.setRGBPixel = function(index, r, g, b) {
		self.imageData.data[index + 0] = r;
		self.imageData.data[index + 1] = g;
		self.imageData.data[index + 2] = b;
		self.imageData.data[index + 3] = 255;
	};

	self.getRGBPixel = function(x, y) {
		var index = (x + y * self.width) * 4,
				color = [
					self.imageData.data[index + 0],
					self.imageData.data[index + 1],
					self.imageData.data[index + 2],
					self.imageData.data[index + 3]
				];

		return color;
	};

	self.fill = function(r, g, b) {
		var i = 0,
				j,
				index;

		while (i < self.height) {
			j = 0;
			while (j < self.width) {
				index = (j + i * self.width) * 4;
				self.setRGBPixel(index, r, g, b);
				j += 1;
			}
			i += 1;
		}
	};

	self.putImageData = function(x, y) {
		self.context.putImageData(self.imageData, x, y);
	};

	self.init(context, width, height);
}
