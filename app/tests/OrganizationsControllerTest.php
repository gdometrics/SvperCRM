<?php

class OrganizationsControllerTest extends TestCase {

    public function tearDown()
    {
        Mockery::close();
    }

    public function setUp()
    {
        parent::setUp();

        Artisan::call('migrate');

//        $this->mock = Mockery::mock(
//            'SvperCRM\Repositories\OrganizationRepositoryInterface'
//        );
//
//        $this->mock->person = Mockery::mock(
//            'SvperCRM\Repositories\PersonRepositoryInterface'
//        );

    }

    public function testNameIsRequired()
    {

        //Create new Organizaton
        $org = new Organizataion;
        $org->address = '88 Union';
        $org->city = 'Memphis';
        // Org should not save
        $this->assertFalse($org->save());
        // Save the errors
        $errors = $org->errors()->all();
        // There should be 1 error
        $this->assertCount(1, $errors);
        // The Name error should be set
        $this->assertEquals($errors[0], "The name field is required.");
    }

//    public function testIndex()
//    {
//        $this->mock
//            ->shouldReceive('getAll')
//            ->once()
//            ->andReturn(array());
//
//        $this->app->instance(
//            'SvperCRM\Repositories\OrganizationRepositoryInterface',
//            $this->mock
//        );
//
//        $this->call('GET', 'organizations');
//
//        $this->assertViewHas('organizations');
//
//    }
//
//    public function testCreate()
//    {
//        $this->mock
//            ->shouldReceive('where')
//            ->once()
//            ->andReturn(array());
//
//        $this->mock->person
//            ->shouldReceive('where')
//            ->twice()
//            ->andReturn(array());
//
//        $this->app->instance(
//            'SvperCRM\Repositories\OrganizationRepositoryInterface',
//            $this->mock
//        );
//
//        $this->app->instance(
//            'SvperCRM\Repositories\PersonRepositoryInterface',
//            $this->mock->person
//        );
//
//        $this->call('GET', '/organizations/create');
//
//        $this->assertResponseOk();
//        $this->assertViewHas('possibleAgencies');
//        $this->assertViewHas('salesPeople');
//        $this->assertViewHas('accountManagers');
//    }
//
//    public function testStoreSuccess()
//    {
//        // Set stage for successful validation
//        $input = [
//            'name' => 'RocketFuel',
//            'address' => '88 Union Ave',
//            'address2' => '7th Floor',
//            'city' => 'Memphis',
//            'state' => 'TN',
//            'zip' => '38103',
//            'phone' => '(901) 522-0205',
//        ];
//
//        $this->mock
//            ->shouldReceive('create')
//            ->once();
//
//        $this->app->instance(
//            'SvperCRM\Repositories\OrganizationRepositoryInterface',
//            $this->mock
//        );
//
//        $this->call('POST', 'organizations', $input);
//
//        // Should redirect to collection, with a success flash message
//        $this->assertRedirectedToRoute('organizations.index', null, ['flash']);
//    }
//
//    public function testStoreFails()
//    {
//        // Set stage for a failed validation
//        $input = ['name' => ''];
//
//        $this->mock
//            ->shouldReceive('create')
//            ->never();
//
//        $this->app->instance(
//            'SvperCRM\Repositories\OrganizationRepositoryInterface',
//            $this->mock
//        );
//
//        $this->call('POST', 'organizations', $input);
//        // Failed validation should reload the create form
//        $this->assertRedirectedToRoute('organizations.create');
//
//        // The errors should be sent to the view
//        $this->assertSessionHasErrors(['name']);
//    }

//    public function testShow()
//    {
////        $organization = [
////            'name' => 'RocketFuel',
////            'address' => '88 Union Ave',
////            'address2' => '7th Floor',
////            'city' => 'Memphis',
////            'state' => 'TN',
////            'zip' => '38103',
////            'phone' => '(901) 522-0205'
////        ];
////
////        $this->mock
////            ->shouldReceive('find')
////            ->once()
////            ->andReturn($organization);
//
//
//
//        $this->app->instance(
//            'SvperCRM\Repositories\OrganizationRepositoryInterface',
//            $this->mock
//        );
//
//        $this->call('GET', 'organizations/1');
//
//        $this->assertViewHas('organization');
//    }

//    public function testEdit()
//    {
//        $this->mock
//            ->shouldReceive('find')
//            ->once()
//            ->andReturn(array());
//
//        $this->mock
//            ->shouldReceive('where')
//            ->once()
//            ->andReturn(array());
//
//        $this->mock->person
//            ->shouldReceive('where')
//            ->twice()
//            ->andReturn(array());
//
//        $this->app->instance(
//            'SvperCRM\Repositories\OrganizationRepositoryInterface',
//            $this->mock
//        );
//
//        $this->app->instance(
//            'SvperCRM\Repositories\PersonRepositoryInterface',
//            $this->mock->person
//        );
//
//        $this->call('GET', 'organizations/1/edit');
//
//        $this->assertResponseOk();
//        $this->assertViewHas('org');
//        $this->assertViewHas('possibleAgencies');
//        $this->assertViewHas('salesPeople');
//        $this->assertViewHas('accountManagers');
//    }
}
