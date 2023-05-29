<div class="modal fade" id="deleteContactModal{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteContactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteContactModalLabel">Delete Contact ID #{{$contact->id}}</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-boody alert-danger">
                <h4>Are you sure to delete Contact <b>{{$contact->name}}</b>?</h4>
            </div>
            <div class="modal-footer alert-danger">
                <a class="btn btn-warning" href="{{route('delete', $contact->id )}}">Delete</a>
            </div>
        </div>
    </div>
</div>