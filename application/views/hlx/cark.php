<h1 class="titleInHeader"><?php echo carkinfo; ?> <b id="carkKalan"><?= $session->cark ?></b></h1>
<center>
    <style type="text/css">
        text {
            font-family: Helvetica, Arial, sans-serif;
            font-size: 20px;
            pointer-events: none;
        }

        #chart {

            width: 500px;

            top: 0;
            left: 0;
        }

        #question {
            width: 500px;
            height: 100px;



        }

        #question h1 {

            font-weight: bold;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            position: absolute;
            padding: 0;
            margin: 0;

            -webkit-transform: translate(0, -50%);
            transform: translate(0, -50%);
        }
    </style>
    <div id="chart"></div>
    <div id="question">
        <h1></h1>
    </div>

    <div class="clear"></div>

    <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
        const sleep = (milliseconds) => {
            return new Promise(resolve => setTimeout(resolve, milliseconds))
        }
        var scrollTop;

        var padding = {
                top: 20,
                right: 40,
                bottom: 0,
                left: 0
            },
            w = 575 - padding.left - padding.right,
            h = 575 - padding.top - padding.bottom,
            r = Math.min(w, h) / 2,
            rotation = 0,
            oldrotation = 0,
            picked = 100000,
            oldpick = [],
            color = d3.scale.category20(); //category20c()


        <?php
        $odulJSon = [];
        foreach ($carkOdulleri as $odul) {
            array_push($odulJSon, [
                'label' => $odul['odul'],
                'value' => $odul['pozisyon'],
                'question' => 'Tebrikler ! ' . $odul['odul'] . ' Kazandınız',
            ]);
        }
        ?>
        var rnddd = 0;
        var speedd = 5000;
        var data = <?= json_encode($odulJSon) ?>;
        var svg = d3.select('#chart')
            .append("svg")
            .data([data])
            .attr("width", w + padding.left + padding.right)
            .attr("height", h + padding.top + padding.bottom);
        var container = svg.append("g")
            .attr("class", "chartholder")
            .attr("transform", "translate(" + (w / 2 + padding.left) + "," + (h / 2 + padding.top) + ")");
        var vis = container
            .append("g");
        var pie = d3.layout.pie().sort(null).value(function(d) {
            return 1;
        });
        var arc = d3.svg.arc().outerRadius(r);
        var arcs = vis.selectAll("g.slice")
            .data(pie)
            .enter()
            .append("g")
            .attr("class", "slice");


        arcs.append("path")
            .attr("fill", function(d, i) {
                return color(i);
            })
            .attr("d", function(d) {
                return arc(d);
            });
        arcs.append("text").attr("transform", function(d) {
                d.innerRadius = 0;
                d.outerRadius = r;
                d.angle = (d.startAngle + d.endAngle) / 2;
                return "rotate(" + (d.angle * 180 / Math.PI - 90) + ")translate(" + (d.outerRadius - 10) + ")";
            })
            .attr("text-anchor", "end")
            .text(function(d, i) {
                return data[i].label;
            });
        container.on("click", gonder);

        function gonder() {
            const url = window.location.href
            let xhr = new XMLHttpRequest()
            xhr.responseType = 'json';
            xhr.open('POST', url, true)
            xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8')
            xhr.send();
            xhr.onload = function() {
                if (xhr.response.status) {
                    spin(xhr.response.odul, xhr.response.cark);
                    document.getElementById("carkKalan").innerHTML = xhr.response.kalan;
                } else {
                    alert(xhr.response.message);
                }
            }
        }

        function spin(odul, goster) {
            container.on("click", null);
            var randnumberrr = [];
            randnumberrr.push(goster);
            rotation = ((Math.floor(Math.random() * 2) + 1) * 360) + goster;
            vis.transition()
                .duration(4000)
                .attrTween("transform", rotTween)
                .each("end", function() {
                    d3.select("#question h1")
                        .text(odul);
                    oldrotation = rotation;
                    container.on("click", gonder);
                });
        }

        //make arrow
        svg.append("g")
            .attr("transform", "translate(" + (w + padding.left + padding.right) + "," + ((h / 2) + padding.top) + ")")
            .append("path")
            .attr("d", "M-" + (r * .15) + ",0L0," + (r * .05) + "L0,-" + (r * .05) + "Z")
            .style({
                "fill": "black"
            });

        //draw spin circle
        container.append("circle")
            .attr("cx", 0)
            .attr("cy", 0)
            .attr("r", 60)
            .style({
                "fill": "white",
                "cursor": "pointer"
            });

        //spin text
        container.append("text")
            .attr("x", 0)
            .attr("y", 15)
            .attr("text-anchor", "middle")
            .text("<?php echo cevir; ?>")
            .style({
                "font-weight": "bold",
                "font-size": "30px"
            });


        function rotTween(to) {
            var i = d3.interpolate(oldrotation % 360, rotation);
            return function(t) {
                return "rotate(" + i(t) + ")";
            };
        }
        sleep(250).then(() => {
            document.documentElement.scrollTop = document.body.scrollTop = 714;
        })
    </script>