<h1>Услуги</h1>

<p>
<table>
Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
<tr><td>Проект</td><td>Описание</td></tr>
<?php

	foreach($data as $row)
	{
        echo '<tr><td>'.$row['nameService'].'</td><td>'.$row['descriptionService'].'</td>';
      
	}
	
?>
</table>
</p>
