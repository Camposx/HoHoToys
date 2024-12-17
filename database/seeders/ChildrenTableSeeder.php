<?php

namespace Database\Seeders;

use App\Models\Child;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChildrenTableSeeder extends Seeder
{

    public function run(): void
    {

        $child = new Child();
        $child->name = "Sofía";
        $child->surname = "Ramírez";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734348924/Childs/hmzlnikqszfexka9c0ek.png";
        $child->age = 6;
        $child->naughty = true;
        $child->save();

        $child = new Child();
        $child->name = "Mateo";
        $child->surname = "López";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734348924/Childs/owxamsamxwnbuctigxyc.png";
        $child->age = 3;
        $child->naughty = false;
        $child->save();

        $child = new Child();
        $child->name = "Valentina";
        $child->surname = "Torres";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734348924/Childs/x065ulky6f6uacynqneo.png";
        $child->age = 12;
        $child->naughty = false;
        $child->save();

        $child = new Child();
        $child->name = "Sebastián";
        $child->surname = "Martínez";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734348924/Childs/e9ij9ohax0buvy3t8yri.png";
        $child->age = 15;
        $child->naughty = true;
        $child->save();

        $child = new Child();
        $child->name = "Camila";
        $child->surname = "González";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734348922/Childs/xjmprg3ncyhfys4qwy7a.png";
        $child->age = 8;
        $child->naughty = true;
        $child->save();

        $child = new Child();
        $child->name = "Paula";
        $child->surname = "Hernández";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734348921/Childs/nn93hp2ulksi1j3yhjqm.png";
        $child->age = 18;
        $child->naughty = false;
        $child->save();

        $child = new Child();
        $child->name = "Isabella";
        $child->surname = "Pérez";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734348922/Childs/qhdbboahpe08oleskxlb.png";
        $child->age = 10;
        $child->naughty = false;
        $child->save();

        $child = new Child();
        $child->name = "Emilia";
        $child->surname = "Castro";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734348923/Childs/hllo4qkengaivcudq0oy.png";
        $child->age = 7;
        $child->naughty = true;
        $child->save();

        $child = new Child();
        $child->name = "Martina";
        $child->surname = "Rojas";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734348921/Childs/nn93hp2ulksi1j3yhjqm.png";
        $child->age = 5;
        $child->naughty = false;
        $child->save();

        $child = new Child();
        $child->name = "Victoria";
        $child->surname = "Silva";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734348923/Childs/az4dip5rtsukc4v5btet.png";
        $child->age = 13;
        $child->naughty = false;
        $child->save();

        $child = new Child();
        $child->name = "Daniel";
        $child->surname = "Cruz";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734348920/Childs/hmlnsaxvnhs11mappm2c.png";
        $child->age = 9;
        $child->naughty = false;
        $child->save();

        $child = new Child();
        $child->name = "Luna";
        $child->surname = "Moreno";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734348921/Childs/aarc6unx1s2zsfez2776.png";
        $child->age = 1;
        $child->naughty = false;
        $child->save();

        $child = new Child();
        $child->name = "Gabriel";
        $child->surname = "Navarro";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734348923/Childs/xn2dfr4vn2qq6mjadsrs.png";
        $child->age = 16;
        $child->naughty = true;
        $child->save();

        $child = new Child();
        $child->name = "Zoe";
        $child->surname = "Fernández";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734348922/Childs/kxvviwvluxonlrqlafth.png";
        $child->age = 4;
        $child->naughty = true;
        $child->save();

        $child = new Child();
        $child->name = "Thiago";
        $child->surname = "Méndez";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734348923/Childs/goxmsgp9q13qz5rwa9qn.png";
        $child->age = 11;
        $child->naughty = false;
        $child->save();

        $child = new Child();
        $child->name = "Olivia";
        $child->surname = "Peña";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734348921/Childs/xugjhbxl9crivfsgfwep.png";
        $child->age = 0;
        $child->naughty = true;
        $child->save();

        $child = new Child();
        $child->name = "Pablo";
        $child->surname = "Soto";
        $child->photo = "https://res.cloudinary.com/albertokz/image/upload/v1734348921/Childs/qvnatfeqpw4zq0oh7md9.png";
        $child->age = 18;
        $child->naughty = false;
        $child->save();

    }
}
