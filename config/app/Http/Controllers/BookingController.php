<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seats;
use App\Models\Booking;

class BookingController extends Controller
{
    public function getBooking()
    {
        try{
            $seats = Seats::all();
            $avail = Seats::where('status',0)->get();
            $booked[]=0;
            return view('booking',compact('seats','avail'));
        }catch(\Exception $e)
        {
            return false;
        }
    }

    public function setBooking(Request $request)
    {
        try{
            \DB::beginTransaction();

            //validation
            $request->validate([
                'user_id' => 'required|numeric',
                'seat_no' => 'required',
                'no_of_seats' => 'required|numeric|max:5',
            ]);

            $prefer_seat = $request->seat_no;
            $seat_ini = substr($prefer_seat, 0, 1);
            $seat_no = substr($prefer_seat, 1, 3);
            $remaining=0;
            
            //seat booking
            for($i=0;$i<$request->no_of_seats;$i++)
            {   
                $seats = Seats::where('seat_no',$seat_ini.$seat_no)->where('status',0)->first();
                if($seats!=null)
                {
                    $seats->status = 1;
                    $seats->save();

                    $booking = new Booking();
                    $booking->user_id = $request->user_id;
                    $booking->seat_no = strtoupper($seat_ini.$seat_no);
                    $booking->prefrence = $request->seat_no==$seat_ini.$seat_no?1:0;
                    $booking->status = 'booked';
                    $booking->save();

                    $booked[] = array($seats->seat_no);
                    $remaining = $request->no_of_seats-count($booked);
                }else{

                    //if there is no seat in right side then it will search left side
                    $prefer_seat = $request->seat_no;
                    $seat_ini = substr($prefer_seat, 0, 1);
                    $seat_n = substr($prefer_seat, 1, 3)-1;
                    if($remaining>0)
                    {
                        for($i=0;$i<$remaining;$i++)
                        {
                            $seats = Seats::where('seat_no',$seat_ini.$seat_n)->where('status',0)->first();
                            if($seats!=null)
                            {
                                $seats->status = 1;
                                $seats->save();
    
                                $booking = new Booking();
                                $booking->user_id = $request->user_id;
                                $booking->seat_no = strtoupper($seat_ini.$seat_n);
                                $booking->prefrence = 0;
                                $booking->status = 'booked';
                                $booking->save();
                                $booked[] = array($seats->seat_no);
                            }else{  

                                //if not found from right and left side then below code will book seat from available seats randomly
                                if($request->no_of_seats-$remaining>0){
                                    for($i=0;$i<$request->no_of_seats-$remaining;$i++)
                                    {
                                        $seats = Seats::where('status',0)->first();
                                        if($seats!=null){
                                            $seats->status = 1;
                                            $seats->save();
            
                                            $booking = new Booking();
                                            $booking->user_id = $request->user_id;
                                            $booking->seat_no = strtoupper($seats->seat_no);
                                            $booking->prefrence = 0;
                                            $booking->status = 'booked';
                                            $booking->save();
                                        }else{
                                            \DB::rollback();
                                            return redirect()->back()->with('error', 'Seats already booked!');
                                        }
                                        
                                    }
    
                                    \DB::commit();
                                    return redirect()->back()->with('message', 'Your Seats booked successfully!');
                                }
                                
                                
                            }
                            $seat_n = $seat_n-1;
                        }
                    }else{
                        \DB::rollback();
                        return redirect()->back()->with('error', 'Seats already booked!');
                    }
                    
                    \DB::commit();
                    return redirect()->back()->with('message', 'Your Seats booked successfully!');
                }

                $seat_no = $seat_no+1;
                
            }
            
            \DB::commit();
            return redirect()->back()->with('message', 'Your Seats booked successfully!');
            
        }catch(\Exception $e)
        {
            \DB::rollback();
            return $e;
        }
    }
}
