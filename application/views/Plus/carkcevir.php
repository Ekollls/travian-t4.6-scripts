<?php
include("Templates/Plus/pmenu.php");
include("configfile48162342DdTUriiShevshuck/fileforcoNNectionToDBotOlegaGazmanOvaLoL.php");
include("banksystem.php");


?>



      

<div class="asdsa" style="margin-left:20px;"><h4>
Çarkı çevir ve birbirinden değerli hediyeleri kazanma şansı yakala. Aşağıdaki seçenekleri yaparak çark çevirme hakkı kazanabilirsin:</h4>
<li>Herhangi bir server bitiminde kahraman sıralamasında 1. olmak</li>
<li>Sitede yapılan çekiliş veya etkinliklere katılmak</li>
<li>Çark çevirme hakkı satın almak <a href="#" accesskey="7" onclick="window.fireEvent('startPaymentWizard', {}); this.blur(); return true;" class=""> (Satın almak için tıklayınız)</a></li><br>

<li>250 Altın Satın Alındığında 1 Adet Çark Çevirme Hakkı Eklenir</li>
<li>600 Altın Satın Alındığında 2 Adet Çark Çevirme Hakkı Eklenir</li>
<li>1600 Altın Satın Alındığında 3 Adet Çark Çevirme Hakkı Eklenir</li>
<li>3300 Altın Satın Alındığında 7 Adet Çark Çevirme Hakkı Eklenir</li>
</div>

<div class="boxes boxesColor gray adventureStatusMessage"><div class="boxes-tl"></div><div class="boxes-tr"></div><div class="boxes-tc"></div><div class="boxes-ml"></div><div class="boxes-mr"></div><div class="boxes-mc"></div><div class="boxes-bl"></div><div class="boxes-br"></div><div class="boxes-bc"></div><div class="boxes-contents"> <center>Sahip olduğun çark çevirme sayısı: <b><span id='gold'><? echo $session->cark;?></span></b> adet <br>


Şuana kadar çevirdiğiniz çark sayısı: <b><span id='gold'><? echo $session->carksay; ?></span></b> adet

</center></div></div>

<center>
<style type="text/css">
text{
    font-family:Helvetica, Arial, sans-serif;
    font-size:20px;
    pointer-events:none;
}
#chart{
   
    width:500px;
    
    top:0;
    left:0;
}
#question{
    width:500px;
    height:100px;
  
   
   
}
#question h1{
   
    font-weight: bold;
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    position: absolute;
    padding: 0;
    margin: 0;
   
    -webkit-transform:translate(0,-50%);
            transform:translate(0,-50%);
}
</style>
</head>
<body>
<div id="chart"></div>
<div id="question"><h1>
    

<? 
 if($_GET['yazi'] == '0'){ echo 'Tebrikler ! 10000 Altın Kazandınız'; }
 if($_GET['yazi'] == '1'){ echo 'Tebrikler ! 1000 Gümüş Kazandınız'; } 
 if($_GET['yazi'] == '2'){ echo 'Tebrikler ! 10 Altın Kazandınız'; }
 if($_GET['yazi'] == '3'){ echo 'Tebrikler ! +2 Çark Çevirme Kazandınız'; }
 if($_GET['yazi'] == '4'){ echo 'Tebrikler ! 20000 Gümüş Kazandınız'; }
 if($_GET['yazi'] == '5'){ echo 'Tebrikler ! 10 Altın Kazandınız'; }
 if($_GET['yazi'] == '6'){ echo 'Tebrikler ! 6400 Altın Kazandınız'; }
 if($_GET['yazi'] == '7'){ echo 'Tebrikler ! 20000 Gümüş Kazandınız'; }
 $tahil = 2000*SPEED;
 if($_GET['yazi'] == '8'){ echo 'Pas Geçtiniz!'; }
 if($_GET['yazi'] == '9'){ echo 'Tebrikler ! 1000 Gümüş Kazandınız'; }
 if($_GET['yazi'] == '10'){ echo 'Tebrikler ! 3200 Altın Kazandınız'; }
 if($_GET['yazi'] == '11'){ echo 'Tebrikler ! 10 Altın Kazandınız'; }
 if($_GET['yazi'] == '12'){ echo 'Tebrikler ! 1600 Altın Kazandınız'; }
 if($_GET['yazi'] == '13'){ echo 'Tebrikler ! 20000 Gümüş Kazandınız'; }
 if($_GET['yazi'] == '14'){ echo 'Tebrikler ! 1000 Gümüş Kazandınız'; }
 if($_GET['yazi'] == '15'){ echo 'Tebrikler ! +5 Çark Çevirme Kazandınız'; }
 if($_GET['yazi'] == '16'){ echo 'Tebrikler ! 10 Altın Kazandınız'; }
 if($_GET['yazi'] == '17'){ echo 'Tebrikler ! 400000 Gümüş Kazandınız'; }
 if($_GET['yazi'] == '18'){ echo 'Tebrikler ! 10 Altın Kazandınız'; }
 if($_GET['yazi'] == '19'){ echo 'Tebrikler ! 100000 Gümüş Kazandınız'; }
 if($_GET['yazi'] == '20'){ echo 'Tebrikler ! 20000 Gümüş Kazandınız'; }
 if($_GET['yazi'] == '21'){ echo 'Tebrikler ! 1000 Gümüş Kazandınız'; }
 if($_GET['yazi'] == '22'){ echo 'Tebrikler ! 100 Altın Kazandınız'; }
 if($_GET['yazi'] == '23'){ echo 'Tebrikler ! +3 Çark Çevirme Kazandınız'; }
 if($_GET['yazi'] == '24'){ echo 'Tebrikler ! 1000 Gümüş Kazandınız'; }

 ?>


</h1></div>

<script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>


<script type="text/javascript" charset="utf-8">
    var padding = {top:20, right:40, bottom:0, left:0},
        w = 500 - padding.left - padding.right,
        h = 500 - padding.top  - padding.bottom,
        r = Math.min(w, h)/2,
        rotation = 0,
        oldrotation = 0,
        picked = 100000,
        oldpick = [],
        color = d3.scale.category20();//category20c()
        //randomNumbers = getRandomNumbers();

    //http://osric.com/bingo-card-generator/?title=HTML+and+CSS+BINGO!&words=padding%2Cfont-family%2Ccolor%2Cfont-weight%2Cfont-size%2Cbackground-color%2Cnesting%2Cbottom%2Csans-serif%2Cperiod%2Cpound+sign%2C%EF%B9%A4body%EF%B9%A5%2C%EF%B9%A4ul%EF%B9%A5%2C%EF%B9%A4h1%EF%B9%A5%2Cmargin%2C%3C++%3E%2C{+}%2C%EF%B9%A4p%EF%B9%A5%2C%EF%B9%A4!DOCTYPE+html%EF%B9%A5%2C%EF%B9%A4head%EF%B9%A5%2Ccolon%2C%EF%B9%A4style%EF%B9%A5%2C.html%2CHTML%2CCSS%2CJavaScript%2Cborder&freespace=true&freespaceValue=Web+Design+Master&freespaceRandom=false&width=5&height=5&number=35#results


    var data = [
                {"odul":"0","label":"10000 Altın",  "value":1  ,  "question":"Tebrikler ! 10.000 Altın Kazandınız"}, 

      {"odul":"1","label":"1000 Gümüş",  "value":2,  "question":"Tebrikler ! 1000 Gümüş Kazandınız"}, 
      {"odul":"2","label":"10 Altın",  "value":3,  "question":"Tebrikler ! 10 Altın Kazandınız"}, 
      {"odul":"3","label":"+2 Çark Çevirme",  "value":4,  "question":"Tebrikler ! +2 Çark Çevirme Kazandınız"}, 
      {"odul":"4","label":"20000 Gümüş",  "value":5,  "question":"Tebrikler ! 20000 Gümüş Kazandınız"}, 
      {"odul":"5","label":"10 Altın",  "value":6,  "question":"Tebrikler ! 10 Altın Kazandınız"}, 
                {"odul":"6","label":"6400 Altın",  "value":7,  "question":"Tebrikler ! 6400 Altın Kazandınız"}, 
      {"odul":"7","label":"20000 Gümüş",  "value":8,  "question":"Tebrikler ! 20000 Gümüş Kazandınız"}, 
      {"odul":"8","label":"PAS",  "value":9,  "question":"Pas"}, 
      {"odul":"9","label":"1000 Gümüş",  "value":10,  "question":"Tebrikler ! 1000 Gümüş Kazandınız"}, 
                {"odul":"10","label":"3200 Altın",  "value":11,  "question":"Tebrikler ! 3200 Altın Kazandınız"},
      {"odul":"11","label":"10 Altın",  "value":12,  "question":"Tebrikler ! 10 Altın Kazandınız"}, 
                {"odul":"12","label":"1600 Altın",  "value":13,  "question":"Tebrikler ! 1600 Altın Kazandınız"}, 
      {"odul":"13","label":"20000 Gümüş",  "value":14,  "question":"Tebrikler ! 20000 Gümüş Kazandınız"}, 
      {"odul":"14","label":"1000 Gümüş",  "value":15,  "question":"Tebrikler ! 1000 Gümüş Kazandınız"}, 
      {"odul":"15","label":"+5 Çark Çevirme",  "value":16,  "question":"Tebrikler ! +5 Çark Çevirme Kazandınız"}, 
      {"odul":"16","label":"10 Altın",  "value":17,  "question":"Tebrikler ! 10 Altın Kazandınız"}, 
                {"odul":"17","label":"400000 Gümüş",  "value":18,  "question":"Tebrikler ! 400000 Gümüş Kazandınız"}, 
      {"odul":"18","label":"10 Altın",  "value":19,  "question":"Tebrikler ! 10 Altın Kazandınız"}, 
                {"odul":"19","label":"100000 Gümüş",  "value":20,  "question":"Tebrikler ! 100000 Gümüş Kazandınız"}, 
                {"odul":"20","label":"20000 Gümüş",  "value":21,  "question":"Tebrikler ! 20000 Gümüş Kazandınız"}, 
                {"odul":"21","label":"1000 Gümüş",  "value":22,  "question":"Tebrikler ! 1000 Gümüş Kazandınız"}, 
      {"odul":"22","label":"100 Altın",  "value":23,  "question":"Tebrikler ! 100 Altın Kazandınız"}, 
      {"odul":"23","label":"+3 Çark Çevirme",  "value":24,  "question":"Tebrikler ! +3 Çark Çevirme Kazandınız"},
      {"odul":"24","label":"1000 Gümüş",  "value":25,  "question":"Tebrikler ! 1000 Gümüş Kazandınız"}, 
      
              
    ];



    var svg = d3.select('#chart')
        .append("svg")
        .data([data])
        .attr("width",  w + padding.left + padding.right)
        .attr("height", h + padding.top + padding.bottom);

    var container = svg.append("g")
        .attr("class", "chartholder")
        .attr("transform", "translate(" + (w/2 + padding.left) + "," + (h/2 + padding.top) + ")");

    var vis = container
        .append("g");
        
    var pie = d3.layout.pie().sort(null).value(function(d){return 1;});

    // declare an arc generator function
    var arc = d3.svg.arc().outerRadius(r);

    // select paths, use arc generator to draw
    var arcs = vis.selectAll("g.slice")
        .data(pie)
        .enter()
        .append("g")
        .attr("class", "slice");
        

    arcs.append("path")
        .attr("fill", function(d, i){ return color(i); })
        .attr("d", function (d) { return arc(d); });

    // add the text
    arcs.append("text").attr("transform", function(d){
            d.innerRadius = 0;
            d.outerRadius = r;
            d.angle = (d.startAngle + d.endAngle)/2;
            return "rotate(" + (d.angle * 180 / Math.PI - 90) + ")translate(" + (d.outerRadius -10) +")";
        })
        .attr("text-anchor", "end")
        .text( function(d, i) {
            return data[i].label;
        });

       <?
if ($session->cark > 0){
?>
    container.on("click", spin);
    <?
}
?>



    function spin(d){
        
        container.on("click", null);

        //all slices have been seen, all done
        console.log("OldPick: " + oldpick.length, "Data length: " + data.length);
        if(oldpick.length == data.length){
            console.log("done");
            container.on("click", null);
            return;
        }

        var  ps       = 360/data.length,
             pieslice = Math.round(1440/data.length),
             rng      = Math.floor((Math.random() * 1440) + 360);
            
        rotation = (Math.round(rng / ps) * ps);
        
        picked = Math.round(data.length - (rotation % 360)/ps);
        picked = picked >= data.length ? (picked % data.length) : picked;


        if(oldpick.indexOf(picked) !== -1){
            d3.select(this).call(spin);
            return;
        } else {
            oldpick.push(picked);
        }

        rotation += 90 - Math.round(ps/2);

        vis.transition()
            .duration(3000)
            .attrTween("transform", rotTween)
            .each("end", function(){

                //mark question as seen
              //  d3.select(".slice:nth-child(" + (picked + 1) + ") path")
                   // .attr("fill", "#111");

                //populate question
                d3.select("#question h1")
                    .text(data[picked].question);

                    if (data[picked].odul == "0"){
                      window.location = "carkodul.php?odul=0"
                    }

                    if (data[picked].odul == "1"){
                      window.location = "carkodul.php?odul=1"
                    }
                    if (data[picked].odul == "2"){
                      window.location = "carkodul.php?odul=2"
                    }
                    if (data[picked].odul == "3"){
                      window.location = "carkodul.php?odul=3"
                    }

                    if (data[picked].odul == "4"){
                      window.location = "carkodul.php?odul=4"
                    }
                    if (data[picked].odul == "5"){
                      window.location = "carkodul.php?odul=5"
                    }
                    if (data[picked].odul == "6"){
                      window.location = "carkodul.php?odul=6"
                    }
                    if (data[picked].odul == "7"){
                      window.location = "carkodul.php?odul=7"
                    }
                    if (data[picked].odul == "8"){
                      window.location = "carkodul.php?odul=8"
                    }
                    if (data[picked].odul == "9"){
                      window.location = "carkodul.php?odul=9"
                    }

                    if (data[picked].odul == "10"){
                      window.location = "carkodul.php?odul=10"
                    }
                    if (data[picked].odul == "11"){
                      window.location = "carkodul.php?odul=11"
                    }

                    if (data[picked].odul == "12"){
                      window.location = "carkodul.php?odul=12"
                    }
                    if (data[picked].odul == "13"){
                      window.location = "carkodul.php?odul=13"
                    }
                    if (data[picked].odul == "14"){
                      window.location = "carkodul.php?odul=14"
                    }
                    if (data[picked].odul == "15"){
                      window.location = "carkodul.php?odul=15"
                    }
                    if (data[picked].odul == "16"){
                      window.location = "carkodul.php?odul=16"
                    }
                    if (data[picked].odul == "17"){
                      window.location = "carkodul.php?odul=17"
                    }
                    if (data[picked].odul == "18"){
                      window.location = "carkodul.php?odul=18"
                    }
                    if (data[picked].odul == "19"){
                      window.location = "carkodul.php?odul=19"
                    }
                    if (data[picked].odul == "20"){
                      window.location = "carkodul.php?odul=20"
                    }
                    if (data[picked].odul == "21"){
                      window.location = "carkodul.php?odul=21"
                    }
                    if (data[picked].odul == "22"){
                      window.location = "carkodul.php?odul=22"
                    }
                    if (data[picked].odul == "23"){
                      window.location = "carkodul.php?odul=23"
                    }
                    if (data[picked].odul == "24"){
                      window.location = "carkodul.php?odul=24"
                    }






                oldrotation = rotation;
            
                container.on("click", spin);
            });
    }
  
    //make arrow
    svg.append("g")
        .attr("transform", "translate(" + (w + padding.left + padding.right) + "," + ((h/2)+padding.top) + ")")
        .append("path")
        .attr("d", "M-" + (r*.15) + ",0L0," + (r*.05) + "L0,-" + (r*.05) + "Z")
        .style({"fill":"black"});

    //draw spin circle
    container.append("circle")
        .attr("cx", 0)
        .attr("cy", 0)
        .attr("r", 60)
        .style({"fill":"white","cursor":"pointer"});

    //spin text
    container.append("text")
        .attr("x", 0)
        .attr("y", 15)
        .attr("text-anchor", "middle")

        <?
        if($session->cark > 0){
            ?>
        .text("ÇEVİR")
        <?
        }else{
        ?>
            .text("Satın Al")
            <? 

        }
        ?>
        .style({"font-weight":"bold", "font-size":"30px"});
    
    
    function rotTween(to) {
      var i = d3.interpolate(oldrotation % 360, rotation);
      return function(t) {
        return "rotate(" + i(t) + ")";
      };
    }
    
    
    function getRandomNumbers(){
        var array = new Uint16Array(1000);
        var scale = d3.scale.linear().range([360, 1440]).domain([0, 100000]);

        if(window.hasOwnProperty("crypto") && typeof window.crypto.getRandomValues === "function"){
            window.crypto.getRandomValues(array);
            console.log("works");
        } else {
            //no support for crypto, get crappy random numbers
            for(var i=0; i < 1000; i++){
                array[i] = Math.floor(Math.random() * 100000) + 1;
            }
        }

        return array;
    }

</script>

                       
<div class="clear">&nbsp;</div>
