<p>Год: <input type="text" name="year" id="year" value="<?php echo $data['year']?>"></p>
<p>Проект: <input type="text" name="site" id="site" value="<?php echo $data['site']?>"></p>
<p>Описание: <input type="text" name="description" id="description" value="<?php echo $data['description']?>"></p>
<?php if(isset($data['idPortfolio'])){
    echo "<p>id: <input type='number' name='idPortfolio' id='idPortfolio' value='".(int)$data['idPortfolio']."' ></p>";
}?>
<p><input type="submit" value="Добавить"></p>