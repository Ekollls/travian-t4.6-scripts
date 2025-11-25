<?php
$dataarray = explode(",", $all['data']);

?>

<div id="reportWrapper">
    <div class="header">
        <div class="headline withoutQuickNavigation">

            <div class="subject"><?= $all['topic'] ?>.</div>
        </div>

        <div class="time">
            <?php $date = $generator->procMtime($all['time']); ?>
            <div class="text"><?= $date[0] . " " . $date[1]; ?></div>
        </div>
    </div>


    <div class="body">
        <div class="victory">
            <img src="img/x.gif" class="reportImage outcome wonLost" alt="">
            <img src="img/x.gif" class="tribe tribe<?php echo $database->getUserInfo($dataarray[0])['tribe']; ?> attacker lost" alt="">
            <img src="img/x.gif" class="tribe tribe<?php echo $database->getUserInfo($dataarray[37])['tribe']; ?> defender won" alt="">
        </div>
        <div class="role attacker">
            <div class="header">
                <div class="avatar">
                    <i class="tribeIcon bigTribe2"> </i>
                    <img src="img/svg/combat/svgAttack.svg" alt="attack">
                </div>
                <h2>attack</h2>
                <div class="outcome">
                    <div class="arrowWrapper">
                        <svg class="outcomeArrow" viewBox="0 0 20 20" preserveAspectRatio="none">
                            <path d="M0 0L20 10L0 20z"></path>
                        </svg>
                    </div>
                    <svg class="svgAttack losses attack roleIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 94.78 107.86">
                        <path fill="#fff" stroke="#fff" stroke-miterlimit="10" stroke-width="7" d="M90.77 4.63L76.41 8.26l-50.1 57.55-3.9-3.37a3.24 3.24 0 0 0-4.41.16l-3.57 2.8-.15.12-.13.15a3.24 3.24 0 0 0 .34 4.57l5.67 4.89L4.21 93.91a3 3 0 0 0 .35 4.23l6.48 5.5a3 3 0 0 0 4.23-.35L31.14 84.6l5 4.29a3.24 3.24 0 0 0 4.57-.34l.13-.15.1-.17 2.24-3.94a3.25 3.25 0 0 0-.49-4.38l-3.22-2.78 49.75-57.77z"></path>
                        <path fill="none" stroke="#494949" stroke-miterlimit="10" stroke-width="4" d="M88.48 7.27l-1.19 11.26-50.86 59.03-10.09-8.74L77.5 10.05l10.98-2.78z"></path>
                        <path fill="#bebdbd" d="M87.3 18.53l1.19-11.27-57.14 65.92 5.08 4.38L87.3 18.53z"></path>
                        <path fill="#83807e" d="M77.5 10.05l10.99-2.79L31.4 73.22l-5.06-4.41L77.5 10.05z"></path>
                        <path fill="#6d2e0f" fill-rule="evenodd" d="M13 103.36a2 2 0 0 1-1.29-.47L5.2 97.38a2 2 0 0 1-.2-2.82l19.82-23.38 9.53 8.09-19.84 23.38a2 2 0 0 1-1.53.71z"></path>
                        <path fill="#230e06" d="M24.93 72.59l8 6.8L13.75 102a1 1 0 0 1-1.41.12l-6.48-5.5a1 1 0 0 1-.12-1.41l19.2-22.62m-.23-2.82l-1.29 1.52L4.21 93.91a3 3 0 0 0 .35 4.23l6.48 5.5a3 3 0 0 0 4.23-.35l19.2-22.62 1.29-1.52-1.52-1.29-8-6.8-1.54-1.29z"></path>
                        <path fill="#eac40a" d="M38.4 88.62a2.25 2.25 0 0 1-1.46-.54L15.23 69.53a2.24 2.24 0 0 1-.23-3.16l.06-.08 3.69-2.91a2.24 2.24 0 0 1 3.09-.16l20.31 17.37a2.25 2.25 0 0 1 .32 3.07l-2.3 4.09-.06.07a2.24 2.24 0 0 1-1.71.79z"></path>
                        <path fill="#937809" d="M20.37 63.68a1.24 1.24 0 0 1 .81.3L41.5 81.35a1.24 1.24 0 0 1 .14 1.75l-2.3 4.08a1.24 1.24 0 0 1-1.75.14L15.88 68.77a1.24 1.24 0 0 1-.14-1.77l3.68-2.9a1.24 1.24 0 0 1 .94-.43m0-2a3.24 3.24 0 0 0-2.3 1l-3.56 2.77-.15.12-.13.15a3.24 3.24 0 0 0 .36 4.57l21.71 18.56a3.24 3.24 0 0 0 4.57-.36l.13-.15.1-.17 2.22-4a3.25 3.25 0 0 0-.51-4.38L22.47 62.46a3.24 3.24 0 0 0-2.11-.78z"></path>
                    </svg>
                    <svg class="svgLoot loot lootFull roleIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63.26 78.57">
                        <path fill="#fff" d="M30.61 78.57c-2.74 0-5.1-1.26-7.71-1.62-4.17-.57-8.38.38-12.56-.67C4.88 74.9.56 71 .05 65.3a14 14 0 0 1 .56-5.18c.39-1.51 1.63-3.35 1.75-4.82s-.74-3.62-1-5.16C.19 41.26 1.72 31.86 9 25.93a9.55 9.55 0 0 1-3.27-17c2.74-2 5.49-3.56 8.17-5.68s5.28-2.69 8.52-3c4.8-.5 10.4-.5 14.28 2.75A8.47 8.47 0 0 1 40 9.46c0 2.8-2.11 3.89-2.64 6.15-.21.9.31 1.92.38 3 .09 1.29-.58 2.55-.1 3.8.42 1.09 3.22 2.73 4.1 3.46a131.91 131.91 0 0 1 10.52 9.32c3.85 4 7.65 8.53 9.81 13.66 7 16.68-18.19 29.72-31.46 29.72z"></path>
                        <path fill="#3a1e00" d="M58.44 50.55a41.1 41.1 0 0 0-4.82-7.78c-.31-.41-.63-.82-1-1.21s-.58-.68-.87-1l-.07-.08-.59-.66A96 96 0 0 0 40.46 30c-.87-.71-1.72-1.43-2.57-2.15-.7-.59-1.41-1.19-2-1.71a16.71 16.71 0 0 0-1.58-1.28c-.5-.39-1-.78-1.54-1.17a4.47 4.47 0 0 0 .06-.7 7 7 0 0 0-.39-3.63q-.19-.69-.44-1.38a2.71 2.71 0 0 1 .42-2.69 14.57 14.57 0 0 1 .93-1.14c.29-.33.57-.65.83-1l.34-.34a4.19 4.19 0 0 0 1.09-5l-.09-.22v-.06a4.16 4.16 0 0 0-.64-.89 4.52 4.52 0 0 0-.63-.57 3.21 3.21 0 0 0-.28-.22c-.17-.12-.36-.23-.56-.33a4.72 4.72 0 0 0-.43-.24 11.13 11.13 0 0 0-2.66-.89A17.24 17.24 0 0 0 27.51 4H24.4a14.7 14.7 0 0 1-1.67.17 15.17 15.17 0 0 0-2.64.34l-.28.08c-.26.07-.52.15-.77.23h-.14a7.15 7.15 0 0 0-.79.35 7.72 7.72 0 0 0-2.27 1.67 18.18 18.18 0 0 1-6 4.29A6.76 6.76 0 0 0 6 14.81a4.86 4.86 0 0 0-.28 2.53 5.4 5.4 0 0 0 .32 1 5.81 5.81 0 0 0 5 3.83h1.05a22.67 22.67 0 0 0 3.62-.3 4 4 0 0 1 .63 0 7.36 7.36 0 0 1 1 .08 1.18 1.18 0 0 1 .8.33 1.94 1.94 0 0 1-.14 1.41 4.12 4.12 0 0 1-1.5 1.64c-.72.55-1.45 1.08-2.18 1.62s-1.69 1.23-2.51 1.87a17.24 17.24 0 0 0-6.39 10.82c-1 5.19-.15 10.19.86 14.82l.1.46c.07.43.12.64.16 1a.74.74 0 0 1 0 .38l-.43 1a13.13 13.13 0 0 0-2 5.42v2.39l.11.92a7.51 7.51 0 0 0 2.31 4c2.69 2.32 5.91 2.78 9 2.94 1.05.05 2.2.08 3.49.08h4.78a4.89 4.89 0 0 1 2.26.44 10.56 10.56 0 0 0 4.67 1.19 8.46 8.46 0 0 0 1.44-.12c.59-.1 1.17-.18 1.76-.26.9-.12 1.82-.25 2.77-.45a33.24 33.24 0 0 0 8.65-2.93 32.14 32.14 0 0 0 11.25-9.59l.09-.12a9.63 9.63 0 0 0 1.91-3.78c.17-.45.34-.9.48-1.37a7.16 7.16 0 0 0-.64-5.51zm-1.38 4.77c-.15.48-.32.94-.5 1.4A7.82 7.82 0 0 1 54.87 60a30.05 30.05 0 0 1-10.56 9 31.55 31.55 0 0 1-8.14 2.75c-1.48.31-3 .44-4.46.7a7.9 7.9 0 0 1-4.88-.89 7.09 7.09 0 0 0-3.36-.65c-2.65 0-5.31.12-8 0s-5.47-.53-7.73-2.48a5.44 5.44 0 0 1-1.68-2.94V63.1a16.35 16.35 0 0 1 2.22-5.69A1.59 1.59 0 0 0 8.7 56a16.76 16.76 0 0 1-.46-2c-1-4.63-1.72-9.28-.85-14A15.22 15.22 0 0 1 13 30.4c1.53-1.2 3.14-2.29 4.68-3.48a5.91 5.91 0 0 0 2.15-2.53c.78-2.11.26-4.08-2.28-4.43a7.34 7.34 0 0 0-2.25 0 19.94 19.94 0 0 1-4.25.25 3.85 3.85 0 0 1-3.36-3 2.92 2.92 0 0 1 .09-1.69A4.8 4.8 0 0 1 10.67 13a20.24 20.24 0 0 0 6.64-4.76A5.78 5.78 0 0 1 19 7a5.46 5.46 0 0 1 .6-.27h.1c.2-.07.4-.13.6-.18l.24-.07c1.39-.34 2.82-.23 4.21-.49h2.59a15.56 15.56 0 0 1 2.42.32A9.41 9.41 0 0 1 32 7c.14.07.25.14.37.22a3.68 3.68 0 0 1 .36.21l.16.13a3 3 0 0 1 .4.35 2.38 2.38 0 0 1 .44.65 2.29 2.29 0 0 1-.69 2.76l-.42.42c-.6.78-1.33 1.49-1.89 2.3a4.69 4.69 0 0 0-.67 4.51q.24.68.42 1.35a5 5 0 0 1 .3 2.79 1.61 1.61 0 0 1-.2 1 1.21 1.21 0 0 0 .62 1.28c.64.46 1.27.94 1.88 1.43a14.69 14.69 0 0 1 1.43 1.16c1.57 1.3 3.12 2.64 4.7 3.93a94 94 0 0 1 10.44 9.58l.47.52.14.16c.29.33.59.67.87 1s.61.76.9 1.15a39.42 39.42 0 0 1 4.6 7.42 5.14 5.14 0 0 1 .43 4z"></path>
                        <g class="svgLoot_lowerBag">
                            <path fill="#97560f" d="M7.4 48.36c.11.94.24 1.87.41 2.79.28 1.55 1.27 3.67 1 5.24-.49 3.05-2.72 5.21-2.72 8.6 1.63 8.72 15.3 4.68 21.07 6.46 7.66 2.36 17.11-1.56 23-6.59 2.83-2.42 6-5.83 6.94-9.58.65-2.52-.65-4.78-2-6.93z"></path>
                            <path fill="#a76201" d="M24.79 48.36c3.19 3.53 8.32 5.7 11.86 8.47-1.9.43-8.13-2.9-9.4-1.45-2.11 2.42 5.11 4.91 6.13 5.1a26.49 26.49 0 0 0 11.17-.3 12 12 0 0 0 3.94-2c1.1-.74 3.84-1.71 4.56-2.73a7.9 7.9 0 0 0 1.27-7.13z"></path>
                            <path fill="#7a4300" d="M34.64 66.19a16.78 16.78 0 0 1-9.89-4.85C21.94 58.53 20 58.11 15.61 58c1.39-1.36 9-3.23 9.13-4 .06-.47-3-3.55-3.43-4.22-.28-.46-.53-.93-.77-1.41H7.26c.06.57.13 1.13.22 1.69.56 3.63 1.35 5.42 0 8.71-.81 1.46-2.19 5.07-1.23 7.6C9 73.44 19.74 70.17 25.2 71c4.85 2.14 5.62 1.66 9.49 1a34.27 34.27 0 0 0 8.84-2.64c4.53-2.15 12.23-7.25 13-12.76-3 .74-6.4 5-9.22 6.66-3.88 2.26-8.11 3.55-12.67 2.93z"></path>
                        </g>
                        <g class="svgLoot_upperBag">
                            <path fill="#97560f" d="M53.23 45.6c-4.43-6.28-10.47-11-16.29-15.92-1.64-1.38-3.66-2.66-5.15-4.18s-.76-1.7-.93-4c-.13-1.73-1.19-3.11-1.05-4.9.15-1.95 1.28-3.11 2.45-4.56 5.38-6.64-7.63-6.94-12.07-5.48C16.95 7.49 14 11.19 11 13c-2.57 1.54-5.08 4.68-1.06 6.65 2.84 1.39 6.87-1.38 9.43.8s-.26 5.39-2.12 6.85c-5.91 4.62-9.95 8.58-10.1 16.57a33.13 33.13 0 0 0 .25 4.49h47.72c-.63-.99-1.3-1.92-1.89-2.76z"></path>
                            <path fill="#a76201" d="M29.38 14.48c1.93-4.26 2.36-3.29 1.32-8 3.09.86 4.33 3 2.36 4.85-.94.94-2.29 2.88-3.68 3.15zM14.66 18c.74-.21 3.49-1.29 3.67-2.29.24-1.38-1.7-.67-1.71-1.68 0-1.24 2-1.77 2.66-2.71 1-1.57.6-3 1.18-4.67-1.16 0-2.63 1.19-3.34 2-2.31 2.53-7 3.43-8.73 6.15-2.5 3.91 3.86 3.92 6.27 3.2zm31.45 19.62c-2.68-2.51-5.51-4.84-8.34-7.17-1.57-1.29-4.78-5.23-7-5.15-1.53.06 2.82 8.19 2.78 8.66-2.38-2.39-4.78-4.75-7.14-7.16.35 4.25 2.77 7.81 4.83 11.4l-1.3-1 1 1.89c-2-1.37-4.8-7.93-6.62-8.19-1.23-.17-2.45 9.53-2.41 10.61a10.44 10.44 0 0 0 2.89 6.83h29.53c-1.2-4.13-5.22-7.92-8.22-10.72z"></path>
                            <path fill="#7a4300" d="M18.76 43.61c-1.36-5-1-9.44 1.79-13.79 3.15-4.88 3.9-1.55 5.85 2.32 1-1.5-2.38-6.22-1.08-7.22s4.63 4 5.25 3.75c-.15.06.13-7.39.06-8.07-.47-4.47-.8-5.15 2-8.81-2 .82-3.57 2.48-5.8 2.62 3.82-2.93 9-7.78.51-8.42-3 0-6.5-.18-9.09 1.47s-3.89 3.42-6.91 4.76c-3 1.83-4.87 3.67-3.06 6.33 2 2.9 5.23 1.39 8.19 1.3 2.72 0 4.76 1.77 3.4 4.53-1.54 3.13-4 3.13-8.1 7.11-4.56 4.43-5.37 9.84-4.51 16.87h13.29a26.06 26.06 0 0 1-1.79-4.75zm-8.71-28.06c0-.81 7.1-3.27 8.34-4.3S22.64 6 24.93 8.36c1.23 1.29-1.82 3.62 2.51 4.12-2.02 2.33-17.23 7.35-17.39 3.07z"></path>
                        </g>
                        <path fill="#2b2825" d="M18.43 37.74a5.42 5.42 0 0 1-3.75-1.9A2.38 2.38 0 0 1 14.6 33c1-1.78 2.4-3.43 3.58-5.11-3.23-1.46-1.6-6.07.89-7.29 1.85-.91 3.78-1.7 5.66-2.54l3.34-1.5a7.43 7.43 0 0 1 1.67-.75 5.13 5.13 0 0 1 3 .9c1.59 1.33.64 2.91.67 4.49a5.89 5.89 0 0 1-.06 2.46 4.72 4.72 0 0 1-.62 1.22c-1.43 2-4.22 2.47-6.51 2.75.36 2.23 2 5 .4 7.05-1.16 1.48-3.79 3.43-5.34 1.37a3.36 3.36 0 0 1-2.85 1.69z"></path>
                        <path fill="#948c81" d="M30.59 17.84c2.22 0 .47 1.84.51 2.59s.59 1.67.37 2.6c-.74 3-5.47 1.42-7 2.88-1.79 1.69 1.43 5.18.81 7.11-.42 1.32-1.81 2-2.57 1.13s-.32-4.17-.44-5.32c-.5 1.07-3.25 9.93-5.59 6.08-.95-1.57 4.13-7 5.17-8.74-2.77 0-4.82-1.25-2-3.64 2.46-2.11 7.68-3.53 10.74-4.69z"></path>
                        <path fill="#81796e" d="M16.95 33.08a68.09 68.09 0 0 1 4.75-6.73c-1-.34-2-.08-2.71-.61-3.26-3.26 9.25-7.89 11.59-7.89-.71 3.12-8.21 2.63-10 5a2.22 2.22 0 0 0 .73.57c-.14.16-.68.54-.54.82.54 1.1 9.46-.52 10.55-.75-1 2-2.87 1.34-4.64 1.74-2.51.92-1.38.09-2.47 1.91-1 1.64-.57 1.39-.58 2.55 0 .37 1.3 5.3-.65 4.64-2-1.52.45-5.84-1.49-7-.42-.07-2.59 4.58-2.86 5.06a11.71 11.71 0 0 1-1.63 2.8c-.61-.14-.54-1.19-.05-2.11zm9.73-10.37c.43-.07 4.76-.8 4.34-1.82-.35-.84-7.29 2.28-7.91 2.49a9.64 9.64 0 0 0 3.56-.67z"></path>
                    </svg>
                </div>
            </div>
            <div class="troopHeadline ">
                <div>
                    <!--<span class="inline-block">[<a href="allianz.php?aid=101">No War</a>]</span>-->
                    <a class="player" href="spieler.php?uid=<?= $dataarray[0] ?>"><?= $dataarray[1] ?></a> <?= REPORT_FROM_VIL ?> <a class="village" href="karte.php?d=<?= $dataarray[2] . "&amp;c=" . $generator->getMapCheck($dataarray[2]); ?>"><?= $dataarray[3] ?></a>
                </div>

                <div class="toolList">
                    <?php if ($dataarray[0] == $session->uid) { ?>

                        <a class="iconButton" title="return attack" href="build.php?t=2&id=39&z=<?php echo $dataarray[39]; ?>&nid=<?php echo $_GET['id']; ?>&re"><i style="top:-3px" class="simulate"></i></a>
                    <?php } ?>
                </div>

            </div>
            <table id="attacker" class="attacker" cellpadding="0" cellspacing="0">
                <tbody class="units ">

                    <tr>
                        <th class="coords"></th>
                        <?php
                        $start = ($dataarray[4] - 1) * 10 + 1;
                        for ($i = $start; $i <= ($start + 9); $i++) {
                            echo "<td class=\"uniticon\"><img src=\"img/x.gif\" class=\"unit u$i\" title=\"" . constant('U' . $i) . "\" alt=\"\" /></td>";
                        }
                        echo "<td class=\"uniticon last\"><img src=\"img/x.gif\" class=\"unit uhero\" title=\"Hero\" alt=\"Hero\" /></td>";


                        echo "</tr><tr><th><i class=\"troopCount\"> </i></th>";
                        for ($i = 5; $i <= 14; $i++) {
                            if ($dataarray[$i] == 0) {
                                echo "<td class=\"unit none\">0</td>";
                            } else {
                                echo "<td class=\"unit\">" . $dataarray[$i] . "</td>";
                            }
                        }
                        if (!$dataarray[15]) {
                            echo "<td class=\"unit none last\">" . $dataarray[15] . "</td>";
                        } else {
                            echo "<td class=\"unit last\">" . $dataarray[15] . "</td>";
                        }
                        echo "</tbody>";
                        echo "<tbody class=\"units last\">";
                        echo "<tr><th><i class=\"troopDead\"></i></th>";
                        for ($i = 16; $i <= 25; $i++) {
                            if ($dataarray[$i] == 0) {
                                echo "<td class=\"unit none\">0</td>";
                            } else {
                                echo "<td class=\"unit\">" . $dataarray[$i] . "</td>";
                            }
                        }

                        if (!$dataarray[26]) {
                            echo "<td class=\"unit none last\">" . $dataarray[26] . "</td>";
                        } else {
                            echo "<td class=\"unit last\">" . $dataarray[26] . "</td>";
                        }

                        echo "</tr>";
                        if ($all['data1'] != '') {
                            $datar = explode(',', $all['data1']);
                            echo "<tr><th>" . rpts2 . "</th>";
                            for ($i = 0; $i <= 9; $i++) {
                                if ($datar[$i] == 0) {
                                    echo "<td class=\"none\">0</td>";
                                } else {
                                    echo "<td>" . $datar[$i] . "</td>";
                                }
                            }

                            echo "<td class=\"unit last\">" . $datar[10] . "</td>";
                        }
                        for ($i = 0, $x = 16, $z = 5, $ii = 0; $i <= 9; $i++) {
                            if ($dataarray[$z] == 0) {
                                $ii++;
                            }
                            if ($dataarray[$x] + $datar[$i] == $dataarray[$z] && $dataarray[$z] != 0) {
                                $ii++;
                            }
                            $x++;
                            $z++;
                        }

                        echo '</tbody><tbody><tr><td class="empty" colspan="12"></td></tr></tbody></table>';
                        echo '<tbody><tr><td class="empty" colspan="12"></td></tr></tbody>';

                        echo '<table class="additionalInformation">';
                        if ($dataarray[32]) { //ram
                        ?>
                <tbody class="goods">
                    <tr>
                        <th><?= rpts3 ?></th>
                        <td colspan="11">
                            <img class="unit u<?= ($dataarray[4] - 1) * 10 + 7; ?>" src="img/x.gif" alt="Ram" title="Ram" />
                            <?= $dataarray[32]; ?>
                        </td>
                    </tr>
                </tbody>
            <?php }
                        if ($all['data1'] != '' && $datar[11] != '') {
            ?>
                <tbody class="goods">
                    <tr>
                        <th><?= rpts3 ?></th>
                        <td colspan="11">
                        <?php
                            echo "<img src=\"" . GP_LOCATE . "img/u/98.gif\"   alt=\"Trap\" title=\"Trap\" /> " . $datar[11];
                        }

                        if ($dataarray[33]) { //cata
                        ?>
                <tbody class="goods">
                    <tr>
                        <th><?= rpts3 ?></th>
                        <td colspan="11">
                            <img class="unit u<?= ($dataarray[4] - 1) * 10 + 8; ?>" src="img/x.gif" alt="Catapult" title="Catapult" />
                            <?= $dataarray[33]; ?>
                        </td>
                    </tr>
                </tbody>
            <?php }
                        if ($dataarray[34]) { //cata
            ?>
                <tbody class="goods">
                    <tr>
                        <th><?= rpts3 ?></th>
                        <td colspan="11">
                            <img class="unit u<?= ($dataarray[4] - 1) * 10 + 8; ?>" src="img/x.gif" alt="Catapult" title="Catapult" />
                            <?= $dataarray[34]; ?>
                        </td>
                    </tr>
                </tbody>
            <?php }
                        if ($dataarray[35]) { //chief
            ?>
                <tbody class="goods">
                    <tr>
                        <th><?= rpts3 ?></th>
                        <td colspan="11">
                            <img class="unit u<?= ($dataarray[4] - 1) * 10 + 9; ?>" src="img/x.gif" alt="Chief" title="Chief" />
                            <?= $dataarray[35]; ?>
                        </td>
                    </tr>
                </tbody>
            <?php }

                        if ($dataarray[36]) { //hero
            ?>
                <tbody class="goods">
                    <tr>
                        <th><?= rpts3 ?></th>
                        <td colspan="11">
                            <img class="unit uhero" src="img/x.gif" />
                            <?= $dataarray[36]; ?>
                        </td>
                    </tr>
                </tbody>
            <?php } ?>
            <tbody class="goods">
                <tr>
                    <th><?php echo REPORT_BOUNTY; ?></th>
                    <td colspan="11">
                        <div class="res">
                            <div class="inlineIconList resourceWrapper">
                                <div class="inlineIcon resources">
                                    <i class="r1"></i>
                                    <span class="value "><?php echo number_format($dataarray[27]); ?></span>
                                </div>

                                <div class="inlineIcon resources">
                                    <i class="r2"></i>
                                    <span class="value "><?php echo number_format($dataarray[28]); ?></span>
                                </div>
                                <div class="inlineIcon resources">
                                    <i class="r3"></i>
                                    <span class="value "><?php echo number_format($dataarray[29]); ?></span>
                                </div>

                                <div class="inlineIcon resources">
                                    <i class="r4"></i>
                                    <span class="value "><?php echo number_format($dataarray[30]); ?></span>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="carry">
                            <?php
                            if ($dataarray[29] + $dataarray[30] + $dataarray[27] + $dataarray[28] == 0) {
                                echo "<img title=\"";
                                echo ($dataarray[29] + $dataarray[30] + $dataarray[27] + $dataarray[28]) . "/" . $dataarray[31];
                                echo "\" src=\"img/x.gif\" class=\"carry empty\">";
                            } elseif ($dataarray[29] + $dataarray[30] + $dataarray[27] + $dataarray[28] != $dataarray[31]) {
                                echo "<img title=\"";
                                echo ($dataarray[29] + $dataarray[30] + $dataarray[27] + $dataarray[28]) . "/" . $dataarray[31];
                                echo "\" src=\"img/x.gif\" class=\"carry half\">";
                            } else {
                                echo "<img title=\"";
                                echo ($dataarray[29] + $dataarray[30] + $dataarray[27] + $dataarray[28]) . "/" . $dataarray[31];
                                echo "\" src=\"img/x.gif\" class=\"carry full\">";
                            }
                            ?>
                            <?php echo number_format($dataarray[29] + $dataarray[30] + $dataarray[27] + $dataarray[28]) . "/" . number_format($dataarray[31]); ?></div>
                    </td>
                </tr>
            </tbody>

            </tbody>
            </table>
        </div>

        <?php
        $targettribe = $dataarray['41'];
        $l = 41;
        $k = $m = 42;
        //echo $database->getUserInfo($dataarray[37])['tribe'];
        for (
            $y = 0;
            $y <= MAX_TRIBE - 1;
            $y++
        ) {
            //echo $y;
            //echo $y;
            $k++;
            $m++;
            $l++;
            /*echo $database->getUserInfo($dataarray[37])['tribe'];
        echo "<br>";
        echo $y+1;
        echo '__________';
        echo "<br>";*/
            //echo $dataarray[$l+$y*22]; echo "<br>";

            // iRedux -> Review this later
            /*if($targettribe == 6 || $targettribe == 7){
            if($dataarray[$l+$y*22]==0){
                $PASS = TRUE;
            }
        }else{
            if ($dataarray[$l+$y*22]>0){
                $PASS = TRUE;
            }
        }*/
            if ($dataarray[$l + $y * 22] > 0 && $database->getUserInfo($dataarray[37])['tribe'] == $y + 1) {
        ?>
                <div class="role defender">
                    <div class="header">
                        <div class="avatar">
                            <i class="tribeIcon bigTribe2"> </i>
                            <img src="img/svg/combat/svgDefend.svg" alt="Defense">
                        </div>
                        <h2>Defense</h2>
                        <div class="outcome">
                            <div class="arrowWrapper">
                                <svg class="outcomeArrow" viewBox="0 0 20 20" preserveAspectRatio="none">
                                    <path d="M0 0L20 10L0 20z"></path>
                                </svg>
                            </div>
                            <svg class="svgDefend losses defend roleIcon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90.32 100">
                                <path fill="#fff" d="M45.1 100h-.51c-6.65-.43-14.31-4-21.59-10.17a59.4 59.4 0 0 1-10.16-11 33.8 33.8 0 0 1-4.8-9.35 180.48 180.48 0 0 1-4.45-21.93C2.14 38 .93 27.26.42 19.46L0 13.06l6.42-.18c8.47-.24 13.91-.91 18.77-2.33 5.11-1.49 10.06-4 16.55-8.26L45.2 0l3.43 2.32A57.18 57.18 0 0 0 64.09 10a72.79 72.79 0 0 0 19.81 2.88l6.42.18-.42 6.4c-.25 3.91-.69 8.65-1.27 13.72-.55 4.82-1.21 9.82-1.9 14.37a180.28 180.28 0 0 1-4.47 21.92c-1.93 6.46-7.52 14.07-15 20.35a48 48 0 0 1-13.88 8.45 26.63 26.63 0 0 1-7.56 1.7h-.69z"></path>
                                <path fill="#494949" d="M44.84 95.64c-5.71-.35-12.46-3.6-19-9.13a55 55 0 0 1-9.41-10.18 29.49 29.49 0 0 1-4.19-8.1A176.42 176.42 0 0 1 7.9 46.89c-1.43-9.42-2.63-20-3.13-27.72l-.12-1.89 1.9-.05c8.87-.25 14.63-1 19.87-2.5 5.58-1.62 10.86-4.25 17.73-8.81l1-.68 1 .69a61.32 61.32 0 0 0 16.65 8.26 77 77 0 0 0 21 3l1.9.05-.12 1.89c-.25 3.83-.68 8.5-1.25 13.51-.54 4.77-1.19 9.68-1.88 14.2a176.33 176.33 0 0 1-4.34 21.33c-1.67 5.6-6.88 12.6-13.6 18.28A43.7 43.7 0 0 1 51.9 94.2a22.33 22.33 0 0 1-6.32 1.44h-.74z"></path>
                                <path fill="#bcbec0" d="M45.16 7.72h.07v85.86s-6.77.42-16.91-7.7a50 50 0 0 1-11.66-13L44.72 8z"></path>
                                <path fill="#d3d3d3" d="M6.84 19.29c.51 7.6 1.69 18 3.1 27.3a167.65 167.65 0 0 0 4.27 21 23.57 23.57 0 0 0 2.45 5.28L44.72 8C37.94 12.45 32.6 15.08 27 16.71 21.61 18.28 15.76 19 6.84 19.29z"></path>
                                <path fill="#87898e" d="M62.19 16.16a63.06 63.06 0 0 1-17-8.39v85.81h.28A25.26 25.26 0 0 0 56 90a47.91 47.91 0 0 0 7.16-5c6.33-5.35 11.41-12.14 13-17.3a167.79 167.79 0 0 0 4.27-21c.16-1 .31-2.07.46-3.12C82 35 83 26.05 83.49 19.29a78.71 78.71 0 0 1-21.3-3.13z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="troopHeadline ">
                        <div>

                            <?php if ($dataarray[41] == $y + 1) {
                                echo '<a class="player" href="spieler.php?uid=' . $dataarray[37] . '">' . $dataarray[38] . '</a> From <a class="village" href="karte.php?d=' . $dataarray[39] . '&amp;c=' . $generator->getMapCheck($dataarray[39]) . '">' . $dataarray[40] . '</a></p>';
                            } else {
                                echo OTPRAV2;
                            } ?>
                        </div>

                        <!--<div class="toolList">
                    <a class="iconButton" href="build.php?id=39&amp;tt=3&amp;bid=1520999"><i class="simulate"></i></a>
                </div>-->
                    </div>
                    <table id="defender" class="defender" cellpadding="0" cellspacing="0">
                        <tbody class="units">
                            <tr>
                                <th class="coords"></th>


                                <?php
                                for ($i = $y * 10 + 1; $i <= $y * 10 + 10; $i++) {
                                    echo "<td><img src=\"img/x.gif\" class=\"unit u$i\" title=\"" . constant('U' . $i) . "\" alt=\"\" /></td>";
                                }
                                echo "<td class=\"uniticon last\"><img src=\"img/x.gif\" class=\"unit uhero\" title=\"Hero\" alt=\"Hero\" /></td>";
                                echo "</tr><tr><th><i class=\"troopCount\"> </i></th>";
                                for ($i = $k; $i <= $k + 9; $i++) {
                                    if ($dataarray[$i] == 0) {
                                        echo "<td class=\"unit none\">0</td>";
                                    } else {
                                        echo "<td class=\"unit\">" . $dataarray[$i] . "</td>";
                                    }
                                }
                                //echo$k+9;
                                //echo "<br>";
                                if ($dataarray[$k + 10] != 0) {
                                    echo "<td class=\"unit last\">" . $dataarray[$k + 10] . "</td></tr></tbody>";
                                } else {
                                    echo "<td class=\"unit none last\">0</td></tr></tbody>";
                                }
                                $k += 11;

                                echo "<tbody class=\"units last\"><tr><th><i class=\"troopDead\"></i></th>";

                                for ($i = $k; $i <= $k + 9; $i++) {
                                    if ($dataarray[$i] == 0) {
                                        echo "<td class=\"unit none\">0</td>";
                                    } else {
                                        echo "<td class=\"unit\">" . $dataarray[$i] . "</td>";
                                    }
                                }
                                // iRedux - fix the hero bug
                                if ($dataarray[$k + 10] != 0) {
                                    echo "<td class=\"unit last\">" . $dataarray[$k + 10] . "</td></tr></tbody></table></div>";
                                } else {
                                    echo "<td class=\"unit none last\">0</td></tr></tbody></table></div>";
                                }
                                $k += 11;
                                ?>
                        <?php }
                    $m += 22;
                    $k = $m;
                } ?>

                        <?php
                        $targettribe = $dataarray['41'];
                        $l = 41;
                        $k = $m = 42;
                        //echo $database->getUserInfo($dataarray[37])['tribe'];
                        for (
                            $y = 0;
                            $y <= MAX_TRIBE - 1;
                            $y++
                        ) {
                            //echo $y;
                            $k++;
                            $m++;
                            $l++;
                            if ($dataarray[$l + $y * 22] > 0 && $database->getUserInfo($dataarray[37])['tribe'] != $y + 1) {
                        ?>
                                <div class="role defender">
                                    <div class="header">
                                        <div class="avatar">
                                            <i class="tribeIcon bigTribe2"> </i>
                                            <img src="img/svg/combat/svgDefend.svg" alt="Defense">
                                        </div>
                                        <h2>Defense</h2>
                                        <div class="outcome">
                                            <div class="arrowWrapper">
                                                <svg class="outcomeArrow" viewBox="0 0 20 20" preserveAspectRatio="none">
                                                    <path d="M0 0L20 10L0 20z"></path>
                                                </svg>
                                            </div>
                                            <img class="losses defend" src="img/svg/combat/svgDefend.svg">
                                        </div>
                                    </div>
                                    <div class="troopHeadline ">
                                        <div>

                                            <?php if ($dataarray[41] == $y + 1) {
                                                echo '<a class="player" href="spieler.php?uid=' . $dataarray[37] . '">' . $dataarray[38] . '</a> From <a class="village" href="karte.php?d=' . $dataarray[39] . '&amp;c=' . $generator->getMapCheck($dataarray[39]) . '">' . $dataarray[40] . '</a></p>';
                                            } else {
                                                echo OTPRAV2;
                                            } ?>
                                        </div>

                                        <!--<div class="toolList">
                                <a class="iconButton" href="build.php?id=39&amp;tt=3&amp;bid=1520999"><i class="simulate"></i></a>
                            </div>-->
                                    </div>
                                    <table id="defender" class="defender" cellpadding="0" cellspacing="0">
                                        <tbody class="units">
                                            <tr>
                                                <th class="coords"></th>


                                                <?php
                                                for ($i = $y * 10 + 1; $i <= $y * 10 + 10; $i++) {
                                                    echo "<td><img src=\"img/x.gif\" class=\"unit u$i\" title=\"" . constant('U' . $i) . "\" alt=\"\" /></td>";
                                                }
                                                echo "<td class=\"uniticon last\"><img src=\"img/x.gif\" class=\"unit uhero\" title=\"Hero\" alt=\"Hero\" /></td>";
                                                echo "</tr><tr><th><i class=\"troopCount\"> </i></th>";
                                                for ($i = $k; $i <= $k + 9; $i++) {
                                                    if ($dataarray[$i] == 0) {
                                                        echo "<td class=\"unit none\">0</td>";
                                                    } else {
                                                        echo "<td class=\"unit\">" . $dataarray[$i] . "</td>";
                                                    }
                                                }
                                                //echo$k+9;
                                                //echo "<br>";
                                                if ($dataarray[$k + 10] != 0) {
                                                    echo "<td class=\"unit last\">" . $dataarray[$k + 10] . "</td></tr></tbody>";
                                                } else {
                                                    echo "<td class=\"unit none last\">0</td></tr></tbody>";
                                                }
                                                $k += 11;

                                                echo "<tbody class=\"units last\"><tr><th><i class=\"troopDead\"></i></th>";

                                                for ($i = $k; $i <= $k + 9; $i++) {
                                                    if ($dataarray[$i] == 0) {
                                                        echo "<td class=\"unit none\">0</td>";
                                                    } else {
                                                        echo "<td class=\"unit\">" . $dataarray[$i] . "</td>";
                                                    }
                                                }
                                                // iRedux - fix the hero bug
                                                if ($dataarray[$k + 10] != 0) {
                                                    echo "<td class=\"unit last\">" . $dataarray[$k + 10] . "</td></tr></tbody></table></div>";
                                                } else {
                                                    echo "<td class=\"unit none last\">0</td></tr></tbody></table></div>";
                                                }
                                                $k += 11;
                                                ?>
                                        <?php }
                                    $m += 22;
                                    $k = $m;
                                } ?>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="clear"></div>

                                </div>
                </div>