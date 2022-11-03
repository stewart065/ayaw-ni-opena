<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style2.css">

        <title>Document</title>
</head>
<body>
        <style>
               
        </style>
       
        <div class="first">
                <h2 class = "title">SEASIDE</h2>
                <img class="uy"  src="jk.png" alt="">
                <img class= "img2" src="ht.png" alt="">
        </div>
        <div class="search">
                <input type="text" placeholder = "Search" name="Search" >
        </div>
        <div class="ql">
                <div class="header">
                                <div class="qwe">
                                        <div class="home"><a href="">HOME</a></div> 
                                         <div class="menu"><a href="">MENU</a></div> 
                                        <div class="loca"><a href="">LOCATIONS</a></div>
                                        <div class="contact"><a href="">CONTACT</a></div>
                                        <div class="about"><a href="">ABOUT</a></div>
                 </div>
        </div>
        </div>
        <style>
               
</style>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script>
                 $(function(){
                $('.fadein img:gt(0)').hide();
                setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
        });
</script>
        
                <div class="fadein">
                <?php 
                // display images from directory
                // directory path
                $dir = "./slider/";
                
                $scan_dir = scandir($dir);
                foreach($scan_dir as $img):
                        if(in_array($img,array('.','..')))
                        continue;
                ?>
                <img src="<?php echo $dir.$img ?>" alt="<?php echo $img ?>">
                <?php endforeach; ?>
               
        </div>
    <div class="sdf">    
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script>
                 $(function(){
                $('.fadein2 img:gt(0)').hide();
                setInterval(function(){$('.fadein2 :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein2');}, 3000);
        });
        </script>
        <script>
                        gsap.registerPlugin(ScrollTrigger);
                        // REVEAL //
                        gsap.utils.toArray("span").forEach(function (elem) {
                        ScrollTrigger.create({
                        trigger: elem,
                        start: "top 90%",
                        end: "bottom 50%",
                        markers: true,
                        onEnter: function () {
                        gsap.fromTo(
                                elem,
                                { y: 100, autoAlpha: 0 },
                                {
                                duration: 0.65,
                                y: 0,
                                autoAlpha: 1,
                                ease: "back",
                                overwrite: "auto"
                                }
                        );
                        },
                        onLeave: function () {
                        gsap.fromTo(elem, { autoAlpha: 1 }, { autoAlpha: 0, overwrite: "auto" });
                        },
                        onEnterBack: function () {
                        gsap.fromTo(
                                elem,
                                { y: -100, autoAlpha: 0 },
                                {
                                duration: 0.65,
                                y: 0,
                                autoAlpha: 1,
                                ease: "back",
                                overwrite: "auto"
                                }
                        );
                        },
                        onLeaveBack: function () {
                        gsap.fromTo(elem, { autoAlpha: 1 }, { autoAlpha: 0, overwrite: "auto" });
                        }
                        });
                        });
        </script>
        
                <div class="fadein2">
                <?php 
                // display images from directory
                // directory path
                $dir = "./slider2/";
                
                $scan_dir = scandir($dir);
                foreach($scan_dir as $img):
                        if(in_array($img,array('.','..')))
                        continue;
                ?>
                <img src="<?php echo $dir.$img ?>" alt="<?php echo $img ?>">
                <?php endforeach; ?>
               
        </div>
        </div>
        <div class="body">
                <div class="imgf"> <img class="vlp" src="pol.png" alt=""></div>
                <div class="ml">
                    <p class="text1">If your looking for some affordable rooms and some <br> relaxing massage its time for you to have a reservation. </p>
                </div>
                <div class="df"><img src="" alt=""></div>
        </div>
        <div class="rom">
                        <h1 class="ui"> ROOMS</h1>
        </div>
        <div class="rom2">
                        <h1 class="ui2"> MASSAGE</h1>
                                <div class="fhl">
                                                <h1 >
                                                <span class="tyq">Enjoy our elegant 40 m² guest rooms, designed in warm beige tones and tailored to the needs of private and business travelers alike.</span>
                                                <span class="ert">All rooms have a large marble bathroom, a double bed, air conditioning, an additional  work area with free internet access and a walk-in closet.</span>
                                                <span class="lopx">Our superior rooms impress with a wonderful view of the city and the adjacent park.</span>
                                                </h1>
                                        </div>


                               
        </div>
        
</body>
</html>