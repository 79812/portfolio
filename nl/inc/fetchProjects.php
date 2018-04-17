<table>
<thead>
<tr>
<th class="projectTitle">Titel</th>
<th class="projectDescription">Beschrijving</th>
<th class="projectImage">Afbeelding</th>
<th class="projectLanguage">Language</th>
</tr>
</thead>
<tbody>
<?php
foreach($result as $k => $v)
{
?>
<tr>
<td class="projectTitleTable"><?php echo $v['projectTitle']; ?></td>
<td class="projectDescriptionTable"><?php echo $v['projectDescription']; ?></td>
<td><img class="project-image" src="images/<?php echo $v['projectImage'];?>.jpg"></br></td>
<td class="projectLanguageTable"><?php echo $v['projectLanguage']; ?></td>
<?php
?>                      
<?php
}
?>
</tr>
</tbody>
</table>