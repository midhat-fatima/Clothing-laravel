<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("products")->insert([
            [
                "name"          =>  "shirt",
                "price"         =>  "1000",
                "description"   =>  "blue mens shirt",
                "categories"    =>  "shirt",
                "gallery"       =>  "https://i.pinimg.com/736x/e2/f8/ca/e2f8ca6eb5f776f39df9117275107180.jpg"
            ],
            [
                "name"          =>  "shirt",
                "price"         =>  "2000",
                "description"   =>  "white mens shirt",
                "categories"    =>  "shirt",
                "gallery"       =>  "https://i.pinimg.com/736x/5a/5c/07/5a5c0721cfc88cc06ef61ed208815c5b.jpg"
            ],
            [
                "name"          =>  "t-shirt",
                "price"         =>  "1000",
                "description"   =>  "blue mens t-shirt",
                "categories"    =>  "t-shirt",
                "gallery"       =>  "https://i.pinimg.com/originals/b5/6a/2e/b56a2e62ca5f4f5012bc131b79f1b0aa.jpg"
            ],
            [
                "name"          =>  "t-shirt",
                "price"         =>  "1000",
                "description"   =>  "pink women shirt",
                "categories"    =>  "t-shirt",
                "gallery"       =>  "https://www.designhill.com/resize_img.php?atyp=page_file&pth=ft_ca_sl2||183||bannerslider_1&flp=1568706210-13826367645d808ea28f4cd5-86124158.png"
            ],
            [
                "name"          =>  "shirt",
                "price"         =>  "3000",
                "description"   =>  "blue mens shirt",
                "categories"    =>  "shirt",
                "gallery"       =>  "https://i.pinimg.com/736x/e2/f8/ca/e2f8ca6eb5f776f39df9117275107180.jpg"
            ]
        ]);
    }
}
