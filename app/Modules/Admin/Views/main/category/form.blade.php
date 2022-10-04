<?php
/**
 * @var $category \App\Models\Category
 */
?>
@csrf
<div class="form-group">
    <label for="name">Заголовок</label>
    <input id="name" type="text" class="form-control input-default " placeholder="Заголовок" name="name" value="{{$category->name}}">
</div>
<div class="form-group">
    <label for="description">Опис</label>
    <textarea name="description" id="description" class="form-control" cols="30" rows="10">{{$category->description}}</textarea>
</div>
<br>
<div class="form-group">
    <button class="btn btn-success">Зберегти</button>
</div>
