<!DOCTYPE html>
<head>
<title>Parku Arberia</title>
<link rel="stylesheet" href="style.css">

<style>
    .germia{
        
        margin-top: 12%;
        margin-left: -10%;
        border-radius: 5px;
    }
    #all{
        display: inline-flex;
        width:100%;
    }

    #FotoGermia{
    margin-top: 50px;
    border-radius: 5px;
    margin-left: 55px;
    margin-right: 15px;
    margin-bottom: -14%;
    height: 400px;
   
     
    }
    #pershkrimi {
        font-size: 20px;
        color: black;
        background-color: white;
        border-radius: 3px;
        padding: 5px;
        margin-left: 5px;
        width: 800px;

    }
    #kord{
        background-color: grey;
        font-size: 20px;
        color: black;
        width: 600px;
        height: 120px;
        border-radius: 3px;
        padding: 5px;
        margin-left: -43%;
        margin-top: 35%;
        
    }
    #gp{
    margin-left: 30px;
        font-size: 45px;
        color: black;
        text-align: left;
        padding: 15px;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        
    }
    #linku{
        margin-left: -15px;
        margin-top: -15px
    }
    
    </style>
</head>
<body>
<div class="HomeMiddle" style="background-image: url('media/element_long.497cfb51.png'); ">

<?php include "./myna.php"; ?>

    <div id="all">
    <div id="ipari">
        <div>
            <img id="FotoArberia" src="media/ParkuArberia" width="650" height="480" alt="Parku i Germise-Prishtine">
        </div>
        
        <div id="pershkrimi">
        <p id="gp">ARBERIA PARK</p>
        Renovated in 2013 with EU funding, it includes tracks, a playground, a football field, a café, a giant chessboard and outdoor sports facilities. The park and the neighbouring district are named after the province of Arberia, in the centre of present-day Albania, which was the first autonomous Albanian political entity in the 13th century within the Byzantine Empire.
        </div>
        <br>
        
    </div>
    <div id="dyti">
    <div class="germia"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Parku Arbëria&amp;t=k&amp;z=10&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fridaynightfunkin.net/">Friday Night Funkin PC</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style></div>

    </div>
    <br>
    <div id="kord">
            <ul>
                <li><b>   Country:</b> Kosova</li><br/>
                <li><b>   City:</b> Prishtina</li><br/>
                <li><b>   Area:</b> 16 ha</li><br/>
                <li id="linku"><a href="https://www.google.com/maps/place/Parku+Arb%C3%ABria,+Stambolli,+Prishtin%C3%AB/@42.6688109,21.1483577,16.83z/data=!4m5!3m4!1s0x13549f028b956177:0x1931b3fb59c7feb4!8m2!3d42.6683992!4d21.1514826" target="_blank"><b>Coordinates:</b> 42.6688109,21.1483577</a></li>

            </ul>
        </div>
    </div>
    <br>
    <hr>
    <?php include "./footer.php"; ?>
    <hr/>
</body>
</html>