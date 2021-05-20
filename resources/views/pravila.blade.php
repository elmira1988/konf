<!-- Модальное окно -->
<div class="modal" tabindex="-1" role="dialog" id="pravila">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ПРАВИЛА ОФОРМЛЕНИЯ ТЕЗИСОВ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>При оформлении текста материалов просим не переопределять команды и не вводить свои макросы,
                    а также не использовать автоматическую нумерацию формул, библиографии,
                    теорем и пр. Для нумерации формул используйте, пожалуйста, команду <b>\eqno.</b>
                </p>
                <p>Материалы докладов объемом <u><b> до 5 полных страниц</b></u>, выполненные в редакторе LaTeX, должны быть оформлены по следующему образцу:</p>
                <p class="ml-2 mr-2">
                    \documentclass[8pt,a5paper,titlepage,twoside]{article}<br>
                    \usepackage[a5paper]{geometry} \usepackage{mathtext} \usepackage{graphicx} \usepackage{graphics}<br>
                    \usepackage{ifthen} \usepackage{multicol}<br>
                    \usepackage{amsmath,amssymb,amsthm,mathrsfs,amscd, truncate}<br>
                    \usepackage[cp1251]{inputenc} \usepackage[english,russian]{babel} \usepackage[T2A]{fontenc}<br>
                    \textheight=165mm \textwidth=111mm \voffset=2mm \headsep=3mm<br>
                    \footskip=6mm \oddsidemargin=-4mm \evensidemargin=-10mm<br>
                    \begin{document} \sloppy<br>
                    \noindent{\sl УДК 517.95}<br>
                    \begin{center}<br>
                    \textbf{ОБРАТНЫЕ ЗАДАЧИ ДЛЯ ПАРАБОЛО-ГИПЕРБОЛИЧЕСКОГО УРАВНЕНИЯ}\\<br>
                    \medskip<br>
                    \textbf{Михайлов П.Н.$^1$, Сидоров С.Н.$^2$}\\<br>
                    {\sl $^1$Стерлитамакский филиал Башкирского государственного университета, г. Стерлитамак, Россия;\\<br>
                    $^2$Стерлитамакский филиал Института стратегических исследований Республики Башкортостан, г. Стерлитамак, Россия;\\<br>
                    mihaylovpn@mail.ru, stsid@mail.ru}<br>
                    \end{center}<br>
                    % Аннотация на русском<br>
                    \textit{На основе прямой начально-граничной задачи поставлены и изучены обратные задачи по определению сомножителей правых частей уравнения смешанного параболо-гиперболического типа, зависящих от времени. На основании теории интегральных уравнений доказаны соответствующие теоремы единственности и существования решений обратных задач.}<br>
                    % Ключевые слова на русском<br>
                    \textit{Ключевые слова: уравнение смешанного параболо-гиперболического типа, обратная задача, единственность, существование, ряд, малые знаменатели, интегральные уравнения.}<br>
                    \medskip<br>
                    % Название статьи на английском<br>
                    \begin{center}<br>
                    \textbf{INVERSE PROBLEMS FOR THE PARABOLIC-HYPERBOLIC EQUATION}\\<br>
                    \medskip<br>
                    \textbf{Mihaylov P.N.$^1$, Sidorov S.N.$^2$}\\<br>
                    {\sl $^1$Sterlitamak branch of Bashkir State University, Sterlitamak, Russia; \\<br>
                    $^2$ Sterlitamak Branch of the Institute for Strategic Studies of the Republic of Bashkortostan, Sterlitamak, Russia;\\<br>
                    mihaylovpn@mail.ru, stsid@mail.ru}<br>
                    \end{center}<br>
                    % Аннотация на английском<br>
                    \textit{On the basis of a direct initial boundary value problem, inverse problems are formulated and studied to determine the factors of the right-hand sides of the mixed parabolic-hyperbolic type equation that depend on time. On the basis of the theory of integral equations, the corresponding uniqueness and existence theorems for solutions of inverse problems are proved.}<br>
                    % Ключевые слова на английском<br>
                    \textit{Key words: equation of mixed parabolic-hyperbolic type, inverse problem, uniqueness, existence, series, small denominators, integral equations.}<br>
                    \medskip<br>
                    <b>Далее основной текст материалов доклада</b><br>
                    \medskip<br>
                    Работа выполнена при финансовой поддержке РФФИ (проект №).<br>
                    \smallskip<br>
                    \begin{center}<br>
                    \textbf{СПИСОК ЛИТЕРАТУРЫ} %(на языке оригинала)<br>
                    \end{center}<br>
                    1. {\it Сабитов~К.Б.} {Прямые и обратные задачи для уравнений смешанного параболо-гиперболического типа. М.: Наука, 2016. 272~с.}<br>
                    2. {\it Сабитов~К.Б., Сидоров~С.Н.} {Обратная задача для вырождающегося параболо-гиперболического уравнения с нелокальным граничным условием // Известия Вузов. Математика. 2015. №~1. С.~46--59.}<br>
                    \end{document}<br>
                </p>
            </div>
        </div>
    </div>
</div>

