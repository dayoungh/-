<?
if($_GET['bo_table']=='qa') {$num = 5;$c_title='사내커뮤니티';}
else if($_GET['bo_table']=='pro') {$num = 4;$c_title='채용정보';}
else if($_GET['bo_table']=='notice') {$num = 0;$c_title='공지사항';}
?>

<section class="sub_title">
   <h2><?=$title?><?=$board['bo_subject']?></h2> 
</section>

<div class="container sub_page">
   <article>
      <h2><?=$title?><?=$board['bo_subject']?> <small> / <?=$c_title?> </small></h2>
      
   
   