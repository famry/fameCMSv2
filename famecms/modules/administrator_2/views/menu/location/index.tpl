<!-- Datatables Header -->
<div ng-controller="ManageCountryCtrl">
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
                    <a ng-click="newCountryModal('lg')" class="btn btn-success"><i class="fa fa-plus"></i> Add New</a>
 </div>
</div>
    <div class="table-responsive">
        <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
            <thead>
                <tr>
                    <th class="text-center">Country Name</th>
                    <th class="text-center">Visible</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
            {foreach from=$items key=myId item=i}
                <tr>
                    <td class="text-center">{$i.location_name}</td>
                    <td class="text-center">{if $i.visible eq '0'}Visible{else}Invisble{/if}</td>
                    <td class="text-center">
                        <div class="btn-group">
                        <a ng-click="editCountryModal({$i.id_location})" title="Edit" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                    </div>
                    </td>
                </tr>
             {/foreach}
            </tbody>
        </table>		
{include file="menu/location/country-modal-add.tpl"}
{include file="menu/location/country-modal-edit.tpl"}
    </div>
</div>
<!-- END Datatables Content -->
</div>

                   