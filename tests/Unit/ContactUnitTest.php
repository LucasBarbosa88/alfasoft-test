<?php

namespace Tests\Unit;

use App\Models\Contact;
use Tests\TestCase;

class CarouselUnitTest extends TestCase
{
  /** @test */
  public function it_can_create_a_carousel()
  {
    $data = [
      'name' => "test",
      'contact' => "41667788990",
      'email' => "test@test.com",
    ];
    $object = (object) $data;
    $contact = Contact::create($object);

    //$this->assertInstanceOf(Contact::class, $contact);
    $this->assertEquals($data['name'], $contact->name);
    //$this->assertEquals($data['contact'], $contact->contact);
    //$this->assertEquals($data['email'], $contact->email);
  }
}
