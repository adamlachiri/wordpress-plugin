<?php

/*
*@package adamlachiri
*/

namespace adamlachiri;

class CustomPostType
{

    // props
    public $singular_name;
    public $plural_name;
    public $description;
    public array $supports = ["title"];
    public $menu_icon = "dashicons-admin-post";

    // protected
    protected $labels;
    protected $options;

    // set labels
    protected function set_labels()
    {
        $this->labels = [
            "name" => $this->plural_name,
            "singular_name" => $this->singular_name,
            "add_new" => "Add " . $this->singular_name,
            "add_new_item" => "Add new " . $this->singular_name,
            "edit_item" => "Edit " . $this->singular_name,
            "new_item" => "New " . $this->singular_name,
            "view_item" => "View " . $this->singular_name,
            "view_items" => "View " . $this->plural_name,
            "edit_item" => "Edit " . $this->singular_name,
            "search_items" => "Search " . $this->plural_name,
            "not_found" => "No " . $this->plural_name . " found",
            "not_found_in_trash" => "No " . $this->plural_name . " found in Trash",
            "all_items" => "All " . $this->plural_name,
            "archives" => $this->singular_name . " archives",
            "attributes" => $this->singular_name . " attributes",
            "insert_into_item" => "Insert into " . $this->singular_name,
            "uploaded_to_this_item" => "Uploaded to this " . $this->singular_name,
            "filter_items_list" => "Filter " . $this->plural_name . " list",
            "items_list_navigation" => $this->plural_name . " list navigation",
            "items_list" => $this->plural_name . " list",
            "item_published" => $this->singular_name . " published",
            "item_published_privately" => $this->singular_name . " published privately",
            "item_reverted_to_draft" => $this->singular_name . " reverted to draft",
            "item_scheduled" => $this->singular_name . "scheduled",
            "item_updated" => $this->singular_name . " updated",
            "item_link" => $this->singular_name . " link",
            "item_link_description" => $this->singular_name . " description",
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
            "has_archive" => true,
            "hierarchical" => false,
            "supports" => $this->supports,
            "exclude_from_search" => false,

            // ui
            "show_ui" => true,
            "show_in_menu" => true,
            "show_in_nav_menus" => true,
            "menu_icon" => $this->menu_icon

        ];
    }

    // register
    public function register()
    {
        // set options
        $this->set_options();

        // register post_type
        register_post_type($this->singular_name, $this->options);
    }

    // add action
    public function create()
    {
        add_action("init", [$this, "register"]);
    }
}
