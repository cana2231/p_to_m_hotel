<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;

class WanController extends Controller
{

    public const DogsServiceRates = [
        0 => [
            '1h_price' => 2000,
            'dog_type_name' => '小型犬',
            'service_name' => 'トリミング'
        ],
        1 => [
            '1h_price' => 6000,
            'dog_type_name' => '大型犬',
            'service_name' => 'トリミング'
        ],
        2 => [
            '1h_price' => 10000,
            'dog_type_name' => '犬種不問',
            'service_name' => 'パピークラス'
        ],
        3 => [
            '1h_price' => 5000,
            'dog_type_name' => '小型犬',
            'service_name' => 'しつけ教室'
        ]
    ];

    public const DogsRoomTypeRates = [
        0 => [
            '1day_price'    => 2000,
            'dog_type_name' => '小型犬',
            'room_name'     => 'スタンダードルーム'

        ],
        1 => [
            '1day_price'    => 6000,
            'dog_type_name' => '大型犬',
            'room_name'     => 'デラックスルーム'
        ],
        2 => [
            '1day_price'    => 10000,
            'dog_type_name' => '猫',
            'room_name'     => '猫専用スタンダードルーム'
        ],
        3 => [
            '1day_price'    => 10000,
            'dog_type_name' => '猫',
            'room_name'     => '猫専用デラックスルーム'
        ],
    
        ];


     /**
     * 犬専用サービスの金額を内容に応じて返却
     * @param int $service_id    サービスID
     * @param int $count         犬の数
     * @param int $time　　　　　　　　　   　　　　　時間(h)
     * 
     * @return array    金額,サービス名
     */
    public static function dog_service(int $service_id, int $count, int $time) {
        $service_info = WanController::DogsServiceRates[$service_id];
        $value = self::dog_service_calc($service_info['1h_price'], $count, $time);
        return ['value' => $value , 'service_name' => $service_info['service_name'], 'dog_type_name' => $service_info['dog_type_name']];
    }

     /**
     * 犬専用サービスの金額を計算して返却
     * @param int $price_1h      1時間あたりの料金
     * @param int $count         犬の数
     * @param int $time　　　　　　　　　   　　　　　時間(h)
     * 
     * @return array    金額
     */
    public static function dog_service_calc(int $price_1h, int $count, int $time) {
        return ($price_1h * $count * $time);
    }

}
