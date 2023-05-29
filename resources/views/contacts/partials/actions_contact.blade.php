<a href="#deleteContactModal{{$contact->id}}" data-bs-toggle="modal" class="btn btn-warning">Delete</a>
<a class="btn btn-info" id="editButton" href="{{route('edit', $contact->id)}}">Edit</a>
<a class="btn btn-info" id="showButton" href="{{route('show', $contact->id)}}">Show</a>
@extends('contacts/partials/delete_contact')