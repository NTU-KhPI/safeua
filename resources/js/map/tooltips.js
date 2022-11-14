import tippy, { followCursor } from 'tippy.js';

// Всплывающие подсказки по регионам

/* var svgobject = document.getElementById('svgmap');
if (svgobject) {
	var svgdom = svgobject.contentDocument;
}
const land = ($(svgdom).find('.land')); */


export default function InitTooltips(tooltip) {
	let tooltips = [];

	$(tooltip).each(function (index, tipMark) {
		const CityName = $(tipMark).attr('title');
		tooltips[index] = tippy(tipMark, {
			theme: 'lighty',
			arrow: true,
			animation: 'scale',
			allowHTML: true,
			duration: 350,
			delay: [350, 100],
			followCursor: 'initial',
			plugins: [followCursor],
			appendTo: document.body,
			interactive: true,
			interactiveBorder: 0,
			content: '<div class="region" id="' + CityName + '">' + $('.tooltip-regions__items').find('.region[id="' + CityName + '"]').html() + '</div>',
			zIndex: 100,
		});
		// На телефонах скрывается
		checkResolution(tooltips[index]);
	});

	// Проверка медиазапроса и скрытие tooltip
	function checkResolution(tooltips) {
		const mediaQuery = window.matchMedia('(max-width: 768px)')
		function handleTabletChange(e) {
			if (e.matches) {
				tooltips.disable();
			}
			else {
				tooltips.enable();
			}
		}
		mediaQuery.addListener(handleTabletChange);
		handleTabletChange(mediaQuery);
	}
}

export function LimDesc(maxLength) {
	let desc = $('.region__desc');
	$(desc).each(function (index, element) {
		const descText = $(this).text();
		if (descText.length > maxLength) {
			for (let i = maxLength; i < descText.length; i++) {
				if (descText[i] == ' ') {
					$(this).text(descText.substring(0, i) + '...');
					break;
				}
			}
		}
	});
}