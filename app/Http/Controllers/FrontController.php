<?php

namespace App\Http\Controllers;

use Faker\Provider\Lorem;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $post = [

            "id" => 1,
            "name" => "Quibdó termina el año con resultados contundentes contra
            el
            homicidio",
            "slug" => "quidbo-termiina-el-año-con-resultados",
            "extract" => "Quibdó termina el año con resultados cont Quibdó termina el año con resQuibdó termina el año con resultados contQuibdó termina el año con resultados contultados cont",
            "image" => "https://picsum.photos/200/200",
            "body" => "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta magnam velit ipsa porro ipsam quia et
            numquam
            ea praesentium. Pariatur atque soluta nihil illum blanditiis facilis eaque? Accusantium, dolorem!
            Iure.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta magnam velit ipsa porro ipsam quia et
            numquam
            ea praesentium. Pariatur atque soluta nihil illum blanditiis facilis eaque? Accusantium, dolorem!
            Iure.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta magnam velit ipsa porro ipsam quia et
            numquam
            <br>
            <br>

            ea praesentium. Pariatur atque soluta nihil illum blanditiis facilis eaque? Accusantium, dolorem!
            Iure.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta magnam velit ipsa porro ipsam quia et
            numquam
            ea praesentium. Pariatur atque soluta nihil illum blanditiis facilis eaque? Accusantium, dolorem!
            Iure.
            ea praesentium. Pariatur atque soluta nihil illum blanditiis facilis eaque? Accusantium, dolorem!
            Iure.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta magnam velit ipsa porro ipsam quia et
            numquam
            ea praesentium. Pariatur atque soluta nihil illum blanditiis facilis eaque? Accusantium, dolorem!
            Iure.
    "
        ];




        return view('pages.home', ['post' => $post]);
    }
    public function tramites()
    {
        return view('pages.tramites-service');
    }
    public function transparencia()
    {
        return view('pages.transparencia');
    }
    public function prensa()
    {
        return view('pages.sala-prensa');
    }
    public function articulo()
    {
        $post = [
            "id" => 1,
            "name" => "Quibdó termina el año con resultados contundentes contrael
            homicidio",
            "slug" => "quidbo-termiina-el-año-con-resultados",
            "extract" => "Quibdó termina el año con resultados cont Quibdó termina el año con resQuibdó termina el año con resultados contQuibdó termina el año con resultados contultados cont",
            "image" => "https://picsum.photos/200/200",
            "body" => "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta magnam velit ipsa porro ipsam quia et
            numquam
            ea praesentium. Pariatur atque soluta nihil illum blanditiis facilis eaque? Accusantium, dolorem!
            Iure.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta magnam velit ipsa porro ipsam quia et
            numquam
            ea praesentium. Pariatur atque soluta nihil illum blanditiis facilis eaque? Accusantium, dolorem!
            Iure.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta magnam velit ipsa porro ipsam quia et
            numquam
            <br>
            <br>

            ea praesentium. Pariatur atque soluta nihil illum blanditiis facilis eaque? Accusantium, dolorem!
            Iure.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta magnam velit ipsa porro ipsam quia et
            numquam
            ea praesentium. Pariatur atque soluta nihil illum blanditiis facilis eaque? Accusantium, dolorem!
            Iure.
            ea praesentium. Pariatur atque soluta nihil illum blanditiis facilis eaque? Accusantium, dolorem!
            Iure.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta magnam velit ipsa porro ipsam quia et
            numquam
            ea praesentium. Pariatur atque soluta nihil illum blanditiis facilis eaque? Accusantium, dolorem!
            Iure.
    "
        ];
        return view('posts.show', ['post' => $post]);
    }
}
