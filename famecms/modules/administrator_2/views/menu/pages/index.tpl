
 <!-- Datatables Header -->
<div ng-controller="ManagePageCtrl">
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
                    <a ng-click="newPageModal('lg')" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
                    <a href="{base_url('administrator/page')}" class="btn btn-primary"><i class="fa fa-globe"></i> Active List</a>
                    <a href="{base_url('administrator/page/trash')}" class="btn btn-danger"><i class="fa fa-trash-o"></i> Trash List</a>
 </div>
</div>
    <div class="table-responsive">
       <table id="example-datatable" class="table table-vcenter table-condensed">
            <thead>
                <tr>
                    <th width="10%" class="text-center">ID</th>
                    <th width="25%" class="text-center">Title</th>
                    <th width="15%" class="text-center">Author</th>
                    <th width="15%" class="text-center">Date</th>
                    <th width="15%" class="text-center">Modified</th>
                    <th width="15%" class="text-center">Status</th>
                    <th width="20%" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            {foreach from=$items key=myId item=i}
            <tr>
                <td class="text-center">{$i.id_post}</td>
                <td class="text-center">{$i.title}</td>
                <td class="text-center">{$i.author}</td>
                <td class="text-center">{$i.date}</td>
                <td class="text-center">{if $i.modified eq '0000-00-00 00:00:00'}-{else}{$i.modified}{/if}</td>
                <td class="text-center">
                 <span class="label label-primary">{$i.status}</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <a ng-click="editPageModal({$i.id_post})" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                        <a ng-click="deletePageAction({$i.id_post})" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                    </div>
                </td>
            </tr>
            {/foreach}
            </tbody>
        </table>
		
    </div>
</div>
<!-- END Datatables Content -->
{include file="menu/pages/modal-add.tpl"}
{include file="menu/pages/modal-edit.tpl"}
</div>

                   