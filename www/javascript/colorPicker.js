/**
 *  @file   colorPicker js
 *
 *  @author Thomas Chafiol <thomaschaf@gmail.com>
 *  @date   26 / 11 / 2013
 */
function ColorPicker(elemPicker, elemGradient, elemColor, input) {
	var self = this;

	self.init = function(elemPicker, elemGradient, elemColor, input) {
		self.imagePicker = self.createImageByElem(elemPicker);
		self.imageGradient = self.createImageByElem(elemGradient);
		self.imageColor = self.createImageByElem(elemColor);
		self.inputParse(input);
	};

	self.createImageByElem = function(element) {
		var ctx = element.getContext("2d");
		var width = element.width;
		var height = element.height;
		return new MImage(ctx, width, height);
	};

	self.inputParse = function(input) {
		self.inputElem = {};
		self.inputElem.hexa = input[0];
		self.inputElem.red = input[1];
		self.inputElem.green = input[2];
		self.inputElem.blue = input[3];
	};

	self.pixMap = function(image) {
		var y = 0;
		var R = 255;
		var G = 0;
		var B = 0;
		var stateR = 4;
		var stateG = 2;
		var stateB = 0;
		var ar = [0, 0, 255 / (image.height / 6), 0, 0, -255 / (image.height / 6)];
		while (y < image.height) {
			var x = 0;
			while (x < image.width) {
				index = (x + y * image.width) * 4;
				image.setRGBPixel(index, R, G, B);
				x += 1;
			}
			R += ar[stateR];
			G += ar[stateG];
			B += ar[stateB];
			y += 1;
			if (y % (image.height / 6) === 0) {
				stateR = (stateR + 1) % 6;
				stateG = (stateG + 1) % 6;
				stateB = (stateB + 1) % 6;
				R = stateR < 3 ? 0 : 255;
				G = stateG < 3 ? 0 : 255;
				B = stateB < 3 ? 0 : 255;
			}
		}
	};

	self.gradient = function(image, red, green, blue) {
		var R = 255, G = 255, B = 255,
				x = 0,
				RBlack, GBlack, BBlack;

		while (x < image.width) {
			var y = 0;

			RBlack = R; GBlack = G; BBlack = B;
			while (y < image.height) {
				index = (x + y * image.width) * 4;
				image.setRGBPixel(index, RBlack, GBlack, BBlack);
				y += 1;
				RBlack -= R / image.height;
				GBlack -= G / image.height;
				BBlack -= B / image.height;
				}
			R -= (255 - red) / image.width;
			G -= (255 - green) / image.width;
			B -= (255 - blue) / image.width;
			x += 1;
		}
	};

	self.convertToHexa = function(num) {
		var string = "0123456789ABCDEF";
		var convert = num > 15 ? "" : "0";
		while (num > 15) {
			var posLetter = Math.floor(num / 16);
			convert += string[posLetter];
			num = num - (posLetter * 16);
		}
		convert += string[num];
		return convert;
	};

	self.convertToDec = function(hexa) {
		var string = "0123456789ABCDEF";
		var index1 = string.indexOf(hexa[1]);
		var index0 = string.indexOf(hexa[0]);
		if (index0 == -1 || index1 == -1) {
			alert("bad");
			return (0);
		}
		var convert = 16 * index1 + index0;
		return convert;
	};

	self.colorInHexa = function(r, g, b) {
		var color = self.convertToHexa(r) +
			self.convertToHexa(g) +
			self.convertToHexa(b);
		return color;
	};

	self.colorInRgb = function(hexa) {
		var newColor;

		if (hexa.length == 7 && hexa[0] == '#') {
			newColor = [self.convertToDec(hexa[2] + hexa[1]),
									self.convertToDec(hexa[4] + hexa[3]),
									self.convertToDec(hexa[6] + hexa[5])];
		} else if (hexa.length == 6) {
			newColor = [self.convertToDec(hexa[1] + hexa[0]),
									self.convertToDec(hexa[3] + hexa[2]),
									self.convertToDec(hexa[5] + hexa[4])];
		} else {
			return [0, 0, 0];
		}
		return newColor;
	};

	self.fill = function(r, g, b) {
		self.imageColor.fill(r, g, b);
		self.inputElem.hexa.value = "#" + self.colorInHexa(r, g, b);
		self.inputElem.red.value = r;
		self.inputElem.green.value = g;
		self.inputElem.blue.value = b;
	};

	self.putImageData = function() {
		self.imagePicker.putImageData(0, 0);
		self.imageGradient.putImageData(0, 0);
		self.imageColor.putImageData(0, 0);
	};

	self.init(elemPicker, elemGradient, elemColor, input);
}
