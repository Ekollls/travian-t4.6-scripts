
 <script>
var timeout;
var i = 0;
var str = 'In this section, you can buy features suitable for your account! ';
function add() {
document.getElementById('texty').innerHTML += str.charAt(i);
i = i+1;
if(i == str.length){
clearTimeout(timeout)
}
}
timeout = setInterval('add()', 50);
</script>
		<h1 align="center">Merhaba <?php echo $session->username; ?></h1><br/>
		<div id="texty"></div>
		<noscript><marquee behavior="scroll" direction="left" scrollamount="2">Hello, In this section, you can buy features suitable for your account! </marquee></noscript>