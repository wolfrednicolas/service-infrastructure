<?php
/**
 *
 * (c) Wolfred Montilla <wolfrednicolas@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace wndm1987\serviceinfrastructure;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

/**
 * Code used for the registration and control of sub-accounts within any third party project.
 *
 * @author Wolfred Montilla <wolfrednicolas@gmail.com>
 */

class Infrastructure
{

    /**
     * var $error_M1
     * @var string
     */

    protected  $error_M1;


    /**
     * Infrastructure constructor.
     */
    public function __construct(){
		$this->error_M1 = "Run migrations first";
	}

    /**
     * used to store the token or credentials of a user within the system
     * @param $account_id
     * @param $service
     * @param $data
     * @param string $field
     * @return string
     */
    public function setService($account_id, $service, $data, $field = "authentication"){

        if (!Schema::hasTable('infrastructure_config')){
            return $this->error_M1;
        }
        $data_encode = json_encode($data);
        $service = DB::table('infrastructure_config')->insert(["service"=>$service,"data"=>$data_encode,"account_id" =>$account_id,"field"=>$field]);

       return $service;

	}

    /**
     * Used to check the user's token or credentials in a third-party application
     * @param $account_id
     * @param $service
     * @param string $field
     * @return bool|mixed|string
     */
    public function getService($account_id, $service, $field = "authentication"){
		if (!Schema::hasTable('infrastructure_config')){
            return $this->error_M1;
        }
          $result = DB::table('infrastructure_config')
                    ->where('account_id', $account_id)
                    ->where('service', $service)
                    ->where('field', $field)
                    ->first();                    
        if (!$result){
            return false;
        }
        return json_decode($result->data, true);
	}

}