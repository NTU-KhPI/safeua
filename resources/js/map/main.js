import burger from './modules/burger';
import { GoOnTopbyScroll } from './modules/animations';
import InitCustomSelect from './modules/cs';
import { InitRegionTooltips, InitDropDownMenu } from './modules/tippy';


$(document).ready(function () {

    // Меню бургер
    burger($('.burger-menu'));

    // Прокрутка наверх по стрелке в футере
    GoOnTopbyScroll();
    InitDropDownMenu('#auth-user-button', '.auth-user-actions__wrapper');

    // Кастомные списки
    InitCustomSelect('#language-select');
    InitCustomSelect('.sort__items');

    // Всплывающие подсказки по регионам
    InitRegionTooltips('.land');
});
