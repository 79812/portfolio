<table>
<thead>
<tr>
<th>Titel</th>
<th>Beschrijving</th>
<th>Afbeelding</th>
<th>Categorie</th>
</tr>
</thead>
<tbody>
<?php
foreach($result as $k => $v)
{
?>
<tr>
<td><?php echo $v['projectTitle']; ?></td>
<td><?php echo $v['projectDescription']; ?></td>
<?php
while($projectImage = $stmt->fetch(PDO::FETCH_ASSOC)) {
?>
<td><img class="project-image" height="100" width="180;" src="images/<?php echo $projectImage['projectImage'];?>.jpg"></td>
<?php
}
?>                      
<?php
}
?>
<td><?php echo $v['projectCategory']; ?></td>
</tr>
</tbody>
</table>