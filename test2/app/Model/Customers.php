<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = [
    	'customer_id',
    	'customer_user_id',
    	'customer_first_name',
    	'customer_last_name',
        'customer_phone_number',
        'customer_email',
    	'customer_transfer',
    	'customer_paypal',
        'customer_credit_card',
    	'customer_credit_name',
    	'customer_credit_ccv',
        'customer_fl_id'
    ];
    protected $table = 'customers';
    protected $timestamp = false;
    protected $primarykey = 'customer_id';

    public function insertData($cs_user,$cs_first,$cs_last,$cs_phone,$cs_email,$cs_transfer,$cs_paypal,$cs_card,$cs_cre_name,$cs_ccv,$cs_fl_id)
    {
         Customers::insert([
            'customer_user_id' => $cs_user,
            'customer_first_name'  => $cs_first,
            'customer_last_name' => $cs_last,
            'customer_phone_number' => $cs_phone,
            'customer_email' => $cs_email,
            'customer_transfer' => $cs_transfer,
            'customer_paypal' => $cs_paypal,
            'customer_credit_card' => $cs_card,
            'customer_credit_name' => $cs_cre_name,
            'customer_credit_ccv' => $cs_ccv,
            'customer_fl_id' => $cs_fl_id
        ]);
    }
    public function get_id_customer($cs_user,$cs_first,$cs_last,$cs_phone,$cs_email,$cs_transfer,$cs_paypal,$cs_card,$cs_cre_name,$cs_ccv,$cs_fl_id)
    {
        $value = Customers::where([
            ['customer_user_id',$cs_user],
            ['customer_first_name'  , $cs_first],
            ['customer_last_name' , $cs_last],
            ['customer_phone_number' , $cs_phone],
            ['customer_email' , $cs_email],
            ['customer_transfer' , $cs_transfer],
            ['customer_paypal' , $cs_paypal],
            ['customer_credit_card' , $cs_card],
            ['customer_credit_name' , $cs_cre_name],
            ['customer_credit_ccv' , $cs_ccv],
            ['customer_fl_id' , $cs_fl_id]
        ])->get('customer_id');
        return $value;
    }
     public function getDataCustomer($id)
    {
        $value = Customers::where([
            'customer_id' => $id
        ])->get();
        return $value;
    }

}
