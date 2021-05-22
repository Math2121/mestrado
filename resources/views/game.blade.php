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


    <section class="game-intro">
        <div class="container">
            <div class="row justify-content-center  intro-text">
                <div class="col-md-12 text-center ">
                    <h1>O JOGO</h1>
                    <p>Vamos aprender como nossas ações impactam o mundo.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="game-section mt-5">
        <div class="container">
            <div class="row">
                <form action="/game" method="post" id="formGame">
                    @csrf
                    <div class="form-group mb-5">
                        <label for="aluno">Digite seu nome:</label>
                        <input type="text" name="aluno" id="aluno" class="form-control  @error('aluno') is-invalid @enderror">
                    </div>
                    <div class="form-group mb-4">
                        <label for="professor">1. Quem e seu professor?</label>
                        <select class="form-control form-select @error('professor') is-invalid @enderror" id="professor"
                            name="professor" required>
                            <option></option>
                            @foreach ($professor as $prof)
                                <option value="{{ $prof->email }}">{{ $prof->professor }} - {{ $prof->escola }}
                                </option>
                            @endforeach
                        </select>

                    </div>

                    <div class="form-group mb-4 mt-5">
                        <label for="question1" class="form-label">2. Assinale a imagem que melhor representa o que é
                            consumo, pra você</label>

                        <div class="d-flex align-items-center questionsCheck flex-wrap">
                            <div class="check">
                                <input type="checkbox" id="myCheckbox2" name="alternative1" value="Errou" />
                                <label for="myCheckbox2" class="form-label">
                                    <img src="{{ asset('images/question1-img1.jpg') }}" alt=""></label>
                            </div>

                            <div class="check">
                                <input type="checkbox" id="myCheckbox3" value="Acertou" name="alternative1"/>
                                <label for="myCheckbox3" class="form-label"><img
                                        src="{{ asset('images/question1-img2.jpg') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox4" value="Errou" name="alternative1"/>
                                <label for="myCheckbox4" class="form-label"><img
                                        src="{{ asset('images/question1-img3.jpg') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox5" value="Errou" name="alternative1"/>
                                <label for="myCheckbox5" class="form-label"><img
                                        src="{{ asset('images/question1-img4.jpg') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox11" value="Errou" name="alternative1"/>
                                <label for="myCheckbox11" class="form-label"><img
                                        src="{{ asset('images/question1-img5.jpg') }}" alt=""></label>
                            </div>
                        </div>


                    </div>

                    <div class="form-group mb-4 mt-5">
                        <label for="question1" class="form-label">3. Na hora da compra, você deve utilizar:
                            consumo, pra você</label>

                        <div class="d-flex align-items-center questionsCheck flex-wrap">
                            <div class="check">
                                <input type="checkbox" id="myCheckbox12" name="alternative12" value="Acertou" />
                                <label for="myCheckbox12" class="form-label">
                                    <img src="{{ asset('images/question2-img1.png') }}" alt=""></label>
                            </div>

                            <div class="check">
                                <input type="checkbox" id="myCheckbox13" value="Errou" name="alternative2"/>
                                <label for="myCheckbox13" class="form-label"><img
                                        src="{{ asset('images/question2-img2.png') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox14" value="Errou" name="alternative2"/>
                                <label for="myCheckbox14" class="form-label"><img
                                        src="{{ asset('images/question2-img3.png') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox42" value="Errou" name="alternative2"/>
                                <label for="myCheckbox42" class="form-label"><img
                                        src="{{ asset('images/question2-img4.png') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox15" value="Errou" name="alternative2"/>
                                <label for="myCheckbox15" class="form-label"><img
                                        src="{{ asset('images/question2-img5.png') }}" alt=""></label>
                            </div>
                        </div>


                    </div>

                    <div class="form-group mb-4 mt-5">
                        <label for="question1" class="form-label">4. Os objetos que você compra utilizam muitos recursos natural.  Qual das figuras não representa um recurso natural?</label>

                        <div class="d-flex align-items-center questionsCheck flex-wrap">
                            <div class="check">
                                <input type="checkbox" id="myCheckbox6" name="alternative3" value="Acertou" />
                                <label for="myCheckbox6" class="form-label">
                                    <img src="{{ asset('images/question3-img1.png') }}" alt=""></label>
                            </div>

                            <div class="check">
                                <input type="checkbox" id="myCheckbox7" value="Errou" name="alternative3"/>
                                <label for="myCheckbox7" class="form-label"><img
                                        src="{{ asset('images/question3-img2.png') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox8" value="Errou" name="alternative3"/>
                                <label for="myCheckbox8" class="form-label"><img
                                        src="{{ asset('images/question3-img3.jpg') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox9" value="Errou" name="alternative3"/>
                                <label for="myCheckbox9" class="form-label"><img
                                        src="{{ asset('images/question3-img4.jpg') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox10" value="Errou" name="alternative3"/>
                                <label for="myCheckbox10" class="form-label"><img
                                        src="{{ asset('images/question3-img5.jpg') }}" alt=""></label>
                            </div>
                        </div>


                    </div>

                    <div class="form-group mb-4 mt-5">
                        <label for="question1" class="form-label">5. Qual das imagens a seguir você acredita que representa menor poluição ao meio ambiente?</label>

                        <div class="d-flex align-items-center questionsCheck flex-wrap">
                            <div class="check">
                                <input type="checkbox" id="myCheckbox16" name="alternative4" value="Acertou" />
                                <label for="myCheckbox16" class="form-label">
                                    <img src="{{ asset('images/question4-img1.png') }}" alt=""></label>
                            </div>

                            <div class="check">
                                <input type="checkbox" id="myCheckbox17" value="Errou" name="alternative4"/>
                                <label for="myCheckbox17" class="form-label"><img
                                        src="{{ asset('images/question4-img2.png') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox18" value="Errou" name="alternative4"/>
                                <label for="myCheckbox18" class="form-label"><img
                                        src="{{ asset('images/question4-img3.png') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox19" value="Errou" name="alternative4"/>
                                <label for="myCheckbox19" class="form-label"><img
                                        src="{{ asset('images/question4-img4.png') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox20" value="Errou" name="alternative4"/>
                                <label for="myCheckbox20" class="form-label"><img
                                        src="{{ asset('images/question4-img5.png') }}" alt=""></label>
                            </div>
                        </div>


                    </div>

                    <div class="form-group mb-4 mt-5">
                        <label for="question1" class="form-label">6.  Que figura demonstra uma ação de consumo consciente?</label>

                        <div class="d-flex align-items-center questionsCheck flex-wrap">
                            <div class="check">
                                <input type="checkbox" id="myCheckbox21" name="alternative5" value="Errou" />
                                <label for="myCheckbox21" class="form-label">
                                    <img src="{{ asset('images/question5-img1.png') }}" alt=""></label>
                            </div>

                            <div class="check">
                                <input type="checkbox" id="myCheckbox22" value="Errou" name="alternative5"/>
                                <label for="myCheckbox22" class="form-label"><img
                                        src="{{ asset('images/question5-img2.png') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox23" value="Acertou" name="alternative5"/>
                                <label for="myCheckbox23" class="form-label"><img
                                        src="{{ asset('images/question5-img3.png') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox24" value="Errou" name="alternative5"/>
                                <label for="myCheckbox24" class="form-label"><img
                                        src="{{ asset('images/question5-img4.png') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox25" value="Errou" name="alternative5"/>
                                <label for="myCheckbox25" class="form-label"><img
                                        src="{{ asset('images/question5-img5.png') }}" alt=""></label>
                            </div>
                        </div>


                    </div>

                    <div class="form-group mb-4 mt-5">
                        <label for="question1" class="form-label">7. Que tipo de alimento causa  menor desequilíbrio ambiental?</label>

                        <div class="d-flex align-items-center questionsCheck flex-wrap">
                            <div class="check">
                                <input type="checkbox" id="myCheckbox26" name="alternative6" value="Errou" />
                                <label for="myCheckbox26" class="form-label">
                                    <img src="{{ asset('images/question6-img1.png') }}" alt=""></label>
                            </div>

                            <div class="check">
                                <input type="checkbox" id="myCheckbox27" value="Errou" name="alternative6"/>
                                <label for="myCheckbox27" class="form-label"><img
                                        src="{{ asset('images/question6-img2.jpg') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox28" value="Errou" name="alternative6"/>
                                <label for="myCheckbox28" class="form-label"><img
                                        src="{{ asset('images/question6-img3.jpg') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox29" value="Acertou" name="alternative6"/>
                                <label for="myCheckbox29" class="form-label"><img
                                        src="{{ asset('images/question6-img4.png') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox30" value="Errou" name="alternative6"/>
                                <label for="myCheckbox30" class="form-label"><img
                                        src="{{ asset('images/question6-img5.jpg') }}" alt=""></label>
                            </div>
                        </div>


                    </div>

                    <div class="form-group mb-4 mt-5">
                        <label for="question1" class="form-label">9. Qual imagem que apresenta a pessoa que está utilizando a água de forma consciente?</label>

                        <div class="d-flex align-items-center questionsCheck flex-wrap">
                            <div class="check">
                                <input type="checkbox" id="myCheckbox31" name="alternative7" value="Errou" />
                                <label for="myCheckbox31" class="form-label">
                                    <img src="{{ asset('images/question7-img1.png') }}" alt=""></label>
                            </div>

                            <div class="check">
                                <input type="checkbox" id="myCheckbox32" value="Acertou" name="alternative7"/>
                                <label for="myCheckbox32" class="form-label"><img
                                        src="{{ asset('images/question7-img2.png') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox33" value="Errou" name="alternative7"/>
                                <label for="myCheckbox33" class="form-label"><img
                                        src="{{ asset('images/question7-img3.jpg') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox34" value="Errou" name="alternative7"/>
                                <label for="myCheckbox34" class="form-label"><img
                                        src="{{ asset('images/question7-img4.png') }}" alt=""></label>
                            </div>
                            <div class="check">
                                <input type="checkbox" id="myCheckbox35" value="Errou" name="alternative7"/>
                                <label for="myCheckbox35" class="form-label"><img
                                        src="{{ asset('images/question7-img5.png') }}" alt=""></label>
                            </div>
                        </div>


                    </div>
                    <button type="submit" class="btn-sub2">
                        <span class="ponto">
                            RESPONDER
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
