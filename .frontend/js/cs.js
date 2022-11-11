$(document).ready(function () {

	// Кастомные списки
	customSelect(document.querySelector('#language-select'), {
		containerClass: 'cs-wrapper',
		openerClass: 'cs-opener',
		panelClass: 'cs-panel',
		optionClass: 'cs-option',
		optgroupClass: 'cs-optgroup',
		isSelectedClass: '_selected',
		hasFocusClass: '_focus',
		isDisabledClass: '_disabled',
		isOpenClass: '_open'
	})[0];

	customSelect(document.querySelector('.sort__items'), {
		containerClass: 'cs-wrapper',
		openerClass: 'cs-opener',
		panelClass: 'cs-panel',
		optionClass: 'cs-option',
		optgroupClass: 'cs-optgroup',
		isSelectedClass: '_selected',
		hasFocusClass: '_focus',
		isDisabledClass: '_disabled',
		isOpenClass: '_open'
	});


});