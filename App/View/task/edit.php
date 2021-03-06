<div class="card border-info">
  <div class="card-header">
    Editar tarefa
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-12">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=BASE?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?=BASE?>project/myproject">Meu Projeto</a></li>
          <li class="breadcrumb-item active">Editar Tarefa</li>
        </ol>
      </div>
    </div>

    <form action="<?=BASE?>task/update" method="post" onsubmit="return validateTask(true);">
      <div class="row">
        <div class="col-md-4">
          <label for="txtTitle">Título</label>
          <input type="hidden" name="txtId" id="txtId" value="<?=$task->id;?>">
          <input type="text" name="txtTitle" id="txtTitle" class="form-control" placeholder="Project title" value="<?=$task->title;?>" <?=!$editable ? "disabled" : ""?>>
        </div>

        <div class="col-md-2">
          <label for="txtDeadline">Deadline</label>
          <input type="date" name="txtDeadline" id="txtDeadline" class="form-control" value="<?=convertDate($task->deadline, "Y-m-d");?>" <?=!$editable ? "disabled" : ""?>>
        </div>

        <div class="col-md-3">
          <label for="slCategory">Categoria</label>
          <select class="form-control" name="slCategory" id="slCategory">
            <?php foreach($categoryList as $category) :?>
              <option value="<?=$category->id?>" class="text-info" <?=$category->id == $task->taskCategoryId ? "selected" : "" ?>><?=$category->name?></option>
            <?php endforeach;?>
          </select>
        </div>

        <div class="col-md-3">
          <label for="slStatus">Status</label>
          <select class="form-control" name="slStatus" id="slStatus" <?=!$editable ? "disabled" : ""?>>
            <option value="1" <?=$task->status == 1 ? "selected" : "";?> class="text-success">Ativo</option>
            <option value="2" <?=$task->status == 2 ? "selected" : "";?> class="text-danger">Cancelado</option>
            <option value="3" <?=$task->status == 3 ? "selected" : "";?> class="text-info">Finalizado</option>
          </select>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col">
          <textarea name="txtDescription" id="txtDescription" <?=!$editable ? "disabled" : ""?>><?=$task->description;?></textarea>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-6">
          <div class="alert alert-info" id="dvAlert">
            Preencha corretamente todos os campos.
          </div>
        </div>

        <div class="col-md-6 ">
          <button type="submit" name="btnEdit" class="btn btn-success" <?=!$editable ? "disabled" : ""?>>Editar</button>
        </div>
      </div>
    </form>
  </div>
</div>
<script src="<?=BASE?>vendor/ckeditor/ckeditor.js"></script>
<script src="<?=BASE?>js/task.js"></script>
<script>
CKEDITOR.replace("txtDescription");
</script>
