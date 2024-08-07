<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <title>LOKALES TRAINING SPOT</title>
        <link href="index3.css" rel="stylesheet" type="text/css">
        <link href="https://lokales.com.ar/favico.ico" rel="shortcut icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div style="display: none" id="fr-hideAll">&nbsp;</div>

        <main class="fr-main">
            <div class="fr-logo"><b>L<span>OK</span>A<span>L</span>ES</b></div>
            <div class="fr-logo">
                <span><a href="https://lokales.com.ar/index_procesa.php?cod=1" id="fr-btn-act">SKATE - ACRO - ESCALADA</a></span>
            </div>
            <a href="https://lokales.com.ar/index_procesa.php?cod=5" id="fr-btn-twtr">INSCRIPCION</a>
        </main>

        <div class="counter-part">
            <div id="counter" class="glowing">100</div>
        </div>

        <!--cursoescalada.html start-->
        <div class="poster">
            <div class="lens-flare"></div>
            <div class="stripes">
                <div class="stripe-block str1">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="stripe-block str2">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="stripe-block str3">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="info">

                <header>
                    <h3>Damian Zanotti</h3>
                    <p>Presenta</p>
                </header>

                <main>
                    <svg id="text-1" viewBox="0 0 450 100">
                        <rect mask="url(#knockout-text-1)" />

                        <mask id="knockout-text-1">
                            <rect />
                            <text x="50%" y="80" text-anchor="middle">LOKALES</text>
                        </mask>
                    </svg>

                    <svg id="text-2" viewBox="0 0 450 100">
                        <rect mask="url(#knockout-text-2)" />

                        <mask id="knockout-text-2">
                            <rect />
                            <text x="50%" y="80" text-anchor="middle">Setting</text>
                        </mask>
                    </svg>
                </main>

                <section id="date">
                    <div class="circle-item">15</div>
                    <div class="circle-item">Spt</div>
                    <div class="circle-item">2023</div>
                </section>

                <section id="talent">
                    <div class="dj-title">Con</div>
                    <ul class="dj-list">
                        <li>Climber Franco Zanello</li>
                        <li>//</li>
                        <!--<li>Climber Damian Zanotti</li>
                        <li>//</li>-->
                        <li>Climber Cande Quer</li>
                    </ul>
                </section>

                <sub-footer>
                    <div class="tickets">
                        $2500 anticipas / $3000 en Lokales
                    </div>
                    <div class="venue">
                        <h3>Lokales nuestro Espot</h3>
                        <p>Caraffa 181, Villa Allende</p>
                        <p><small>www.lokales.com.ar</small></p>
                    </div>
                </sub-footer>

            </div>
        </div>
        <!--cursoescalada.html end-->

        <footer class="fr-footer">
            <a href="https://lokales.com.ar/index_procesa.php?cod=2" class="fr-footer__item">hola@lokales.com.ar</a>
            <a href="https://lokales.com.ar/index_procesa.php?cod=3" class="fr-fa fa fa-facebook"></a>
            <a href="https://lokales.com.ar/index_procesa.php?cod=4" class="fr-fa fa fa-instagram"></a>
        </footer>
        </body>
        <script type="text/javascript">
            // document.getElementById("hideAll").style.display = "block";
            window.onload = function() {
                // document.getElementById("hideAll").style.display = "none";
                startCountdown();
            };

            function startCountdown() {
                let counter = 100;
                const counterElement = document.getElementById('counter');

                const countdown = setInterval(function() {
                    if (counter >= 0) {
                        counterElement.innerText = counter;
                        counter--;
                    } else {
                        clearInterval(countdown);
                    }
                }, 1000);
            }
        </script>
</html>