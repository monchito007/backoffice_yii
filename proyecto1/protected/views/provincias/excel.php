<?php if($model!==null){ ?>
<table border='1'>
<tr>
<th>ID</th>
<th>Regiones</th>
<th>Provicinas</th>
</tr>
<?php foreach($model as $user) { ?>

<tr <?php 

if(($x++)%2==0){echo 'style="backgroud-color:#CCCCCC"';}

?>>
<td><?php echo $user->id;?></td>
<td><?php echo utf8_decode($user->regiones->region);?></td>
<td><?php echo utf8_decode($user->provincia);?></td>

</tr>
<?php } ?>
<table>
<?php } ?>
