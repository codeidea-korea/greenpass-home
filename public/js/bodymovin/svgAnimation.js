function loadBMAnimation(loader, path, stop) {
	var anim = bodymovin.loadAnimation({
		container: document.querySelector(loader),
		renderer: 'svg',
		loop: true,
		autoplay: true,
		path: path
	});
	
}

function loadBMAnimationClass(loader, path) {
	var el = document.getElementsByClassName(loader);
	for (var i = 0; i < el.length; i++) {
		var animation = bodymovin.loadAnimation({
			container: el[i],
			renderer: "svg",
			loop: true,
			autoplay: true,
			path: path
		});
	}
}


//loadBMAnimation('#main-top-people', 'img/bodymovin/main-top-people.json');
//loadBMAnimationClass('particle01', 'img/bodymovin/particle01.json');
