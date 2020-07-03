<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Country Map Example</title>
    <script src="mapdata.js"></script>
    <script src="countrymap.js"></script>
      <script>
      function verify(){
          var elm = document.getElementById("map");
          var e = elm.getElementsByTagName("path");
          var la = document.getElementById("lable");
          var Tozeur = elm.getElementsByClassName("sm_state_TUN101");
          var Manubah = elm.getElementsByClassName("sm_state_TUN102");
          var Béja = elm.getElementsByClassName("sm_state_TUN103");
          var Ben_Arous = elm.getElementsByClassName("sm_state_TUN104");
          var Bizerte = elm.getElementsByClassName("sm_state_TUN105");
          var Jendouba = elm.getElementsByClassName("sm_state_TUN106");
          var Nabeul = elm.getElementsByClassName("sm_state_TUN107");
          var Tunis = elm.getElementsByClassName("sm_state_TUN108");
          var Le_Kef = elm.getElementsByClassName("sm_state_TUN109");
          var Kassérine = elm.getElementsByClassName("sm_state_TUN110");
          var Gabès = elm.getElementsByClassName("sm_state_TUN111");
          var Gafsa = elm.getElementsByClassName("sm_state_TUN112");
          var Sidi_Bou_Zid = elm.getElementsByClassName("sm_state_TUN113");
          var Sfax = elm.getElementsByClassName("sm_state_TUN114");
          var Siliana = elm.getElementsByClassName("sm_state_TUN115");
          var Mahdia = elm.getElementsByClassName("sm_state_TUN116");
          var Monastir = elm.getElementsByClassName("sm_state_TUN117");
          var Kairouan = elm.getElementsByClassName("sm_state_TUN118");
          var Sousse = elm.getElementsByClassName("sm_state_TUN119");
          var Zaghouan = elm.getElementsByClassName("sm_state_TUN120");
          var Médenine = elm.getElementsByClassName("sm_state_TUN96");
          var Kebili = elm.getElementsByClassName("sm_state_TUN97");
          var Tataouine = elm.getElementsByClassName("sm_state_TUN98");
          Tozeur[0].onclick = function(){
              loadRegion("tozeur");
          };
          Manubah[0].onclick = function(){loadRegion("Manubah");};
          Béja[0].onclick = function(){loadRegion("Beja");};
          Ben_Arous[0].onclick = function(){loadRegion("Ben_Arous");};
          Bizerte[0].onclick = function(){loadRegion("Bizerte");};
          Jendouba[0].onclick = function(){loadRegion("Jendouba");};
          Nabeul[0].onclick = function(){loadRegion("Nabeul");};
          Tunis[0].onclick = function(){loadRegion("Tunis");};
          Le_Kef[0].onclick = function(){loadRegion("Kef");};
          Kassérine[0].onclick = function(){loadRegion("Kasserine");};
          Gabès[0].onclick = function(){loadRegion("Gabes");};
          Gafsa[0].onclick = function(){loadRegion("Gafsa");};
          Sidi_Bou_Zid[0].onclick = function(){loadRegion("Sidi_Bou_Zid");};
          Sfax[0].onclick = function(){loadRegion("Sfax");};
          Siliana[0].onclick = function(){loadRegion("Siliana");};
          Mahdia[0].onclick = function(){loadRegion("Mahdia");};
          Monastir[0].onclick = function(){loadRegion("Monastir");};
          Kairouan[0].onclick = function(){loadRegion("Kairouan");};
          Sousse[0].onclick = function(){loadRegion("Sousse");};
          Zaghouan[0].onclick = function(){loadRegion("Zaghouan");};
          Médenine[0].onclick = function(){loadRegion("Medenine");};
          Kebili[0].onclick = function(){loadRegion("Kebili");};
          Tataouine[0].onclick = function(){loadRegion("Tataouine");};
                
          
      }
          function loadRegion(nameRegion){
              document.getElementById("lable").innerHTML = "waiting";
              var xhttp = new XMLHttpRequest();
              xhttp.onreadystatechange = function(){
                  if(this.readyState == 4 && this.status == 200){
                      document.getElementById("lable").innerHTML = this.responseText;
                  }
              };
              xhttp.open("GET", "Region.php?q="+nameRegion , true);
              xhttp.send();
          }
      
      </script>
  </head>
  <body onload="verify()">
  <h1>HTML5/Javascript Country Map</h1>
    <div id="map"></div>
    
    
        <lable id="lable"> aaaaaa</lable>
		
</div>
		<div class="map__liste">
		</div>
	</id>
	</body>
</html>
      
    

