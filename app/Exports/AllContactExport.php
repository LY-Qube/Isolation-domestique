<?php

namespace App\Exports;

use App\Models\Contact;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class AllContactExport implements FromView, ShouldAutoSize
{

    public function view(): View
    {
        return view('excel.contact', [
            'contacts' => Contact::all()
        ]);
    }

}
