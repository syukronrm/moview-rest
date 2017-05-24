<?php

use Illuminate\Database\Seeder;
use App\Movies;
use App\Reviews;

class MoviesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('movies')->delete();
		
		$movie = new Movies();
		$movie->category = "movies";
		$movie->desc = "Ridley Scott returns to the universe he created, with ALIEN: COVENANT, a new chapter in his groundbreaking ALIEN franchise. The crew of the colony ship Covenant, bound for a remote planet on the far side of the galaxy, discovers what they think is an uncharted paradise, but is actually a dark, dangerous world. When they uncover a threat beyond their imagination, they must attempt a harrowing escape.";
		$movie->name = "Alien : Covenant";
		$movie->year = 2017;
		$movie->mood= "Angry"	;
		$movie->timestamp = "2017-05-19 00:00:01";
		$movie->img = "client/assets/1.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		$movie->id_director = 1;
		$movie->save();
		$movie->reviews()->sync([1,2	]);
		$movie->genres()->sync([	3,6,14,16,17	]);
		$movie->stars()->sync([1,2,3	]);
		
		$movie = new Movies();
		$movie->category = "movies";
		$movie->desc = "Disney's 'Beauty and the Beast' is a live-action re-telling of the studio's animated classic which refashions the classic characters from the tale as old as time for a contemporary audience, staying true to the original music while updating the score with several new songs. 'Beauty and the Beast' is the fantastic journey of Belle, a bright, beautiful and independent young woman who is taken prisoner by a beast in his castle. Despite her fears, she befriends the castle's enchanted staff and learns to look beyond the Beast's hideous exterior and realize the kind heart and soul of the true Prince within. The film stars: Emma ";
		$movie->name = "Beauty and the Beast";;
		$movie->year = 2017;	
		$movie->mood= "Sad"	;
		$movie->timestamp = "2017-04-03 00:00:01";
		$movie->img = "client/assets/2.jpg";
		$movie->trailer = "https://www.youtube.com/embed/OvW_L8sTu5E";
		$movie->id_director = 2;
		$movie->save();
		$movie->reviews()->sync([3,4	]);
		$movie->genres()->sync([	1,2,6	]);
		$movie->stars()->sync([4,5,6	]);
		
		$movie = new Movies();
		$movie->category = "movies";
		$movie->desc = "In Robin Swicord's adaptation of E.L. Doctorow's short story, successful suburbanite commuter Howard Wakefield (Bryan Cranston) takes a perverse detour from family life: He vanishes without a trace. Hidden in the attic of his carriage house garage, surviving by scavenging at night, Howard secretly observes the lives of his wife (Jennifer Garner) and children and neighbors. WAKEFIELD becomes a fraught meditation on marriage and identity, as Howard slowly realizes that he has not in fact left his family, he has left himself.";
		$movie->name = "Wakefield";;
		$movie->year = 2017;
		$movie->mood= "Happy"	;
		$movie->timestamp = "2017-02-02 00:00:01";
		$movie->img = "client/assets/3.jpg";
		$movie->trailer = "https://www.youtube.com/embed/sheJkkm9oFY";
		$movie->id_director = 3;
		$movie->save();

		$movie->reviews()->sync([5,6	]);
		$movie->genres()->sync([	6,9,10	]);
		$movie->stars()->sync([7,8,9	]);
		
		$movie = new Movies();
		$movie->category = "movies";
		$movie->desc = "Set to the all-new sonic backdrop of Awesome Mixtape #2, Marvel Studios' 'Guardians of the Galaxy Vol. 2' continues the team's adventures as they traverse the outer reaches of the cosmos. The Guardians must fight to keep their newfound family together as they unravel the mystery of Peter Quill's true parentage. Old foes become new allies and fan-favorite characters from the classic comics will come to our heroes' aid as the Marvel Cinematic Universe continues to expand.";
		$movie->name = "Guardian of the Galaxy Vol 2";;
		$movie->year = 2017;
		$movie->mood= "Numb";
		$movie->timestamp = "2017-04-06 00:00:01";
		$movie->img = "client/assets/4.jpg";
		$movie->trailer = "https://www.youtube.com/embed/h7GiAwK2f-Y";
		$movie->id_director = 1;
		$movie->save();
		$movie->reviews()->sync([7,8	]);
		$movie->genres()->sync([	4,7,12	]);
		$movie->stars()->sync([1]);
		
		$movie = new Movies();
		$movie->category = "movies";
		$movie->desc = "In a moment of youthful indiscretion, Sir Robert Chiltern provided an Austrian baron with secret Foreign Office information. As payment he received the money that became the basis of his fortune and of his splendid, otherwise unimpeachable government career. Years later, he is blackmailed by a mysterious woman who also happens to be an acquaintance of his wife. Seeking the advice of his best friend, Sir Chiltern is told to confess everything to his wife and seek her support, but he refuses to tarnish the ideal image he believes his wife has of him and their marriage. His refusal to tell his wife has severe ";
		$movie->name = "An Ideal Husband";
		$movie->year = 1999;
		$movie->mood= "Optimistic"	;
		$movie->timestamp = "1999-12-08 00:00:01";
		$movie->img = "client/assets/5.jpg";
		$movie->trailer = "https://www.youtube.com/embed/gjpQAj_MtUI";
		$movie->id_director = 5;
		$movie->save();
		$movie->reviews()->sync([9,10	]);
		$movie->genres()->sync([	5,7,3	]);
		$movie->stars()->sync([13,14,15	]);
		
		$movie = new Movies();
		$movie->category = "movies";
		$movie->desc = "Pietro Germi is both star and director of Il Ferroviere. Germi plays Andrea, a railroad engineer with a large and troublesome family. Faced with a choice between supporting his fellow workers in a strike and keeping his family fed, Andrea opts for the latter. Branded a scab by his former cohorts, he is likewise given the cold shoulder by his wife and children. Drowning his disappointment in liquor, Andrea is saved from self-destruction when his youngest son decides to forgive and forget. Il Ferroviere was released in the U.S. as The Railroad Man and Man of Iron.";
		$movie->name = "Railroad Man";
		$movie->year = 1956;
		$movie->mood= "Stressed";
		$movie->timestamp = "1956-09-23 00:00:01";
		$movie->img = "client/assets/6.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		$movie->id_director = 6;
		$movie->save();
		$movie->reviews()->sync([1,2	]);
		$movie->genres()->sync([	6,2,3	]);
		$movie->stars()->sync([16,17,18	]);
		
		$movie = new Movies();
		$movie->category = "movies";
		$movie->desc = "In the third and final episode of the Scream trilogy, Sidney realizes that she can no longer escape her past. Inspired by horror movies, the killer once again returns, but this time all trilogy rules are broken.";
		$movie->name = "Scream 3";
		$movie->year = 2000;
		$movie->mood= "Pleased"	;
		$movie->timestamp = "2000-12-12 00:00:01";
		$movie->img = "client/assets/7.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		$movie->id_director = 7;
		$movie->save();
		$movie->reviews()->sync([3,4	]);
		$movie->genres()->sync([	7	]);
		$movie->stars()->sync([19,20,21	]);
		
		$movie = new Movies();
		$movie->category = "movies";
		$movie->desc = "In this drama that explores greed and corruption in American business, Giovanni Ribisi plays Seth Davis, an intelligent and ambitious college dropout who runs a casino in his apartment. Eager to show his father that he can succeed, Seth lands a job with a small stock brokerage firm. He is given a space in the company's 'boiler room,' where he makes cold calls to prospective clients. As it turns out, Seth has a genuine talent for cold calling, which gains him the approval of his superiors, the admiration of his father, and the attentions of one of his co-workers, Abby Hilliard (Nia Long). However, the higher up the ladder Seth rises, the deeper he sinks into a quagmire of dirty dealings, until he's breaking the law in order to keep his bosses happy and his paychecks coming. The Boiler Room also features Tom Everett Scott, Scott Caan, Jamie Kennedy, Nicky Katt, and Ben Affleck in a cameo as the headhunter who brings Seth into the firm. Ribisi and Scott also appeared together in That Thing You Do; Ribisi was the drummer replaced by Scott, who then led The One-Ders to fictional pop stardom.";
		$movie->name = "Boiler Room";
		$movie->year = 2000;
		$movie->mood= "Happy"	;
		$movie->timestamp = "2000-02-20 00:00:01";
		$movie->img = "client/assets/8.jpg";
		$movie->trailer = "https://www.youtube.com/embed/gjpQAj_MtUI";
		$movie->id_director = 8;
		$movie->save();
		$movie->reviews()->sync([5,6	]);
		$movie->genres()->sync([	8	]);
		$movie->stars()->sync([22,23,24	]);
		
		$movie = new Movies();
		$movie->category = "movies";
		$movie->desc = "In this science fiction thriller, a spaceship is transporting a disparate group of people to a far-away galactic outpost called New Mecca. Mechanical failures cause the craft to crash-land on an abandoned planet that has three suns and no night. The only member of the crew to survive is junior pilot Carolyn Fry (Radha Mitchell), while the passengers who climb from the wreckage include a police officer (Cole Hauser) and the prisoner he's transporting, Riddick (Vin Diesel). ";
		$movie->name = "Pitch Black";;
		$movie->year = 2000;
		$movie->mood= "Angry"	;
		$movie->timestamp = "2000-08-09 00:00:01";
		$movie->img = "client/assets/9.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		$movie->id_director = 9;
		$movie->save();
		$movie->reviews()->sync([7,8	]);
		$movie->genres()->sync([	9	]);
		$movie->stars()->sync([25,26,27	]);
		
		// $movie = new Movies();
		// $movie->category = "movies";
		// $movie->desc = "The life story of heavyweight boxing champion Muhammad Ali, following the champ's early days as Cassius Clay and his rise in sports and politics, including his controversial refusal to fight in the Vietnam War and his infamous comeback battles against Joe Frazier and George Foreman";
		// $movie->name = "Ali";;
		// $movie->year = 2001;
		// $movie->mood= "sad"	;
		// $movie->timestamp = "2001-01-01 00:00:01";
		// $movie->img = "client/assets/10.jpg";
		// $movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		// $movie->id_director = 0;
		// $movie->save();
		// $movie->reviews()->sync([9,10	]);
		// $movie->genres()->sync([	10	]);
		// $movie->stars()->sync([12,29,30	]);
		
		$movie = new Movies();
		$movie->category = "movies";
		$movie->desc = "A magazine article about real-life car racing gangs for Vibe becomes this fast-paced automotive thriller from director Rob Cohen. Paul Walker stars as Brian O'Conner, a youthful FBI agent investigating a series of hijackings by going undercover with a street gang led by charismatic Dominic Toretto (Vin Diesel). Caught up in Toretto's world of gang conflict that is resolved in late-night car races, Spindler starts to sympathize with his chief suspect and falls in love with Toretto's younger sister Mia (Jordana Brewster).";
		$movie->name = "The Fast and the Furious";;
		$movie->year = 2001;
		$movie->mood= "Optimistic"	;
		$movie->timestamp = "2001-10-10 00:00:01";
		$movie->img = "client/assets/11.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		$movie->id_director = 2;
		$movie->save();
		$movie->reviews()->sync([1]);
		$movie->genres()->sync([1]);
		$movie->stars()->sync([1]);
		
		$movie = new Movies();
		$movie->category = "movies";
		$movie->desc = "Ben Foster stars in this teenage comedy as Berke Landers, an average high schooler who has achieved high status by winning over Allison (Melissa Sagemiller), reputed to be the most popular and beautiful girl in his class. After an initially winning time, Allison finds herself drawn to the hot new guy in school, leaving Berke in the lurch. At the risk of ruining his unsteady reputation, Berke concocts a scheme for getting Allison back: he will join the school production of +A Midsummer Night's Dream and prove his romanticism to her. Realizing he needs an effective acting coach, he turns to Kelly (Kirsten Dunst), who was once the annoying little sister of a best friend and has suddenly blossomed into a grownup -- to whom Berke finds himself drawn.";
		$movie->name = "Get Over It";;
		$movie->year = 2001	;
		$movie->mood= "Optimistic"	;
		$movie->timestamp = "2001-08-10 00:00:01";
		$movie->img = "client/assets/12.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		$movie->id_director = 1;
		$movie->save();
		$movie->reviews()->sync([3,4	]);
		$movie->genres()->sync([12	]);
		$movie->stars()->sync([14,35,36	]);
		
		$movie = new Movies();
		$movie->category = "movies";
		$movie->desc = "Music video director Richard Murray makes his feature debut with this hip-hop crime thriller about an ambitious kid caught in the shady underworld of the recording industry. Sam Jones III (Erik Triggs) is a wannabe rap artist working menial jobs at Ill Wax Records by day and sneaking into the studio and laying down some tracks by night. His activities have already attracted the welcome attention of Cheryl (Zo Saldana), a bodacious marketing executive. Meanwhile, the company's villainous president Bobby Starr (Dean Winters) is bullying rap phoneme Prolifik (Nelly) into doing his debut record Bobby's way.";
		$movie->name = "Snipes";;
		$movie->year = 2002	;
		$movie->mood= "Lazy";
		$movie->timestamp = "2002-09-18 00:00:01";
		$movie->img = "client/assets/13.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		$movie->id_director = 2;
		$movie->save();
		$movie->reviews()->sync([5]);
		$movie->genres()->sync([3]);
		$movie->stars()->sync([17,38,9]);
		
		$movie = new Movies();
		$movie->category = "movies";
		$movie->desc = "Drumline brings the world of 'show-style' marching bands (popular at traditionally black, Southern colleges) to the big screen for the first time. The story, by Shawn Schepps, was inspired by the high school drumline experiences of executive producer/executive music producer Dallas Austin. Devon (Nick Cannon of Nickelodeon's The Nick Cannon Show) is a Harlem drummer who earns a full scholarship to the fictional Atlanta A&T University. There, his talent gets the attention of the school's embattled musical director, Dr. Lee (Orlando Jones), who puts his students' education and appreciation for musical tradition ahead of the marching band's popularity. Devon's brashly egotistical attitude doesn't endear him to Lee, whose slogan for the band is 'One band, one sound,' or to the drumline's disciplined captain, Sean (Leonard Roberts, late of TV's Buffy the Vampire Slayer). ";
		$movie->name = "Drumline";
		$movie->year = 2002	;
		$movie->mood= "Lazy"	;
		$movie->timestamp = "2002-03-04 00:00:01";
		$movie->img = "client/assets/14.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		$movie->id_director = 3;
		$movie->save();
		$movie->reviews()->sync([7,8	]);
		$movie->genres()->sync([14	]);
		$movie->stars()->sync([4,1,2	]);
		
		$movie = new Movies();
		$movie->category = "movies";
		$movie->desc = "A cop teams up with the former head of a drug cartel to avenge the death of the woman he loved in this action-drama. Sean Vetter (Vin Diesel) and Demetrius Hicks (Larenz Tate) are a pair of DEA agents who think they've made the bust of a lifetime when they capture 'Memo' Lucero (Geno Silva), a multi-millionaire drug lord who controlled most of the narcotics traffic along the border of Mexico and the United States. However, with Lucero behind bars, a new and decidedly more dangerous underworld kingpin rises to take his place, and Diablo (Timothy Olyphant), also known as Hollywood Jack Slayton, soon proves to be even more dangerous than Lucero when he orders his gunmen to assassinate Vetter. While Vetter escapes unharmed, his wife is killed, and Vetter is thrown deep into despair. ";
		$movie->name = "A Man Apart";;
		$movie->year = 2003	;
		$movie->mood= "Happy"	;
		$movie->timestamp = "2003-04-05 00:00:01";
		$movie->img = "client/assets/15.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		$movie->id_director = 4;
		$movie->save();
		$movie->reviews()->sync([9,10	]);
		$movie->genres()->sync([15	]);
		$movie->stars()->sync([13,4,5	]);
		
		$movie = new Movies();
		$movie->category = "movies";
		$movie->desc = "Viktor Navorski is a visitor to New York from Eastern Europe. His homeland erupts in a fiery coup, while he is in the air en route to America. Stranded at Kennedy Airport with a passport from nowhere, he is unauthorized to actually enter the United States and must improvise his days and nights in the terminal's international transit lounge, until the war at home is over. As the weeks and months stretch on, Viktor finds the compressed universe of the terminal to be a richly complex world of absurdity, generosity, ambition, amusement, status, serendipity--and even romance with a beautiful flight attendant named Amelia. But he has long worn out his welcome with airport official Frank Dixon, who considers Viktor a bureaucratic glitch--a problem he cannot control but wants desperately to erase.";
		$movie->name = "The Terminal";;
		$movie->year = 2004	;
		$movie->mood= "sad"	;
		$movie->timestamp = "2004-05-06 00:00:01";
		$movie->img = "client/assets/16.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		$movie->id_director = 5;
		$movie->save();
		$movie->reviews()->sync([1,2	]);
		$movie->genres()->sync([16	]);
		$movie->stars()->sync([16,7,8	]);
		
		$movie = new Movies();
		$movie->category = "series";
		$movie->desc = "A guy is forced to do a lot of stupid stuff to protect the girl of his dreams in this teen comedy. Zach Harper (Milo Ventimiglia) is a senior at a high school with a strange tradition in which upcoming graduates are challenged to perform a series of pranks known as 'the Dirty Deeds' if they want to avoid a humiliating encounter with the football team. In Zach's case, Dan Lawton (Matthew Carey) is a jock who has always had it in for him and has made it clear that if Zach can't complete the 'Dirty Deeds,' he won't be the only one in trouble -- he'll also go after Meg (Lacey Chabert), the girl Zach's sweet on, as well as Meg's little brother. Dirty Deeds also stars Charles Durning, Tom Amandes, and Mark Derwin.";
		$movie->name = "Dirty Deeds";
		$movie->year = 2005	;
		$movie->mood= "Angry"	;
		$movie->timestamp = "2005-06-07 00:00:01";
		$movie->img = "client/assets/17.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		$movie->id_director = 6;
		$movie->save();
		$movie->reviews()->sync([3,4	]);
		$movie->genres()->sync([17	]);
		$movie->stars()->sync([19,10,11	]);
		
		$movie = new Movies();
		$movie->category = "series";
		$movie->desc = "A wise guy turns his own trial upside down by serving as his own lawyer in this comedy drama based on a true story. In 1987, an extensive investigation into the activities of the Lucchese crime family led to charges being filed against most of the key members of the gang, leading to the prosecution of 20 different men, each represented by their own council. That is, except for Giacomo DiNorscio, aka Jackie Dee (Vin Diesel), a longtime Lucchese family 'mechanic' implicated in everything from kidnapping to drug dealing. ";
		$movie->name = "Find Me Guilty";
		$movie->year = 2006;
		$movie->mood= "Good"	;
		$movie->timestamp = "2006-07-08 00:00:01";
		$movie->img = "client/assets/18.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		$movie->id_director = 7;
		$movie->save();
		$movie->reviews()->sync([5,6	]);
		$movie->genres()->sync([	18	]);
		$movie->stars()->sync([12,13,14	]);
		
		$movie = new Movies();
		$movie->category = "series";
		$movie->desc = "In the summer of 2003, the East Coast of America was literally consumed by darkness. Though in the midst of the largest blackout in U.S. history most news reports spoke of the relative calm in a potentially chaotic situation, the situation in Brooklyn's East Flatbush neighborhood would soon become extremely volatile. As night fell over East Flatbush and looters came out of the shadows, violence flared and the citizens prepared for one of the most terrifying nights of their lives.";
		$movie->name = "Blackout";
		$movie->year = 2007	;
		$movie->mood= "Good"	;
		$movie->timestamp = "2007-09-10 00:00:01";
		$movie->img = "client/assets/19.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		$movie->id_director = 8;
		$movie->save();
		$movie->reviews()->sync([7,8	]);
		$movie->genres()->sync([1,2,6	]);
		$movie->stars()->sync([15,16,17	]);
		
		$movie = new Movies();
		$movie->category = "series";
		$movie->desc = "Eight strangers with eight different points of view try to unlock the one truth behind an assassination attempt on the president of the United States. Thomas Barnes and Kent Taylor are two Secret Service agents assigned to protect President Ashton at a landmark summit on the global war on terror. When President Ashton is shot moments after his arrival in Spain, chaos ensues and disparate lives collide in the hunt for the assassin. In the crowd is Howard Lewis, an American tourist who thinks he's captured the shooter on his camcorder while videotaping the event for his kids back home.";
		$movie->name = "Vantage Point";
		$movie->year = 2008	;
		$movie->mood= "Happy"	;
		$movie->timestamp = "2008-10-11 00:00:01";
		$movie->img = "client/assets/20.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		$movie->id_director = 9;
		$movie->save();
		$movie->reviews()->sync([9,10	]);
		$movie->genres()->sync([2	]);
		$movie->stars()->sync([18,19,20	]);

		// $movie = new Movies();
		// $movie->category = "series";
		// $movie->desc = "'Avatar' is the story of an ex-Marine who finds himself thrust into hostilities on an alien planet filled with exotic life forms. As an Avatar, a human mind in an alien body, he finds himself torn between two worlds, in a desperate fight for his own survival and that of the indigenous people.";
		// $movie->name = "Avatar";;
		// $movie->year = 2009	;
		// $movie->mood= "Sad"	;
		// $movie->timestamp = "2009-11-12 00:00:01";
		// $movie->img = "client/assets/21.jpg";
		// $movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		// $movie->id_director = 0;
		// $movie->save();
		// $movie->reviews()->sync([1,2	]);
		// $movie->genres()->sync([3,6,14,16,17	]);
		// $movie->stars()->sync([21,22,23	]);
		
		$movie = new Movies();
		$movie->category = "series";
		$movie->desc = "When a former NAVY Seal incurs the wrath of a dangerous gangster, he must mend fences with an old friend in order to escape death and protect his family. If you mess with Bobby (Rob Van Dam)'s family, you're going to pay the price. The corrupt nightclub owner who brutalized his wife found that out the hard way when Bobby sent the scumbag to an early grave. Now, the club owner's brother is gunning for revenge. He's put out a contract on Bobby, and kidnapped his daughter. If Bobby ever wants to see his little girl again, he'll need the help of his old ally Ronnie (David Bautista). Though Bobby and Ronnie haven't been on the best of terms lately, Ronnie agrees to put their differences aside to help save his old friend's family. It won't be easy, but then again if it were, it wouldn't be any fun either. ~ Jason Buchanan, Rovi";
		$movie->name = "Wrong Side of Town";;
		$movie->year = 2010	;
		$movie->mood= "Happy"	;
		$movie->timestamp = "2010-12-13 00:00:01";
		$movie->img = "client/assets/22.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		$movie->id_director = 1;
		$movie->save();
		$movie->reviews()->sync([3,4	]);
		$movie->genres()->sync([4,7,12	]);
		$movie->stars()->sync([24,25,26	]);
		
		$movie = new Movies();
		$movie->category = "series";
		$movie->desc = "Former cop Brian O'Conner (Paul Walker) partners with ex-con Dom Toretto (Vin Diesel) on the opposite side of the law. Dwayne Johnson joins returning favorites Jordana Brewster, Tyrese Gibson, Chris 'Ludacris' Bridges, Matt Schulze, Sung Kang, Gal Gadot, Tego Calderon and Don Omar for this ultimate high-stakes race. Since Brian and Mia Toretto (Brewster) broke Dom out of custody, they've blown across many borders to elude authorities. Now backed into a corner in Rio de Janeiro, they must pull one last job in order to gain their freedom. As they assemble their elite team of top racers, the unlikely allies know their only shot of getting out for good means confronting the corrupt businessman who wants them dead. But he's not the only one on their tail. Hard-nosed federal agent Luke Hobbs (Dwayne Johnson) never misses his target. ";
		$movie->name = "Fast Five";;
		$movie->year = 2011	;
		$movie->mood= "Angry"	;
		$movie->timestamp = "2011-02-07 00:00:01";
		$movie->img = "client/assets/23.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		$movie->id_director = 3;
		$movie->save();

		$movie->reviews()->sync([5,6	]);
		$movie->genres()->sync([5,7,3	]);
		$movie->stars()->sync([27,28,29	]);
		
		$movie = new Movies();
		$movie->category = "series";
		$movie->desc = "From filmmaker Andrew Stanton comes John Carter-a sweeping action-adventure set on the mysterious and exotic planet of Barsoom (Mars). John Carter is based on a classic novel by Edgar Rice Burroughs, whose highly imaginative adventures served as inspiration for many filmmakers, both past and present. The film tells the story of war-weary, former military captain John Carter (Taylor Kitsch), who is inexplicably transported to Mars where he becomes reluctantly embroiled in a conflict of epic proportions amongst the inhabitants of the planet, including Tars Tarkas (Willem Dafoe) and the captivating Princess Dejah Thoris (Lynn Collins). In a world on the brink of collapse, Carter rediscovers his humanity when he realizes that the survival of Barsoom and its people rests in his hands.";
		$movie->name = "John Carter";;
		$movie->year = 2012	;
		$movie->mood= "Frustated"	;
		$movie->timestamp = "2012-07-02 00:00:01";
		$movie->img = "client/assets/24.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		$movie->id_director = 2;
		$movie->save();

		$movie->reviews()->sync([7,8	]);
		$movie->genres()->sync([6,2,3	]);
		$movie->stars()->sync([30,31,32	]);
		
		$movie = new Movies();
		$movie->category = "series";
		$movie->desc = "Vin Diesel, Paul Walker and Dwayne Johnson lead the returning cast of all-stars as the global blockbuster franchise built on speed races to its next continent in Fast & Furious 6. Reuniting for their most high-stakes adventure yet, fan favorites Jordana Brewster, Michelle Rodriguez, Tyrese Gibson, Sung Kang, Gal Gadot, Chris 'Ludacris' Bridges and Elsa Pataky are joined by badass series newcomers Luke Evans and Gina Carano. Since Dom (Diesel) and Brian's (Walker) Rio heist toppled a kingpin's empire and left their crew with $100 million, our heroes have scattered across the globe.";
		$movie->name = "Fast & Furious 6";;
		$movie->year = 2013	;
		$movie->mood= "Frustated"	;
		$movie->timestamp = "2013-03-13 00:00:01";
		$movie->img = "client/assets/25.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		$movie->id_director = 4;
		$movie->save();
		$movie->reviews()->sync([9,10	]);
		$movie->genres()->sync([7	]);
		$movie->stars()->sync([33,34,35	]);
		
		$movie = new Movies();
		$movie->category = "series";
		$movie->desc = "In Summer 2014, the world's most revered monster is reborn as Warner Bros. Pictures and Legendary Pictures unleash the epic action adventure 'Godzilla.' From visionary new director Gareth Edwards ('Monsters') comes a powerful story of human courage and reconciliation in the face of titanic forces of nature, when the awe-inspiring Godzilla rises to restore balance as humanity stands defenseless.";
		$movie->name = "Godzilla";;
		$movie->year = 2014	;
		$movie->mood= "Happy"	;
		$movie->timestamp = "2014-05-06 00:00:01";
		$movie->img = "client/assets/26.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		$movie->id_director = 5;
		$movie->save();
		$movie->reviews()->sync([1,2	]);
		$movie->genres()->sync([8	]);
		$movie->stars()->sync([36,37,38	]);
		
		$movie = new Movies();
		$movie->category = "series";
		$movie->desc = "In 1947, Dalton Trumbo (Bryan Cranston) was Hollywood's top screenwriter until he and other artists were jailed and blacklisted for their political beliefs. TRUMBO (directed by Jay Roach) recounts how Dalton used words and wit to win two Academy Awards and expose the absurdity and injustice of the blacklist, which entangled everyone from gossip columnist Hedda Hopper (Helen Mirren) to John Wayne, Kirk Douglas and Otto Preminger.";
		$movie->name = "Trumbo";;
		$movie->year = 2015	;
		$movie->mood= "Angry"	;
		$movie->timestamp = "2015-09-09 00:00:01";
		$movie->img = "client/assets/27.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";
		$movie->id_director = 6;
		$movie->save();
		$movie->reviews()->sync([3,4	]);
		$movie->genres()->sync([1]);
		$movie->stars()->sync([39,40,]);

		
		$movie = new Movies();
		$movie->category = "series";
		$movie->desc = "The film is told from the point of view of 19-year-old private Billy Lynn, who, along with his fellow soldiers in Bravo Squad, has been hailed as a hero and brought home for a victory tour after a harrowing Iraq battle. Through flashbacks, culminating at the spectacular halftime show of the Thanksgiving Day football game, the film reveals what really happened to the squad - contrasting the realities of the Iraq conflict with America's celebration back home.";
		$movie->name = "Billy Lynn's Long Halftime Walk5";
		$movie->year = 2016;
		$movie->mood= "Optimistic"	;
		$movie->timestamp = "2016-09-10 00:00:01";
		$movie->img = "client/assets/28.jpg";
		$movie->trailer = "https://www.youtube.com/embed/svnAD0TApb8";;
		$movie->id_director = 7;
		$movie->save();
		$movie->reviews()->sync([5,6	]);
		$movie->genres()->sync([10]);
		$movie->stars()->sync([36,37,38	]); 
	}
}