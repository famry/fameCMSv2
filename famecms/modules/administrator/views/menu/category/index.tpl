
 <!-- Datatables Header -->
<div ng-controller="ManageCategoryCtrl">
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
                    <a href="{base_url('administrator/category/add')}" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                    <a href="{base_url('administrator/category')}" class="btn btn-primary"><i class="fa fa-globe"></i> Active List</a>
                    <a href="{base_url('administrator/category/trash')}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Trash List</a>
 </div>
</div>
    <div class="table-responsive">
       <table id="example-datatable" class="table table-vcenter table-condensed">
            <thead>
                <tr>
                    <th width="10%" class="text-center">ID</th>
                    <th width="30%" class="text-center">Category Name</th>
                    <th width="20%" class="text-center">Category Type</th>
                    <th width="20%" class="text-center">Status</th>
                    <th width="20%" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            {foreach from=$items key=myId item=i}
            <tr>
                <td class="text-center">{$i.id_cat}</td>
                <td class="text-center">{$i.name}</td>
                <td class="text-center">{$i.type}</td>
                <td class="text-center">
                 {if $i.status eq 'active'}<span class="label label-success">{$i.status}</span>{/if}
                 {if $i.status eq 'not active'}<span class="label label-default">{$i.status}</span>{/if}
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <a href="{base_url('administrator/category/edit')}/{$i.id_cat}" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                        <a ng-click="deleteAction({$i.id_cat})" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </div>
                </td>
            </tr>
            {/foreach}
            </tbody>
        </table>
		
    </div>
</div>
<!-- END Datatables Content -->
</div>

                   