<?php if($model!==null){ ?>
<table border='1'>
<tr>
<th>ID</th>
<th>Provincias</th>
<th>Municipios</th>
</tr>
<?php foreach($model as $user) { ?>

<tr <?php 

if(($x++)%2==0){echo 'style="backgroud-color:#CCCCCC"';}

?>>
<td><?php echo $user->id;?></td>
<td><?php echo utf8_decode($user->provincias->provincia);?></td>
<td><?php echo utf8_decode($user->municipio);?></td>

</tr>
<?php } ?>
<table>
<?php } ?>
