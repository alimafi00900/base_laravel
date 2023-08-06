<?php namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralModel extends Model
{
    use HasFactory;

    protected $guarded = [];

    
    public function __construct($table = "")
    {
        if (isValidValue($table)) {
            // dd('sasad');
            $this->table = $table;
        } else {
            $this->table = getCurrentStructure('table');
            if ($table == "admin_users") {
                $this->table = "admin_users_1";
            }
        }
    }



    public function scopeUser( $query , $user_id){
        return $this->where('user_id' , $user_id);
    }


    public function scopeNotInPayQueue($query){
        return $query->where('paymentStatus' , "!=" , "inPaymentQueue" );
    }


}
