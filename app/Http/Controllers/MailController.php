<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use DB;
class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function grava()
    {

    }


    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  String $para
     * @return \Illuminate\Http\Response
     */
     
    public function store(Request $request)
    {
        $data = array();
        $data['email'] = Input::get("email");
        $data['nomealuno'] = Input::get("nomealuno");
        $data['nomeprofessor'] = Input::get("nomeprofessor");
        Mail::send('emails.contact', $request->all(), function($msg){
            $file = Input::file('file')->move(__DIR__.'/storage/',Input::file('file')->getClientOriginalName());
            $msg->subject('Proposta de estágio');
            $msg->to(Input::get('email')); 
            $msg->attach($file); 
        });
        
        $nomealuno = Input::get('nomealuno');
        $nomeprofessor = Input::get('nomeprofessor');
        $dataenvio = '2015-11-24';
        DB::insert('insert into propostas
        (nomealuno, nomeprofessor, dataenvio) values (?,?,?)',
        array("$nomealuno","$nomeprofessor", "$dataenvio"));

        return Redirect::to('/');
        Session::flash('message', 'Email enviado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
