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



    <section class="container mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 form-professor">
                    <form action="" method="post" id="professorForm">
                        <h2 class="text-center"><b>Cadastre-se</b></h2>
                        @csrf
                    <div class=" mb-4 mt-4">
                        <label for="professor" class="form-label">Nome</label>
                        <input type="text" class="form-control" placeholder="professor" id="professor" name="professor"
                       >
                    </div>

                    <div class=" mb-4">
                        <label for="escola" class="form-label">Escola</label>
                        <input type="text" class="form-control" placeholder="Amigos da Luz" name="escola" id="escola">
                    </div>

                    <div class=" mb-4">
<label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="exampl@gmail.com" name="email" id="email">
                    </div>
                    <button type="submit" class="btn-professor">Enviar</button>
                </form>
                </div>
            </div>
        </div>
    </section>


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
