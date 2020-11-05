<h1>Адм портфолио</h1>
<p>
<table>
    Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
    <tr><td>Год</td><td>Проект</td><td>Описание</td><td>Удалить</td><td>Изменить</td></tr>
    <?php

    foreach($data as $row)
    {
        echo '<tr><td>'.$row['year'].'</td><td>'.$row['site'].'</td><td>'.$row['description'].'</td>';
        echo '<td><p><a href="/admin_portfolio/delete?id='.$row['idPortfolio'].'" style="color:red">Удалить</a></td>';
        echo '<td><p><a href="/admin_portfolio/update?id='.$row['idPortfolio'].'" style="color:green">Изменить</a></td></tr>';
    }

    ?>
</table>

</p>