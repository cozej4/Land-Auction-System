<div class="list-group">
    <a href="/admin/dashboard"
       class="list-group-item"><h3><i class="fa fa-dashboard"></i> Dashboard</h3></a>
    <a href="/admin/locations"
       class="list-group-item @if(Request::is('admin/locations')) active @endif"><i
                class="fa fa-angle-double-right"></i> Maeneo</a>
    <a href="/admin/location-images"
       class="list-group-item @if(Request::is('admin/location-images')) active @endif"><i
                class="fa fa-angle-double-right"></i> Ramani za maeneo</a>
    <a href="/admin/land-uses"
       class="list-group-item @if(Request::is('admin/land-uses')) active @endif"><i
                class="fa fa-angle-double-right"></i> Matumizi ya ardhi</a>
    <a href="/admin/blocks"
       class="list-group-item @if(Request::is('admin/blocks')) active @endif"><i
                class="fa fa-angle-double-right"></i> Vitalu</a>
    <a href="/admin/location-assignments"
       class="list-group-item @if(Request::is('admin/location-assignments')) active @endif"><i
                class="fa fa-angle-double-right"></i> Gharama za Maeneo</a>
    <a href="/admin/block-assignments"
       class="list-group-item @if(Request::is('admin/block-assignments')) active @endif"><i
                class="fa fa-angle-double-right"></i> Ramani za Vitalu</a>
    <a href="/admin/plot-assignments"
       class="list-group-item @if(Request::is('admin/plot-assignments')) active @endif"><i
                class="fa fa-angle-double-right"></i> Viwanja</a>
</div>


        <div class="list-group">
            <a href="{{ url('admin/roles') }}" class="list-group-item @if(Request::is('admin/roles')) active @endif">Roles</a>
            <a href="{{ url('admin/permissions') }}" class="list-group-item @if(Request::is('admin/permissions')) active @endif">Permissions</a>
            <a href="{{ url('admin/staff') }}" class="list-group-item @if(Request::is('admin/staff')) active @endif">Staff</a>
        </div>

<div class="list-group">
	<a href="{{ url('reports/reservations') }}" target="_blank" class="list-group-item"><i class="fa fa-file-text-o"></i> Reports</a>
</div>

