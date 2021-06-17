@if(Session::has('mensaje'))
<div class="alert alert-dismissible {{ Session::get('clase-alerta', 'alert-info') }}" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
    {{ Session::get('mensaje') }}
</div>
@endif
