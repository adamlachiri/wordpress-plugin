<?php

/*
*@package adamlachiri
*/

namespace adamlachiri;

class Taxonomy
{

    // props
    public $singular_name;
    public $plural_name;
    public $description;
    public array $post_types;

    // protected
    protected $labels;
    protected $options;

    // set labels
    protected function set_labels()
    {
        $this->labels = [
            "name" => $this->plural_name,
            "singular_name" => $this->singular_name,
            "popular_items" => "Popular " . $this->plural_name,
            "add_new_item" => "Add new " . $this->singular_name,
            "edit_item" => "Edit " . $this->singular_name,
            "update_item" => "Update " . $this->singular_name,
            "new_item_name" => "New " . $this->singular_name . " name",
            "view_item" => "View " . $this->singular_name,
            "search_items" => "Search " . $this->plural_name,
            "not_found" => "No " . $this->plural_name . " found",
            "all_items" => "All " . $this->plural_name,
            "filter_by_item" => "Filter by " . $this->singular_name,
            "items_list_navigation" => $this->plural_name . " list navigation",
            "items_list" => $this->plural_name . " list",
            "item_link" => $this->singular_name . " link",
            "item_link_description" => $this->singular_name . " description",
            "no_terms" => "No " . $this->plural_name,
        ];
    }

    // set options
    protected function set_options()
    {
        // set labels
        $this->set_labels();

        // set options
        $this->options = [

            // labels
            "labels" => $this->labels,
            "slug" => $this->plural_name,
            "description" => $this->description,

            // general
            "public" => true,
            "hierarchical" => true,

            // ui
            "show_ui" => true,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,

        ];
    }

    // register
    public function register()
    {
        // set options
        $this->set_options();

        // register post_type
        register_taxonomy($this->singular_name, $this->post_types, $this->options);
    }

    // add action
    public function create()
    {
        add_action("init", [$this, "register"]);
    }
}
