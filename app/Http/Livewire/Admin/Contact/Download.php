<?php

namespace App\Http\Livewire\Admin\Contact;

use App\Exports\AllContactExport;
use App\Exports\ContactExport;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class Download extends Component
{
    public $count;

    public $countAll;

    public function render()
    {
        $this->count();
        $this->countAll();
        return view('livewire.admin.contact.download')
            ->layout('layouts.logged')->slot('slot');
    }

    public function allContact()
    {
        return Excel::download(new AllContactExport(), 'all_contacts.xlsx');
    }

    public function contact()
    {
        return Excel::download(new ContactExport(), 'contacts.xlsx');
    }

    public function count()
    {
        $this->count = DB::table('contacts')->where('download_at',null)->count();
    }

    public function countAll()
    {
        $this->countAll = DB::table('contacts')->count();
    }

    public function setDownload()
    {
        DB::table('contacts')
            ->where('download_at', null)
            ->update(['download_at' => now()]);
        return redirect()->route('contact.download');
    }
}
