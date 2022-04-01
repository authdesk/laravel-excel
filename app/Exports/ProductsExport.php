<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function collection()
    {
        return Product::select(

            'product_name',
            'product_brand',
            'product_price',
            'product_processor',
            'product_ram',
            'product_storage',
            'product_screen'

            
            )->limit(3)->latest()->get();
    }

    public function headings(): array
    {
        return [
            'product_name',
            'product_brand',
            'product_price',
            'product_processor',
            'product_ram',
            'product_storage',
            'product_screen'
        ];
    }
}
