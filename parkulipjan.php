<!DOCTYPE html>
<head>
<title>Parku Lipjan</title>
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
            <img id="FotoParkuLipjan" src="media/ParkuLipjan.jpg" width="650" height="480" alt="Parku i Qytetit-Lipjan">
        </div>
        
        <div id="pershkrimi">
        <p id="gp">LIPJAN CITY PARK</p>
        Park of Lipjan City offers you little stages when you can ride with your family. So, it is not a professional biking stage park, but very familiar.
        </div>
        <br>
        
    </div>
    <div id="dyti">
    <div class="germia"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Germia Park&amp;t=k&amp;z=10&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fridaynightfunkin.net/">Friday Night Funkin PC</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style></div>


    </div>
    <br>
    <div id="kord">
            <ul>
                <li><b>   Country:</b> Kosova</li><br/>
                <li><b>   City:</b> Prishtina</li><br/>
                <li><b>   Area:</b> 2 ha</li><br/>
                <li id="linku"><a href="https://geohack.toolforge.org/geohack.php?pagename=Parku_i_G%C3%ABrmis%C3%AB&params=42_40_22.8_N_21_11_42_E_type:landmark_" target="_blank"><b>Coordinates:</b> 42° 40′ 22.8″ N, 21° 11′ 42″ E</a></li>

            </ul>
        </div>
    </div>
    <br>
    <hr>
    <?php include "./footer.php"; ?>
    <hr/>
</body>
</html>