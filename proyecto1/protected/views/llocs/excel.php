<?php if($model!==null){ ?>
<table border='1'>
<tr>
<th>ID</th>
<th>Regiones</th>
<th>Provicinas</th>
<th>Muncipios</th>
<th>Latitud</th>
<th>Longitud</th>
<th>Nom</th>
<th>Carrer</th>
<th>Direccio</th>
</tr>
<?php foreach($model as $user) { ?>

<tr <?php 

if(($x++)%2==0){echo 'style="backgroud-color:#CCCCCC"';}

?>>
<td><?php echo $user->id;?></td>
<td><?php echo utf8_decode($user->regiones->region);?></td>
<td><?php echo utf8_decode($user->provincias->provincia);?></td>
<td><?php echo utf8_decode($user->municipios->municipio);?></td>
<td><?php echo $user->latitud;?></td>
<td><?php echo $user->longitud;?></td>
<td><?php echo utf8_decode($user->nom);?></td>
<td><?php echo utf8_decode($user->carrer);?></td>
<td><?php echo utf8_decode($user->direccio);?></td>
</tr>
<?php } ?>
<table>
<?php } ?>
