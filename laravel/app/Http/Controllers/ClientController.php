<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Illuminate\Support\Facades\Session;
use App\Rules\ValidPhone;
use Illuminate\Support\Facades\Validator;
use App\CsvData;


class ClientController extends Controller
{
    public function getForm()
    {
        return view('layouts.anketa');
    }

    public function postCreateClient(Request $request) 
    {
        
        $rules = [
            'name' => 'required|max:140',
            'email' => 'required|email|unique:clients',
            'comment' => 'max:140',
            'phone1' => [ 'regex:/^[0-9\-\.\+\(\)\ ]+$/', 'nullable', new ValidPhone],
            'phone2' => [ 'regex:/^[0-9\-\.\+\(\)\ ]+$/', 'nullable', new ValidPhone]
           
            ];

        $this->validate(request(), $rules);

        $client = new Client();
        $client -> lastname = $request['name'];
        $client -> email = $request['email'];
        $client -> phonenumber1 = $request['phone1'];
        $client -> phonenumber2 = $request['phone2'];
        $client -> comment = $request['comment'];
        $message = "Kažkas negerai";
        if 
        ($client->save()) {
            
           
        }
        return redirect()->route('clients');

    }

    public function getClients( Request $request)
    {
        
        $clients = Client::where( function($query) {
            $query->select()->from('clients');
        })->orderBy('id', 'desc')->paginate(5);

        return view('layouts.klientai', ['clients' => $clients]); 
    }

    public function getDelete($client_id) 
    {
       $client = Client::where('id', $client_id)->first();
      
      
       $client->delete();
       return redirect()->route('clients')->with(['message'=> 'Klientas ištrintas!']);
    }

    public function getEdit($clientid)
    {
     $newclient = Client::where('id', $clientid)->first();
     return view('layouts.redaguoti', ['clients' => $newclient])->with('clientid',$clientid);
    }


    public function EditClient( $clientidnew , Request $request  )
    {
        $client = Client::where(['id' => $clientidnew])->first();

        $this->validate($request, [
        'newname' => 'required|max:140,',
        'newcomment' => 'max:140',
        'email' => 'required|email|unique:clients,email,'.$clientidnew,
        'newphone1' => [ 'regex:/^[0-9\-\.\+\(\)\ ]+$/', 'nullable', new ValidPhone],
        'newphone2' => [ 'regex:/^[0-9\-\.\+\(\)\ ]+$/', 'nullable', new ValidPhone]
        
        ]);

        $client -> lastname = $request['newname'];   
        $client -> email = $request['email'];
        $client -> phonenumber1 = $request['newphone1'];
        $client -> phonenumber2 = $request['newphone2'];
        $client -> comment = $request['newcomment'];
           
         
        $client -> update();
           
        return redirect()->route('clients'); 
    }

    public function Search( Request $request)
    {
       
       $clients = Client::where( function($query) use($request) {
        $clientsearch = $request->get('search');
        $query->where('lastname', 'like', '%' . $clientsearch . '%');
                
        })->orderBy('id', 'desc')->paginate(5);
        return view('layouts.klientai', ['clients' => $clients]);
        
}

    public function getImport() 
    {
        return view('layouts.ikelticsv');
    }

    public function Import (Request $request) 
    {
        
       
        $validator = Validator::make($request->all(), [
            'file' => 'required'
        ]);
        if ($validator->fails()) {
        return redirect()->back()->withErrors($validator);
        }
       
        $file = $request->file('file')->GetRealPath();
        $csvData = file_get_contents($file);
        $rows = array_map( "str_getcsv", explode("\n", $csvData));
        $header = array_shift($rows);


        foreach ($rows as $row) {
            $row = array_combine($header, $row);

            Client::create([
                'lastname' => $row['lastname'],
                'email' => $row['email'],
                'phonenumber1' => $row['phonenumber1'],
                'phonenumber2' => $row['phonenumber2'],
                'comment' => $row['comment']

            ]);
  
            }  
            return redirect()->route('clients')->with(['message'=> 'Įkelti nauji klientai!']);
    }

}
