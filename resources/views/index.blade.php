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
    <section class="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12  round-blue ">
                    <a href="/professor" target="_blank" rel="noopener noreferrer">
                        <i class="las la-user-tie" data-bs-toggle="tooltip" data-bs-placement="top"
                            title="Cadastre-se professor"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="intro-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="title-main">NOSSA PROPOSTA</h2>
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
                    <img src="{{ asset('images/img1.png') }}" alt="">
                </div>
                <div class="col-md-6 intro-mestre">
                    <h2><b>OS SEM-FLORESTA</b></h2>

                    <p class="sub-title">A primavera chegou, o que faz com que os animais da floresta despertem da hibernação. Ao acordar eles logo têm uma surpresa: surgiu ao redor de seu habitat natural uma grande cerca verde. Inicialmente eles temem o que há por detrás da cerca, até que RJ (Bruce Willis) revela que foi construída uma cidade ao redor da floresta em que vivem, que agora ocupa apenas um pequeno espaço. RJ diz ainda que no mundo dos humanos há as mais diversas guloseimas, convencendo os demais a atravessar a cerca. Entretanto esta atitude desagrada o cauteloso Verne (Garry Shandling), que achava melhor permanecer onde estavam inicialmente</p>
                    <div class="about-content">
                        <img src="{{ asset('images/number1.png') }}" alt="">
                        <div class="text-content">

                            <p>Essa animação, apresenta diversas possibilidades para estabelecer práticas dialógicas com os estudantes, mas a principal são os perigos em que RJ se coloca e aos amigos por querer mais do que precisa, nesse caso, pode-se traçar vários paralelos com o consumo consciente.</p>
                        </div>

                    </div>
                    {{-- <div class="about-content">
                        <img src="{{ asset('images/number2.png') }}" alt="">
                        <div class="text-content">
                            <h3 class="pink">LOREM IPSUM</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolor ornare eu cursus
                                pellentesque purus at dictumst.</p>
                        </div>

                    </div>
                    <div class="about-content">
                        <img src="{{ asset('images/number3.png') }}" alt="">
                        <div class="text-content">
                            <h3 class="yellow">LOREM IPSUM</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dolor ornare eu cursus
                                pellentesque purus at dictumst.</p>
                        </div>

                    </div> --}}
                </div>
            </div>

            <div class="row align-items-center mt-5">
                <div class="col-md-6 intro-mestre">
                    <h2><b>O LORAX – EM BUSCA DA TRUFULA PERDIDA</b></h2>

                    <p class="sub-title">Um rapaz de 12 anos procura uma árvore que lhe permitirá ganhar a simpatia da garota dos seus sonhos. Para encontrá-la, percorre o território do Lorax, uma criatura lendária, mal-humorada e charmosa que luta para preservar o seu mundo e as criaturas que o habitam.</p>
                    <div class="about-content">
                        <img src="{{ asset('images/number1.png') }}" alt="">
                        <div class="text-content">

                            <p>
                                Essa animação possibilita trabalhar  como os recursos naturais são explorados ao extremo e quais as consequências desse ato. Possibilita, inclusive, refletir sobre a necessidade de pensar no ser humano em todos os aspectos, considerando, até mesmo, o viés neoliberal da expropriação de bens e pessoas.
                                </p>
                        </div>

                    </div>


                </div>

                <div class="col-md-6 text-center">
                    <div class="pic4">
                        <img src="{{ asset('images/rocket.png') }}" alt="" class="">
                    </div>
                    <img src="{{ asset('images/img2.png') }}" alt="">
                </div>

            </div>
            <div class="pic3">
                <img src="{{ asset('images/heart.png') }}" alt="" class="">
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-md-6 intro-mestre">
                    <h2><b>WALL-E</b></h2>

                    <p class="sub-title">Após entulhar a Terra de lixo e poluir a atmosfera com gases tóxicos, a humanidade deixou o planeta e passou a viver em uma gigantesca nave. O plano era que o retiro durasse alguns poucos anos, com robôs sendo deixados para limpar o planeta. Wall-E é o último destes robôs, que se mantém em funcionamento graças ao auto-conserto de suas peças. Sua vida consiste em compactar o lixo existente no planeta, que forma torres maiores que arranha-céus, e colecionar objetos curiosos que encontra ao realizar seu trabalho. Até que um dia surge repentinamente uma nave, que traz um novo e moderno robô: Eva. A princípio curioso, Wall-E logo se apaixona pela recém-chegada.</p>
                    <div class="about-content">
                        <img src="{{ asset('images/number1.png') }}" alt="">
                        <div class="text-content">
                          
                            <p>Essa animação possibilita trabalhar as possíveis consequências do acúmulo de lixo causado pela humanidade, promovendo reflexões críticas sobre como evitar impactos negativos ao meio ambiente.</p>
                        </div>

                    </div>


                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/img3.png') }}" alt="">
                </div>

            </div>
            <div class="row align-items-center mt-5">
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/img3.png') }}" alt="">
                </div>
                <div class="col-md-6 intro-mestre">
                    <h2><b>TURMA DA MÔNICA E UM PLANO PARA SALVAR O PLANETA</b></h2>

                    <p class="sub-title">Turma da Mônica mostra como o homem está maltratando o Meio Ambiente e dá dicas de como Preservar o Planeta.</p>
                    <div class="about-content">
                        <img src="{{ asset('images/number1.png') }}" alt="">
                        <div class="text-content">

                            <p>Essa animação mostra a Turma da Mônica falando sobre vários problemas relacionados ao Meio Ambiente. Apresentando a classificação dos Rs (Reduzir, Reutilizar e Reciclar). Pode-se trabalhar com esses curtas diversas questões relacionadas a temática, enfatizando o “reduzir” como a principal ação para diminuir a degradação do ecossistema e sem dúvidas o principal dos Rs.</p>
                        </div>

                    </div>


                </div>


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

    <section class="avaliate mt-5">
        <section class="intro-text2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title-main">AVALIAÇÃO</h2>
                        <p class="mt-3 text-normal">Por favor, contribua para o aprimoramento deste Produto Educacional!
                            .</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <form action="ajax/request" method="post" id="formAvaliativo">
                    @csrf
                    <div class="form-group mb-4">
                        <label for="formation">Qual sua formação acadêmica?</label>
                        <select class="form-control form-select @error('question1') is-invalid @enderror" id="question1"
                            name="question1" required>
                            <option></option>
                            <option>Formação de Professores</option>
                            <option>Graduação</option>
                            <option>Especialização</option>
                            <option>Mestrado</option>
                            <option>Doutorado</option>
                        </select>

                    </div>

                    <div class="form-group mb-4">
                        <label for="formation">Há quanto tempo você concluiu seu curso?</label>
                        <select class="form-control form-select @error('question2') is-invalid @enderror" id="question2"
                            name="question2" required>
                            <option></option>
                            <option>Até 1 ano</option>
                            <option>De 1 a 5 anos</option>
                            <option>De 6 a 10 anos</option>
                            <option>De 10 a 15 anos</option>
                            <option>Acima de 15 anos</option>
                        </select>

                    </div>


                    <div class="form-group mb-4">
                        <label for="formation">Qual a sua área de formação?</label>
                        <select class="form-control form-select @error('question3') is-invalid @enderror" id="question3"
                            name="question3" required>
                            <option></option>
                            <option>Pedagogia</option>
                            <option>Licenciatura em História</option>
                            <option>Licenciatura em Geografia</option>
                            <option>Licenciatura em Educação Física</option>
                            <option>Licenciatura em Letras</option>
                            <option value="qual">Outra Formação.Qual?</option>
                        </select>
                        <input type="text" name="op1" id="hiddeInput" class="form-control mt-4" placeholder="Qual?">
                    </div>


                    <div class="form-group mb-4">
                        <label for="formation">
                            Há quanto tempo atua como docente nas series iniciais do ensino fundamental?</label>
                        <select class="form-control form-select @error('question4') is-invalid @enderror" id="question4"
                            name="question4" required>
                            <option></option>
                            <option></option>
                            <option>Até 1 ano</option>
                            <option>De 1 a 5 anos</option>
                            <option>De 6 a 10 anos</option>
                            <option>De 10 a 15 anos</option>
                            <option>Acima de 15 anos</option>
                        </select>

                    </div>


                    <div class="form-group mb-4">
                        <label for="formation">

                            Qual o ano de escolaridade que você atua?</label>
                        <select class="form-control form-select @error('question5') is-invalid @enderror" id="question5"
                            name="question5" required>
                            <option></option>
                            <option></option>
                            <option>1º ano do E.F.</option>
                            <option> 1º ano do E.F.</option>
                            <option>3º ano do E.F.</option>
                            <option>4º ano do E.F</option>
                            <option>5º ano do E.F.</option>
                        </select>

                    </div>


                    <div class="form-group mb-4">
                        <label for="formation">

                            As informações do site atendem as expectativas?</label>
                        <select class="form-control form-select @error('question6') is-invalid @enderror" id="question6"
                            name="question6" required>
                            <option></option>
                            <option></option>
                            <option>Abaixo do esperado</option>
                            <option> Dentro do esperado.</option>
                            <option>Satisfatória</option>
                            <option>Muito boa</option>
                            <option>Excelente</option>
                        </select>

                    </div>

                    <div class="form-group mb-4">
                        <label for="formation">

                            O conteúdo do site é de fácil entendimento?</label>
                        <select class="form-control form-select @error('question7') is-invalid @enderror" id="question7"
                            name="question7" required>
                            <option></option>
                            <option></option>
                            <option>Abaixo do esperado</option>
                            <option> Dentro do esperado.</option>
                            <option>Satisfatória</option>
                            <option>Muito boa</option>
                            <option>Excelente</option>
                        </select>

                    </div>


                    <div class="form-group mb-4">
                        <label for="formation">

                            Como foi a participação dos estudantes durante a atividade no Kahoot?</label>
                        <select class="form-control form-select @error('question8') is-invalid @enderror" id="question8"
                            name="question8" required>
                            <option></option>
                            <option></option>
                            <option>Abaixo do esperado</option>
                            <option> Dentro do esperado.</option>
                            <option>Satisfatória</option>
                            <option>Muito boa</option>
                            <option>Excelente</option>
                        </select>

                    </div>

                    <div class="form-group mb-4">
                        <label for="formation">

                            Como foi a participação dos estudantes durante a roda de conversas?</label>
                        <select class="form-control form-select @error('question9') is-invalid @enderror" id="question9"
                            name="question9" required>
                            <option></option>
                            <option></option>
                            <option>Abaixo do esperado</option>
                            <option> Dentro do esperado.</option>
                            <option>Satisfatória</option>
                            <option>Muito boa</option>
                            <option>Excelente</option>
                        </select>

                    </div>

                    <div class="form-group mb-4">
                        <label for="formation">

                            A utilização do site proporcionou os resultados esperados?</label>
                        <select class="form-control form-select @error('question10') is-invalid @enderror"
                            id="question10" name="question10" required>
                            <option></option>
                            <option></option>
                            <option>Abaixo do esperado</option>
                            <option> Dentro do esperado.</option>
                            <option>Satisfatória</option>
                            <option>Muito boa</option>
                            <option>Excelente</option>
                        </select>

                    </div>

                    <div class="form-group mb-4">
                        <label for="formation">


                            Você recomendaria o site a outros docentes?</label>
                        <select class="form-control form-select @error('question11') is-invalid @enderror"
                            id="question11" name="question11" required>
                            <option></option>
                            <option></option>
                            <option>Não recomendaria</option>
                            <option> Recomendaria Parcialmente</option>
                            <option>Recomendaria</option>
                            <option>Recomendaria, pois é muito bom</option>
                            <option>Recomendaria, pois é excelente</option>
                        </select>

                    </div>



                    <div class="form-group mb-4">
                        <label for="contribution">


                            Gostaria de contribuir com alguma sugestão?</label>
                        <textarea name="contribution" id="question12" cols="30" rows="10" placeholder=""
                            class="form-control  @error('question12') is-invalid @enderror " name="question12"
                            required></textarea>
                    </div>


                    <button type="submit" class="btn-sub">
                        <span class="ponto">
                            ENVIAR
                        </span>
                    </button>
                </form>
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
