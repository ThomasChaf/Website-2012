function ColorPicker(elemPicker, elemGradient, elemColor, input) {

	this.createImageByElem = function(element) {
		var ctx = element.getContext("2d");
		var width = element.width;
		var height = element.height;
		return new Image(ctx, width, height); 
	};
	
	this.inputParse = function(input) {
		this.inputElem = input;
		this.inputElem.hexa = input[0];
		this.inputElem.red = input[1];
		this.inputElem.green = input[2];
		this.inputElem.blue = input[3];
	};

	this.imagePicker = this.createImageByElem(elemPicker);

	this.imageGradient = this.createImageByElem(elemGradient);

	this.imageColor = this.createImageByElem(elemColor);
	
	this.inputParse(input);

	this.pixMap = function(image) {
		var y = 0;
		var R = 255;
		var G = 0;
		var B = 0;
		var stateR = 4;
		var stateG = 2;
		var stateB = 0;
		var ar = [0, 0, 255 / (image.height / 6), 0, 0, -255 / (image.height / 6)]
		while (y < image.height) {
			var x = 0;
			while (x < image.width) {
				index = (x + y * image.width) * 4
				image.setRGBPixel(index, R, G, B);
				x += 1;
			}
			R += ar[stateR];
			G += ar[stateG];
			B += ar[stateB];
			y += 1;
			if (y % (image.height / 6) == 0) {
				stateR = (stateR + 1) % 6;
				stateG = (stateG + 1) % 6;
				stateB = (stateB + 1) % 6;
				R = stateR < 3 ? 0 : 255;
				G = stateG < 3 ? 0 : 255;
				B = stateB < 3 ? 0 : 255;
			}
		}
	};

	this.gradient = function(image, red, green, blue) {
		var R = 255;
		var G = 255;
		var B = 255;
		var x = 0;
		while (x < image.width) {
			var y = 0;
			var RBlack = R;
			var GBlack = G;
			var BBlack = B;
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
	
	this.convertToHexa = function(num) {
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

	this.convertToDec = function(hexa) {
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

	this.colorInHexa = function(r, g, b) {
		var color = this.convertToHexa(r) +
			this.convertToHexa(g) +
			this.convertToHexa(b);
		return color;
	};

	this.colorInRgb = function(hexa) {
		if (hexa.length == 7 && hexa[0] == '#') {
			var newColor = [this.convertToDec(hexa[2] + hexa[1]),
			                this.convertToDec(hexa[4] + hexa[3]),
			                this.convertToDec(hexa[6] + hexa[5])];
		} else if (hexa.length == 6) {
			var newColor = [this.convertToDec(hexa[1] + hexa[0]),
			                this.convertToDec(hexa[3] + hexa[2]),
			                this.convertToDec(hexa[5] + hexa[4])];
		} else {
			alert("bad");
			return [0, 0, 0];
		}
		return newColor;
	}

	this.fill = function(r, g, b) {
		this.imageColor.fill(r, g, b);
		this.inputElem.hexa.value = "#" + this.colorInHexa(r, g, b);
		this.inputElem.red.value = r;
		this.inputElem.green.value = g;
		this.inputElem.blue.value = b;
	}

	this.putImageData = function() {
		this.imagePicker.putImageData(0, 0);
		this.imageGradient.putImageData(0, 0);
		this.imageColor.putImageData(0, 0);
	};
};