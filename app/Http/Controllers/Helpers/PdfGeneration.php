<?php
namespace App\Http\Controllers\Helpers;

use App\Models\CompanyInfo;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use PDF;


class PdfGeneration
{
    public $orderId;

    public function __construct($orderId)
    {
        $this->orderId = $orderId;
    }
    public function generateInvoicePDF()
    {
        $company = CompanyInfo::first();
        $orderInfo = Order::where('id', $this->orderId)->first();
        $orderProducts = OrderProduct::where('order_id', $this->orderId)->get();

        $data = [
            'orderInfo' => $orderInfo,
            'orderProducts' => $orderProducts,
            'company' => $company,
            'users' => $users
        ];

        return view('frontend.orders.pre-invoice')->with($data);
        $pdf = PDF::loadView('/frontend/orders/pre-invoice', $data)->setOptions(['defaultFont' => 'Roboto']);
        $pdf->render();
        $pdf->stream();
        $pdf->save('assets/pdf/pre-invoice/' . $this->orderId . '.pdf');
        //return $this->orderId;
        return $pdf->download('demo.pdf');
    }


}
