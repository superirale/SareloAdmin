<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Domain\Helpers;

use App\Models\Slot;


class DeliveryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->time_zone = new \DateTimeZone('Africa/Lagos');
    }

    public function index(Request $request)
    {
        $slots = [];
        
        $days = 6;
        
        for($i=0; $i<=$days; $i++){

            if($i === 0){
                $index = date('Y-m-d', strtotime(Carbon::now($this->time_zone)->toDateTimeString()));
                $slots[$index] = Slot::getAvailableSlot(Carbon::now($this->time_zone));
            }
            else{
                $index = date('Y-m-d', strtotime((new Carbon('Africa/Lagos'))->addDay($i)->toDateTimeString()));
                $slots[$index] = Slot::getAvailableSlot((new Carbon('Africa/Lagos'))->addDay($i));                
            }
        }
        
        if($request->isMethod('post')){
            //check if slot is still available
        
            $this->validate($request, [
                'delivery_date' => 'required',
                'slot_id' => 'required',
            ]);
            //save slot to session and redirect
            $request->session()->put('order_details.slot_id', $request->slot_id);
            $request->session()->put('order_details.delivery_date', $request->delivery_date);

            return redirect('/checkout/confirm-order');
        }

        $basket = Helpers::getCartSummary();
      
        return view('checkout.select-slot', compact('slots', 'basket'));
    }
}