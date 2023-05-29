@extends('layouts.app')

@section('breadcrumb')
<breadcrumb header="Create Contact">
    <breadcrumb-item href="{{ route('home') }}">
        Home
    </breadcrumb-item>

    <breadcrumb-item active>
        Create
    </breadcrumb-item>
</breadcrumb>
@endsection

@section('content')
<div class="card">
    <div class="card-header">Create Contact</div>
    <div class="card-body">
        <form method="POST" action="{{route('store')}}">
            <div class="modal-body">
                {{ csrf_field() }}
                <div class=" row align-items-center">
                    <div class="form-group col-6">
                        <label for="fname">Name:</label>
                        <input type="text" class="form-control" id="fname" name="name" placeholder="Name of contact" require>
                    </div>
                    <div class="form-group col-6">
                        <label for="fcontact">Contact:</label>
                        <input type="tel" class="form-control" maxlength="14" id="fcontact" name="contact" placeholder="Contact (00) 00000-0000" onkeyup="handlePhone(event)" require>
                    </div>
                    <div class="form-group col-6">
                        <label for="femail">Email:</label>
                        <input type="email" class="form-control" id="femail" name="email" placeholder="Email of contact" require>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    const handlePhone = (event) => {
        let input = event.target
        input.value = phoneMask(input.value)
    }

    const phoneMask = (value) => {
        if (!value) return ""
        value = value.replace(/\D/g, '')
        value = value.replace(/(\d{2})(\d)/, "($1) $2")
        value = value.replace(/(\d)(\d{4})$/, "$1-$2")
        return value
    }
</script>
@endsection