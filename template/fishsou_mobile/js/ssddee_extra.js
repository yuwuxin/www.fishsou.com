

function _extstyle(css) {
	if(!jq('css_extstyle')) {
		loadcss('extstyle');
	}
	jq('css_extstyle').href = css ? css + '/style.css' : STATICURL + 'image/common/extstyle_none.css';
	currentextstyle = css;
	setcookie('extstyle', css, 86400 * 30);
	if(jq('css_widthauto') && !jq('css_widthauto').disabled) {
		CSSLOADED['widthauto'] = 0;
		loadcss('widthauto');
	}
}


