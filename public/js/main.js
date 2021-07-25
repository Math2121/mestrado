$(document).ready(function () {
    $('#hiddeInput').hide();
    $('#question3').change(() => {
        if ($('#question3').val() === 'qual') {
            $('#hiddeInput').show();
        } else {
            $('#hiddeInput').hide();
        }
    });
});
$("#formAvaliativo").validate({
    debug: true,
    rules: {
        question1: {
            required: true,

        },
        question2: {
            required: true,

        },
        question3: {
            required: true,

        },
        question4: {
            required: true,

        },
        question5: {
            required: true,

        },
        question6: {
            required: true,

        },
        question7: {
            required: true,

        },
        question8: {
            required: true,

        },
        question9: {
            required: true,

        },
        question10: {
            required: true,

        },
        question11: {
            required: true,

        },
        question12: {
            required: true,

        }
    },
    messages: {

        question1: {
            required: "Campo obrigatório"

        },
        question2: {
            required: "Campo obrigatório"

        },
        question3: {
            required: "Campo obrigatório"

        },
        question4: {
            required: "Campo obrigatório"

        },
        question5: {
            required: "Campo obrigatório"
        },
        question6: {
            required: "Campo obrigatório"

        },
        question7: {
            required: "Campo obrigatório"

        },
        question8: {
            required: "Campo obrigatório"

        },
        question9: {
            required: "Campo obrigatório"

        },
        question10: {
            required: "Campo obrigatório",

        },
        question11: {
            required: "Campo obrigatório"

        },
        question12: {
            required: "Campo obrigatório"

        }
    }
});
$("#professorForm").validate({
    debug: true,
    rules: {
        professor: {
            required: true,

        },
        escola: {
            required: true,

        },
        email: {
            required: true,
            email: true

        }
    },
    messages: {

        professor: {
            required: "Campo obrigatório"

        },
        escola: {
            required: "Campo obrigatório"

        },
        email: {
            required: "Campo obrigatório",
            email: "E-mail inválido"

        }
    }
});
$(document).ready(function () {
    $(".btn-sub").click(function (e) {
        e.preventDefault();

        var _token = $("input[name='_token']").val();
        let question1 = $("#question1").val();
        let question2 = $("#question2").val();
        let question3 = $("#question3").val();
        let question4 = $("#question4").val();
        let question5 = $("#question5").val();
        let question6 = $("#question6").val();
        let question7 = $("#question7").val();
        let question8 = $("#question8").val();
        let question9 = $("#question9").val();
        let question10 = $("#question10").val();
        let question11 = $("#question11").val();
        let question12 = $("#question12").val();

        let sub_question = $("#hiddeInput").val();
        console.log(sub_question)
        $.ajax({
            url: "/ajax/request",
            type: 'POST',
            data: {
                _token: _token,
                question1: question1,
                question2: question2,
                question3: question3,
                sub_question_3: sub_question,
                question4: question4,
                question5: question5,
                question6: question6,
                question7: question7,
                question8: question8,
                question9: question9,
                question10: question10,
                question11: question11,
                question12: question12,


            },
            success: function (data) {
                question1 = $("#question1").val('');
                question2 = $("#question2").val('');
                question3 = $("#question3").val('');
                question4 = $("#question4").val('');
                question5 = $("#question5").val('');
                question6 = $("#question6").val('');
                question7 = $("#question7").val('');
                question8 = $("#question8").val('');
                question9 = $("#question9").val('');
                question10 = $("#question10").val('');
                question11 = $("#question11").val('');
                question12 = $("#question12").val('');
                $('#hiddeInput').hide();
                sub_question = $("#sub_question").val('');

                if (data.success == "success") {
                    Swal.fire({
                        icon: 'success',
                        title: '',
                        text: "Formulário  enviado",

                    })
                } else {

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: "Formulário não enviado",

                    })
                }

            }
        });
    })
})

$(document).ready(function () {
    $(".btn-professor").click(function (e) {
        e.preventDefault();

        var _token = $("input[name='_token']").val();
        let professor = $("#professor").val();
        let escola = $("#escola").val();
        let email = $("#email").val();

        $.ajax({
            url: "/ajax/professor",
            type: 'POST',
            data: {
                _token: _token,
                professor: professor,
                escola: escola,
                email: email,
            },
            success: function (data) {
               $("#professor").val('');
              $("#escola").val('');
           $("#email").val('');


                if (data.success === "success") {
                    Swal.fire({
                        icon: 'success',
                        title: '',
                        text: "Formulário  enviado",

                    })
                } else {
                    console.log(data)
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: "Formulário não enviado",

                    })
                }

            }
        });
    })
})

$(document).ready(() => {
    $('.navbar-toggler').click(() => {

      $('.menu-mobile').toggleClass('active')
    })

})


// let questionInput1 = document.getElementById("question1").value

// function question1(){
//     let alternative1 = document.getElementsByName('alternative1');

//     for (let index = 0; index < alternative1.length; index++) {
//         alternative1[index].addEventListener("change", ()=>{
//             questionInput1 = alternative1[index].value
//         })

//     }

// }
// question1()


