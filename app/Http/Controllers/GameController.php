<?php

namespace App\Http\Controllers;

use App\Mail\GameMail;
use App\Models\Professors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GameController extends Controller
{
    //

    public function index()
    {
        $professor = Professors::all();
        return view('game')->with("professor", $professor);
    }
    public function store(Request $request)
    {
        $aluno = $request->input('aluno');
        $question1 = $request->input('alternative1');
        $question2 = $request->input('alternative2');
        $question3 = $request->input('alternative3');
        $question4 = $request->input('alternative4');
        $question5 = $request->input('alternative5');
        $question6 = $request->input('alternative6');
        $question7 = $request->input('alternative7');
        $professor = $request->input('professor');

        $maile = new GameMail($aluno,$question1, $question2, $question3, $question4, $question5, $question6, $question7);


        Mail::to($professor)->send($maile);

        //     $subject = "Resposta do Jogo - Mestrado ";



        //     $to = $professor;


        //     $de = $professor;



        //     $mensagem = '
        //     <html>
        //     <body style="background:#fff; text-align:center; ">
        //     <font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#25201c">
        //         <table width="600" align="center" style="background:#fff; text-align:center; ">
        //             <thead>
        //                 <tr>
        //                     <td colspan="2"><img src="http://chinelosaconchego.com.br/img/logo.png" alt="Logo" width="40%" ></td>
        //                 </tr>
        //             </thead>
        //             <tbody>
        //                 <tr>
        //                     <td colspan="2">
        //                         <font face="Verdana, Arial, Helvetica, sans-serif" size="4"
        //                             color="#25201c"><strong></strong>
        //                             <hr>
        //                         </font>
        //                     </td>
        //                 </tr>

        //                 <tr>
        //                     <td><b>2. Assinale a imagem que melhor representa o que é
        //                     consumo, pra você:</b></td>
        //                     <td>
        //                         '.$question1.'<br><br>
        //                     </td>
        //                 </tr>




        //                 <tr>
        //                     <td height="25" colspan="2"></td>
        //                 </tr>
        //             </tbody>
        //             <tfoot>
        //                 <tr>
        //                     <td colspan="2">
        //                         Obrigado!<br>
        //                         Att. Equipe DEC9 .
        //                     </td>
        //                 </tr>
        //                 <tr>
        //                     <td height="25" colspan="2"></td>
        //                 </tr>
        //             </tfoot>
        //         </table>
        //     </font>
        // </body>

        // </html>
        // ';



        //     $headers  = "MIME-Version: 1.0\n";

        //     $headers .= "Content-type: text/html; charset=utf-8\n";

        //     $headers .= "From: Chinelos Aconchego <" . $de . ">\n";

        //     $headers .= "Reply-To: " . $professor . "\n";

        //     $headers .= "Return-Path: " . $professor . "\n";







        //     mail($to, $subject, $mensagem, $headers);
        return response()->json(["success"=>"success"]);
    }
}
