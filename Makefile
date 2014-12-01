css_path=	www/style

less_path=	app/assets/style

all:
	lessc $(less_path)/index.less > $(css_path)/index.css
	lessc $(less_path)/home.less > $(css_path)/home.css
	lessc $(less_path)/about.less > $(css_path)/about.css
	lessc $(less_path)/slider.less > $(css_path)/slider.css
	lessc $(less_path)/project.less > $(css_path)/project.css
	lessc $(less_path)/colorPicker.less > $(css_path)/colorPicker.css
	lessc $(less_path)/navbar.less > $(css_path)/navbar.css
	lessc $(less_path)/doc.less > $(css_path)/doc.css
	lessc $(less_path)/2048.less > $(css_path)/2048.css
