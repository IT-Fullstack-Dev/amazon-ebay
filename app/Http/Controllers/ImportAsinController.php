<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Qoo10\Api\Items\Goods;
use Qoo10\Api\Qoo10ApiProcessor;
use Qoo10\Api\Qoo10CertGenerator;
use Illuminate\Support\Facades\Log;
class ImportAsinController extends Controller
{
    //
    public function index(){
        // return view('front.ImportAsin');
        $key = 'BhiQeRsAhG2U11EPJ9tjQuxtmocnpd_g_2_iDPlGfd8xgv4_g_3_';
        $userId = 'mattya3585';
        $password = 'momotto110A';

        // $certGenerator = new Qoo10CertGenerator();
        // $cert = $certGenerator->certGenerate($key, $userId, $password);


        // $processor = new Qoo10ApiProcessor();
        // $processor->setCertificate($cert);

     
        // $url = 'http://api.qoo10.jp/GMKT.INC.Front.OpenApiService/APIList/CommonInfoAPIService.api/GetCatagoryListAll';
        // $data = array('key' => 'S5bnbfynQvOKjKOOi6rqr2kyaKwK_g_1__g_2_tyLHiSIJ7jifeGJ_g_2_tYHO_g_2_9lvlRVaBoXZdsquVBC3VERFI1swTZz8Jx_g_2_LTtMbTKziDCTpt62xvJx39u3jjQuqwyYOeGwPXWePCD', 'lang_cd' => 'en');
        
        // $ch = curl_init();

        // curl_setopt($ch, CURLOPT_URL,$url);
        // curl_setopt($ch, CURLOPT_POST, 1);
        // curl_setopt($ch, CURLOPT_POSTFIELDS,"key=S5bnbfynQvOKjKOOi6rqr2kyaKwK_g_1__g_2_tyLHiSIJ7jifeGJ_g_2_tYHO_g_2_9lvlRVaBoXZdsquVBC3VERFI1swTZz8Jx_g_2_LTtMbTKziDCTpt62xvJx39u3jjQuqwyYOeGwPXWePCD&lang_cd=en");
        // curl_setopt(
        //     $ch, 
        //     CURLOPT_HTTPHEADER, 
        //     array(
        //         'Content-Type: application/x-www-form-urlencoded', // for define content type that is json
        //     ));
        // curl_setopt($ch, CURLOPT_TIMEOUT, 3600000);
        // // In real life you should use something like:
        // // curl_setopt($ch, CURLOPT_POSTFIELDS, 
        // //          http_build_query(array('postvar1' => 'value1')));

        // // Receive server response ...
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // $server_output = curl_exec($ch);

        // curl_close ($ch);

        // // Further processing ...
        // if ($server_output == "OK") { } 
        // else { }
        $xml = simplexml_load_file("D:/category.xml");
        $id=1;
        $str_category="";
        foreach($xml->ResultObject->CommonCategoryInfo as $category){
            $str_category .=sprintf(
                "%s : %s > %s > %s : %s\n",
                $id,
                $category->CATE_L_NM,
                $category->CATE_M_NM,
                $category->CATE_S_NM,
                $category->CATE_S_CD
            );
            echo $id.",";
            echo $category->CATE_L_NM.">";
            echo $category->CATE_M_NM.">";
            echo $category->CATE_S_NM.":";
            echo $category->CATE_S_CD."<br>";
            $id++;
        }
        file_put_contents('D:/Qoo10_category.txt',$str_category);
        
       
    }

    public function setItem(){

        $key = 'BhiQeRsAhG2U11EPJ9tjQuxtmocnpd_g_2_iDPlGfd8xgv4_g_3_';
        $userId = 'mattya3585';
        $password = 'momotto110A';
        $certGenerator = new Qoo10CertGenerator();
        $cert = $certGenerator->certGenerate($key, $userId, $password);
    
        $url = 'http://api.qoo10.jp/GMKT.INC.Front.QAPIService/ebayjapan.qapi/ItemsBasic.SetNewGoods';
        $data = [

                'SecondSubCat' => '320002171',
                'BrandNo' => '80559',
                'ItemTitle' => 'canon camera lens F 1.5 mm',
                'ProductionPlaceType' => '3',
                'ProductionPlace' => 'no known',
                'StandardImage' => 'https://m.media-amazon.com/images/I/71Dro2gZS9L._AC_SY355_.jpg',
                'ItemDescription' => '<html><body>this is canon camera lens</body></html>',
                'OriginState' => '10',
                'ItemPrice' => 335,
                'ItemQty' => 2,
                'ExpireDate' => 'Null',
                'ShippingNo' => 562946,
                'AvailableDateType' => '0',
                'AvailableDateValue' => '3'
                

        ];

         $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
        curl_setopt(
            $ch, 
            CURLOPT_HTTPHEADER, 
            array(
                'Content-Type: application/x-www-form-urlencoded', // for define content type that is json
                'GiosisCertificationKey: S5bnbfynQvOKjKOOi6rqr2kyaKwK_g_1__g_2_tyLHiSIJ7jifeGJ_g_2_tYHO_g_2_9lvlRVaBoXZdsquVBC3VERFI1swTZz8Jx_g_2_LTtMbTKziDCTpt62xvJx39u3jjQuqwyYOeGwPXWePCD',
                'QAPIVersion: 1.1'
            ));
        curl_setopt($ch, CURLOPT_TIMEOUT, 36000);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        curl_close ($ch);
 

        return response()->json([

            'data' => $server_output
        ]);

    }

    public function getOrder(){
        dd("dd");
        return;
    }

}
