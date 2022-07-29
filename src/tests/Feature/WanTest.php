<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use Tests\TestCase;
use App\Http\Controllers\WanController;

class WanTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

     /**
     * WanController::dog_service
     * 
     * @see WanController::dog_service
     * @return array();
     */
    public function testDogService__正常系_マッサージ_犬2匹_時間2時間()
    {
       $value = WanController::dog_service(0,2,2);
       $this->assertSame($value,['value' => 8000, 'service_name' => 'トリミング', 'dog_type_name' => '小型犬']);
    }

     /**
     * WanController::dog_service
     * 
     * @see WanController::dog_service
     * @return array();
     */
    public function testDogService__正常系_しつけ_犬3匹_時間1時間()
    {
       $value = WanController::dog_service(3,3,1);
       $this->assertSame($value,['value' => 15000, 'service_name' => 'しつけ教室', 'dog_type_name' => '小型犬']);
    }

    /**
     * WanController::dog_service_calc
     * 
     * @see WanController::dog_service_calc
     * @return array();
     */
    public function testDogServiceCalc__正常系_5000円_犬3匹_時間1時間()
    {
       $value = WanController::dog_service_calc(5000, 3, 1);
       $this->assertSame($value, 15000);
    }
    

   
    



}
