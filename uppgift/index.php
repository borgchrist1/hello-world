
<?php
//the pages users
$users = [ "user1" => [ "name" => "Tommy Håfrewik", "userId" => "Fredde", "password" => "123" ],
           "user2" => [ "name" => "Trobjörn Svensson", "userId" => "Tobbe", "password" => "123" ],
           "user3" => [ "name" => "Pär Lindström", "userId" => "Perra", "password" => "123" ],
           "user4" => [ "name" => "Lars Erik Karlsson", "userId" => "Lasse", "password" => "123" ],
           "user5" => [ "name" => "Bo Larsson", "userId" => "Bosse", "password" => "123" ]];
// array containing all posts from the users in user array
$posts = [ [ "title" => "Google delar fotografier som fångats med Pixel", "content" => "När Google presenterade Pixel och Pixel XL i tisdags stoltserade företaget med telefonernas kameraprestanda. Google berättade att Pixel fått högsta resultatet någonsin för en smartphone av DxoMark och talade varmt om kamerans hastighet, videostabilisering och förmåga att ta bilder i dunkel.", "img" => "img/bild1.jpg", "athor" => $users['user2']['userId'], "date" => date("d"), "likes" => 0 ],
[ "title" => "Michael Del Zotto will miss a month or more due to an injury", "content" => "Add Michael Del Zotto’s name to the injured list. The Flyers announced on Friday afternoon that the defenseman will miss four to five weeks with an undisclosed lower body injury. That’s just a crushing blow to the team’s defense.Del Zotto missed the stretch run of the 2015-16 season, plus the playoffs, with a wrist injury, and now this lower-body injury is just another blow for him. He left the third period of Thursday night’s preseason game against the New York Rangers, but we’re still in the dark as to exactly what his ailment might be.", "img" => "img/bild2.jpg", "athor" => $users['user2']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "Emilio gör comeback - två år efter avstängningen", "content" => "Minuterna tickar ner till den stund då CS:GO-proffset Joel Emilio Mako har avtjänat hela sin VAC-avstängning och får en andra chans på stora turneringar världen över.
Nu kan Sportbladet berätta att den kontroversiella svensken är aktuell i en ny tillfällig lina, tillsammans med spelare som Markus pronax Wallsten.
– Många kommer nog hata på mig, men jag har inte riktigt brytt mig. Mitt fokus ligger på mig själv och se till så jag tar mig framåt, säger svensken om sin comeback.", "img" => "img/bild3.jpg", "athor" => $users['user2']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "Michael Bisping wears cuts and bruises with pride in Manchester city centre following UFC 204 win", "content" => "Michael Bisping could have been forgiven for staying at home following his bruising win on Saturday at UFC 204 in Manchester .
But the UFC middleweight champion, who retained his title against American Dan Henderson at the Manchester Arena was spotted in the city centre on Monday and took time to pose for fan photos.", "img" => "img/bild4.jpg", "athor" => $users['user2']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "This is the first image from Sony's upcoming Emojimovie", "content" => "As the above image shows, Sony’s The Emoji Movie is actually real, and not an April Fools' joke that has refused to die. The newly renamed — to the somehow even worse — Emojimovie: Express Yourself will tell the story of Gene, an emoji who breaks the codified existence of the Emoji-verse by being born without a filter, and is capable of multiple facial expressions. Sounds familiar.", "img" => "img/bild5.jpg", "athor" => $users['user2']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "Alleged Anonymous hacker stages hunger strike to protest prosecution", "content" => "Two and a half years after a denial-of-service attack froze a Boston hospital’s network, the alleged attacker is staging a hunger strike to protest abuse in juvenile behavior modification facilities. Today, Martin Gottesfeld entered the seventh day of the strike, demanding renewed investigation of the facilities and an end to prosecutions targeting Anonymous.
", "img" => "img/bild6.jpg", "athor" => $users['user1']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "How the Geometry of Movies Can Change the Way We Think", "content" => "Circles. Triangles. Squares. Those aren’t the things you expect to see in a movie but films have been using shapes to subtly influence emotion for a long time. Circles are lovable, triangles are evil, and squares are boring. Now You See It highlights the geometry used in shots to show you how movies use shapes to manipulate your feelings.", "img" => "img/bild7.gif", "athor" => $users['user1']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "Samsung's exploding Galaxy Note 7 saga comes to a halt", "content" => "The Galaxy Note 7's days may be numbered.
Samsung said Monday it is temporarily adjusting the Galaxy Note 7 production schedule in order to take further steps to ensure quality and safety matters.
There's no word on how long the adjustment would take.", "img" => "img/bild8.jpg", "athor" => $users['user1']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "Google: There's No Hub Like Home", "content" => "No longer willing to let Amazon have the space to itself, Google on Tuesday officially launched Google Home, its long-awaited wireless hub. Google Home is an interactive personal assistant and entertainment center that takes full advantage of the company's deep advantages in Web search, AI and machine learning.", "img" => "img/bild9.jpg", "athor" => $users['user1']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "Google Plasters Its Name on a New Hardware Collection", "content" => "Google on Tuesday unveiled a new smartphone and home hub that squarely aim at products from market leaders Apple and Amazon.
The company's new branded smartphone, called Pixel, marks a departure from past efforts. Up to now, Google's Nexus phones were made by a variety of manufacturers that sold them under their brands", "img" => "img/bild10.jpg", "athor" => $users['user1']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "The Lack of Strategic Thinking in Election 2016", "content" => "One of the problems facing the technology industry right now is the critical lack of strategic thinking. Hedge fund managers and activist investors increasingly are directing companies, forcing tactical decisions that raise stock prices over the short term, largely by destroying the firm's long-term viability. What makes this trend particularly problematic is that most top executives don't seem to understand they are destroying their companies until it's too late.", "img" => "img/bild11.jpg", "athor" => $users['user3']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "Early Reviews Fuel High Hopes for Civilization VI", "content" => "Early hands-on previews of Civilization VI came out Thursday, and those who had a chance to partake in the turn-based PC game found that it successfully built on the foundation of the past versions, while bringing some fresh changes to the experience.", "img" => "img/bild12.jpg", "athor" => $users['user3']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "Kirt McMaster inte längre VD för Cyanogen Inc", "content" => "Kirt McMaster är inte längre VD för Cyanogen Inc utan har istället blivit utsedd till utvecklarens vice ordförande. Ledningsförändringen sägs vara del av Cyanogens nya struktur och riktning.", "img" => "img/bild13.png", "athor" => $users['user3']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "Gartner: Iphone-försäljningen sjunker 2016 – men ökar snart igen", "content" => "Konsultfirman Gartner, som även råkar syssla med undersökningar, förutspår att Iphone-försäljningen kommer att fortsätta sjunka under 2016 för att få en ökning under nästa år. Detta skriver 9to5Mac.", "img" => "img/bild14.jpg", "athor" => $users['user3']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "Iphones utsatta för avancerad avlyssning", "content" => "En israelisk hackergrupp vid namn NSO har dragit nytta av tre säkerhetsproblem i Iphonetelefoner. Flera av Apples produkter är nu utsatta för avlyssning, skriver New York Times.
Apple uppmanar nu användare att uppdatera programvaran på sina telefoner så fort som möjligt.", "img" => "img/bild15.jpg", "athor" => $users['user3']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "iPad Mini Pro kommer i vår", "content" => "Nya rykten säger att Apple jobbar på att uppdatera minstingen i iPad-familjen och att standardmodellen blir något större.
Både Macotakara och KGI skriver att Apple planerar att uppdatera samtliga iPads under våren 2017. Främst är det iPad Mini Pro som är i fokus och som likt sina större syskon ska utrustas med 4 st högtalare, 12 MP iSight-kamera med True Tone blixt, Smart Connector för tangentbord, och en True Tone display.", "img" => "img/bild16.jpg", "athor" => $users['user4']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "Stratolaunch to Launch Pegasus Rockets", "content" => "WASHINGTON — Stratolaunch Systems will use the giant aircraft the company is currently developing to launch Pegasus rockets from Orbital ATK as part of a multi-year partnership, the two companies announced Oct. 6.
", "img" => "img/bild17.jpg", "athor" => $users['user4']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "Massive Gas Cloud Will Collide With Milky Way, Eventually", "content" => "Smith’s Cloud, named after an astronomy student that discovered it in 1963, will collide with the Perseus Arm of the Milky Way galaxy in about 30 million years. It will result in a  brilliant burst of star formation, according to NASA.", "img" => "img/bild18.jpg", "athor" => $users['user4']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "Spider-Man: Sony Chairman Promises ‘Real News’ on Spinoffs Soon", "content" => "After becoming one of the biggest comic book adaptations of all time, Sony’s initial Spider-Man trilogy left the studio in a precarious position, between the tepid response to Spider-Man 3 and rising costs required to make Spider-Man 4. The studio opened to reboot the series in 2012 with The Amazing Spider-Man, a film that aimed to offer a fresh take on everyone’s favorite friendly neighborhood Spidey.", "img" => "img/bild19.jpg", "athor" => $users['user4']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "‘Bad Moms’ to Get ‘Bad Dads’ Spinoff, aka Every Other Comedy Ever Made", "content" => "Looks like the studio behind Bad Moms is creeping in on Wes Anderson’s territory: STX Entertainment is reportedly developing a spinoff to this summer’s hit comedy, this time focusing on not-so-great dads. Let’s be honest, though — Bad Dads could describe Wes Anderson’s whole filmography (there’s even an Anderson art tribute show and book with that title), but it could also easily describe most studio comedies.", "img" => "img/bild20.jpg", "athor" => $users['user4']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "Aladdin Live-Action Movie Gets Director Guy Ritchie", "content" => "Disney has brought on director Guy Ritchie to take the helm on the studio's upcoming live action remake of their 1992 animated hit Aladdin. John August has been set to write the script, with Dan Lin producing through his Lin Pictures company. The project has been described as an ambitious and non-traditional take on the beloved story.", "img" => "img/bild21.jpg", "athor" => $users['user5']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "John Wick 3 Already Happening, Story Details Emerge", "content" => "Over the weekend, Lionsgate brought Keanu Reeves and director Chad Stahelski to New York Comic Con to unveil the first trailer for John Wick: Chapter 2, which will hit theaters on February 10, 2017. While we still don't know if the sequel will fare better than the original at the box office quite yet, it seems Lionsgate is already developing yet another follow-up, John Wick 3. ", "img" => "img/bild22.jpg", "athor" => $users['user5']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "The Dark Tower Trailer Leaks Online", "content" => "Back in August, we reported that the first trailer for the highly-anticipated adaptation of Stephen King's The Dark Tower will debut at Entertainment Weekly's PopFest, which will take place October 29 and October 30 at The Reef in downtown Los Angeles. Today an early, unfinished version of that trailer has leaked online, and we have the full video below. We're not sure how long it will be until this video is taken down, so check it out now before it's too late.", "img" => "img/bild23.jpg", "athor" => $users['user5']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "Wolverine 3 Photos Reveal an Iconic X-Men Villain", "content" => "In the past few days, we've seen quite a few photos from director James Mangold's Instagram. And for the most part, they've been very mysterious black and white images teasing the upcoming X-Men adventure Wolverine 3, which has the confirmed titled Logan. Today, we get a look at one very mysterious location. But that's not all. We also get the reveal of an iconic Marvel villain.", "img" => "img/bild24.jpg", "athor" => $users['user5']['userId'], "date" => "date", "likes" => 0 ],
[ "title" => "Ben Affleck's The Batman: What We Know", "content" => "There are a few uncertainties facing the future of the DC Extended Universe at Warner Bros. One thing we can be certain of though is that Ben Affleck and his take on Bruce Wayne/Batman is here to stay. Now, all eyes are on the next solo Batman movie, which is pretty much riding entirely on the shoulders of Ben Affleck.", "img" => "img/bild25.jpg", "athor" => $users['user5']['userId'], "date" => "date", "likes" => 0 ] ];



$posts = randomDate($posts);
//function to give each post a random date
function randomDate($arr)
{

  foreach ($arr as $key => $value) {
    $num = rand(1376047820, 1476047820);
    $arr[$key]['date'] = date("Y-m-d", $num);


  }
return $arr;

}
//usort function to get oldest post orderd first in the post array
function cmp($a, $b) {
        return $a["date"] - $b["date"];
}
usort($posts, "cmp");
//if the user cklick the like button this block adds 1+ to posts arrays likes value
if($_SERVER['REQUEST_METHOD'] === 'POST'){
$x = intval($_POST["arrayIndex"]);
$i = intval($_POST["Like"]);
$posts[$x]['likes'] = $i + 1;

}



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Ninja News feed</title>
  </head>
  <body>
<header class="head"><div class="head-loggo"><img src="img/cat.png" width="" height="55" /></div><h1>Ninja News feed</h1>
<form method="POST" id="form2">
Username:
<input type="text" name="username" value="" />
Password:
<input type="text" name="password" value="" />
<input type="submit" name="login"  value="Log in" />
</form>
</header>

    <div id="wrapper">

 <?php
 //lopping through posts array and prints its valus to webpage
  foreach ($posts as $key => $value) { ?>
  <article>
    <section class="blogg">
    <header><h2><?php print($value['title']);?></h2></header>
<img src="<?php print($value['img']); ?>" width="750" />
     <p><?php print($value['content']);?></p>
    <footer><small>Skrivet av <?php print($value['athor']." ".$value['date']." ");?></small><form method="POST" id="form1">
<input type="image" src="img/like.jpg" width="20" name="Like" value="<?php print($value['likes']); ?>" /><?php print(" ".$value['likes']) ?>
<input type="hidden" name="arrayIndex"  value="<?php print($key); ?>" />

    </form></footer>
    </section>

    </article>
  <?php } ?>

    </div>

    <footer class="foot"><p>&#169;Ninja News feed 2013, 2017</p></footer>
  </body>
</html>
