<?php 

//var_dump(sprintf('%.10f', 123));
// $a = array(
// 	array(
// 		'www',
// 		'eee',
// 		'ttt'
// 	),
// 	'bb',
// 	'cc',
// 	'dd',
// 	'ee',
// 	'ff',
// 	'gg'
// );
// for ($i=0; $i<count($a[0]); $i++) {
// 	echo $a[0][$i];
// }
// foreach ($a as $k=>$value) {
// 	if ($k == 5) echo $value;
// }


// ,{"quantity":"1","id":"809","provider_id":"666","type":"6","shop_id":"1","goods_id":"809"}







// {
//     "payUrl": "alipay_sdk=alipay-sdk-php-20161101&app_id=2017010504868795&biz_content=%7B%22out_trade_no%22%3A%222018101572240%22%2C%22product_code%22%3A%22QUICK_MSECURITY_PAY%22%2C%22subject%22%3A%22%5Cu767e%5Cu8def%5Cu6c47%5Cu5145%5Cu503c%22%2C%22total_amount%22%3A%22100.00%22%2C%22body%22%3A%22Iphone6+16G%22%2C%22timeout_express%22%3A%2230m%22%7D&charset=UTF-8&format=json&method=alipay.trade.app.pay&notify_url=http%3A%2F%2F139.196.73.211%2Fpayment2%2Fnotify.php&sign_type=RSA2&timestamp=2018-10-15+16%3A40%3A20&version=1.0&sign=",
//     "status": "success",
//     "message": "",
//     "orderid": "2018101572240"
// }







        // $sql = "select shop_logo,cmobile,company_area,id,lat,lng from lh_shop where shop_type = 0 and is_available = 1 and maintain_switch = 1";
        // $shopLists = $shopModel->querySql($sql);
        // if($shopLists){
        //     foreach($shopLists as $k => $v){
        //         //店铺图片
        //         $tmp1 = $imageModel->getRowById($v['shop_logo']);
        //         $shopLists[$k]['shop_logo'] = $tmp1['url'];

        //         //电话号码
        //         $shopLists[$k]['phone'] = $v['cmobile'];

        //         //保养券id 和车辆id
        //         $shopLists[$k]['car_id'] = $car_id;
        //         $shopLists[$k]['vouche_id'] = $ticket_id;

        //         //店铺地址
        //         $tmp2 = explode(':', $v['company_area']);
        //         $company_area = explode('/', $tmp2[0]);
        //         $shopLists[$k]['company_area'] = $company_area[0] . $company_area[1] . $company_area[2];

        //         //获取店铺评价
        //         $praise = $shopScoreModel->getPraise($v['id']);
        //         $total = $shopScoreModel->getAllComment($v['id']);//
        //         $shopLists[$k]['praise'] = $praise;
        //         if ($total != '0') {
        //             $shopLists[$k]['praiseRate'] = ($praise / $total) * 100;
        //         } else {
        //             $shopLists[$k]['praiseRate'] = 0;
        //         }

        //         //店铺商品销售,获取店铺商品名和商品图片
        //         $sql1 = "select goods_id from lh_oil_screen where del_flag = 0 and shop_id in (1,'{$v['id']}') order by sort asc";
        //         $promgoods = $oilMod->querySql($sql1);
        //         $shopLists[$k]['salesProVolume'] = 0;
        //         for ($i=0;$i<count($promgoods);$i++){
        //             $goods = $goodsModel->getInfoById($promgoods[$i]['goods_id']);
        //             $tmp3 = $imageModel->getRowById($goods['image_id']);
        //             if($i<=1){
        //                 $shopLists[$k]['goods'][]= array('url'=>$tmp3['url'],'name'=>$goods['title']);
        //             }
        //             if($i>1){
        //                 $shopLists[$k]['commodity'][]= array('url'=>$tmp3['url'],'name'=>$goods['title']);
        //                 if ($goods['salesVolume'] > 0 ) {
        //                     $shopLists[$k]['salesProVolume'] += $goods['salesVolume'];
        //                 } else {
        //                     $shopLists[$k]['salesProVolume'] += 0;
        //                 }
        //             }
        //         }
//                foreach($promgoods as $ke => $val){
//                    $goods = $goodsModel->getInfoById($val['goods_id']);
//                    $tmp3 = $imageModel->getRowById($goods['image_id']);
//                    if(!$goods['image_id']='' && !$goods['title']=''){
//                        $shopLists[$k]['goods'][$ke]= array('url'=>$tmp3['url'],'name'=>$goods['title']);
//                    }else{
//                        $shopLists[$k]['goods'] = '';
//                    }
//                    if ($goods['salesVolume'] > 0) {
//                        $shopLists[$k]['salesProVolume'] += $goods['salesVolume'];
//                    } else {
//                        $shopLists[$k]['salesProVolume'] += 0;
//                    }
//                }

                //获取用户和店铺的距离
        //          $distance = $this->delDistance($lat, $v['lat'], $lng, $v['lng']);
        //         $shopLists[$k]['distance'] = number_format(($distance/1000),2);
        //         if ($city != $company_area[1]) {
        //             unset($shopLists[$k]);
        //         }
        //     }

        //     //用户根据距离和评价筛选
        //     if ($type == 0) {//距离筛选
        //         $info = $this->mySort($shopLists, 'distance', SORT_ASC);
        //     } elseif ($type == 1) {//评价筛选
        //         $info = $this->mySort($shopLists, 'praiseRate', SORT_DESC);
        //     }
        //     //分页
        //     $maxPage = ceil(count($shopLists) / 10);
        //     $page = $page > $maxPage ? $maxPage : $page;
        //     $page = $page < 0 ? 1 : $page;
        //     $limitStart = ($page - 1) * 10;
        //     $info = array_slice($info, $limitStart, 10);//要求只显示10条
        //     $this->setData($info, $status = 'success', $message = '加载成功');
        // } else {
        //     $this->setData($info, $status = 'error', $message = '附近暂无商家');
        // }








        //         $sql = "SELECT 
        //         a.id,a.cmobile phone,a.company_area,a.lat,a.lng,b.url,count(c.id) praise 
        //         FROM 
        //         lh_shop a 
        //         LEFT JOIN 
        //         lh_image b 
        //         ON 
        //         a.shop_logo = b.id 
        //         LEFT JOIN 
        //         lh_shop_score c 
        //         ON 
        //         a.id = c.shop_id 
        //         WHERE 
        //         a.shop_type = 0 AND a.is_available = 1 AND a.maintain_switch = 1 AND c.service_attitude_score >= 4
        // ";





                // $sql = "SELECT
                // a.id,a.cmobile phone,a.company_area,a.lat,a.lng,b.url,c.goods_id
                // FROM
                // lh_shop a
                // LEFT JOIN
                // lh_image b
                // ON
                // a.shop_logo = b.id
                // LEFT JOIN
                // lh_oil_screen c
                // ON
                // c.shop_id in (1,a.id)
                // WHERE
                // a.shop_type = 0 AND a.is_available = 1 AND a.maintain_switch = 1 AND
                // c.del_flag = 0 order by c.sort asc";


                //                 $sql1 = "select goods_id from lh_oil_screen where del_flag = 0 and shop_id in (1,'{$v['id']}') order by sort asc";









// https://restapi.amap.com/v3/place/around?key=af199b978f9ecda02901623240e2fab7&location= 116.473168,39.993015&city=100000&radius=10000&types=100000




//随机红包
// $data = array(
//             array(
//                 'p' => 4,
//                 'm1' => 9,
//                 'm2' => 10,
//             ),
//             array(
//                 'p' => 73,
//                 'm1' => 0,
//                 'm2' => 4,
//             ),
//             array(
//                 'p' => 23,
//                 'm1' => 5,
//                 'm2' => 8,
//             ),
//         );
//         $sum = 0;
//         foreach ($data as $vo) {
//             $sum += $vo['p'];
//         }
//         $rand = mt_rand(1, $sum);
//         $ps = 0;
//         foreach($data as $k=>$v) {
//             $ps += $v['p'];
//             if ($rand > $ps-$v['p'] && $rand <= $ps) {
//                 echo mt_rand($data[$k]['m1'], $data[$k]['m2']);
//             }
//         }



// $arr = array("aa"=>"a", "bb"=>"b", "cc"=>"c");
// $arr2 = array("d", "e", "f");

// foreach($arr as &$v)
// {
//     $v['aa'] .= 1;

// }

// echo "<pre>";
// var_dump($arr);
// var_dump($arr2);

// foreach($arr2 as $v)
// {
//     $v .= 2;
// }
// var_dump($arr);
// var_dump($arr2);




