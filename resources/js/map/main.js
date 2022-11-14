import burger from './burger';
import { GoOnTopbyScroll } from './animations';
import InitCustomSelect from './cs';
import InitTooltips, { LimDesc } from './tooltips';


$(document).ready(function () {

	// Меню бургер
	burger();
	// Прокрутка наверх в подвале
	GoOnTopbyScroll();

	// Кастомные списки
	InitCustomSelect('#language-select');
	InitCustomSelect('.sort__items');

	// Всплывающие подсказки по регионам
	InitTooltips('.land');
	// Ограничение по количеству символов во всплывающей подказке
	LimDesc(200);
});