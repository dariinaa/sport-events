<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SportRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SportCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SportCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Sport::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/sport');
        CRUD::setEntityNameStrings('sport', 'sports');
		
		$this->crud->addFields($this->getFieldsData());
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
		CRUD::column('name')->type('string');
		$this->crud->addColumns($this->getFieldsData(TRUE));
        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(SportRequest::class);
        CRUD::setFromDb(); // set fields from db columns.

        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }
	
	private function getFieldsData($show = FALSE)
	{
		$seasonOptions = ['summer' => 'Summer', 'winter' => 'Winter', 'all year' => 'All Year'];

		return
		[
		[
		'name' => 'season',
		'label' => 'Season',
		'type' => 'select_from_array',
		'options' => $seasonOptions,
        ],
		[
		'label' => "Image",
		'name' => "image",
		'type' => ($show ? 'view' : 'upload'),
		'view' => 'partials/image',
		'upload' => true,
		]
		];
	}
	
    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
	
	protected function setupShowOperation()
    {
        // by default the Show operation will try to show all columns in the db table,
        // but we can easily take over, and have full control of what columns are shown,
        // by changing this config for the Show operation
		CRUD::column('name')->type('string');
		CRUD::column('players_count')->type('integer');
		CRUD::column('describtion')->type('text')->limit(1000);;
		CRUD::column('season')->type('string');
        $this->crud->addColumns($this->getFieldsData(TRUE));
    }
}
