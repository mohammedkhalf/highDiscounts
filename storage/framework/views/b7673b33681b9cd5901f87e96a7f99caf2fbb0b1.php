<?php $__env->startSection('title'); ?>
    Home page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <!-- Column selectors -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Column selectors</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            All of the data export buttons have a <code>exportOptions</code> option which can be used to specify
            information about what data should be exported and how. In this example the copy button will export column
            index 0 and all visible columns, the Excel button will export only the visible columns and the PDF button
            will export column indexes 0, 1, 2 and 5 only. Column visibility controls are also included so you can
            change the columns easily.
        </div>

        <table class="table datatable-button-html5-columns">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Job Title</th>
                <th>DOB</th>
                <th>Status</th>
                <th>Salary</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Marth</td>
                <td><a href="#">Enright</a></td>
                <td>Traffic Court Referee</td>
                <td>22 Jun 1972</td>
                <td><span class="label label-success">Active</span></td>
                <td>$85,600</td>
            </tr>
            <tr>
                <td>Jackelyn</td>
                <td>Weible</td>
                <td><a href="#">Airline Transport Pilot</a></td>
                <td>3 Oct 1981</td>
                <td><span class="label label-default">Inactive</span></td>
                <td>$106,450</td>
            </tr>
            <tr>
                <td>Aura</td>
                <td>Hard</td>
                <td>Business Services Sales Representative</td>
                <td>19 Apr 1969</td>
                <td><span class="label label-danger">Suspended</span></td>
                <td>$237,500</td>
            </tr>
            <tr>
                <td>Nathalie</td>
                <td><a href="#">Pretty</a></td>
                <td>Drywall Stripper</td>
                <td>13 Dec 1977</td>
                <td><span class="label label-info">Pending</span></td>
                <td>$198,500</td>
            </tr>
            <tr>
                <td>Sharan</td>
                <td>Leland</td>
                <td>Aviation Tactical Readiness Officer</td>
                <td>30 Dec 1991</td>
                <td><span class="label label-default">Inactive</span></td>
                <td>$470,600</td>
            </tr>
            <tr>
                <td>Maxine</td>
                <td><a href="#">Woldt</a></td>
                <td><a href="#">Business Services Sales Representative</a></td>
                <td>17 Oct 1987</td>
                <td><span class="label label-info">Pending</span></td>
                <td>$90,560</td>
            </tr>
            <tr>
                <td>Sylvia</td>
                <td><a href="#">Mcgaughy</a></td>
                <td>Hemodialysis Technician</td>
                <td>11 Nov 1983</td>
                <td><span class="label label-danger">Suspended</span></td>
                <td>$103,600</td>
            </tr>
            <tr>
                <td>Lizzee</td>
                <td><a href="#">Goodlow</a></td>
                <td>Technical Services Librarian</td>
                <td>1 Nov 1961</td>
                <td><span class="label label-danger">Suspended</span></td>
                <td>$205,500</td>
            </tr>
            <tr>
                <td>Kennedy</td>
                <td>Haley</td>
                <td>Senior Marketing Designer</td>
                <td>18 Dec 1960</td>
                <td><span class="label label-success">Active</span></td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td>Chantal</td>
                <td><a href="#">Nailor</a></td>
                <td>Technical Services Librarian</td>
                <td>10 Jan 1980</td>
                <td><span class="label label-default">Inactive</span></td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td>Delma</td>
                <td>Bonds</td>
                <td>Lead Brand Manager</td>
                <td>21 Dec 1968</td>
                <td><span class="label label-info">Pending</span></td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td>Roland</td>
                <td>Salmos</td>
                <td><a href="#">Senior Program Developer</a></td>
                <td>5 Jun 1986</td>
                <td><span class="label label-default">Inactive</span></td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>Coy</td>
                <td>Wollard</td>
                <td>Customer Service Operator</td>
                <td>12 Oct 1982</td>
                <td><span class="label label-success">Active</span></td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Maxwell</td>
                <td>Maben</td>
                <td>Regional Representative</td>
                <td>25 Feb 1988</td>
                <td><span class="label label-danger">Suspended</span></td>
                <td>$130,500</td>
            </tr>
            <tr>
                <td>Cicely</td>
                <td>Sigler</td>
                <td><a href="#">Senior Research Officer</a></td>
                <td>15 Mar 1960</td>
                <td><span class="label label-info">Pending</span></td>
                <td>$159,000</td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- /column selectors -->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>