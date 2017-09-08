<?php

/**
 * Created by PhpStorm.
 * User: hyy
 * Date: 2017/8/25
 * Time: 16:46
 */
class Tree
{
    public function getTree(array $array)
    {
        $tree = [];
        $data = $array;
        foreach ($array as $key=>$value) {
            if(!empty($value['pid'])) {
                foreach ($data as $k=>$val) {
                    if($val['pid'] == $val['id']) {
                        $data[$k]['child'] = $value;
                    }
                }
            }
        }

        return $data;
    }
}

$array = [
    0=>[
        'id'    => '1',
        'pid'   => '',
        'child' => [
            'id'   => '2',
            'pid'  => '1',
            'child'=> [
                'id'  => '3',
                'pid' => '4',
            ],
        ],
    ],
    1=>[
        'id'=>'2',
        'pid'=>'1',
    ],
    2=>[
        'id'=>'3',
        'pid'=>'4',
    ],
];
$obj = new Tree();
$obj->getTree($array);