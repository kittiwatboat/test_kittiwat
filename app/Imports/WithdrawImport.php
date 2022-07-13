<?php

namespace App\Imports;

use App\test;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class WithdrawImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new test([
            "id"=>$row[0],
            "request_unique_no"=>$row[1],
            "transaction_id"=>$row[2],
            "transaction_status"=>$row[3],
            "description"=>$row[4],
            "barcode"=>$row[5],
            "balance"=>$row[6],
            "create_date"=>date('Y-m-d H:i:s',strtotime($row[7])),
        ]);
    }
    public function startRow(): int
    {
        return 2;
    }
}
