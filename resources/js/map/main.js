import burger from './burger';
import { GoOnTopbyScroll } from './animations';
import InitCustomSelect from './cs';
import InitTooltips, { InitDropDownMenu } from './tippy';


$(document).ready(function () {


    // Меню бургер
    burger();
    // Прокрутка наверх в подвале
    GoOnTopbyScroll();
    InitDropDownMenu('#auth-user-button', '.auth-user-actions__wrapper');
    // Кастомные списки
    InitCustomSelect('#language-select');
    InitCustomSelect('.sort__items');

    // Всплывающие подсказки по регионам
    InitTooltips('.land');
});
