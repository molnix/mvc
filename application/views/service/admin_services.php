<h1>Услуги</h1>

<p>
<table>
Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
<tr><td>Проект</td><td>Описание</td><td>Удалить</td><td>Изменить</td></tr>
<?php

	foreach($data as $row)
	{
        echo '<tr><td>'.$row['nameService'].'</td><td>'.$row['descriptionService'].'</td>';
        echo '<td><p><a href="/admin_services/delete2?id='.$row['idServices'].'" style="color:red">Удалить</a></td>';
        echo '<td><p><a href="/admin_portfolio/update?id='.$row['idPortfolio'].'" style="color:green">Изменить</a></td></tr>';
	}
	
?>
</table>
</p>
