<?php
namespace HTMLcreations;
	class Table{
		public function ST(){
			return "<table>";
		}
		public function ET(){
			return "</table>";
		}
		public function D($d){
			foreach ($d as $data){
				echo "<td>{$data}</td>";
			
			}
		}
		public function R($r){
			return '<tr></tr>';
		}
		public function H($h){
			foreach ($h as $head){
			echo "<th>{$head}</th>";
			}
		}
	}
	class Link{
		public function L($url, $link){
			return "<a href=$url>$link</a>";
		}
}
$t = new namespace\Table;
$headings = array('Team', 'Wins', 'Losses');
$Y = array('Yankees', '84', '78');
echo $t->ST();
echo $t->R();
echo $t->H($headings);
echo $t->R();
echo $t->D($Y);
echo $t->ET();
$li = new namespace\Link;
$u = '"https://github.com/Gia636/Homework"';
$n = 'GitHub';
echo $li->L($u, $n);		
?>

?>