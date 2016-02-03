<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Product;


class ImportController extends Controller
{
    public function index()
    {
        return view('import');
    }
    
    public function catalog()
    {
        $products = [
            new Product('SMART BALANCE WHEEL','S/.1200','','electronic','smart-balance-wheel.png'),
            new Product('Audifonos Bluetooth','S/.3.30','','electronic','electronics/audifono.PNG'),
            new Product('Cargadores','S/.2.60','','electronic','electronics/cargador.jpg'),
            new Product('USB con diseños','S/.35','','electronic','usb/usb-design.png'),
            new Product('USB Lenovo','S/.36.00','','electronic','usb/usb-lenovo.png'),
            new Product('USB Mixza','S/.1200','','electronic','usb/usb-mixza.png'),
          
            
            new Product('Rebel SL1','S/.1599','','camera','cameras/rebelsl1.jpg'),
            new Product('Rebel T5','S/.1139','','camera','cameras/t5.jpg'),
            new Product('EOS 6D','S/.5579','','camera','cameras/6d.jpg'),
            new Product('EOS 70D','S/.3719','','camera','cameras/70d.jpg'),
            new Product('Canon EOS REBEL T5i','S/.1599','','camera','cameras/rebel.jpg'),
            new Product('Canon EOS 7D Mark II','S/.6159','','camera','cameras/eos7d.jpg'),
            
            new Product('Nike Air','S/250.00','','news','nike-air.jpg'),
            new Product('CASE 3D DIBUJOS DE DISNEY','S/.15','','news','case3d-disney.png'),
           
      
        ];
        
        return view('catalog')->with('products',$products);
    }
}
