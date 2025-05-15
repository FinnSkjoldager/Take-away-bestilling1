<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use App\Models\Customer;
use App\Models\Order;
use App\Http\Controllers\OrderController;
class Test1Command extends Command
{
    protected $signature = 'dbcommand';
    protected $description = 'Test SQL';
    public function handle()
    {
        $this->info('The command was successful!');
        //$this->testCustomer();
        //$this->testOrder()
        // $this->testCustomer();
        $this->testOrderSave();
        //return Command::FAILURE;
        return Command::SUCCESS;
    }
    function mapJsonOrder($request, Order $order){
        $order->OrderNo = $request->OrderNo;
        $order->CustomerID = $request->CustomerID;
        $order->PMethod = $request->PMethod;
        $order->GTotal = $request->GTotal;
        $order->DeletedOrderItemIDs = $request->DeletedOrderItemIDs;
        $order->DeletedOrderItemIDs = 0;
        $order->Paid = $request->Paid;
        return $order;
    }
    function testOrderSave(){
        //INSERT INTO CUSTOMER (Name) VALUES ("FINN1");
        /*
        $res = Customer::create([
            'Name' => 'Finn mand44'
        ]);
        dd($res);
        */
        $res = new Customer();
        $res->Name = 'Finn mand';
        $res->save();
        //dd($res);
        return 0;
        /*
        $customer = Customer::find(1);
        File::put(base_path('..\testCustomer.json'), json_encode($customer));
        */
        $contents = File::get(base_path('..\testCustomer.json'));
        $json = json_decode(json: $contents, associative: true);
        //$json = json_decode($contents);
        $this->info(gettype($json));
        $this->info(count($json));
        $json = Customer::create($json);
        dd($json);
        //dd($json->OrderId);
        //ARRAY
        $json = [
            "OrderNo" => "Ordre nummer"
            /*
            'CustomerID' => $json['CustomerID'],
            'PMethod' => $json['PMethod'],
            'GTotal' => $json['GTotal'],
            'DeletedOrderItemIDs' => $json['DeletedOrderItemIDs'],
            'Paid' => $json['Paid']
            */
        ];
        $this->info(gettype($json));
        $this->info(count($json));
        $this->info($json['OrderNo']);
        $order = Order::Create($json);
        dd($order);
        return 0;
        //dd($order->toJson(JSON_PRETTY_PRINT));
        $res = $order->save();
        $this->info($res);
        //$this->info(json_encode($cList)); 
    }
    function testOrder(){
        $c = Order::find(1);
       // $this->info(count($cList)); 
       $c->customer;
       $c->OrderItems;
       $this->info($c); 
    }
    function testCustomer(){
        $cList = Customer::all();
        $this->info(count($cList)); 
        $this->info(json_encode($cList)); 
    }
}
