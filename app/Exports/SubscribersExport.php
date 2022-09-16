<?php

namespace App\Exports;

use App\Models\Subscribers;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SubscribersExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    // public function collection()
    // {
    //     return Subscribers::all();
    // }
    public function view(): View
    {
        return view('subscribers', [
            'subscribers' => Subscribers::paginate(100000000)
        ]);
    }
}
