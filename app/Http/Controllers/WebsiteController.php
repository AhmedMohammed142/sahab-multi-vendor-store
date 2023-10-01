<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    //

    public function index(){
        return view('index');
    }

    public function login(){
        return view('login');
    }

    public function product($id){
        // $name = 'صالة اللوتس';
        // return view('product', compact(['id', 'name']));
        $data['category_name'] = 'صالة الأفراح';
        $data['sub_category_name'] = 'قاعة الأفراح';
        $data['id'] = $id;
        $data['name'] = 'صالة اللوتس';
        $data['price'] = 4605;
        $data['vendor_name'] = 'صالة اللوتس للأفراح';
        $data['images'] = array('carusle1', 'carusle2', 'carusle3', 'carusle4', 'carusle5', 'carusle6', 'carusle7');
        $data['description'] = 'صالة اللوتس لمناسبات السعيدة والأفراح, التفاصيل الجميلة هي من
        تصنع زفاف جميل و نحن في صالة اللوتس نعمل على التفاصيل المميزة.';
        $data['attributes'] = array(
            'عدد الكراسي' => '600',
            'عدد الطاولات' => '68',
            'تلبيسة الكراسي' => 'متوفر',
            'كوشة' => 'متوفر',
            'التكييف' => 'متوفر',
            'دي جي' => 'متوفر',
            'تصوير' => 'غير متوفر',
            'إضاءة' => 'متوفر',
            'دانس فلور' => 'متوفر',
            'سنتر بيس (مزهرية للطاولة)' => 'حسب الطلب',
            'ورد المحابس' => 'متوفر',
            'شعلات' => 'غير متوفر',
            'أجهزة الدخان' => 'متوفر',
            'ضيافة للسيدات' => 'حسب الطلب',
            'مجلس للرجال' => 'متوفر',
            'ضيافة للرجال' => 'قهوة ومياه معدنية',
            'منَظّمات' => '5',
            'مراوح' => 'غير متوفر',
            'بوفيه' => 'غير متوفر',
            'الموسم' => 'موسم الشتاء',
            'المحافظة' => 'غزة',
            'من شهر' => '11',
            'إلى شهر' => '4'
        );
        $data['extra_details'] = 'السعر يشمل : ضيافة الرجال قهوة وشاي بدون اشهار رجال &quot; أشهار
        رجال : زيادة 100$';

        $data['photos'] = array('card1', 'card2', 'card3', 'card3');
        // $data['name_product'] = array('قاعة روتانا', 'قاعة هيات', 'قاعة قصر السلطان', 'قاعة قصر السلطان');
        return view('product', $data);
    }

    public function search(){
        return view('search');
    }
}
