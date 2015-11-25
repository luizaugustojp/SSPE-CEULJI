<?php 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Proposta;

class PropostaController extends Controller {
	public function lista(){
		$propostas = DB::select('select * from propostas');
		return view('listagem')->with('propostas', $propostas);
		}
}

