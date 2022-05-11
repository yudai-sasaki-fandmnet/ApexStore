<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Good;


class CartsController extends Controller
{
    public function contentsOfCart(){
        $user = \Auth::user();
        $goods = $user->feed_carts();
        $count_goods = $user->countCarts();
        // dd($count_goods);
        return view('carts.contents')->with('goods',$goods)->with('count_goods',$count_goods);
    }
    
    public function settle(){
        $user = \Auth::user();
        $goods = $user->feed_carts();
        // ->orderBy('created_at','desc');
        // dd($goods);
        return view('carts.settle')->with('goods',$goods);
    }
    
    public function settled(){
        $user = \Auth::user();
        $goodIds = $user->feedGoodIds();
        $user->deleteCartsGoods($goodIds);
        // ->orderBy('created_at','desc');
        // dd($goods);
        return view('carts.settled');
    }
    
        public function deleteCartsGood(Request $request){
        $user = \Auth::user();
        $user->deleteCartsGood($request->good_id);
        $goods = $user->feed_carts();
        return view('carts.contents')->with('goods',$goods);
    }


}
