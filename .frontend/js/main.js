$(document).ready(function () {

	// Ограничение по количеству символов во всплывающей подказке
	(function LimDesc() {
		const maxLength = 200;
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
	})();
});