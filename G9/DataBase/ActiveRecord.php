<?php
interface IActiveRecord
{
    public function save();
    public function update();
    public function delete();
}