<?php
include (application/Village.php);
$id = 3;

if(isset($id))
{
	$village = $database->getVilKol($id);
	$result = $database->getVillagesID($id);
	$varray = $database->getProfileVillages($id);
}

if(!isset($_GET['page'])){
    if($village > 20){
        $_GET['page'] = intval(floor(($village-1)/20)+1);
    }else{
        $_GET['page'] = 1;
    }
}

?>
	
<h4 class="round">Farm Villages</h4>
<!-- No of Farm Village = <?php echo "$village";?>  -->
<table cellpadding="1" cellspacing="1" id="wonder" style="width:100%;">
		<thead><tr><td><center>#</center></td><td><center>Village</center></td><td><center><?=POPULATION?></center></td><td><center><?=COORDIANTES?></center></td></tr></thead>
	<tbody>
<?php

if (isset($_GET['page'])) {
    $page = preg_replace('#[^0-9]#i', '', $_GET['page']);
} else {
    $page = 1;
} 

$itemsPerPage = 20;
$lastPage = ceil($query / $itemsPerPage);

if ($page < 1) {
    $page = 1;
} else if ($page > $lastPage) {
    $page = $lastPage;
} 

$centerPages = "";
$sub1 = $page - 1;
$sub2 = $page - 2;
$sub3 = $page - 3;
$add1 = $page + 1;
$add2 = $page + 2;
$add3 = $page + 3;

if ($page <= 1 && $lastPage <= 1) {
    $centerPages .= '<span class="number currentPage">1</span>';
	
}elseif ($page == 1 && $lastPage == 2) {
    $centerPages .= '<span class="number currentPage">' . $page . '</span> ';
    $centerPages .= '<a class="number" href="?id=98&page=2">2</a>';
	
}elseif ($page == 1 && $lastPage == 3) {
    $centerPages .= '<span class="number currentPage">' . $page . '</span> ';
    $centerPages .= '<a class="number" href="?id=98&page=2">2</a> ';
    $centerPages .= '<a class="number" href="?id=98&page=3">3</a>';
	
}elseif ($page == 1) {
    $centerPages .= '<span class="number currentPage">' . $page . '</span> ';
    $centerPages .= '<a class="number" href="?id=98&page=' . $add1 . '">' . $add1 . '</a> ';
	$centerPages .= '<a class="number" href="?id=98&page=' . $add2 . '">' . $add2 . '</a> ... ';
	$centerPages .= '<a class="number" href="?id=98&page=' . $lastPage . '">' . $lastPage . '</a>';
	
} else if ($page == $lastPage && $lastPage == 2) {
	$centerPages .= '<a class="number" href="?id=98&page=1">1</a> ';
    $centerPages .= '<span class="number currentPage">' . $page . '</span>';
	
} else if ($page == $lastPage && $lastPage == 3) {
	$centerPages .= '<a class="number" href="?id=98&page=1">1</a> ';
    $centerPages .= '<a class="number" href="?id=98&page=2">2</a> ';
    $centerPages .= '<span class="number currentPage">' . $page . '</span>';
	
} else if ($page == $lastPage) {
	$centerPages .= '<a class="number" href="?id=98&page=1">1</a> ... ';
    $centerPages .= '<a class="number" href="?id=98&page=' . $sub2 . '">' . $sub2 . '</a> ';
	$centerPages .= '<a class="number" href="?id=98&page=' . $sub1 . '">' . $sub1 . '</a> ';
    $centerPages .= '<span class="number currentPage">' . $page . '</span>';
	
} else if ($page == ($lastPage - 1) && $lastPage == 3) {
    $centerPages .= '<a class="number" href="?id=98&page=1">1</a> ';
    $centerPages .= '<span class="number currentPage">' . $page . '</span> ';
	$centerPages .= '<a class="number" href="?id=98&page=' . $lastPage . '">' . $lastPage . '</a>';

} else if ($page > 2 && $page < ($lastPage - 1)) {
    $centerPages .= '<a class="number" href="?id=98&page=1">1</a> ... ';
    $centerPages .= '<a class="number" href="?id=98&page=' . $sub1 . '">' . $sub1 . '</a> ';
    $centerPages .= '<span class="number currentPage">' . $page . '</span> ';
    $centerPages .= '<a class="number" href="?id=98&page=' . $add1 . '">' . $add1 . '</a> ... ';
	$centerPages .= '<a class="number" href="?id=98&page=' . $lastPage . '">' . $lastPage . '</a>';
	
}else if ($page == ($lastPage - 1)) {
    $centerPages .= '<a class="number" href="?id=98&page=1">1</a> ... ';
    $centerPages .= '<a class="number" href="?id=98&page=' . $sub1 . '">' . $sub1 . '</a> ';
    $centerPages .= '<span class="number currentPage">' . $page . '</span> ';
	$centerPages .= '<a class="number" href="?id=98&page=' . $lastPage . '">' . $lastPage . '</a>';

} else if ($page > 1 && $page < $lastPage && $lastPage == 3) {
    $centerPages .= '<a class="number" href="?id=98&page=' . $sub1 . '">' . $sub1 . '</a> ';
    $centerPages .= '<span class="number currentPage">' . $page . '</span> ';
    $centerPages .= '<a class="number" href="?id=98&page=' . $add1 . '">' . $add1 . '</a>';
    
} else if ($page > 1 && $page < $lastPage) {
    $centerPages .= '<a class="number" href="?id=98&page=' . $sub1 . '">' . $sub1 . '</a> ';
    $centerPages .= '<span class="number currentPage">' . $page . '</span> ';
    $centerPages .= '<a class="number" href="?id=98&page=' . $add1 . '">' . $add1 . '</a> ... ';
	$centerPages .= '<a class="number" href="?id=98&page=' . $lastPage . '">' . $lastPage . '</a>';
}



$paginationDisplay = "";
$nextPage = $_GET['page'] + 1;
$previous = $_GET['page'] - 1;

if ($page == "1" && $lastPage == "1"){
$paginationDisplay .=  '<img alt="'.FIRSTPAGE.'" src="img/x.gif" class="first disabled"> ';
$paginationDisplay .=  '<img alt="'.PREVPAGE.'" src="img/x.gif" class="previous disabled">';
$paginationDisplay .= $centerPages;
$paginationDisplay .=  '<img alt="'.NEXTPAGE.'" src="img/x.gif" class="next disabled"> ';
$paginationDisplay .=  '<img alt="'.LASTPAGE.'" src="img/x.gif" class="last disabled">';

}elseif ($lastPage == 0){
$paginationDisplay .=  '<img alt="'.FIRSTPAGE.'" src="img/x.gif" class="first disabled"> ';
$paginationDisplay .=  '<img alt="'.PREVPAGE.'" src="img/x.gif" class="previous disabled">';
$paginationDisplay .= $centerPages;
$paginationDisplay .=  '<img alt="'.NEXTPAGE.'" src="img/x.gif" class="next disabled"> ';
$paginationDisplay .=  '<img alt="'.LASTPAGE.'" src="img/x.gif" class="last disabled">';

}elseif ($page == "1" && $lastPage != "1"){
$paginationDisplay .=  '<img alt="'.FIRSTPAGE.'" src="img/x.gif" class="first disabled"> ';
$paginationDisplay .=  '<img alt="'.PREVPAGE.'" src="img/x.gif" class="previous disabled">';
$paginationDisplay .= $centerPages;
$paginationDisplay .=  '<a class="next" href="?id=98&page=' . $nextPage . '"><img alt="'.NEXTPAGE.'" src="img/x.gif"></a> ';
$paginationDisplay .=  '<a class="last" href="?id=98&page=' . $lastPage . '"><img alt="'.LASTPAGE.'" src="img/x.gif"></a>';

}elseif ($page != "1" && $page != $lastPage){
$paginationDisplay .=  '<a class="first" href="?id=98&page=1"><img alt="'.FIRSTPAGE.'" src="img/x.gif"></a> ';
$paginationDisplay .=  '<a class="previous" href="?id=98&page=' . $previous . '"><img alt="'.PREVPAGE.'" src="img/x.gif"></a>';
$paginationDisplay .= $centerPages;
$paginationDisplay .=  '<a class="next" href="?id=98&page=' . $nextPage . '"><img alt="'.NEXTPAGE.'" src="img/x.gif"></a> ';
$paginationDisplay .=  '<a class="last" href="?id=98&page=' . $lastPage . '"><img alt="'.LASTPAGE.'" src="img/x.gif"></a>';

}elseif ($page == $lastPage){
$paginationDisplay .=  '<a class="first" href="?id=98&page=1"><img alt="'.FIRSTPAGE.'" src="img/x.gif"></a> ';
$paginationDisplay .=  '<a class="previous" href="?id=98&page=' . $previous . '"><img alt="'.PREVPAGE.'" src="img/x.gif"></a>';
$paginationDisplay .= $centerPages;
$paginationDisplay .=  '<img alt="'.NEXTPAGE.'" src="img/x.gif" class="next disabled"> ';
$paginationDisplay .=  '<img alt="'.LASTPAGE.'" src="img/x.gif" class="last disabled">';
}

        $limit = 'LIMIT ' .($page - 1) * $itemsPerPage .',' .$itemsPerPage;
        if(isset($_GET['page']) && $_GET['page'] > 1){
		$rank = ($_GET['page']-1)*20+1;
        }else{
    	$rank = 1;
        }
        $cont = 1;
        if(count($result)>0){}
        else{echo '<tr><td colspan="9"><center>'.NO_FARM.'</center></td></tr>';};
        
        for($i = 0; $i < count($result); $i++)
        {
            $row = $result[$i];
            $coor = $database->getCoor($row);

      
      ?>
			<tr class="hover">
			<td class="ra"><center><?php echo $cont; $cont++;?></td>
			<center><td class="pla"><a href="spieler.php?uid=<? echo $id;?>"><?php echo $varray[$i]['name']; ?></a></td> 
			<td><center><?php echo $varray[$i]['pop']; ?></td>
			<td><center><a href="karte.php?x=<?=$coor['x']?>&y=<?=$coor['y']?>">(<?=$coor['x']?>,<?=$coor['y']?>)</td>
			
        </tr>
       <?php }     ?>
	</tbody>
</table> 	    
    