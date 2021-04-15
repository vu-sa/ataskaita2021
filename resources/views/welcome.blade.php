<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @include('head')

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
.dropbtn {
  background-color: #BD2835;
  font-weight: bold;
  color: white;
  padding-top: 15px;
  padding-right: 40px;
  padding-bottom: 15px;
  padding-left: 40px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  margin: 10px;
  border-radius: 10px;
}

.dropdown {
  position: fixed;
  display: inline-block;
}

.socialsButton {
  position: fixed;
  display: inline-block;
  top: 80%;
  left: 90%;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.showcase{
  background-image:url('https://scontent.fvno2-1.fna.fbcdn.net/v/t1.6435-9/171456224_10158433942764285_4013812937424541020_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=340051&_nc_ohc=vVIKVJ5MPg0AX8RB7lm&_nc_ht=scontent.fvno2-1.fna&oh=1ec6a8b18f8e614bc6c2a7ad6ed15f3f&oe=609BEDC7');
  background-size:cover;
  background-position:center;
  height:100vh;
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
  text-align:center;
}


.dropdown-content a:hover {background-color: #f1f1f1;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #aa242f;}
</style>
        
    
    </head>
    <body>
        <div class="dropdown" style="float:left;">
        <button class="dropbtn">Menu</button>
        <div class="dropdown-content" style="left:0;">
            <a href="#">Sveikinimai</a>
            <a href="#veiklos-principai">Veiklos principai</a>
            <a href="#mvp">MVP</a>
            <a href="#">Atstovavimas </a>
            <a href="#">Savivalda </a>
            <a href="#">Bendruomenė </a>
            <a href="#">Padėka </a>
        </div>
    </div>

    <div class="showcase">
        <!--<h1>Welcome To The Beach</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi officiis ipsum officia numquam expedita ullam.</p>-->
    </div>

    

        <div class="container-lg" >
            <main class="page-content col-xl-9 flex-shrink-0" style="margin-top: 3em" id="content">
                @include('texts.veiklos_principai')
                <hr>
                @include('texts.MVP')
                <hr>
                @include('texts.draugai')
                <hr>
            </main>
        </div>
    </div>
    </body>
</html>
