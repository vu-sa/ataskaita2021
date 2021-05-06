<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @include('head')

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
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
  background-image:url('/img/MAIN_COVER.png');
  background-size:cover;
  background-position:center top;
  height:100vh;
  background-repeat: no-repeat;
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
            <a href="#sveikinimai">Congratulations</a>
            <a href="#veiklos-principai">Principles of Activity</a>
            <a href="#mvp">YAP</a>
            <a href="#atstovavimas">Representation </a>
            <a href="#savivalda">Self-government </a>
            <a href="#bendruomene">Community </a>
            <a href="#padeka">Acknowledgments</a>
            <a href="./">LT</a>
        </div>
    </div>

    <div class="showcase">
        <!--<h1>Welcome To The Beach</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi officiis ipsum officia numquam expedita ullam.</p>-->
    </div>

    
    
        <div lang="fr" class="container-lg" >
            <main class="page-content col-xl-12 flex-shrink-0" style= stylesheet id="content">
            <br>
                @include('texts.sveikinimas_en')
                <hr>
                @include('texts.veiklos_principai_en')
                <hr>
                @include('texts.MVP_en')
                <hr>
                @include('texts.kokybiskos_en')
                <hr>
                @include('texts.stipri_en')
                <hr>
                @include('texts.darni_en')
                <hr>
                @include('texts.sritys_en')
                <hr>
                @include('texts.draugai_en')
                <hr>
            </main>
        </div>
    </div>
    </body>
</html>
