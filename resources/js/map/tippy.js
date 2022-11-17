import tippy, { followCursor } from 'tippy.js';


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

export function InitDropDownMenu(button, content) {
	if (button) {
		$(button).each(function (index, element) {
			tippy(element, {
				theme: 'lighty',
				arrow: true,
				allowHTML: true,
				duration: 300,
				interactiveBorder: 0,
				content: $(content).html(),
				zIndex: 50,
				animation: 'fade',
				trigger: 'click',
				interactive: true,
				appendTo: 'parent',
			});
			// На телефонах скрывается
			// checkResolution(tooltips[index]);
		});
	}

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