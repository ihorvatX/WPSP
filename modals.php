<?php

if(isset($_GET['modal_id']))
{
switch ($_GET['modal_id']) {
    case 'new_employee':
        echo'<div class="modal-body" style="padding:0">
        <div class="modal-header" style="margin-bottom:25px;">
        <button style="color:white" type="button" class="close" data-dismiss="modal"
       aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="color:white">Title</h4>
        </div>
        <form class="form-horizontal">
        <div class="form-group">
        <label class="col-md-3 control-label">Birth date</label>
        <div class="col-md-8"><input type="date" class="form-control"
       placeholder="" /></div>
       <label class="col-md-3 control-label">First name</label>
        <div class="col-md-8"><input type="text" class="form-control"
       placeholder="" /></div>
       <label class="col-md-3 control-label">Last name</label>
        <div class="col-md-8"><input type="text" class="form-control"
       placeholder="" /></div>
       <label class="col-md-3 control-label">Gender</label>
        <div class="col-md-8"><input type="text" class="form-control"
       placeholder="" /></div>
       <label class="col-md-3 control-label">Label</label>
        <div class="col-md-8"><input type="text" class="form-control"
       placeholder="" /></div>
       <label class="col-md-3 control-label">Hire date</label>
        <div class="col-md-8"><input type="date" class="form-control"
       placeholder="" /></div>
        </div>
        </form>
        <div class="modal-footer">
        <button type="button" class="btn btn-success btn-s" onclick="">Spremi</button>
        <button type="button" class="btn btn-success btn-s" datadismiss="modal">Zatvori</button>
        </div>
       </div>';
        break;
        case 'edit_employee':
            echo'<div class="modal-body" style="padding:0">
        <div class="modal-header" style="margin-bottom:25px;">
        <button style="color:white" type="button" class="close" data-dismiss="modal"
       aria-hidden="true">&times;</button>
        <h4 class="modal-title" style="color:white">Title</h4>
        </div>
        <form class="form-horizontal">
        <div class="form-group">
        <label class="col-md-3 control-label">Birth date</label>
        <div  class="col-md-8">
        <input id="em_BirthDate" type="date" class="form-control"
       placeholder="" /></div>
       <label class="col-md-3 control-label">First name</label>
        <div class="col-md-8"><input id="em_FirstName" type="text" class="form-control"
       placeholder="" /></div>
       <label class="col-md-3 control-label">Last name</label>
        <div class="col-md-8"><input id="em_LastName" type="text" class="form-control"
       placeholder="" /></div>
       <label class="col-md-3 control-label">Gender</label>
        <div class="col-md-8"><input id="em_Gender" type="text" class="form-control"
       placeholder="" /></div>
       <label class="col-md-3 control-label">Hire date</label>
        <div class="col-md-8"><input id="em_HireDate" type="date" class="form-control"
       placeholder="" /></div>
        </div>
        </form>
        <div class="modal-footer">
        <button type="button" class="btn btn-success btn-s" onclick="">Spremi</button>
        <button type="button" class="btn btn-success btn-s" datadismiss="modal">Zatvori</button>
        </div>
       </div>';
        break;
        case 'delete_employee':
            echo'<div class="modal-body" style="padding:0">
            <div class="modal-header" style="margin-bottom:25px;">
            <button style="color:white" type="button" class="close" data-dismiss="modal"
           aria-hidden="true">&times;</button>
            <h4 class="modal-title" style="color:white">Title</h4>
            </div>
            <form class="form-horizontal">
            <div class="form-group">
            <label class="col-md-3 control-label">Birth date</label>
            <div class="col-md-8"><input type="date" class="form-control"
           placeholder="" /></div>
           <label class="col-md-3 control-label">First name</label>
            <div class="col-md-8"><input type="text" class="form-control"
           placeholder="" /></div>
           <label class="col-md-3 control-label">Last name</label>
            <div class="col-md-8"><input type="text" class="form-control"
           placeholder="" /></div>
           <label class="col-md-3 control-label">Gender</label>
            <div class="col-md-8"><input type="text" class="form-control"
           placeholder="" /></div>
           <label class="col-md-3 control-label">Label</label>
            <div class="col-md-8"><input type="text" class="form-control"
           placeholder="" /></div>
           <label class="col-md-3 control-label">Hire date</label>
            <div class="col-md-8"><input type="date" class="form-control"
           placeholder="" /></div>
            </div>
            </form>
            <div class="modal-footer">
            <button type="button" class="btn btn-success btn-s" onclick="">Spremi</button>
            <button type="button" class="btn btn-success btn-s" datadismiss="modal">Zatvori</button>
            </div>
           </div>';
        break;
        case 'new_department':
                    # code...
        break;
        case 'edit_department':
                        # code...
        break;
        case 'delete_deparmtent':
                            # code...
        break;

    default:
        # code...
        break;
}

}




?>