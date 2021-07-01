<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mestrado | Projeto desenvolvido UniFOA</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap"
        rel="stylesheet">




</head>

<body>
    <section class="menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mx-auto mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/">Proposta</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/filmes">Filmes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/game">Jogo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/professor">Professor</a>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </section>


    <section class="intro-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="title-main3"> FILMES</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5" style="position:relative">
        <div class="pic1">
            <img src="{{ asset('images/bob1.png') }}" alt="" class="">
        </div>

        <div class="pic2">
            <img src="{{ asset('images/sun.png') }}" alt="" class="">
        </div>
        <div class="pic5">
            <img src="{{ asset('images/bob2.png') }}" alt="" class="">
        </div>
        <div class="container" style="position:relative">
            <div class="row align-items-center">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/floresta.jpg') }}" alt="">
                </div>
                <div class="col-md-6 intro-mestre">
                    <h2><b>OS SEM-FLORESTA</b></h2>

                    <p class="sub-title">A primavera chegou, o que faz com que os animais da floresta despertem da
                        hibernação. Ao acordar eles logo têm uma surpresa: surgiu ao redor de seu habitat natural uma
                        grande cerca verde. Inicialmente eles temem o que há por detrás da cerca, até que RJ (Bruce
                        Willis) revela que foi construída uma cidade ao redor da floresta em que vivem, que agora ocupa
                        apenas um pequeno espaço. RJ diz ainda que no mundo dos humanos há as mais diversas guloseimas,
                        convencendo os demais a atravessar a cerca. Entretanto esta atitude desagrada o cauteloso Verne
                        (Garry Shandling), que achava melhor permanecer onde estavam inicialmente</p>

                    <ul>
                        <li> O personagem RJ tem a necessidade de consumir tudo aquilo que ele tentou pegar?</li>
                        <li>Na nossa vida temos o costume de comprar mais do que precisamos?</li>
                        <li>Quais as consequências que isso trouxe para o personagem RJ?</li>
                        <li>Quais as consequências que isso pode trazer para nós e para o nosso planeta?</li>
                        <li>Será que aqueles são alimentos adequados para o personagem RJ consumir?</li>
                        <li>Vamos conversar um pouco sobre as grandes produções de alimentos e como elas podem fazer mal
                            ao Meio Ambiente? (Informativo para os professores desse processo)</li>
                    </ul>
                </div>

                <div class="row align-items-center mt-5">
                    <div class="col-md-6 intro-mestre">
                        <h2><b>O LORAX – EM BUSCA DA TRUFULA PERDIDA</b></h2>

                        <p class="sub-title">Um rapaz de 12 anos procura uma árvore que lhe permitirá ganhar a simpatia
                            da garota dos seus sonhos. Para encontrá-la, percorre o território do Lorax, uma criatura
                            lendária, mal-humorada e charmosa que luta para preservar o seu mundo e as criaturas que o
                            habitam.</p>


                        <ul>
                            <li> Vocês acham que foi correto o personagem Umavez-Ildo cortar todas as trufulas (recurso
                                natural mostrado no filme) existentes no mundo de uma vez, sem ouvir o que o Lorax o
                                dizia? O que isso provocou?</li>
                            <li>As vezes nós temos a necessidade de cortar uma árvore, para construirmos um móvel, uma
                                porta, se tivermos essa necessidade, o que seria certo fazermos para diminuir os
                                prejuízos que isso causa ao meio ambiente?</li>
                            <li>O que aconteceu ao mundo na animação? Vocês acham que isso pode acontecer ao nosso
                                planeta?</li>
                            <li>Quais as consequências que isso pode trazer para nós e para o nosso planeta?</li>
                            <li>Com a falta de árvores, o lugar onde Ted, sua avó e Audrey vive fica muito quente e o
                                Sr. O’Here começa a vender “ar fresco”, nós compramos/consumimos algum recurso natural
                                que deveria ser disponível, uma vez que existe em abundância na natureza?</li>
                            <li>Será que tem alguma graça vivermos em um mundo sem árvores como eles viviam?</li>
                            <li>E a nossa saúde, ela é prejudicada por um ar poluído?</li>
                        </ul>

                    </div>

                    <div class="col-md-6 text-center">
                        <div class="pic4">
                            <img src="{{ asset('images/rocket.png') }}" alt="" class="">
                        </div>
                        <img src="{{ asset('images/lorax.jpg') }}" alt="">
                    </div>

                </div>
                <div class="pic3">
                    <img src="{{ asset('images/heart.png') }}" alt="" class="">
                </div>
               
            </div>
    </section>

    <section class="mt-5 game">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6 item-game">
                    <h4>Venha jogar e aprender sobre a consciência ambiental</h4>
                </div>
                <div class="col-md-6 item-game ">
                    <a href="/game" target="_blank" rel="noopener noreferrer">
                        <button>
                            <span class="ponto">
                                JOGUE
                            </span>
                        </button>
                    </a>
                </div>

            </div>
        </div>
    </section>











    <footer class="mt-5">
        <img src="{{ asset('images/footer.png') }}" alt="">
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
