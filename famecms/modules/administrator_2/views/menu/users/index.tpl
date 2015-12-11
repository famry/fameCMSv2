
 <!-- Datatables Header -->
					<div ng-controller="ManageUserCtrl">
                    <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="fa fa-table"></i>Table {$page_desc}
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
                            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Username</th>
                                        <th class="text-center">Full Name</th>
                                        <th class="text-center">Role</th>
                                        <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {foreach from=$items key=myId item=i}
                                    <tr>
                                        <td class="text-center">{$i.user_id}</td>
                                        <td class="text-center">{$i.user_name}</td>
                                        <td class="text-center">{$i.first_name} {$i.last_name}</td>
                                        <td class="text-center">{$i.role}</td>
                                        <td class="text-center"><span class="label label-primary">{$i.status}</span></td>
                                    </tr>
                                {/foreach}   
                                </tbody>
                            </table>
							
                        </div>
                    </div>
                    <!-- END Datatables Content -->
					</div>

                   