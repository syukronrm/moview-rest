<?php

use Illuminate\Database\Seeder;
use App\Reviews;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->delete();

        $review = new Reviews();
        $review->id = 1;   
        $review->namauser = "Fourir";
        $review->comment = "This latest extravaganza set inside this particular universe might just be the most nihilistic and disturbing entry in the series yet.  ";
        $review->id_user = 1;
        $review->timestamp = "2017-05-02 00:00:01";
        $review->rating = 1;
        $review->save();

        $review = new Reviews();
        $review->id = 2;   
        $review->namauser = "Fourir";
        $review->comment = "There's a complicated jumble of gender politics at hand, and any attempt at modernizing the dynamic is more of a random piling on rather than a thoughtful incorporation.   ";
        $review->id_user = 1;
        $review->timestamp = "2017-05-03 00:00:01";
        $review->rating = 2;
        $review->save();

        $review = new Reviews();
        $review->id = 3;   
        $review->namauser = "Fourir";
        $review->comment = "The film doesn't need to be given a dark twist like 2012's Snow White and the Huntsman; as with every fairytale, there's enough darkness in this story to begin with.   ";
        $review->id_user = 1;
        $review->timestamp = "2017-05-03 00:00:01";
        $review->rating = 3;
        $review->save();

        $review = new Reviews();
        $review->id = 4;   
        $review->namauser = "Fourir";
        $review->comment = "The only believable reason this classic was remade was for love of money, but it does look fantastic doing it... the original animated film is still your best bet. ";
        $review->id_user = 1;
        $review->timestamp = "2017-05-03 00:00:01";
        $review->rating = 4;
        $review->save();

        $review = new Reviews();
        $review->id = 5;   
        $review->namauser = "Fourir";
        $review->comment = "It is well-intentioned, sketchy, sprawling and unremarkable. At two hours and 38 minutes, it is also long-winded and exhausting.    ";
        $review->id_user = 1;
        $review->timestamp = "2017-05-03 00:00:01";
        $review->rating = 5;
        $review->save();

        $review = new Reviews();
        $review->id = 6;   
        $review->namauser = "Fourir";
        $review->comment = "This could be the only movie we'll get on the fighter, and it's just not good enough.   ";
        $review->id_user = 1;
        $review->timestamp = "2017-05-03 00:00:01";
        $review->rating = 6;
        $review->save();

        $review = new Reviews();
        $review->id = 7;   
        $review->namauser = "Fourir";
        $review->comment = "It's good -- but Ali himself was the greatest. So a reluctant, kind of mild thumbs up for this. ";
        $review->id_user = 1;
        $review->timestamp = "2017-05-03 00:00:01";
        $review->rating = 7;
        $review->save();

        $review = new Reviews();
        $review->id = 8;   
        $review->namauser = "Fourir";
        $review->comment = "More than competently mounted, with a hollowness just discernible in its core... feels like the first draft of whatever film Michael Mann set out to make.  ";
        $review->id_user = 1;
        $review->timestamp = "2017-05-03 00:00:01";
        $review->rating = 8;
        $review->save();

        $review = new Reviews();
        $review->id = 9;   
        $review->namauser = "Fourir";
        $review->comment = "Brutal fight scenes and frank racial issues.    ";
        $review->id_user = 1;
        $review->timestamp = "2017-05-03 00:00:01";
        $review->rating = 9;
        $review->save();

        $review = new Reviews();
        $review->id = 10;  
        $review->namauser = "Fourir";
        $review->comment = "You can almost see him thinking his way through his fights...   ";
        $review->id_user = 1;
        $review->timestamp = "2017-05-03 00:00:01";
        $review->rating = 10;
        $review->save();
    }
}
