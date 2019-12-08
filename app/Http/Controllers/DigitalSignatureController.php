<?php

namespace App\Http\Controllers;

//require 'vendor/autoload.php';


use Tjphippen\Docusign\Facades\Docusign as  Docusign/* Facades\DocuSign */ /* as DocuSign */;
use Illuminate\Http\Request;

class DigitalSignatureController extends Controller
{

    /* public function __construct()
    {
        $this->middleware('api');
    } */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return $users = Docusign::getFolders(true);

    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

      // return request()->all();
        
        $client = new LaravelDocusign\Client;/* ([
            
            'username' => $request->username,
            'password' => $request->password,
            'integrator' => config('docusign'.'integrator_key'),
            'host' => config('docusign'.'host')
        ]); */


        return ['client' => $client];
    }


   /*  public function signDocs()
    {
        $signer = DocuSign::signer([
            'name'  => 'Emmanuel Oteng Wilson',
            'email' => config('docusend'.'email')
        ]);

        return ['signer' => $signer];
    } */

    public function signDocs()
    {
       /*  $signer = DocuSign::signer([
            'name'  => 'Emmanuel Oteng Wilson',
            'email' => config('docusend'.'email')
        ]); */

        return DocuSign::get('folders')->list();

        return ['signer' => $signer];
    }


    

}

/* 


    'host' => 'https://demo.docusign.net/restapi',

    /*
     |--------------------------------------------------------------------------
     | Docusign Default Credentials
     |--------------------------------------------------------------------------
     |
     | These are the credentials that will be used if none are specified
     |
     */
/* 
    'username' => env('DOCUSIGN_USERNAME'),

    'password' => env('DOCUSIGN_PASSWORD'),

    'integrator_key' => env('DOCUSIGN_INTEGRATOR_KEY') */

