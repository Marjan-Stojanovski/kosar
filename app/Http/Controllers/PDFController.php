<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Category;
use App\Models\CompanyInfo;
use App\Models\Employee;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Support\Carbon;
use PDF;

class PDFController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function preview()
    {
        $company = CompanyInfo::first();
        $lastOrder = Order::latest('created_at')
            ->first();
        $lastOrderId = $lastOrder->id;
        $orderDetails = OrderProduct::where('order_id', $lastOrderId)->get();
        $orderProductsCount = $orderDetails->count();
        $tempDate = $lastOrder->created_at;
        $dateYear = Carbon::now()->format('Y');
        $dateOrder = Carbon::createFromFormat('Y-m-d H:i:s', $tempDate)->format('M-d-Y');
        $data = [
            'company' => $company,
            'lastOrder' => $lastOrder,
            'orderDetails' => $orderDetails,
            'dateYear' => $dateYear,
            'dateOrder' => $dateOrder,
            'orderProductsCount' => $orderProductsCount
        ];
        return view('invoice')->with($data);
    }


    public function previewInvoice()
    {
        $company = CompanyInfo::first();
        $lastOrder = Order::latest('created_at')
            ->first();
        $lastOrderId = $lastOrder->id;
        $orderDetails = OrderProduct::where('order_id', $lastOrderId)->get();
        $orderProductsCount = $orderDetails->count();
        $tempDate = $lastOrder->created_at;
        $dateYear = Carbon::now()->format('Y');
        $dateOrder = Carbon::createFromFormat('Y-m-d H:i:s', $tempDate)->format('M-d-Y');
        $data = [
            'company' => $company,
            'lastOrder' => $lastOrder,
            'orderDetails' => $orderDetails,
            'dateYear' => $dateYear,
            'dateOrder' => $dateOrder,
            'orderProductsCount' => $orderProductsCount
        ];
        return view('invoice')->with($data);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function generatePDF()
    {
        $products = Product::all();

        $data = [
            'products' => $products,
        ];
        $pdf = PDF::loadView('/pdf/invoice/invoice', $data);
        $pdf->save('assets/pdf/orders/1.pdf');
        return $pdf->download('demo.pdf');
    }

    public function generateInvoicePDF()
    {
        $products = Product::all();

        $data = [
            'products' => $products,
        ];
        $pdf = PDF::loadView('/pdf/invoice/invoice', $data);
        $pdf->save('assets/pdf/invoice/1.pdf');
        return $pdf->download('demo.pdf');
    }
}
