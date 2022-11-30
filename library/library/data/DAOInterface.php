<?php

interface DAOInterface {

    public function create(); // saves new model object to Database

    public function readById(); // returns 1 model object by id. Can be used to check if a user exists in database

    public function readAll(); // returns all model objects in a database table

    public function update(); // overwrites exisitng model object in database if its id already exists

    public function delete(); // deletes a model object by id
    
}