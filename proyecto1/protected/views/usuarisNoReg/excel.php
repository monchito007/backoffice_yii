<?php if($model!==null){ ?>
<table border='1'>
<tr>
<th>ID</th>
<th>Nom Usuari</th>
<th>Clau</th>
<th>Mail</th>

</tr>
<?php foreach($model as $user) { ?>

<tr <?php 

if(($x++)%2==0){echo 'style="backgroud-color:#CCCCCC"';}

?>>
<td><?php echo $user->id;?></td>
<td><?php echo utf8_decode($user->nom_usuari);?></td>
<td><?php echo utf8_decode($user->clau);?></td>
<td><?php echo $user->mail;?></td>

</tr>
<?php } ?>
<table>
<?php } ?>
