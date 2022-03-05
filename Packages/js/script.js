function loadData(name)

{ 
    if(name == "about")
    {
        document.getElementById("para").innerHTML="SERENDIPITY is a flagship digital consumer brand. Available in English detailed and accurate travel content designed to inspire global travellers. It covers all aspects, from cities to airports, cruise ports to ski and beach resorts, attractions to events, and it also includes offbeat travel news, stories and guides for adventurous travellers will have you feeling like a local in no time. Updated every day by a dedicated global editorial team, the portal logs 1 million+ unique users monthly.";
        document.getElementById("image1").src="Images/logo.jpg";
    }
    else if(name == "pkg1")
    {
        document.getElementById("para").innerHTML="<h2>Highlights</h2><br>Discover the best of Sri Lanka by car,<br>Relax on beautiful Sri Lanka beaches,<br>Visit the Dambulla Cave Temple and Matale spice garden,<br>Savour traditional food and try fresh ceylon tea,<br>Sunbathe, dive and snorkel in Benthota.<br><br><br> <h2>Iteranary</h2><br>Start and end in Negombo! With the Discovery tour Lifetime Experience In Sri Lanka, you have a 8 days tour package taking you through Negombo, Sri Lanka and 12 other destinations in Sri Lanka. Lifetime Experience In Sri Lanka includes accommodation in a hotel as well as an expert guide, insurance, meals, transport and more. View the country for more details <br><br><a class='view' href='../Countries/Sri Lanka.html'>>>Click here to view country<< </a>";
        document.getElementById("image1").src="Images/sri-lanka-282949_1920.jpg";
    }
    else if(name == "pkg2")
    {
        document.getElementById("para").innerHTML="<h2>Highlights</h2><br>Behold Waitomo's glowworm caves,<br>Hike the famous Tongariro Crossing,<br>Go whitewater rafting down Kaituna River<br>Enjoy the best of Wellington,<br>Experience Maori culture directly from the Maori,<br><br><br> <h2>Iteranary</h2><br>Start in Auckland and end in Wellington! With the Adventure tour North Island Adventure Tour, you have a 7 days tour package taking you through Auckland, New Zealand and 9 other destinations in New Zealand. North Island Adventure Tour includes accommodation in a hostel as well as an expert guide, meals, transport and more. View the country for more details <br><br><a class='view' href='../Countries/New Zealand.html'>>>Click here to view country<< </a>";
        document.getElementById("image1").src="Images/NZ.jpg";
    }
    else if(name == "pkg3")
    {
        document.getElementById("para").innerHTML="<h2>Highlights</h2><br>Start and end in Dubai! With the discovery tour Dubai Express - 4 days, you have a tour package taking you through Souk of Species, the Gold Souk; crossing the Canal by Abra (Water Taxi) arrival & visit to the Dubai Museum, Includes accommodation in a hotel as well as an expert guide, meals, transport, and more.<br><br><br> <h2>Iteranary</h2><br>Start and end in Dubai! With the Explorer tour Dubai Express - 4 days, you have a 4 days tour package taking you through Dubai, United Arab Emirates. Dubai Express - 4 days includes accommodation, an expert guide, meals, transport and more. View the country for more details <br><br><a class='view' href='../Countries/Dubai.html'>>>Click here to view country<< </a>";
        document.getElementById("image1").src="Images/Dubai.jpg";
    }
    else if(name == "pkg4")
    {
        document.getElementById("para").innerHTML="<h2>Highlights</h2><br>5 days tour in the most romantic cities of Italy. Discover iconic sites together with hidden corners that only locals know. Experience the Venetian aperitivo style in the Jewish Ghetto and the Gelato in Florence. Admire the majestic palaces of Venice on board an historical Gondola and the art masterpieces with a guided tour at Uffizi Gallery.<br><br><br> <h2>Iteranary</h2><br>Start in Venice and end in Florence! With the Sightseeing tour Romantic Italy: Venice & Florence, you have a 5 days tour package taking you through Venice, Italy and Florence,. Romantic Italy: Venice & Florence includes accommodation in a hotel as well as an expert guide, transport. View the country for more details <br><br><a class='view' href='../Countries/Italy.html'>>>Click here to view country<< </a>";
        document.getElementById("image1").src="Images/Italy.jpg";
    }
    else if(name=="pkg5")
    {
        document.getElementById("para").innerHTML="<h2>Highlights</h2><br>The Pantanal straddles the borders of Brazil, Paraguay and Bolivia and is the world's largest wetland region. Its plains and low scrubby forests are home to over 1000 species of bird and 300 different mammals, including tapirs, anteaters, Jabiru storks and the striking Hyacinth macaw. Concentrating on the incredibly rich northern Pantanal in the southwest of Brazil, we divide our time between two lodges in different areas of the Pantanal, journeying deep into the Pantanal in search of the jaguar, the largest and most elusive feline in the Americas. These solitary predators, as well as being formidable opponents on land, are strong swimmers and are known to frequent the waterways we will explore.<br><br><br> <h2>Iteranary</h2><br>Start and end in Cuiaba! With the Wildlife tour Land of the Jaguar, you have a 9 days tour package taking you through Cuiaba, Brazil and Caceres,. Land of the Jaguar includes accommodation in a hotel as well as an expert guide, meals, transport. View the country for more details <br><br><a class='view' href='../Countries/Brazil.html'>>>Click here to view country<< </a>";
        document.getElementById("image1").src="Images/rio.jpg"
    }
    else
    {
        alert("Invalid ID");
    }
}
function priceforloop()
{
    var prices = ["Sri Lanka One Life Adventure = USD 600 /= ","North Island Adventure - New Zealand = USD 1000 /=","Magestic Dubai = USD 2000 /= ","Romantic Italy = USD 1500 /= ","Rio Getaway = USD 900 /= "];
    var list = "<h2>Average package prices</h2> <br><br><br>";
    for(var item in prices){
        list += prices[item]+"<br><br>";
    }
    document.getElementById("para").innerHTML=list;
    document.getElementById("image1").src="Images/price.png";
}
function priceHigher()
{
    var package = [];
    package["Sri Lanka One Life Adventure"] = 600;
    package["North Island Adventure - New Zealand"] = 1000;
    package["Magestic Dubai"] = 2000;
    package["Romantic Italy"] = 1500;
    package["Rio Getaway"] = 900;


    var pricehigh = "<h2>Packages which price more than USD 1200 </h2><br><br>";
    for(var item in package)
    {
        if(package[item]>=1200)
        {
            pricehigh += item + " - " + "USD " + package[item]+ "<br><br>";
        }
    }
    
    document.getElementById("para").innerHTML=pricehigh;
    document.getElementById("image1").src="Images/high.jpg";

}
function priceLower()
{
    var package = [];
    package["Sri Lanka One Life Adventure"] = 600;
    package["North Island Adventure - New Zealand"] = 1000;
    package["Magestic Dubai"] = 2000;
    package["Romantic Italy"] = 1500;
    package["Rio Getaway"] = 900;

    var pricelow = "<h2>Packages which price lower than USD 1000 </h2><br><br>";
    for(var item in package)
    {
        if(package[item]<=1000)
        {
            pricelow += item + " - " + "USD "+ package[item]+"<br><br>"; 
        }
    }

    document.getElementById("para").innerHTML=pricelow;
    document.getElementById("image1").src="Images/low.jpg";

}