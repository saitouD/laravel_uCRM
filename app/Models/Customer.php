<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchase;

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

    public function purchases()
    {
        return  $this->hasMany(Purchase::class);//一人の顧客につき複数の購買履歴をもつ
    }
}

//検索機能用のローカルスコープ
