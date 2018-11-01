<?php

namespace Laravel_Learn\Http\Controllers;

use Illuminate\Http\Request;
use Laravel_Learn\Pessoa_perdida;
use Illuminate\Support\Facades\DB;

class PesquisaPessoaPerdidaController extends Controller
{
    function index()
    {
        $pessoa_perdida = Pessoa_perdida::all();
        return view('pessoa_perdida.live_search');
    }

    function action(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            if ($query != '') {
                $data = DB::table('pessoa_perdida')
                    ->where('nome', 'like', '%' . $query . '%')
                    ->orWhere('sexo', 'like', '%' . $query . '%')
                    ->orWhere('nacionalidade', 'like', '%' . $query . '%')
                    ->orWhere('naturalidade', 'like', '%' . $query . '%')
                    ->orderBy('id_p_perdida', 'desc')
                    ->get();

            } else {
                $data = DB::table('pessoa_perdida')
                    ->orderBy('id_p_perdida', 'desc')
                    ->get();
            }
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $row) {
                    $output .= '
        <tr>
         <td>' . $row->nome . '</td>
         <td>' . $row->Sexo . '</td>
         <td>' . $row->nacionalidade . '</td>
         <td>' . $row->naturalidade . '</td>
        </tr>
        ';
                }
            } else {
                $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
            }
            $data = array(
                'table_data' => $output,
                'total_data' => $total_row
            );

            echo json_encode($data);
        }
    }

}
