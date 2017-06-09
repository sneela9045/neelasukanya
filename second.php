<!DOCTYPE html>
<html>

<head>
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js" type="text/javascript"></script>
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height: 300px;
}

/* Style the buttons inside the tab */
div.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
div.tab button.active {
    background-color: #ccc;
}
#panel{ }


/* Style the tab content */
.tabcontent {
	display: none;
    float: right;
	column-count: 2;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 300px;
}
.tabcontent h3{ column-span: all;text-align:center;}
</style>
</head>
<body>

<?php
$badgeArray = '[
{"game": "Royal Ruckus",

"badges": ["Approximate Beatdown", "Huge Money", "Taste the Rainbow", "Done & Dungeon", "Let\'s Rage"]
},

{"game": "Cake\'s Tough Break",

"badges": ["Nip It!", "Yay BMO!", "One Fast Cat", "Hang In There, Baby", "Piece of Cake", "Super Amadeus"]

},

{"game": "Lemon Break",

"badges": ["Lemon Aid", "Sweet Kicks", "BMO Hope", "Elephant Prowess", "Unacceptable Escape"]
},

{"game": "Finn & Bones",

"badges": ["Rock Family Tree", "Clash of Bones", "Chemistry 101", "Mix Master", "Kiss of Death"]

}]';
$badgeArray=str_replace("'","&#039;",$badgeArray);
function jsonPrint($jsonArray) {
    $json=json_decode($jsonArray,true);

//print_r($json);
echo '<div class="tab">';
	for ($i = 0; $i < count($json); $i++) 
	{?>
	<button class='tablinks' onclick='openCity(event, "<?php echo $json[$i]['game'] ?>")' ><?php echo $json[$i]['game'] ?></button>
<?php
		//echo "<button class='tablinks' onclick='openCity(event, '$json[$i]["game"]')' id='defaultOpen'>".$json[$i]['game']."</button>";
	}
echo '</div>';
for ($i = 0; $i < count($json); $i++) 
	{?>
	<div id="<?php echo $json[$i]['game'] ?>" class='tabcontent'><ul>
		<?php
		echo '<h3>'.$json[$i]['game'].'</h3>';
		for ($j = 0; $j < count($json[$i]['badges']); $j++)
			echo '<li>'.$json[$i]['badges'][$j].'</li><br>';
		echo "</ul></div>";
	}	
}

jsonPrint($badgeArray);
	
?>



</body>
</html>