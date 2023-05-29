<div class="modal fade" id="editContactModal{{$contact->id}}" tabindex="-1" role="dialog" aria-labelledby="editContactModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="editContactModalLabel">Edit Contact ID #{{$contact->id}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form method="POST" action="{{route('update')}}">
               {{ csrf_field() }}
               <input type="hidden" name="id" value="{{$contact->id}}">
               <div class=" row align-items-center">
                  <div class="form-group col-sm-9">
                     <label for="fname">Name:</label>
                     <input type="text" class="form-control" id="fname" name="name" value="{{$contact->name}}" require>
                  </div>
                  <div class="form-group col-sm-9">
                     <label for="fcontact">Contact:</label>
                     <input type="text" class="form-control" id="fcontact" name="contact" value="{{$contact->contact}}" require>
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
   </div>
</div>