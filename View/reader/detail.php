<div class="container">

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="?mode=reader&action=update" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <legend>Edit <?= $reader->getName()?> - <?= $reader->getCode()?> </legend>
                </div>

                <div class="form-group">
                    <label for="">Code :</label>
                    <input type="text" class="form-control" name="code" id="" value="<?= $reader->getCode()?>">
                </div>
                <div class="form-group">
                    <label for="">Name :</label>
                    <input type="text" class="form-control" name="name" id="" value="<?= $reader->getName()?>">
                </div>
                <div class="form-group">
                    <label for="">Phone :</label>
                    <input type="text" class="form-control" name="phone" id="" value="<?= $reader->getPhone()?>">
                </div>
                <div class="form-group">
                    <label for="">Email:</label>
                    <input type="email" class="form-control" name="email" id="" value="<?= $reader->getEmail()?>">
                </div>
                <div class="form-group">
                    <label for="">Address:</label>
                    <input type="text" class="form-control" name="address" id="" value="<?= $reader->getAddress()?>">
                </div>
                <!--<div class="form-group">
                    <label for="">Image:</label>
                    <img src="images/<?/*= $reader->getImages()*/?>" class="img-responsive img-circle" alt="Image" width="80px">
                </div>-->
                <div class="form-group">
                    <label for="">Image :</label>
                    <div class="avatar-upload">
                        <div class="avatar-edit">
                            <input name="image" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                            <label for="imageUpload"></label>
                        </div>
                        <div class="avatar-preview">
                            <div id="imagePreview" style="background-image: url('View/upload/<?= $reader->getImages()?>');">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group hidden">
                    <label for="">ID :</label>
                    <input type="text" class="form-control"  name="id" value="<?= $reader->getId()?>">
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-4" style="text-align: center">
                        <a type="button" href="<?=HOME?>" class="btn btn-danger">Cancel</a>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div><!-- /.container -->
