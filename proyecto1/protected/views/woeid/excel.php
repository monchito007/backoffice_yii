<?php if($model!==null){ ?>
<table border='1'>
<tr>
<th>ID</th>
<th>Municipios</th>
<th>Woeid</th>
</tr>
<?php foreach($model as $user) { ?>

<tr <?php 

if(($x++)%2==0){echo 'style="backgroud-color:#CCCCCC"';}

?>>
<td><?php echo $user->id;?></td>
<td><?php echo utf8_decode($user->municipios->municipio);?></td>
<td><?php echo utf8_decode($user->woeid);?></td>

</tr>
<?php } ?>
<table>
<?php } ?>
