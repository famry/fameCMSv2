<!-- Datatables Header -->
<div ng-controller="ManageWidgetCtrl">
<div class="content-header">
    <div class="header-section">
        <h1>
            <i class="fa fa-table"></i>{$page_desc}
        </h1>
    </div>
</div>
<!--<ul class="breadcrumb breadcrumb-top">
    <li>Tables</li>
    <li><a href="">Datatables</a></li>
</ul>-->
<!-- END Datatables Header -->

<!-- Datatables Content -->
 
<div class="block full">
<div align="right"  class="block-title">
<div class="btn-group">
                    <a ng-click="newWidgetModal('lg')" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
 </div>
</div>
    <div class="table-responsive">
        <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Widget Name</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
            {foreach from=$items key=myId item=i}
                <tr>
                    <td class="text-center">{$i.id_widget}</td>
                    <td class="text-center">{$i.widget_name}</td>
                    <td class="text-center">
                        <div class="btn-group">
                        <a ng-click="editWidgetModal({$i.id_widget})" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                        <a ng-click="deletePermanentWidgetAction({$i.id_widget})" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></a>
                    </div>
                    </td>
                </tr>
             {/foreach}
            </tbody>
        </table>
		
    </div>
</div>
<!-- END Datatables Content -->
{include file="menu/widget/modal-add.tpl"}
{include file="menu/widget/modal-edit.tpl"}
</div>

                   