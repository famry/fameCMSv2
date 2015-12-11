
 <!-- Datatables Header -->
<div ng-controller="ManageCollectionsCtrl">
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
    <div class="table-responsive">
       <table id="example-datatable" class="table table-vcenter table-condensed">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Collection Name</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
            {foreach from=$items key=myId item=i}
            <tr>
                <td class="text-center">{$i.collection_id}</td>
                <td class="text-center">{$i.collection_name}</td>
                <td class="text-center">
                 <span class="label label-primary">{$i.status}</span>
                </td>
                <td class="text-center">
                    <div class="btn-group">
                        <a ng-click="EditDataModal({$i.collection_id})" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
						<a href="{base_url('administrator/collections/category/')}/{$i.collection_slug}" title="List Product" class="btn btn-xs btn-default"><i class="fa fa-list"></i></a>
                    </div>
                </td>
            </tr>
            {/foreach}
            </tbody>
        </table>
		
    </div>
</div>
<!-- END Datatables Content -->
{include file="menu/collections/modal-edit.tpl"}
</div>

                   