<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Piotr Tomaszewski</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
       .navBar{
           background-color: #4392F1;
           padding: 1%;
          
       }
       .Pname{
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
        font-family: 'Roboto', sans-serif;
           color:white;
           font-size: 30px;
           font-weight: 700;
           
       }
       .marks{
           float :right;
           display:flex;
           flex-direction: column;
         margin:5px;

       }
        body{
                font-family: 'Nunito', sans-serif;
                 margin:0;
                 background-color: #ECE8EF;
            }
            footer{
                background-color: #DC493A;
                position: fixed;
            padding: 10px 10px 0px 10px;
            bottom: 0;
            width: 100%;
            /* Height of the footer*/ 
            height: 30px;
            color:white;
            text-align: center;
            font-size: 15px;
            }
            .content{
               text-align: center;
            }
            .whoAmI{
                margin-top:2%;
    right: 0;
    left: 0;
    margin-right: auto;
    margin-left: auto;
                width:35%;
                text-align: center;
                
            }
            .myGames{
                border: none;
            
            }
            .calendar{
                margin-top: 5%;
                margin-bottom: 10%;
            }
    
        </style>
    </head>
    <body class="antialiased">
        <div class="navBar">
            <a class="marks" href="https://github.com/DANIEC7909"><img src="{{ asset('/ghmark.png') }}" alt="My GitAccount"></a>
            <a class="marks" href="https://www.linkedin.com/in/piotr-tomaszewski-384324202"><img src="{{asset('/linkedinlog.png')}}" alt="My Linkedin profile"></a>
            <div class="Pname">
            Piotr Tomaszewski 
            </div>
        </div>

        <div class="content">

            <div class="whoAmI">
                <h2 >{{$AboutMe}}</h2>
            </div>
            <div class="myGames" >
                <iframe frameborder="0" src="https://itch.io/embed/1302784?border_width=0&amp;bg_color=ECE8EF&amp;fg_color=000000&amp;border_color=ffffff" width="550" height="165"><a href="https://trezzel-studios.itch.io/fishingrodfever">Fishing rod Fever by TREZZEL Studios</a></iframe>
            </div>
        <h3 class="GitActivity">Aktywność GitHub</h3> <img  src="{{ asset('/ghmark.png') }}" alt="GitHubLogo"></a>
            <!-- Prepare a container for your calendar. -->
            <script
            src="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.min.js"
            >
            </script>

            <!-- Optionally, include the theme (if you don't want to struggle to write the CSS) -->
            <link
            rel="stylesheet"
            href="https://cdn.rawgit.com/IonicaBizau/github-calendar/gh-pages/dist/github-calendar.css"
            />

            <!-- Prepare a container for your calendar. -->
            <div class="calendar">
            <!-- Loading stuff -->
            Loading the data just for you.
            </div>

            <script>
            new GitHubCalendar(".calendar", "DANIEC7909");
            </script>
        </div>

        <footer>
            Piotr Tomaszewski 2022r.
        </footer>
    </body>
</html>
