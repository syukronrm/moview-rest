<?php

use Illuminate\Database\Seeder;
use App\Directors;

class DirectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('directors')->delete();

        // $director = new Directors();
        // $director->id = 1;
        // $director->name = "Ahmad Syaiful";
        // $director->save();

        // $director = new Directors();
        // $director->id = 2;
        // $director->name = "Setiyo Adiwicaksono";
        // $director->save();

        $director = new Directors();
        $director->id = 1;
        $director->name =    "Ridley Scott";
        $director->save();

        $director = new Directors();
        $director->id = 2;
        $director->name =    "Bill Condon";
        $director->save();

        $director = new Directors();
        $director->id = 3;
        $director->name =    "Robin Swicord";
        $director->save();

        $director = new Directors();
        $director->id = 4;
        $director->name =    "James Gunn";
        $director->save();

        $director = new Directors();
        $director->id = 5;
        $director->name =    "Oliver Parker";
        $director->save();

        $director = new Directors();
        $director->id = 6;
        $director->name =    "Pietro Germi";
        $director->save();

        $director = new Directors();
        $director->id = 7;
        $director->name =    "Wes Craven";
        $director->save();

        $director = new Directors();
        $director->id = 8;
        $director->name =    "Ben Younger";
        $director->save();

        $director = new Directors();
        $director->id = 9;
        $director->name =    "David Twohy";
        $director->save();

        $director = new Directors();
        $director->id = 10;
        $director->name =   "Michael Mann";
        $director->save();

        $director = new Directors();
        $director->id = 11;
        $director->name =   "Rob Cohen";
        $director->save();

        $director = new Directors();
        $director->id = 12;
        $director->name =   "Tommy O'Haver";
        $director->save();

        $director = new Directors();
        $director->id = 13;
        $director->name =   "Rich Murray";
        $director->save();

        $director = new Directors();
        $director->id = 14;
        $director->name =   "Charles Stone III";
        $director->save();

        $director = new Directors();
        $director->id = 15;
        $director->name =   "F. Gary Gray";
        $director->save();

        $director = new Directors();
        $director->id = 16;
        $director->name =   "Steven Spielberg";
        $director->save();

        $director = new Directors();
        $director->id = 17;
        $director->name =   "David Kendall";
        $director->save();

        $director = new Directors();
        $director->id = 18;
        $director->name =   "Sidney Lumet";
        $director->save();

        $director = new Directors();
        $director->id = 19;
        $director->name =   "Jerry LaMothe";
        $director->save();

        $director = new Directors();
        $director->id = 20;
        $director->name =   "Pete Travis";
        $director->save();

        $director = new Directors();
        $director->id = 21;
        $director->name =   "James Cameron";
        $director->save();

        $director = new Directors();
        $director->id = 22;
        $director->name =   "David DeFalco";
        $director->save();

        $director = new Directors();
        $director->id = 23;
        $director->name =   "Justin Lin";
        $director->save();

        $director = new Directors();
        $director->id = 24;
        $director->name =   "Mark Atkins";
        $director->save();

        $director = new Directors();
        $director->id = 25;
        $director->name =   "Gareth Edwards";
        $director->save();

        $director = new Directors();
        $director->id = 26;
        $director->name =   "Jay Roach";
        $director->save();

        $director = new Directors();
        $director->id = 27;
        $director->name =   "Ang Lee";
        $director->save();


    }
}
