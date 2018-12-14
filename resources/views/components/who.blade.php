@if (Auth::guard('web')->check())
<p>
YOU ARE LOGGED IN AS <STRONG>USER</STRONG> 
</p>
@else
<p class="text-danger">
YOU ARE LOGGED OUT AS <STRONG>USER</STRONG> 
</p>
@endif


@if (Auth::guard('admin')->check())
<p>
YOU ARE LOGGED IN AS <STRONG>ADMIN</STRONG> 
</p>
@else
<p class="text-danger">
YOU ARE LOGGED OUT AS <STRONG>ADMIN</STRONG> 
</p>
@endif
