@extends('layouts.app')

@section('breadcrumb')
<breadcrumb header="Update Contact">
    <breadcrumb-item href="{{ route('home') }}">
        Home
    </breadcrumb-item>

    <breadcrumb-item active>
        Update Contact
    </breadcrumb-item>
</breadcrumb>
@endsection

@section('content')
<div class="card">
    <div class="card-header">Update Contact</div>
    <div class="card-body">
        <form method="POST" action="{{route('update')}}">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$contact->id}}">
            <div class=" row align-items-center">
                <div class="form-group col-sm-9">
                    <label for="fname">Name:</label>
                    <input type="text" class="form-control" id="fname" name="name" value="{{$contact->name}}" require>
                </div>
                <div class="form-group col-6">
                    <label for="fcontact">Contact:</label>
                    <input type="tel" class="form-control" maxlength="14" id="fcontact" name="contact" value="{{$contact->contact}}" placeholder="Contact (00) 00000-0000" onkeyup="handlePhone(event)" require>
                </div>
                <div class="form-group col-sm-9">
                    <label for="femail">Email:</label>
                    <input type="email" class="form-control" id="femail" name="email" value="{{$contact->email}}" require>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <a href="{{route('home')}}" class="btn iq-bg-danger">Cancel</a>
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