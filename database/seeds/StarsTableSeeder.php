<?php

use Illuminate\Database\Seeder;
use App\Stars;

class StarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stars')->delete();
        
        $star = new Stars();
        $star->id = 1;   
        $star->name = "Michael Fassbender ";
        $star->img = "http://a.deviantart.net/avatars/g/a/garciarael.png";
        $star->save();

        $star = new Stars();
        $star->id = 2;   
        $star->name = "Katherine Waterstone";
        $star->img = "http://a.deviantart.net/avatars/l/a/lallibear.jpg";
        $star->save();

        $star = new Stars();
        $star->id = 3;   
        $star->name = "Billy Crudup";
        $star->img = "http://a.deviantart.net/avatars/g/a/garciarael.png";
        $star->save();

        $star = new Stars();
        $star->id = 4;   
        $star->name = "Emma Watson";
        $star->img = "http://a.deviantart.net/avatars/i/s/isahchan28.jpg";
        $star->save();

        $star = new Stars();
        $star->id = 5;   
        $star->name = "Dan Stevens";
        $star->img = "http://a.deviantart.net/avatars/d/a/dannaiplierzegeek.png";
        $star->save();

        $star = new Stars();
        $star->id = 6;   
        $star->name = "Luke Evans";
        $star->img = "http://a.deviantart.net/avatars/i/s/isahchan28.jpg";
        $star->save();

        $star = new Stars();
        $star->id = 7;   
        $star->name = "Bryan Cranston";
        $star->img = "http://a.deviantart.net/avatars/d/a/danielacarson.jpg";
        $star->save();

        $star = new Stars();
        $star->id = 8;   
        $star->name = "Jennifer Garner";
        $star->img = "http://a.deviantart.net/avatars/w/i/witorunipon.png";
        $star->save();

        $star = new Stars();
        $star->id = 9;   
        $star->name = "Beverly D'Angelo";
        $star->img = "http://a.deviantart.net/avatars/c/h/chocolatebaconz.png";
        $star->save();

        $star = new Stars();
        $star->id = 10;  
        $star->name = "Chris Pratt";
        $star->img = "http://a.deviantart.net/avatars/k/u/kurahibisagi.png";
        $star->save();

        $star = new Stars();
        $star->id = 11;  
        $star->name = "Zoe Saldana";
        $star->img = "http://a.deviantart.net/avatars/g/a/garciarael.png";
        $star->save();

        $star = new Stars();
        $star->id = 12;  
        $star->name = "Dave Bautista";
        $star->img = "http://a.deviantart.net/avatars/l/a/lallibear.jpg";
        $star->save();

        $star = new Stars();
        $star->id = 13;  
        $star->name = "Rupert Everett";
        $star->img = "http://a.deviantart.net/avatars/g/a/garciarael.png";
        $star->save();

        $star = new Stars();
        $star->id = 14;  
        $star->name = "Julianne Moore";
        $star->img = "http://a.deviantart.net/avatars/i/s/isahchan28.jpg";
        $star->save();

        $star = new Stars();
        $star->id = 15;  
        $star->name = "Jeremy Northam";
        $star->img = "http://a.deviantart.net/avatars/d/a/dannaiplierzegeek.png";
        $star->save();

        $star = new Stars();
        $star->id = 16;  
        $star->name = "Pietro Germi";
        $star->img = "http://a.deviantart.net/avatars/i/s/isahchan28.jpg";
        $star->save();

        $star = new Stars();
        $star->id = 17;  
        $star->name = "Sylva Koscina";
        $star->img = "http://a.deviantart.net/avatars/d/a/danielacarson.jpg";
        $star->save();

        $star = new Stars();
        $star->id = 18;  
        $star->name = "Carlo Giuffre";
        $star->img = "http://a.deviantart.net/avatars/w/i/witorunipon.png";
        $star->save();

        $star = new Stars();
        $star->id = 19;  
        $star->name = "Bradley Cooper";
        $star->img = "http://a.deviantart.net/avatars/c/h/chocolatebaconz.png";
        $star->save();

        $star = new Stars();
        $star->id = 20;  
        $star->name = "Vin Diesel";
        $star->img = "http://a.deviantart.net/avatars/k/u/kurahibisagi.png";
        $star->save();

        $star = new Stars();
        $star->id = 21;  
        $star->name = "Kristen Stewart";
        $star->img = "http://a.deviantart.net/avatars/g/a/garciarael.png";
        $star->save();

        $star = new Stars();
        $star->id = 22;  
        $star->name = "Chris Tucker";
        $star->img = "http://a.deviantart.net/avatars/l/a/lallibear.jpg";
        $star->save();

        $star = new Stars();
        $star->id = 23;  
        $star->name = "Alan Tudyk";
        $star->img = "http://a.deviantart.net/avatars/g/a/garciarael.png";
        $star->save();

        $star = new Stars();
        $star->id = 24;  
        $star->name = "Diane Lane";
        $star->img = "http://a.deviantart.net/avatars/i/s/isahchan28.jpg";
        $star->save();

        $star = new Stars();
        $star->id = 25;  
        $star->name = "Elizabeth Olsen";
        $star->img = "http://a.deviantart.net/avatars/d/a/dannaiplierzegeek.png";
        $star->save();

        $star = new Stars();
        $star->id = 26;  
        $star->name = "Ken Watanabe";
        $star->img = "http://a.deviantart.net/avatars/i/s/isahchan28.jpg";
        $star->save();

        $star = new Stars();
        $star->id = 27;  
        $star->name = "Paul Walker";
        $star->img = "http://a.deviantart.net/avatars/d/a/danielacarson.jpg";
        $star->save();

        $star = new Stars();
        $star->id = 28;  
        $star->name = "Dwayne Johnson";
        $star->img = "http://a.deviantart.net/avatars/w/i/witorunipon.png";
        $star->save();

        $star = new Stars();
        $star->id = 29;  
        $star->name = "Larenz Tate";
        $star->img = "http://a.deviantart.net/avatars/c/h/chocolatebaconz.png";
        $star->save();

        $star = new Stars();
        $star->id = 30;  
        $star->name = "Geno Silva";
        $star->img = "http://a.deviantart.net/avatars/k/u/kurahibisagi.png";
        $star->save();

        $star = new Stars();
        $star->id = 31;  
        $star->name = "Carrie Fisher";
        $star->img = "http://a.deviantart.net/avatars/g/a/garciarael.png";
        $star->save();

        $star = new Stars();
        $star->id = 32;  
        $star->name = "Neve Campbell";
        $star->img = "http://a.deviantart.net/avatars/l/a/lallibear.jpg";
        $star->save();

        $star = new Stars();
        $star->id = 33;  
        $star->name = "Taylor Kitsch";
        $star->img = "http://a.deviantart.net/avatars/g/a/garciarael.png";
        $star->save();

        $star = new Stars();
        $star->id = 34;  
        $star->name = "Antonio Sabato";
        $star->img = "http://a.deviantart.net/avatars/i/s/isahchan28.jpg";
        $star->save();

        $star = new Stars();
        $star->id = 35;  
        $star->name = "Lara Grice";
        $star->img = "http://a.deviantart.net/avatars/d/a/dannaiplierzegeek.png";
        $star->save();

        $star = new Stars();
        $star->id = 36;  
        $star->name = "William Hurt";
        $star->img = "http://a.deviantart.net/avatars/i/s/isahchan28.jpg";
        $star->save();

        $star = new Stars();
        $star->id = 37;  
        $star->name = "Jamie Hector";
        $star->img = "http://a.deviantart.net/avatars/d/a/danielacarson.jpg";
        $star->save();

        $star = new Stars();
        $star->id = 38;  
        $star->name = "Tom Hanks";
        $star->img = "http://a.deviantart.net/avatars/w/i/witorunipon.png";
        $star->save();

        $star = new Stars();
        $star->id = 39;  
        $star->name = "Saro Urzi";
        $star->img = "http://a.deviantart.net/avatars/c/h/chocolatebaconz.png";
        $star->save();

        $star = new Stars();
        $star->id = 40;  
        $star->name = "Renato Speziali";
        $star->img = "http://a.deviantart.net/avatars/k/u/kurahibisagi.png";
        $star->save();




    }
}
