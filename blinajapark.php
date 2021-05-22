<!DOCTYPE html>
<head>
<title>Blinaja Park</title>
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

<?php include "./mynav.php"; ?>

    <div id="all">
    <div id="ipari">
        <div>
            <img id="FotoBlinajaPark" src="media/BlinajaPark.jpg" width="650" height="480" alt="Parku i Germise-Prishtine">
        </div>
        
        <div id="pershkrimi">
        <p id="gp">BLINAJA PARK</p>
        Located in Lipjan. Blinaja Park offer to it's visitors over 900 wild animals with an attractive ambient and great nature.
        </div>
        <br>
        
    </div>
    <div id="dyti">
    <div class="germia"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=blinaja park&amp;t=k&amp;z=10&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fridaynightfunkin.net/">Friday Night Funkin PC</a></div><style>.mapouter{position:relative;text-align:right;width:600px;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:600px;height:400px;}.gmap_iframe {width:600px!important;height:400px!important;}</style></div>

    </div>
    <br>
    <div id="kord">
            <ul>
                <li><b>   Country:</b> Kosova</li><br/>
                <li><b>   City:</b> Prishtina</li><br/>
                <li><b>   Area:</b> 10 ha</li><br/>
                <li id="linku"><a href="https://www.google.com/maps/place/Blinaje/@42.5005867,20.9574002,12.53z/data=!4m5!3m4!1s0x13537be20b6507d3:0xf2f0acaa52fe844!8m2!3d42.5021959!4d20.9864294" target="_blank"><b>Coordinates:</b> 42.5005867,20.9574002</a></li>

            </ul>
        </div>
    </div>
    <br>
    <hr>
    <?php include "./footer.php"; ?>
    <hr/>
</body>
</html>