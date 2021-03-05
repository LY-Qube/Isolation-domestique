<?php

namespace App\Exports;

use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Illuminate\Contracts\View\View;

class ContactExport implements FromView, ShouldAutoSize
{

    public function view(): View
    {
        return view('excel.contact', [
            'contacts' => $this->contacts()
        ]);
    }

    private function contacts()
    {
        return Contact::whereNull('download_at')->get();
    }
}
