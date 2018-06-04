



function _attachEvent(obj, evt, func, eventobj) {
	eventobj = !eventobj ? obj : eventobj;
	if(obj.addEventListener) {
		obj.addEventListener(evt, func, false);
	} else if(eventobj.attachEvent) {
		obj.attachEvent('on' + evt, func);
	}
}


function browserVersion(types) {
	var other = 1;
	for(i in types) {
		var v = types[i] ? types[i] : i;
		if(USERAGENT.indexOf(v) != -1) {
			var re = new RegExp(v + '(\\/|\\s|:)([\\d\\.]+)', 'ig');
			var matches = re.exec(USERAGENT);
			var ver = matches != null ? matches[2] : 0;
			other = ver !== 0 && v != 'mozilla' ? 0 : other;
		}else {
			var ver = 0;
		}
		eval('BROWSER.' + i + '= ver');
	}
	BROWSER.other = other;
}


function loadcss(cssname) {
	if(!CSSLOADED[cssname]) {
		var csspath = (typeof CSSPATH == 'undefined' ? 'data/cache/style_' : CSSPATH);
		if(!$('css_' + cssname)) {
			css = document.createElement('link');
			css.id = 'css_' + cssname,
			css.type = 'text/css';
			css.rel = 'stylesheet';
			css.href = csspath + STYLEID + '_' + cssname + '.css?' + VERHASH;
			var headNode = document.getElementsByTagName("head")[0];
			headNode.appendChild(css);
		} else {
			$('css_' + cssname).href = csspath + STYLEID + '_' + cssname + '&' + VERHASH;
		}
		CSSLOADED[cssname] = 1;
	}
}



var BROWSER = {};
var CSSLOADED = [];


function $F(func, args, script) {
	var run = function () {
		var argc = args.length, s = '';
		for(i = 0;i < argc;i++) {
			s += ',args[' + i + ']';
		}
		eval('var check = typeof ' + func + ' == \'function\'');
		if(check) {
			eval(func + '(' + s.substr(1) + ')');
		} else {
			setTimeout(function () {checkrun();}, 50);
		}
	};
	var checkrun = function () {
		if(JSLOADED[src]) {

			run();
		} else {
			setTimeout(function () {checkrun();}, 50);
		}
	};
	script = script || 'ssddee_extra';
	src = "template/fishsou_mobile/js/ssddee_extra.js?{VERHASH}";
	if(!JSLOADED[src]) {
		appendscript(src);
	}
	return checkrun();
}



