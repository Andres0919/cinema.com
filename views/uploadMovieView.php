<h1>Hola Upload Movie!!</h1>
<br />
<br />
<div class="container-fluid">
    <form action="index.php?controller=movie&action=new" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <label class="control-label col-md-3">Image Upload #1</label>
            <div class="col-md-9">
             <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> </div>
                <div>
                                                                <span class="btn red btn-outline btn-file">
                                                                    <span class="fileinput-new"> Select image </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="image"> </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                </div>
            </div>
            </div>
            <input type="submit" value="submit" class="btn btn-success">
        </div>
    </form>
</div>