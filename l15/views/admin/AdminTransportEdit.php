<?php
  require_once ROOT."/views/admin/header.php";
?>
    <h1><?php echo $title; echo " ".$transport['name'] ?></h1>
    <div class="container">
    <div class="row">
        <div class="col-xs-1 col-sm-1 col-md-2 col-lg-3"></div>
        <div class="col-xs-10 col-sm-10 col-md-8 col-lg-6 create-transport">
            <h1 class="text-center"><?php echo $title; ?></h1>
            <form class="form-horizontal" role="form" method="post">
                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label">Назва транспорту</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Ввести назву" value="<?php echo $transport['name'];?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-4 control-label">Опис транспорту</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" rows="2" id="description" name="description"  placeholder="Короткий опис транспорту при необхідності..."><?php echo $transport['description']; ?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="carriage_id" class="col-sm-4 control-label">Вид транспорту</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="carriage_id" name="carriage_id" placeholder="Ввести вид транспорту" value="<?php echo $transport['carriage_id']; ?>" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="route_id" class="col-sm-4 control-label">id маршруту</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="route_id" name="route_id" placeholder="Ввести id маршруту" value="<?php echo $transport['route_id']; ?>" required>
                    </div>
                </div>
                <input type="hidden" name="typeform" value="createTransport">
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <input name="editTransport" type="submit" value="Зберегти" class="btn btn-warning">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-xs-1 col-sm-1 col-md-2 col-lg-3"></div>
    </div>
</div>
<?php
  require_once ROOT."/views/admin/footer.php";
?>