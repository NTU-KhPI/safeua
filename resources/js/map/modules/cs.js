import customSelect from 'custom-select';


// Кастомные списки
export default function (selector) {
    if (selector) {
        customSelect(
            document.querySelector(selector), {
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
    }
}
