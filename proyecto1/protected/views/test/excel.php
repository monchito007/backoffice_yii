<?php if($model!==null){ ?>
<table border='1'>
<tr>
<th>ID</th>
<th>Llocs</th>
<th>Usuaris</th>
<th>Data Hora</th>
<th>Comentari</th>
</tr>
<?php foreach($model as $user) { ?>

<tr <?php 

if(($x++)%2==0){echo 'style="backgroud-color:#CCCCCC"';}

?>>
<td><?php echo $user->id;?></td>
<td><?php echo utf8_decode($user->llocs->nom);?></td>
<td><?php echo utf8_decode($user->usuaris->nom_usuari);?></td>
<td><?php echo $user->data_hora;?></td>
<td><?php echo utf8_decode($user->comentari);?></td>
</tr>
<?php } ?>
<table>
<?php } ?>
