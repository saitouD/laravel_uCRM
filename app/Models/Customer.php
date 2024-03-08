<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','kana','tel','email',
        'postcode','address', 'birthday','gender', 'memo'];


    public function scopeSearchCustomers($query, $input = null) //関数名の前にscopeそして第一引数に$queryを入れるのは確定
    {
        if(!empty($input)){
            if(Customer::where('kana', 'like', $input . '%')
            ->orWhere('tel', 'like', $input . '%')->exists())
            {
                return $query->where('kana', 'like', $input . '%')
                ->orWhere('tel', 'like', $input . '%');
            }
        }
    }
}

//検索機能用のローカルスコープ
