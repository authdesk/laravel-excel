<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        return new Product([
            'product_name' => $row['product_name'],
            'product_brand' => $row['product_brand'],
            'product_price' => $row['product_price'],
            'product_processor' => $row['product_processor'],
            'product_ram' => $row['product_ram'],
            'product_storage' => $row['product_storage'],
            'product_screen' => $row['product_screen']

        ]);
    }
}
