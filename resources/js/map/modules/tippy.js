import tippy, { followCursor } from 'tippy.js';


export function InitRegionTooltips(mapmark) {
    let tooltips = [];

    $(mapmark).each(function (index, mark) {

        const regionName = $(mark).attr('data-region-id');
        const region = $('.tooltip-regions__items').find('.region-tip-card[id="' + regionName + '"]');

        if (!!($(region).html())) {
            tooltips[index] = tippy(mark, {
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
                content: '<div class="region-tip-card" id="' + regionName + '">' + $(region).html() + '</div>',
                zIndex: 100,
            });

            // На телефонах скрывается
            checkResolution(tooltips[index], 768);
        }
    });

    // Проверка медиазапроса и скрытие tooltip
    function checkResolution(tooltip, maxwidth = 768) {
        const mediaQuery = window.matchMedia('(max-width:' + maxwidth + 'px)')
        function handleTabletChange(e) {
            if (e.matches) {
                tooltip.disable();
            }
            else {
                tooltip.enable();
            }
        }
        mediaQuery.addListener(handleTabletChange);
        handleTabletChange(mediaQuery);
    }
}

export function InitDropDownMenu(button, content) {
    if ((button) && (content)) {
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
        });
    }
}
