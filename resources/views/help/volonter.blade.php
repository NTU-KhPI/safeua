<x-app-layout>
    <section>
        <div class="main-block d-flex align-items-center"
             style="background: url('https://i.pinimg.com/564x/89/fc/dc/89fcdc001b20bc62ae1e8c246b5bd5ed.jpg') center center no-repeat;
            background-size: cover; min-height: 100vh; height: auto">

            <div class="container">
                <h1 class="intro_title">
                    Як ви можете допомогти?
                </h1>
                <p class="intro_subtitle">
                    Щоб долучитися і допомогти постраждалим, ви можете обрати найліпший для вас варіант: зробити
                    донат
                    чи запропонувати свій варіант, заповнивши анкету.
                </p>
                <ul class="intro_button">
                    <div class="button1">
                        <a href="#!" class="button_donat">зробити донат</a>
                    </div>
                    <div class="button_2">
                        <a href="#!" class="button_anket">заповнити анкету</a>
                    </div>
                </ul>
            </div>
        </div>
    </section>
    <section class="volonter">
        <div class="container p-3">
            <h2 class="underintro">
                ЯК СТАТИ ВОЛОНТЕРОМ?
            </h2>
            <div class="imgsunder">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3">
                    <div class="col">
                        <img src="{{asset('/img/help/svg/imganket.svg')}}" alt="zapovnank" class="ankfoto">
                        <p class="trigger_title mt-2">
                            Заповни анкету
                        </p>
                        <p class="trigger_subtitle">
                            Залиш нам свої дані та обери вид допомоги, яку ти можеш надати постраждалим.
                        </p>
                        <a href="#!" class="button_zapanket mt-4">заповнити анкету</a>
                    </div>

                    <div class="col"><img src="{{asset('/img/help/svg/zapit.svg')}}" alt="otrimayzapit"
                                          class="zapitfoto">
                        <p class="trigger_title mt-2">
                            Отримай запит
                        </p>
                        <p class="trigger_subtitle">
                            З тобою зв’яжеться менеджер, що надасть інформацію про потреби людей.
                        </p>
                    </div>

                    <div class="col"><img src="{{asset('/img/help/svg/dopomogu.svg')}}" alt="nadaidopom"
                                          class="dopomogufoto">
                        <p class="trigger_title mt-2">
                            Надай допомогу
                        </p>
                        <p class="trigger_subtitle">
                            Допоможи людині та отримай плюсик в карму.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container p-3">
            <h2 class="underintro">
                ІНШИЙ СПОСІБ ДОПОМОГТИ
            </h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 mt-4">
                <div class="col">
                    <p class="trigger_subtitle">
                        Ваші донати допомагають існувати сервісу, потерпілим, йдуть на потреби ЗСУ і у
                        благодійні
                        фонди Повернись живим і Фонд Сергія Притули.
                    </p>
                </div>

                <div class="col">
                    <p class="trigger_subtitle">
                        Задонать зараз та вбережи життя свого захисника і наблизь день нашої перемоги.
                    </p>
                </div>

                <div class="col text-end">
                    <a href="#!" class="button_zapanket">зробити донат</a>
                </div>
            </div>
        </div>
    </section>
    </div>
</x-app-layout>
