<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;
use Datatables;
use App\DataTables\ContactsDataTable;
use App\Exports\ContactsExport;
use Excel;

class ContactsController extends Controller
{
    public function index(ContactsDataTable $dataTable)
    {
        return $dataTable->render('contacts.showpersons');
    }

    public function create(){
        return view('contacts.createform');
    }

    public function store(Request $request){
        // dd($request);
        $request->validate([
            'name' => 'required',
            'number' => ['required' , 'digits:10']
        ]);

        Contacts::create($request->all());
        return redirect(route('showcontacts'));
    }

    public function exportIntoCSV(){
        return Excel::download(new ContactsExport , 'personlist.csv');
    }

    

}
